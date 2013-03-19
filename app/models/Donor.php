<?php

class Donor extends Basemodel{

	public static $rules = array(
			'fname'=>'required',
			'email'=>'required|unique:donors,email',
			'lname'=>'required',
			'area'=>'required',
			'mobile' => 'required|numeric|unique:donors,mobile',
			'bloodtype' =>'regex:/[a-zA-Z].*/'
	);

    public function gender()
    {
        return $this->belongsTo('Gender');
    }
}