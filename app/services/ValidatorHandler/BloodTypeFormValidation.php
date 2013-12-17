<?php

namespace services\ValidatorHandler;

class BloodTypeFormValidation extends Validator {

	public static $rules = array(
		'bloodtype_id' =>'exists:bloodtypes,id'
	);
}