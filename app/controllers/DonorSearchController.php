<?php

class DonorSearchController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('BackEnd.Search.donorSearch');
	}

	public function searchDonors(){
		
		$selectBlood = Input::get('bloodType');

		if($selectBlood == '0')
		{
			return View::make('BackEnd.Search.donorSearch')->with('flash_notice','Please select blood type');

		}else{

			$hospital = Hospital::find(Auth::user()->hospital_id);
			
			$bloodType = Input::get('bloodType');


			$poslat = $hospital->lat;

			$poslng = $hospital->lng;

			$distance = 5;

			
			$donors = DB::select('SELECT *, (3959 * acos(cos
					(radians(?)) * cos(radians(lat)) * cos(radians
					(lng) - radians(?)) + sin(radians(?)) * sin
					(radians(lat)))) AS distance FROM donors WHERE bloodtype = ?  HAVING distance < ? ', array($poslat, $poslng, $poslat,$bloodType,$distance));

			return View::make('BackEnd.Search.donorSearchResults')->with('results',$donors);
		}
			
	}

	public function show($id)
	{

		return View::make('BackEnd.Search.show')->with('donor',Donor::find($id));
	}

}