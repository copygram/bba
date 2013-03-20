<?php

class DonorSearchController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $bloodtypes = objectFormArray::flatten(Bloodtype::all());
		return View::make('BackEnd.search',array('bloodtypes' => $bloodtypes));
	}

    private static function getDonorsList() {
        

            $hospital = Hospital::find(Auth::user()->hospital_id);
            $bloodType = Input::get('bloodtype_id');
            $poslat = $hospital->lat;
            $poslng = $hospital->lng;
            $distance = 5;
            $allowablePeriod = 56;

            $donors = DB::select('SELECT *, (3959 * acos(cos
					(radians(?)) * cos(radians(lat)) * cos(radians
					(lng) - radians(?)) + sin(radians(?)) * sin
					(radians(lat)))) AS distance FROM donors WHERE bloodtype_id = ? AND lastDonated <= DATE_SUB(CURDATE(), INTERVAL ? DAY)  HAVING distance < ? ', array($poslat, $poslng, $poslat,$bloodType,$allowablePeriod,$distance));

            return $donors;
        
    }
    
    private static function getAllDonors() {
        $hospital = Hospital::find(Auth::user()->hospital_id);
        $poslat = $hospital->lat;
        $poslng = $hospital->lng;
        $distance = 5;
        $allowablePeriod = 56;

        $donors = DB::select('SELECT *, (3959 * acos(cos
					(radians(?)) * cos(radians(lat)) * cos(radians
					(lng) - radians(?)) + sin(radians(?)) * sin
					(radians(lat)))) AS distance FROM donors WHERE lastDonated <= DATE_SUB(CURDATE(), INTERVAL ? DAY) HAVING distance < ? ', array($poslat, $poslng, $poslat, $allowablePeriod, $distance));

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