<?php

namespace services\ValidatorHandler;

class StaffValidation extends Validator {

	public static $rules = array(
		'fname'  => 'required',
		'lname'  => 'required',
		'email'  => 'required|unique:users,email|email',
		'mobile' => 'required|numeric',

	);
}