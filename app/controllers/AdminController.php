<?php

class AdminController extends BaseController {

	private $account;
    private $token;
    private $twilio_number;
    private $mandrillKey;
   

    public function __construct() {
        $this->account       =    \Config::get('app.twilio_account');
        $this->token         =    \Config::get('app.twilio_auth_token');
        $this->twilio_number =    \Config::get('app.twilio_number');
      
    }

	public function donorSearchForm()
	{
        $bloodtypes = services\Helpers\ObjectFormArray::flatten(Bloodtype::all());                
		return View::make('backend/searchForm',compact('bloodtypes'));
	}

	public function search()
	{
		$validation = new services\ValidatorHandler\BloodTypeFormValidation();

		if( $validation->passes() )
		{
		  $donors = self::getDonorsList();
		  
		  return View::make('backend/searchResults',compact('donors'));

		}else{
			return Redirect::route('searchForm')->withErrors($validation->getErrors());
		}
		  
	}


	private static function getDonorsList() {
		$hospital = Hospital::find(Auth::user()->hospital_id);
	    $bloodType = Input::get( 'bloodtype_id' );
	    $poslat = $hospital->lat;
	    $poslng = $hospital->lng;
	    $distance = Config::get('app.search_radius');
	    $allowablePeriod = Config::get('app.date_difference');

	    $donors = DB::select('SELECT *, (3959 * acos(cos
                    (radians(?)) * cos(radians(lat)) * cos(radians
                    (lng) - radians(?)) + sin(radians(?)) * sin
                    (radians(lat)))) AS distance FROM donors WHERE bloodtype_id = ? AND lastDonated <= DATE_SUB(CURDATE(), INTERVAL ? DAY)  HAVING distance < ? ', array($poslat, $poslng, $poslat,$bloodType,$allowablePeriod,$distance));

	    $donorsObj = Donor::stdClassToEloquent($donors, 'Donor');
	    return $donorsObj;

    }

    private static function getAllDonors() {
        $hospital = Hospital::find(Auth::user()->hospital_id);
        $poslat = $hospital->lat;
        $poslng = $hospital->lng;
        $distance = Config::get('app.search_radius');
        $allowablePeriod = Config::get('app.date_difference');

        $donors = DB::select('SELECT *, (3959 * acos(cos
                    (radians(?)) * cos(radians(lat)) * cos(radians
                    (lng) - radians(?)) + sin(radians(?)) * sin
                    (radians(lat)))) AS distance FROM donors WHERE lastDonated <= DATE_SUB(CURDATE(), INTERVAL ? DAY) HAVING distance < ? ', array($poslat, $poslng, $poslat, $allowablePeriod, $distance));

            $donorsObj = Donor::stdClassToEloquent($donors, 'Donor');
            return $donorsObj;

    }


     public function searchDonorsOnMap() {
        $donors = self::getAllDonors();
                $result = array();
                foreach($donors as $donor) {
                        $result[] = $donor->toArray();
                }

        return View::make( 'backend/searchResultsOnMap' )
                ->with( 'donors', json_encode($result) )
                ->with( 'hospital', Hospital::find(Auth::user()->hospital_id) );

    }

     public function phoneNumber($recipientNumber,$countrycode) {
        if(isset($recipientNumber)) {
            try {
                $mobile = (substr($recipientNumber, 0, 1) == 0) ? substr($recipientNumber, 1) : $recipientNumber;
                $mobile = $countrycode.$mobile;

                return $mobile;

            } catch (\Exception $e) {
                throw $e;
            }
        }

        return false;
    }

    public function SMS($recipienNumber, $messageBody ) {
        
        $client = new \Services_Twilio($this->account, $this->token);

        $sms = $client->account->sms_messages->create($this->twilio_number, $recipienNumber, $messageBody);
    }


    public function getSMSForm($id)
    {
    	$donor = Donor::find($id);

    	$countrycode = $donor->countrycode;

    	$phonenumber =  $donor->mobile;

    	$phonenumber = $this->phoneNumber($phonenumber,$countrycode);


    	return View::make('backend/sendSMSForm')->withPhonenumber($phonenumber)->with('donorID',$donor->id);
    }
    
    
    public function sendSMS()
    {

    	//Fetch the admin id, donor id, number,patient no and message
    	$adminID     = Auth::user()->id;
        $donorID     = Input::get('donor_id');
        $number      = Input::get('recipient');
        $patientNo   = Input::get('patient_no');
        $messageBody = Input::get('message');
    	
        $sent = $this->SMS($number,$messageBody);

       
            $event = Donation::create([

            'patient_no' => $patientNo,
            'user_id'    => $adminID,
            'donor_id'   => $donorID,
            'status'     => 'sent'
           ]);

          return Redirect::back()->withSuccess("Message sent.");
        
    }

    public function getDonorResponse()
    {
    	$donate = new Donation();

        $donate->message = Request::get('Body');

        $donate->save();
    }


































}
