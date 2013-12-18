<?php

class UsersController extends BaseController {

	

	/**
	 * Display login form
	 */	

	public function getLogin()
	{
		return View::make('backend/login', array());
	}

	/**
	 * Post login form
	 */	

	public function postLogin()
	{
		$user = array(
			'email' 		=> Input::get('email'),
			'password' 		=> Input::get('password'),
			'status' 		=> '1'
		);

		if( Auth::attempt($user) )
		{
			if( Auth::check() )
			{
				return Redirect::route('dashboard');
			}
			else{
				return Redirect::route('login');
			}
		}	
		else
		{
			return Redirect::back()->with('login-errors','Wrong Email or Password');
		}
	}

	/**
	 * Logout user
	 */	

	public function logout()
	{
		if( Auth::check() )
		{
			Auth::logout();
			return Redirect::route('login');
		}
		return Redirect::route('login');
	}

	/**
	 * Load the admin area
	 */	

	public function getDashboard()
	{
		return View::make('backend.dashboard', array());
	}



	public function getNewStaff()
	{
		$users = User::all();

		return View::make('backend.staff')->with('users',$users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createUser()
	{
		
		$hospital_id = Auth::user()->hospital_id;
		$hospital = Hospital::find($hospital_id);
		$salt = Config::get( 'app.key' );



		$password = new services\Helpers\PasswordGenerator;
		$password = $password->getPassword();

		$validation = new services\ValidatorHandler\StaffValidation;

		if( $validation->passes() )
		{
			$user = User::create( array(
				'hospital_id' => Auth::user()->hospital_id,
				'fname' => Input::get('fname'),
				'lname' => Input::get('lname'),
				'email' => Input::get('email'),
				'mobile' => Input::get('mobile'),
				'gender_id' => Input::get('gender_id'),
				'role_id' => Input::get('role_id'),
				'password'=> Hash::make($password),
				'countrycode' => $hospital->countrycode,
				'status'	=> 0,
				'email_hash' => md5(Input::get('email').$salt)
			));

			return Redirect::route('newStaff')->with('success','Created');
		}
		else
		{
			return Redirect::back()->withInput()->withErrors( $validation->getErrors());
		}

		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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