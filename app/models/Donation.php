<?php

class Donation extends Eloquent {
	protected $fillable = array('patient_no','user_id','donor_id','status');

	public static $rules = array();

	public function donors()
	{
		return $this->hasMany('Donor');
	}
}
