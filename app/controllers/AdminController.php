<?php

class AdminController extends BaseController {

	public function donorSearchForm()
	{
        $bloodtypes = services\Helpers\ObjectFormArray::flatten(Bloodtype::all());                
		return View::make('backEnd/searchForm',compact('bloodtypes'));
	}

	public function search()
	{
		$validation = new services\ValidatorHandler\BloodTypeFormValidation();

		if( $validation->passes() )
		{
		  $donors = self::getDonorsList();
		  
		  return View::make('backEnd/searchResults',compact('donors'));

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

        return View::make( 'backEnd/searchResultsOnMap' )
                ->with( 'donors', json_encode($result) )
                ->with( 'hospital', Hospital::find(Auth::user()->hospital_id) );

    }

    public function getSMSForm($id)
    {
    	$donor = Donor::find($id);

    	return View::make('backEnd/sendSMSForm',compact('donor'));
    }
    
    
    public function sendSMS()
    {

    	//Fetch the donor number and send sms
    	

	
    }

}
