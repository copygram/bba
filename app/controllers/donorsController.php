<?php

class donorsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function create()
	{
        $event = Event::fire('donor.tr', 'slask');
        return View::make('frontEnd.register', null);

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
                'gender'	=>	Input::get('gender'),
            ));

		 $recipientNumber = Input::get('mobile');
		 $recipientName = Input::get('fname').' '.Input::get('lname');
		 $messageBody = "Thanks for saving a life.";

		  $sms = smsController::sendSMS($recipientNumber,$recipientName,$messageBody);

            return Redirect::to('donors/create')->with('success','Thank you. You have successfully registered to BBA');
		
		}else{
			return Redirect::to('donors/create')->withErrors($validation)->withInput();
		}

	}
	

}