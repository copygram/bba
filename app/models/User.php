<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class User extends Basemodel implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';



	/**
	 * Validation rules.
	 *
	 * 
	 */

	public static $rules = array(

		'fname'  => 'required|between:4,16',
		'lname'  => 'required|between:4,16',
		'mobile'  => 'required',
    	'email' => 'required|email',
    	'role'  => 'required',

	);

	public function role()
	{
		return $this->hasOne('Role');
	}

	public function hospital()
	{
		return $this->belongsTo('Hospital');
	}

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}




	public static function userList()
	{
		$hospital_id = Auth::user()->hospital_id;


		$results = static::where('hospital_id',$hospital_id)->where('status','1')->where('id','!=',Auth::user()->id)->paginate(5);


		return $results;

	}


}