<?php

class AdminController extends BaseController {

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


    public function getSMSForm($id)
    {
    	$donor = Donor::find($id);

    	$phonenumber =  $donor->mobile;

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
    	
        $send = new services\SMSHandler\SMSProcessor;
        
        $send->SMS($number,$messageBody);

        $event = Donation::create(array(

                'patient_no' => $patientNo,
                'user_id'    => $adminID,
                'donor_id'   => $donorID,
                'status'     => 'sent'
       ));

       return Redirect::back()->withSuccess("Message sent.");
         
    }

    public function getDonorResponse()
    {
    	//Check if the reply number exist in the donations table
        // if so fetch the body and update status column accordingly


        $replyNumber   = Request::get('From');
        $replyResponse = Request::get('Body');

        $replyResponse = String::trim($replyResponse); // removes whitespace and convert to lowercase

        $donor = Donor::where('mobile',$replyNumber)->first();

        $event = Donation::where('donor_id',$donor->id)->first();

        if( $replyResponse == 'yes')
        {
            $event->status = "yes";

            $event->save();
        }
        else if( $replyResponse == 'no' )
        {
            $event->status = "no";

            $event->save();
        }

    }


}
