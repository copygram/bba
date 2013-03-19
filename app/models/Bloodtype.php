<?php

class Bloodtype extends Eloquent {

    public function donors() {
        return $this->hasMany('Donor');
    }
}