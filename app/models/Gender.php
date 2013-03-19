<?php

class Gender extends Eloquent{

    public function donors()
    {
        return $this->hasMany('Donor');
    }
}