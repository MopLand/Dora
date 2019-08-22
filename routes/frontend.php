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

$finder = new \Illuminate\View\FileViewFinder(app()['files'], array(app_path().'/../modules/Frontend/Views/'));
View::setFinder($finder);

Route::get('/frontend', function () {
    return '这是前台模块';
});

Route::get('/frontend/index', 'Index\IndexController@index');

Route::get('/frontend/test', 'Index\IndexController@test');