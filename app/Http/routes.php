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
Route::get('/', 'PageController@getIndex');
Route::get('aboutUs', 'PageController@getAboutUs');
Route::get('properties', 'PageController@getProperties');
Route::get('news', 'PageController@getNews');
Route::get('contactUs', 'PageController@getContactUs');
Route::get('property/{id}','PropertyController@getPropertyDetail');






//Route::get('properties','PropertyController@listProperties');
Route::get('createProperty','PropertyController@createProperty');

Route::get('admin/login',['as'=>'login','uses'=>'UserController@getLogin']);
Route::post('admin/login','UserController@postLogin');

Route::get('admin/logout',['as'=>'logout','uses'=>'UserController@Logout']);


Route::get('createUser',['as'=>'createUser','middleware'=>'superAdminCheck','uses'=>'UserController@getCreateUser']);
Route::post('createUser',['middleware'=>'superAdminCheck','uses'=>'UserController@postCreateUser']);


Route::get('adminPanel', ['as'=>'adminPanel','middleware'=>'adminCheck','uses'=>'PageController@getAdminPanel']);


