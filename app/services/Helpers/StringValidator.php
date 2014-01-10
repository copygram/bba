<?php
															
namespace services\Helpers;

class StringValidator {

	/*
	 * @param var string
	 * Convert string to lowercase and removes all whitespaces
	 * return string
	*/
	
	public function trim( $string )
	{
		$string = strtolower($string);

		return preg_replace('/\s+/', '', $string);
	}

}