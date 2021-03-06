<?php

class DonorSearchController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
        $bloodtypes = objectFormArray::flatten( Bloodtype::all() );
		return View::make( 'backend/searchForm', array( 'bloodtypes' => $bloodtypes ) );
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

	public function searchDonors() {
        $validation = Bloodtype::validate(Input::all());

        if($validation->passes()) {
            $donors = self::getDonorsList();

           return View::make( 'backend.searchResults' )->with( 'results', $donors );

        }
		else {

            return Redirect::to( 'admin/search' )->withErrors( $validation )->withInput();

        }
	}

    public function searchDonorsOnMap() {
        $donors = self::getAllDonors();
		$result = array();
		foreach($donors as $donor) {
			$result[] = $donor->toArray();
		}
		//dd(json_encode($result));

        return View::make( 'backend.searchResultsOnMap' )
	        ->with( 'donors', json_encode($result) )
	        ->with( 'hospital', Hospital::find(Auth::user()->hospital_id) );

    }


	public function show($id) {

		return View::make( 'backend.search.show' )->with( 'donor', Donor::find($id) );

	}
}