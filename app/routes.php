<?php


/*
|--------------------------------------------------------------------------
| FRONT-END ROUTES
|--------------------------------------------------------------------------
*/


Route::get('/', function() { return View::make('frontend.index'); });
Route::get('/about', function() { return View::make('frontend.about', array()); });
Route::get('/contact', function() { return View::make('frontend.contact', array()); });

Route::group( array('prefix'=>'about'), function() {

	Route::get('blood-donation', function(){ return View::make('frontend.blood-donation', array()); });
	Route::get('10-facts', function() { return View::make('frontend.blood-donation-facts', array()); });
	Route::get('misconceptions', function(){ return View::make('frontend.misconceptions', array()); });
	Route::get('lists-of-hospital', function(){ return View::make('frontend.list-of-hospitals', array()); });
});

Route::resource('donors','DonorsController');
Route::get('signup/success',array('as'=>'success-signup','uses'=>'DonorsController@getSuccessPage'));
Route::get('mail/verify/{token}','DonorsController@verifyMail');

Route::resource('hospitals','HospitalsController');



/*
|--------------------------------------------------------------------------
| BACK-END ROUTES
|--------------------------------------------------------------------------
*/



Route::group( array('prefix'=>'admin'), function() {
	
	Route::get('login',array('as'=>'login','uses'=>'UsersController@getLogin'));
	Route::get('logout', array('as'=>'logout','uses'=>'UsersController@logout'));
	Route::get('dashboard',array('as'=>'dashboard','uses'=>'UsersController@getDashboard'))->before('auth');
	Route::get('donor/search',array('as'=>'searchForm','uses'=>'AdminController@donorSearchForm'))->before('auth');
    Route::get('staff/new',array('as'=>'newStaff','uses'=>'UsersController@getNewStaff'))->before('auth');
    Route::get('donor/search/mapview', array('as'=>'donorSearchOnMap','uses'=>'AdminController@searchDonorsOnMap'));
    Route::get('donor/sendSMS/{id}',array('as'=>'sendSMS','uses'=>'AdminController@getSMSForm'));

    Route::get('donor/sms_reply','AdminController@getDonorResponse');

	Route::post('login','UsersController@postLogin');
	Route::post('staff/new','UsersController@createUser');	
	Route::post('donor/search','AdminController@search');
	Route::post('donor/contact','AdminController@sendSMS');
	Route::post('donor/sendSMS/','AdminController@sendSMS');

});
