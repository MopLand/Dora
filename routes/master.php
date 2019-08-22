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

//Config::set('view.paths', array(__DIR__.'/../modules/Frontend/Views/'));

//var_dump( Config::get('view.paths') );

Route::domain('admin.myapp.test')->group(function () {

	//var_dump('xxfffx');
	//exit;

	Route::get('/', function () {
		return '这是前台模块';
	});

	Route::get('/index', 'Index\IndexController@index');

	Route::get('/test', 'Index\IndexController@test');
	
});

