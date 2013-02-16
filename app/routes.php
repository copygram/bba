<?php

/*
|--------------------------------------------------------------------------
                          FRONT END  
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', function(){
	return '<h1> Welcome to Blood Bank Africa </h1>';
});


/*
|--------------------------------------------------------------------------
                          BACK END  AUTHENTICATION
|--------------------------------------------------------------------------
|
|
*/



Route::get('/admin',array('as'=>'home','uses'=>'HomeController@dashboard'))->before('auth');

Route::get('admin/login', array('as' => 'login', 'uses' => 'UsersController@getLogin'))->before('guest');

Route::post('admin/login','UsersController@postLogin');

Route::get('admin/logout',array('as'=>'logout','uses'=>'UsersController@getLogout'))->before('auth');



/*
|--------------------------------------------------------------------------
                          BACK END  USERS
|--------------------------------------------------------------------------
|
|
*/

// user Resource

Route::get('admin/users', array('as' => 'users', 'uses' => 'UsersController@index'))->before('auth');

Route::get('admin/users/create', array('as' => 'new_user', 'uses' => 'UsersController@create'))->before('auth');

Route::resource('admin/users/store', 'UsersController');

Route::get('admin/users/{id}/edit', array('as' => 'edit_user', 'uses' => 'UsersController@edit'));

Route::put('admin/users/update', array('uses'=>'UsersController@update'));

Route::put('admin/users/deactivate', array('as'=>'deactivate_user','uses' => 'UsersController@deactivateAccount'));





Route::get('admin/donors/search', array('as'=>'donorSearch','uses'=>'DonorSearchController@index'))->before('auth');

Route::post('admin/donors/search','DonorSearchController@searchDonors');

Route::get('admin/donor/{id}',array('as'=>'view_donor','uses'=>'DonorSearchController@show'));






















