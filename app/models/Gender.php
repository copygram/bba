<?php

class Gender extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function donors()
    {
        return $this->hasMany('Donor');
    }
}