<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{


	return View::make('frontEnd.index');
});

Route::get('/about', function() {
	return View::make('frontEnd.about', array());
});

Route::get('/contact', function() {
	return View::make('frontEnd.contact', array());
});

Route::group( array('prefix'=>'about'), function() {

	Route::get('blood-donation', function(){ return View::make('frontend.blood-donation', array()); });
	Route::get('10-facts', function() { return View::make('frontend.blood-donation-facts', array()); });
	Route::get('misconceptions', function(){ return View::make('frontend.misconceptions', array()); });
	Route::get('lists-of-hospital', function(){ return View::make('frontend.list-of-hospitals', array()); });
});

Route::resource('donors','DonorsController');
Route::get('signup/success',array('as'=>'success-signup','uses'=>'DonorsController@getSuccessPage'));





