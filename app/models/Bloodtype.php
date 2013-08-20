<?php

class Bloodtype extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public $timestamp = false;

	public function donors() {
        return $this->hasMany('Donor');
    }
	
}