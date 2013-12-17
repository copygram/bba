<?php

class Bloodtype extends Eloquent {
	protected $guarded = array();

	public static $rules = array('bloodtype_id' =>'exists:bloodtypes,id');

	public $timestamp = false;

	public function donors() {
        return $this->hasMany('Donor');
    }
	
}