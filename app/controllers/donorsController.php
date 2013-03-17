<?php

class donorsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function create()
	{
        return View::make('frontEnd.register', array());
	}


	public function store()
	{
		
		
		$validation = Donor::validate(Input::all());

		//validating blood select 


		if($validation->passes()){

			

			$donor = Donor::create(array(
		
			'fname'			=> 	Input::get('fname'),
			'lname'			=> 	Input::get('lname'),
			'address'		=>  Input::get('area'),
			'lat'			=>	Input::get('lat'),
			'lng'			=>	Input::get('lng'),
			'countrycode' 	=>  Input::get('countrycode'),
			'mobile'		=>	Input::get('mobile'),
			'email'			=>	Input::get('email'),
			'bloodtype'		=>	Input::get('bloodtype'),
			'gender'		=>	Input::get('gender'),
			'lastDonated' 	=>  Input::get('lastDonated')
		));

		/*

		 $countrycode = $donor->countrycode;

		 $mobile = $donor->mobile;
		 
		 $recipientNumber = smsController::phoneNumber($mobile,$countrycode);

		 $recipientName = $donor->fname;
		 

		 $messageBody = "Thanks $recipientName for signing up to Blood Bank Africa.";

		  $sms = smsController::sendSMS($recipientNumber,$recipientName,$messageBody);
		  $event = Event::fire('donor.save', $donor); */
		  
		  return Redirect::to('donors/create')->with('success','Thank you. You have successfully registered to BBA');

		}else{
			return Redirect::to('donors/create')->withErrors($validation)->withInput();
		}

	}
	

}