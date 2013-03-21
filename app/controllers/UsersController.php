<?php

class UsersController extends BaseController {



/*
|--------------------------------------------------------------------------
| LOGIN SECTION
|--------------------------------------------------------------------------
|
*/

	public function getLogin()
	{
		return View::make('backend.Authentication.login');
	}

	public function postLogin()
	{
		$users = array(
			'email' => Input::get('username'),
			'password' => Input::get('password'),
			'status'=>'1'

		);

		if (Auth::attempt($users)) {
			return Redirect::route('home');
		}else{
			return Redirect::route('login')->with('flash_error', 'Your username/password combination was incorrect.')->withInput();
		}

	}

	public function getLogout(){

		if(Auth::check())
		{
			Auth::logout();
			return Redirect::route('login');
		}
		else{
			return Redirect::route('login');
		}
		
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = User::userList();
		return View::make('backend.Users.index')->with('users',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.Users.new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inputs = Input::all();

		$validation = User::validate($inputs);

		$role = Input::get('role');
		
		if($validation->passes() && ($role != '0')){
			$user = User::create(array(
				 'hospital_id'=>Auth::user()->hospital_id,
				 'fname'=>Input::get('fname'),
				 'lname'=>Input::get('lname'),
				 'mobile'=>Input::get('mobile'),
				 'email'=>Input::get('email'),
				 'password'=>Hash::make('123456'),
				 'role'=>Input::get('role')
				
			));
			return Redirect::to('admin/users/create')->with('success','Account updated with success!');
		}else{
			return Redirect::to('admin/users/create')->with('message', 'Please select role type')->withInput()->withErrors($validation);
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('backend.Users.edit')->with('user',User::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @return Response
	 */
	public function update()
	{

		 

		 $id = Input::get('id');
	    
	  
		    
		    $user = User::find($id);

		    $user->fname = Input::get('fname');
		    $user->lname = Input::get('lname');
		    $user->mobile = Input::get('mobile');
		    $user->email = Input::get('email');

		    $success = $user->save();

		    if($success)
		    	return Redirect::route('users',array('id'=>$id))->with('updatemessage','Successfully updated');

	   

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function deactivateAccount()
	{
		return 'Deactivate user account with specific id';
	}

}