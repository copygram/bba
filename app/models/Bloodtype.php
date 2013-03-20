<?php

class Bloodtype extends Basemodel {

    public function donors() {
        return $this->hasMany('Donor');
    }
}