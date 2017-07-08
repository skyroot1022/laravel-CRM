<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/




Route::get('/', 'FrontPageController@index');
Route::get('/aboutus', 'FrontPageController@aboutus');
Route::get('/services', 'FrontPageController@services');
Route::get('/newsroom', 'FrontPageController@newsroom');
Route::get('/contactus', 'FrontPageController@contactus');

Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/main', 'BackPageController@main')->name("main");
Route::get('/minor', 'BackPageController@minor')->name("minor");

Route::get('/register/verify/{token}', 'Auth\RegisterController@verify'); 
Route::get('/register/verifiedmsg', 'Auth\RegisterController@verified');