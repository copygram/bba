<?php

class Gender extends Eloquent{

    public function donor()
    {
        return $this->belongsTo('Donor');
    }
}