<?php 

class Basemodel extends Eloquent {


	public static function validate($data)
	{
		$messages = array(
    		'fname.required' => 'The first name is required.',
    		'lname.required' => 'The last name is required.',
    		'area.required' => 'Please enter area name.',
    		'email.email' => 'Please enter a valid email format',
    		'fname.required' => 'The first name is required.',
    		'bloodtype.exists' => 'Please select your blood type.',
		);

		return Validator::make($data, static::$rules,$messages);
	}

	/**
	 * @param $stdObjects
	 * @param null $class
	 * @return array|null
	 * Takes an array of stdClass objects and tries to convert them to the provided class.
	 */
	public static function stdClassToEloquent( $stdObjects, $class = null )
	{
		if ( !isset( $stdObjects ) || $class == null )
			return null;
		if ( !is_array( $stdObjects ) || count( $stdObjects ) < 1 )
			return null;
		$newObjects = array( );
		foreach ( $stdObjects as $stdObject )
		{
			$newObject = new $class( (array)$stdObject, true );
			$newObjects[ ] = $newObject;
		}
		return $newObjects;
	}

}