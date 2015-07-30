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
Route::get('test1',function(){
	return view('test');
});

Route::get('/', 'PageController@getIndex');
Route::get('properties','PropertyController@listProperties');
Route::get('createProperty','PropertyController@createProperty');

Route::get('admin/login',['as'=>'login','uses'=>'UserController@getLogin']);
Route::post('admin/login','UserController@postLogin');

Route::get('admin/logout',['as'=>'logout','uses'=>'UserController@Logout']);


Route::get('createUser',['as'=>'createUser','uses'=>'UserController@getCreateUser']);
Route::post('createUser','UserController@postCreateUser');


Route::get('adminPanel', ['as'=>'adminPanel','middleware'=>'adminCheck','uses'=>'PageController@getAdminPanel']);


