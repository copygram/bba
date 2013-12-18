<?php


class DonorsController extends BaseController {

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$bloodtypes = services\Helpers\ObjectFormArray::flatten(Bloodtype::all());
		$genders = services\Helpers\ObjectFormArray::flatten(Gender::all());
		
		return View::make('frontEnd.donors-signup', 
					array(
						'bloodtypes' => $bloodtypes,
						'genders'	 => $genders
						)
				);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validation = new services\ValidatorHandler\DonorValidation();
		$salt = Config::get( 'app.key' );


		if( $validation->passes() )
		{
			 $donor = Donor::create(array(
                'fname'			=> Input::get('fname'),
                'lname'			=> Input::get('lname'),
                'address'		=> Input::get('area'),
                'lat'			=> Input::get('lat'),
                'lng'			=> Input::get('lng'),
                'countrycode' 	=> Input::get('countrycode'),
                'mobile'		=> Input::get('mobile'),
                'email'			=> Input::get('email'),
                'bloodtype_id'	=> Input::get('bloodtype_id'),
                'gender_id'		=> Input::get('gender_id'),
                'lastDonated' 	=> Input::get('lastDonated'),
                'email_hash'    => md5(Input::get('email').$salt),
            ));

			
			 	 $sms = new services\SMSHandler\SMSProcessor;
			 	 $show = $sms->sendSMS($donor);

				 $email = new services\EmailHandler\EmailProcessor;
				 $email->sendEmail($donor);

				 return Redirect::route('success-signup')->with('donors',$donor);
			 

		}
		else
		{
			return Redirect::back()->withInput()->withErrors( $validation->getErrors() );
		}

	}

	
	public function getSuccessPage()
	{
		return View::make('frontEnd.after-register');
	}
	

	

}