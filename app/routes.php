<?php

/*
|--------------------------------------------------------------------------
                          FRONT END  ROUTES
|--------------------------------------------------------------------------
|
|
*/


Route::get('/base', function(){

	

});

Route::get('/', function(){
	return View::make('frontEnd.index');
});

Route::get('about', function(){
	return View::make('frontEnd.about', array());
});

Route::get('contact', function(){
	return View::make('frontEnd.contact');
});

Route::get('hospital', function(){
	return View::make('frontEnd.hospitals');
});

//This is just a test route to view the generated mail from mandrillapp.
Route::get('/mail', array('as'=>'mail', 'uses'=> 'sendMail@render'));
Route::get('/mail/verify/{hash}', array('as' => 'verifyMail', 'uses' => 'sendMail@verifyMail'));

// Here be donors
Route::controller('donor', 'donorController');



/*
|--------------------------------------------------------------------------
                          BACK END  ROUTES
|--------------------------------------------------------------------------
|
|
*/


Route::group(array('prefix' => 'admin'), function()
{

	Route::group(array('before'=>'auth'), function(){

		Route::get('/',array('as'=>'home','uses'=>'HomeController@dashboard'));
		Route::get('logout',array('as'=>'logout','uses'=>'UsersController@getLogout'));
		Route::get('search', array('as'=>'donorSearch','uses'=>'DonorSearchController@index'));
		Route::get('search/mapview', array('as'=>'donorSearchOnMap','uses'=>'DonorSearchController@searchDonorsOnMap'));

	});

    Route::get('login', array('as' => 'login', 'uses' => 'UsersController@getLogin'))->before('guest');
    Route::post('login','UsersController@postLogin');
    Route::post('search','DonorSearchController@searchDonors');
    
});




























