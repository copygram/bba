<?php

class donorController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function getIndex()
	{
        return View::make('frontEnd.next');
	}

    public function getRegister()
    {
        $bloodtypes = objectFormArray::flatten(Bloodtype::all());
        $genders = objectFormArray::flatten(Gender::all());
        return View::make('frontEnd.register', array(
            'bloodtypes' => $bloodtypes,
            'genders' => $genders
        ));
    }

	public function postStore()
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
                'bloodtype_id'	=>	Input::get('bloodtype_id'),
                'gender_id'		=>	Input::get('gender_id'),
                'lastDonated' 	=>  Input::get('lastDonated'),
            ));

            $countrycode = $donor->countrycode;

            $mobile = $donor->mobile;
            $recipientNumber = smsController::phoneNumber($mobile,$countrycode);
            $recipientName = $donor->fname;
            $messageBody = "Thanks $recipientName for signing up to Blood Bank Africa.";

            //$sms = smsController::sendSMS($recipientNumber,$recipientName,$messageBody);
            $event = Event::fire('donor.save', $donor);

            return Redirect::to('donor/next')->with('registered',1);
		}else{
			return Redirect::to('donor/register')->withErrors($validation)->withInput();
		}

	}

    public function getNext() {
        return View::make('frontEnd.next');
    }
}