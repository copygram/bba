<?php

/*
|--------------------------------------------------------------------------
                          FRONT END  
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


Route::get('/mail', array('as'=>'mail', 'uses'=> 'sendMail@sendMail'));

// Here be donors
Route::controller('donor', 'donorController');




/*
|--------------------------------------------------------------------------
                          BACK END  ROUTES
|--------------------------------------------------------------------------
|
|
*/



Route::get('/admin',array('as'=>'home','uses'=>'HomeController@dashboard'))->before('auth');

Route::get('admin/login', array('as' => 'login', 'uses' => 'UsersController@getLogin'))->before('guest');

Route::post('admin/login','UsersController@postLogin');

Route::get('admin/logout',array('as'=>'logout','uses'=>'UsersController@getLogout'))->before('auth');


Route::get('admin/search', array('as'=>'donorSearch','uses'=>'DonorSearchController@index'))->before('auth');
Route::post('admin/search','DonorSearchController@searchDonors');
Route::get('admin/search/mapview', array('as'=>'donorSearchOnMap','uses'=>'DonorSearchController@searchDonorsOnMap'))->before('auth');






Route::get('admin/users', array('as' => 'users', 'uses' => 'UsersController@index'))->before('auth');

Route::get('admin/users/create', array('as' => 'new_user', 'uses' => 'UsersController@create'))->before('auth');

Route::resource('admin/users/store', 'UsersController');

Route::get('admin/users/{id}/edit', array('as' => 'edit_user', 'uses' => 'UsersController@edit'));

Route::put('admin/users/update', array('uses'=>'UsersController@update'));


























