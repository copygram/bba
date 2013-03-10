<?php

class hospitalController extends BaseController {



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('frontend.hospitalSignup');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$hospital = Hospital::create(array(

			'name' 			=> Input::get('name'),
			'pincode' 		=> Input::get('licence'),
			'area'    		=> Input::get('area'),
			'countrycode' 	=> Input::get('countrycode'),
			'mobile' 		=> Input::get('mobile'),
			'email' 		=> Input::get('email'),
			'lat'			=> Input::get('lat'),
			'lng'			=> Input::get('lng')
		));

		$user = User::create(array(
			'hospital_id' => $hospital->id,
			'email' => $hospital->email,
			'fname' => 'Null',
			'lname' =>  'Null',
			'mobile' => 'Null',
			'role'  => 1,
			'status' => 1,
			'password' => Hash::make('123456')
		));

		return 'Done';

	}

	

}