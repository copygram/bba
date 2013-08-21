<?php


/*
|--------------------------------------------------------------------------
| FRONT-END ROUTES
|--------------------------------------------------------------------------
*/


Route::get('/', function() { return View::make('frontEnd.index'); });
Route::get('/about', function() { return View::make('frontEnd.about', array()); });
Route::get('/contact', function() { return View::make('frontEnd.contact', array()); });

Route::group( array('prefix'=>'about'), function() {

	Route::get('blood-donation', function(){ return View::make('frontend.blood-donation', array()); });
	Route::get('10-facts', function() { return View::make('frontend.blood-donation-facts', array()); });
	Route::get('misconceptions', function(){ return View::make('frontend.misconceptions', array()); });
	Route::get('lists-of-hospital', function(){ return View::make('frontend.list-of-hospitals', array()); });
});

Route::resource('donors','DonorsController');
Route::get('signup/success',array('as'=>'success-signup','uses'=>'DonorsController@getSuccessPage'));

Route::resource('hospitals','HospitalsController');



/*
|--------------------------------------------------------------------------
| BACK-END ROUTES
|--------------------------------------------------------------------------
*/

Route::group( array('prefix'=>'admin'), function() {
	
	Route::get('login',array('as'=>'login','uses'=>'UsersController@getLogin'));
	Route::post('login','UsersController@postLogin');
	Route::get('logout', array('as'=>'logout','uses'=>'UsersController@logout'));
	Route::get('dashboard',array('as'=>'dashboard','uses'=>'UsersController@getDashboard'))->before('auth');
});

Route::get('/admin/login', function() {

	return View::make('backEnd.login');

});


Route::get('test', function() {
	
	
	
	$Hash = Hash::make('kennedy.otis@gmail.com');
	$enc = Crypt::encrypt($Hash);

	$d = Crypt::decrypt($enc);
	dd($d);

});



