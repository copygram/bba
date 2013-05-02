<?php

/*
|--------------------------------------------------------------------------
                          FRONT END  ROUTES
|--------------------------------------------------------------------------
|
|
*/


Route::get('/base', function() {

	
});

Route::get( '/', function() {
	return View::make('frontend.index');
});

Route::get( 'about', function() {
	return View::make('frontend.about', array());
});

Route::get( '/about/blood-donation', function() {
	return View::make('frontend.bloodDonation', array());
});

Route::get( '/about/10-facts', function() {
	return View::make('frontend.facts', array());
});

Route::get( '/about/misconceptions', function() {
	return View::make('frontend.misconceptions', array());
});

Route::get( '/about/lists-of-hospital', function() {
	return View::make('frontend.listHospitals', array());
});

Route::get( 'contact', function() {
	return View::make('frontend.contact');
});

Route::get( 'hospital', function() {
	return View::make( 'frontend.hospitals' );
});

//This is just a test route to view the generated mail from mandrillapp.
Route::get( '/mail', array( 'as'=>'mail', 'uses'=> 'MailController@render' ) );
Route::get( '/mail/verify/{hash}', array( 'as' => 'verifyMail', 'uses' => 'MailController@verifyMail' ) );

// Here be donors
Route::controller( 'donor', 'DonorController' );


/*
|--------------------------------------------------------------------------
                          BACK END  ROUTES
|--------------------------------------------------------------------------
*/
Route::group(array('prefix' => 'admin'), function() {

	Route::group(array('before'=>'auth'), function() {

		Route::get('/',array('as'=>'home','uses'=>'HomeController@dashboard'));
		Route::get('logout',array('as'=>'logout','uses'=>'UsersController@getLogout'));
		Route::get('search', array('as'=>'donorSearch','uses'=>'DonorSearchController@index'));
		Route::get('search/mapview', array('as'=>'donorSearchOnMap','uses'=>'DonorSearchController@searchDonorsOnMap'));

	});

    Route::get('login', array('as' => 'login', 'uses' => 'UsersController@getLogin'))->before('guest');
    Route::post('login','UsersController@postLogin');
    Route::post('search','DonorSearchController@searchDonors');
    
});