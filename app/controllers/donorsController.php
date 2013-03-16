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
			

			$mobile = Input::get('mobile');

			$array = str_split($mobile);
			if($array[0] === '0')
			{
				$mobile = substr($mobile, 1);
			}else{
				 $mobile = $mobile ;
			}

			$countryCode = Input::get('countrycode');

			$donorMobile = $countryCode.$mobile;

			$bloodtype = Input::get('bloodtype');

			

			$donor = Donor::create(array(
		
			'fname'		=> 	Input::get('fname'),
			'lname'		=> 	Input::get('lname'),
			'address'	=>  Input::get('area'),
			'lat'		=>	Input::get('lat'),
			'lng'		=>	Input::get('lng'),
			'mobile'	=>	$donorMobile,
			'email'		=>	Input::get('email'),
			'bloodtype'	=>	Input::get('bloodtype'),
			'gender'	=>	Input::get('gender'),
			'lastDonated' => Input::get('lastDonated')
		));

		
		 $recipientNumber = $donor->mobile;

		 $recipientName = $donor->fname;
		 

		 $messageBody = "Thanks for saving a life.";

		  $sms = smsController::sendSMS($recipientNumber,$recipientName,$messageBody);
		  
		  return Redirect::to('donors/create')->with('success','Thank you. You have successfully registered to BBA');
		
		}else{
			return Redirect::to('donors/create')->withErrors($validation)->withInput();
		}

	}
	

}