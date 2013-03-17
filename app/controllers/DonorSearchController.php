<?php

class DonorSearchController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('BackEnd.search');
	}

    private static function getDonorsList() {
        

            $hospital = Hospital::find(Auth::user()->hospital_id);
            $bloodType = Input::get('bloodtype');
            $poslat = $hospital->lat;
            $poslng = $hospital->lng;
            $distance = 5;

            $donors = DB::select('SELECT *, (3959 * acos(cos
					(radians(?)) * cos(radians(lat)) * cos(radians
					(lng) - radians(?)) + sin(radians(?)) * sin
					(radians(lat)))) AS distance FROM donors WHERE bloodtype = ?  HAVING distance < ? ', array($poslat, $poslng, $poslat,$bloodType,$distance));

            return $donors;
        
    }

    private static function getAllDonors() {
        $hospital = Hospital::find(Auth::user()->hospital_id);
        $poslat = $hospital->lat;
        $poslng = $hospital->lng;
        $distance = 5;

        $donors = DB::select('SELECT *, (3959 * acos(cos
					(radians(?)) * cos(radians(lat)) * cos(radians
					(lng) - radians(?)) + sin(radians(?)) * sin
					(radians(lat)))) AS distance FROM donors HAVING distance < ? ', array($poslat, $poslng, $poslat, $distance));

        return $donors;
    }

	public function searchDonors(){

        $donors = self::getDonorsList();
        return View::make('BackEnd.searchResults')->with('results',$donors);
	}


    public function searchDonorsOnMap() {
        $donors = json_encode(self::getAllDonors());

        return View::make('BackEnd.searchResultsOnMap')
            ->with('donors',$donors)
            ->with('hospital', Hospital::find(Auth::user()->hospital_id));
    }


	public function show($id)
	{
		return View::make('BackEnd.Search.show')->with('donor',Donor::find($id));
	}

}