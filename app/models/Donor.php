<?php

class Donor extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function gender() {
        return $this->belongsTo('Gender');
    }

    public function bloodtype() {
        return $this->belongsTo('Bloodtype');
    }

}