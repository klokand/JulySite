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
Route::get('properties/{type}', 'PropertyController@listProperties');
Route::get('news', 'PageController@getNews');
Route::get('contactUs', 'PageController@getContactUs');
Route::get('property/{id}','PropertyController@getPropertyDetail');






Route::get('createProperty',['as'=>'propertyStep1','middleware'=>'adminCheck','uses'=>'PropertyController@createProperty']);

Route::post('createProperty',['middleware'=>'adminCheck','uses'=>'PropertyController@PostCreateProperty']);	

Route::post('property/image/upload',['middleware'=>'adminCheck','uses'=>'PropertyController@uploadPropertyImage']);	
Route::post('property/image/delete',['middleware'=>'adminCheck','uses'=>'PropertyController@deletePropertyImage']);	

Route::get('propertyList',['as'=>'propertyList','middleware'=>'adminCheck','uses'=>'PropertyController@listProperties']);

Route::get('admin/propertyList',['as'=>'propertiesTable','middleware'=>'adminCheck','uses'=>'PropertyController@listPropertiesTable']);

Route::get('admin/login',['as'=>'login','uses'=>'UserController@getLogin']);
Route::post('admin/login','UserController@postLogin');

Route::get('admin/logout',['as'=>'logout','uses'=>'UserController@Logout']);


Route::get('createUser',['as'=>'createUser','middleware'=>'superAdminCheck','uses'=>'UserController@getCreateUser']);
Route::post('createUser',['middleware'=>'superAdminCheck','uses'=>'UserController@postCreateUser']);

Route::get('adminList',['as'=>'listAdmin','middleware'=>'superAdminCheck','uses'=>'UserController@getAdminList']);
Route::get('updateAdmin/{id}',['middleware'=>'superAdminCheck','uses'=>'UserController@getUpdateAdmin']);

Route::get('adminPanel', ['as'=>'adminPanel','middleware'=>'adminCheck','uses'=>'PageController@getAdminPanel']);




