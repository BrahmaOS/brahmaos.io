<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
	return view('site2.index');
//	session(['uid'=>1]);
//	var_dump(cookie());
//	var_dump(session('uid'));
});
Route::get('/login', function () {
	return view('site2.index');
});

Route::get('/abstract/1.html', function () {
	return view('site2.abstract1');
});

Route::get('/abstract/2.html', function () {
	return view('site2.abstract2');
});

Route::get('/abstract/3.html', function () {
	return view('site2.abstract3');
});

Route::group(['middleware'=>'allow'], function (){
	Route::get('/members-details.html', function () {
		return view('site2.Members-details');
	});
});

Route::post('/sign-in', 'UserController@authenticate');

