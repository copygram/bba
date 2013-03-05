<?php

/*
|--------------------------------------------------------------------------
                          FRONT END  
|--------------------------------------------------------------------------
|
|
*/

Route::get('/base', function(){
	return View::make('frontend.base');
});

Route::get('/', function(){
	return View::make('frontend.index');
});

Route::get('about', function(){
	return View::make('frontend.about');
});

Route::get('contact', function(){
	return View::make('frontend.contact');
});



// donor Resource


Route::resource('donors','donorsController');


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

//Route::put('admin/users/deactivate', array('as'=>'deactivate_user','uses' => 'UsersController@deactivateAccount'));





Route::get('admin/donors/search', array('as'=>'donorSearch','uses'=>'DonorSearchController@index'))->before('auth');

Route::post('admin/donors/search','DonorSearchController@searchDonors');

Route::get('admin/donors/mapview', array('as'=>'donorSearchOnMap','uses'=>'DonorSearchController@searchDonorsOnMap'))->before('auth');

Route::get('admin/donor/{id}',array('as'=>'view_donor','uses'=>'DonorSearchController@show'));

Route::get('admin/donors/search/sms/create', array('as'=>'smsDonor','uses'=>'smsController@smsForm'));

Route::post('admin/donors/search/sms','smsController@sendSMS');






















