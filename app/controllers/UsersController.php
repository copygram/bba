<?php

class UsersController extends BaseController {

	

	/**
	 * Display login form
	 */	

	public function getLogin()
	{
		return View::make('backEnd.login', array());
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
		return View::make('backEnd.dashboard', array());
	}


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
		//
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