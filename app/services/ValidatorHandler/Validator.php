<?php

namespace services\ValidatorHandler;

abstract class Validator {

	private $errors;
	protected $attributes;

	public function __construct($attributes = null )
	{
		$this->attributes = $attributes ? : \Input::all();
	}

	public function passes()
	{
		$validation = \Validator::make($this->attributes , static::$rules);

		if( $validation->passes() ) return true;

		$this->errors = $validation->messages();

		return false;
	}

	public function getErrors()
	{
		return $this->errors;
	}

}