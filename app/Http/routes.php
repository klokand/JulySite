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
Route::get('development', 'NewsController@getDevelopments');
//Route::get('news', 'PageController@getNews');
Route::get('contactUs', 'PageController@getContactUs');
Route::get('property/{id}','PropertyController@getPropertyDetail');



//sider bar pages route 
Route::get('admin/indexSlider',['middleware'=>'adminCheck','uses'=>'PageController@getAdminIndexSlider']);
Route::post('admin/indexSlider',['middleware'=>'adminCheck','uses'=>'PageController@postAdminIndexSlider']);

Route::get('admin/projects',['middleware'=>'adminCheck','uses'=>'PageController@getAdminProjects']);
Route::get('admin/loadableOffer',['middleware'=>'adminCheck','uses'=>'PageController@getAdminloadableOffer']);
Route::post('admin/loadableOffer',['middleware'=>'adminCheck','uses'=>'PageController@postAdminloadableOffer']);

Route::get('admin/teamMembers',['middleware'=>'adminCheck','uses'=>'PageController@getAdminteamMemebers']);
Route::post('admin/teamMembers',['middleware'=>'adminCheck','uses'=>'PageController@postAdminteamMemebers']);


Route::get('admin/quote',['middleware'=>'adminCheck','uses'=>'PageController@getQuote']);
Route::post('admin/quote',['middleware'=>'adminCheck','uses'=>'PageController@postQuote']);

Route::get('admin/partnership',['middleware'=>'adminCheck','uses'=>'PageController@getPartnership']);

Route::get('admin/contact',['middleware'=>'adminCheck','uses'=>'PageController@getContact']);
Route::post('admin/contact',['middleware'=>'adminCheck','uses'=>'PageController@postContact']);

Route::get('admin/aboutUs',['middleware'=>'adminCheck','uses'=>'PageController@getAdminAboutUs']);
Route::post('editor/image/upload',['middleware'=>'adminCheck','uses'=>'PageController@postEditorImage']);
Route::post('/editor/aboutUs/save',['middleware'=>'adminCheck','uses'=>'PageController@postSaveAboutUs']);
Route::post('/editor/mission/save',['middleware'=>'adminCheck','uses'=>'PageController@postSaveMission']);
Route::post('/editor/projects/save',['middleware'=>'adminCheck','uses'=>'PageController@postSaveProjects']);
Route::post('/editor/partners/save',['middleware'=>'adminCheck','uses'=>'PageController@postSavePartners']);

Route::get('admin/queryEmail',['middleware'=>'adminCheck','uses'=>'PageController@getQueryEmail']);

Route::get('admin/newsList',['as'=>'newsList','middleware'=>'adminCheck','uses'=>'NewsController@listNews']);
Route::get('news/delete/{id}',['as'=>'news.delete','middleware'=>'adminCheck','uses'=>'NewsController@delete']);






Route::get('createProperty',['as'=>'propertyStep1','middleware'=>'adminCheck','uses'=>'PropertyController@createProperty']);

Route::post('createProperty',['middleware'=>'adminCheck','uses'=>'PropertyController@PostCreateProperty']);	

Route::post('property/image/upload',['middleware'=>'adminCheck','uses'=>'PropertyController@uploadPropertyImage']);	
Route::post('property/image/delete',['middleware'=>'adminCheck','uses'=>'PropertyController@deletePropertyImage']);
Route::post('property/image/setCoverImage',['middleware'=>'adminCheck','uses'=>'PropertyController@setCoverImage']);	

Route::get('property/image/preload/{id}',['middleware'=>'adminCheck','uses'=>'PropertyController@preloadPropertyImage']);


Route::get('propertyList',['as'=>'propertyList','middleware'=>'adminCheck','uses'=>'PropertyController@listProperties']);

Route::get('property/edit/{id}',['middleware'=>'adminCheck','uses'=>'PropertyController@getUpdateProperty']);

Route::post('property/edit',['as'=>'property.edit','middleware'=>'adminCheck','uses'=>'PropertyController@postUpdateProperty']);

Route::get('admin/propertyList',['as'=>'propertiesTable','middleware'=>'adminCheck','uses'=>'PropertyController@listPropertiesTable']);

Route::get('admin/propertySoldList',['as'=>'propertiesSoldTable','middleware'=>'adminCheck','uses'=>'PropertyController@listSoldPropertiesTable']);

Route::get('admin/login',['as'=>'login','uses'=>'UserController@getLogin']);
Route::post('admin/login','UserController@postLogin');

Route::get('admin/logout',['as'=>'logout','uses'=>'UserController@Logout']);


Route::get('createUser',['as'=>'createUser','middleware'=>'superAdminCheck','uses'=>'UserController@getCreateUser']);
Route::post('createUser',['middleware'=>'superAdminCheck','uses'=>'UserController@postCreateUser']);

Route::get('adminList',['as'=>'listAdmin','middleware'=>'superAdminCheck','uses'=>'UserController@getAdminList']);
Route::get('updateAdmin/{id}',['middleware'=>'superAdminCheck','uses'=>'UserController@getUpdateAdmin']);

Route::get('adminPanel', ['as'=>'adminPanel','middleware'=>'adminCheck','uses'=>'PageController@getAdminPanel']);

Route::resource('news', 'NewsController');


