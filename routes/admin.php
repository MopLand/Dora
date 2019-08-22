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

Route::domain('admin.myapp.test')->group(function () {

	//var_dump('xxfffx');
	//exit;

	Route::get('/', 'IndexController@index');

	Route::get('/auth/login', 'AuthController@login');
	
});