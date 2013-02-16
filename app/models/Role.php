<?php

class Role extends Eloquent{

	public $timestamps = false;

	protected $table = "roles";
	
	public function user()
	{
		return $this->belongsTo('User');
	}

	public static function roles()
	{
		return static::all();
	}

}