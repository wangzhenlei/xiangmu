<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('index','IndexController@index');
Route::get('regist','RegistController@regist');
Route::get('login','LoginController@login');
Route::get('list','ListController@list');
Route::get('self','SelfController@self');
Route::get('content','ContentController@content');
Route::get('collect','CollectController@collect');
Route::get('forget01','ForgetController@forget01');
Route::get('forget02','ForgetController@forget02');
Route::get('forget03','ForgetController@forget03');

