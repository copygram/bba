<?php

class Hospital extends Basemodel{

	public function user()
	{
		return $this->hasMany('User');
	}
}