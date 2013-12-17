<?php

class Donor extends Basemodel {
	protected $guarded = array();

	public function gender() {
        return $this->belongsTo('Gender');
    }

    public function bloodtype() {
        return $this->belongsTo('Bloodtype');
    }

}