<?php

namespace services\ValidatorHandler;

class DonorValidation extends Validator {

	
	public static $rules = array(
		'fname'=>'required',
		'email'=>'required|unique:donors,email',
		'lname'=>'required',
		'area'=>'required',
		'mobile' => 'required|numeric|unique:donors,mobile',
		'bloodtype_id' =>'exists:bloodtypes,id',
        'gender_id' => 'exists:genders,id',

	);
}