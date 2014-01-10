<?php

namespace services\Facades;

use Illuminate\Support\Facades\Facade;


class String extends Facade {

	protected static function getFacadeAccessor()
	{
		return 'string';   //name binded in the ioc container
	}

}