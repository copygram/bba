<?php

class Bloodtype extends Basemodel {

    public static $rules = array('bloodtype_id' =>'exists:bloodtypes,id');

    public function donors() {
        return $this->hasMany('Donor');
    }
}