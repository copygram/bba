<?php

class donorsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function create()
	{
		return View::make('frontend.register');
	}

	public function store()
	{
		$validation = Donor::validate(Input::all());
		
		if($validation->passes()){
			
			Donor::create(array(
		
			'fname'		=> 	Input::get('fname'),
			'lname'		=> 	Input::get('lname'),
			'address'	=>  Input::get('area'),
			'lat'		=>	Input::get('lat'),
			'lng'		=>	Input::get('lng'),
			'mobile'	=>	Input::get('mobile'),
			'email'		=>	Input::get('email'),
			'bloodtype'	=>	Input::get('bloodtype'),
			'gender'	=>	Input::get('inlineRadios'),
		));
		  return Redirect::to('donors/create');
		
		}else{
			return Redirect::to('donors/create')->withErrors($validation)->withInput();
		}

	}
	

}