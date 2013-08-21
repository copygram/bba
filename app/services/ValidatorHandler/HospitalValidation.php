<?php

namespace services\ValidatorHandler;

class HospitalValidation extends Validator {

	public static $rules = array(
		'name'					=> 'required',
		'mobile' 				=> 'required',
		'email' 				=> 'required',
		'address' 				=> 'required',
		'countrycode' 			=> 'required',
		'area'					=>'required',
		'fname'					=>'required',
		'lname'					=>'required',
		'gender_id'				=>'exists:genders,id',
		'contact-mobile'		=>'required'

	);
}