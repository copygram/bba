<?php

namespace services\Helpers;

use Illuminate\Support\ServiceProvider;


class StringValidatorServiceProvider extends ServiceProvider {

	//Bind to underlining class

	public function register()
	{
		$this->app->bind('string','services\Helpers\StringValidator');
	}
}