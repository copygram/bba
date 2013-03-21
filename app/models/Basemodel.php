<?php 

class Basemodel extends Eloquent {


	public static function validate($data)
	{
		$messages = array(
    		'fname.required' => 'The first name is required.',
    		'lname.required' => 'The last name is required.',
    		'area.required' => 'Please enter your home address.',
    		'email.email' => 'Please enter a valid email format',
    		'fname.required' => 'The first name is required.',
    		'bloodtype.exists' => 'Please select your blood type.'
		);

		return Validator::make($data, static::$rules,$messages);
	}
}