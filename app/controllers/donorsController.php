<?php

class donorsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function create()
	{
		return View::make('frontend.register')->with('bloodtype',Blood::all());
	}

	public function store()
	{
		
		


		$validation = Donor::validate(Input::all());

		$code = Input::get('countrycode');
	
		$mob = substr(Input::get('mobile'), 1);

		$number = $code.$mob;

	    $recipientNumber  = $number;

	    $recipientName  = Input::get('fname');


		
		if($validation->passes()){
			
			$donor = Donor::create(array(
		
			'fname'			=> 	Input::get('fname'),
			'lname'			=> 	Input::get('lname'),
			'address'		=>  Input::get('area'),
			'lat'			=>	Input::get('lat'),
			'lng'			=>	Input::get('lng'),
			'mobile'		=>	$number,
			'email'			=>	Input::get('email'),
			'bloodtype'		=>	Input::get('bloodtype'),
			'gender'		=>	Input::get('gender'),
			'lastDonated' 	=>  Input::get('donateDate')
		));

		/*
		|--------------------------------------------------------------------------
		                          SMS PART
		|--------------------------------------------------------------------------
		|$recipientNumber = $donor->mobile;
		$recipientName = $donor->fname;
		$messageBody = "Hi $recipientName. Welcome to Blood Bank Africa.";

		$sms = smsController::sendSMS($recipientNumber,$recipientName,$messageBody);
		|
		*/
		

		return Redirect::to('donors/create')->with('success','Thank you. You have successfully registered to BBA');
		
		}else{
			return Redirect::to('donors/create')->withErrors($validation)->withInput();
		}

	}
	

}