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


Route::get('/', 'WebController@index');

Route::get('/abstract/1.html', 'WebController@abstract_1');

Route::get('/abstract/2.html', 'WebController@abstract_2');

Route::get('/abstract/3.html', 'WebController@abstract_3');

Route::group(['middleware'=>'allow'], function (){
	Route::get('/members-details.html', 'WebController@members_details');
});

Route::post('/sign-in', 'UserController@authenticate');
Route::post('/encrypt', 'UserController@encrypt');

Route::get('zh', 'WebController@index_zh');

Route::get('/zh/abstract/1.html', 'WebController@abstract_zh_1');

Route::get('/zh/abstract/2.html', 'WebController@abstract_zh_2');

Route::get('/zh/abstract/3.html', 'WebController@abstract_zh_3');