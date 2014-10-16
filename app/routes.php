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

Route::post('auth/login', 'AuthController@postLogin');
Route::get('auth/logout', 'AuthController@getLogout');

Route::get('/', 'BackendController@index' );
Route::get('/login', function(){return View::make('admin.backend.pages.examples.login');});

Route::get('/backend', 						'BackendController@index');
Route::get('/backend/uploadijazah', 	'BackendController@uploadIjazah');
Route::post('/backend/uploadijazah', 	'BackendController@postUploadIjazah');
Route::get('/backend/downloadijazah', 	'BackendController@downloadIjazah');
Route::get('/backend/scanqrcode', 		'BackendController@scanQRCode');

Route::get('/backend/lulusanwisuda', 	'BackendController@lulusanWisuda');
Route::get('/backend/lulusanfakultas', 'BackendController@lulusanFakultas');
Route::get('/backend/grads_detail/{by}/{val}', 	'BackendController@lulusanDetail');
Route::get('/backend/student_detail/{nim}', 	'BackendController@studentDetail');

Route::get('/backend/changepassword', 	'BackendController@changePassword');

Route::get('/backend/changeprofile', 	'BackendController@changeProfile');
Route::get('/backend/changeprofile/{userId}', 'BackendController@changeProfile');
Route::get('/backend/usermanagement', 	'BackendController@userManagement');