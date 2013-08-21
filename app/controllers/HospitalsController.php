<?php

class HospitalsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Hospital::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$genders = services\Helpers\ObjectFormArray::flatten(Gender::all());
		return View::make('frontEnd.hospital-signup', array('genders'=>$genders));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = new services\ValidatorHandler\HospitalValidation;

		if( $validation->passes() )
		{
			$hospital = Hospital::create( array(

				'name' 			=> Input::get('name'),
				'countrycode' 	=> Input::get('countrycode'),
				'mobile' 		=> Input::get('mobile'),
				'telephone' 	=> Input::get('telephone'),
				'email' 		=> Input::get('email'),
				'address' 		=> Input::get('address'),
				'lat' 			=> Input::get('lat'),
				'lng' 			=> Input::get('lng')
			));

			$user = User::create( array(
				'hospital_id'   => $hospital->id,
				'fname' 		=> Input::get('fname'),
				'lname' 		=> Input::get('lname'),
				'email' 		=> $hospital->email,
				'mobile'		=> Input::get('contact-mobile'),
				'gender_id' 	=> Input::get('gender_id'),
				'role_id'		=> 1,
				'password'		=> Hash::make('123456'),
				'status'		=> 0,
				'email_hash'	=> Hash::make( $hospital->email ),
				'countrycode'	=> $hospital->countrycode

			));

		}
		else
		{
			return Redirect::back()->withInput()->withErrors( $validation->getErrors());
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}