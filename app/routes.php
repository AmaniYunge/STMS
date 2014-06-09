<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});

Route::get('home', function()
{
	return View::make('home');
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * Managing user actions
 * Directing routes to correct controllers
 */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

//validating user during login
Route::post('login',array('as'=>'login', 'uses'=>'UserController@validate'));

//loging a user out
Route::get('logout',array('as'=>'logout', 'uses'=>'UserController@logout'));

//display a form to add new user
Route::get('user',array('as'=>'adduser', 'uses'=>'UserController@index'));

//display adding form
Route::get('user/add',array('as'=>'adduser1', 'uses'=>'UserController@create'));
//adding new user
Route::post('user/add',array('as'=>'adduser1', 'uses'=>'UserController@store'));

//viewing list of users
Route::get('user/list',array('as'=>'listuser', 'uses'=>'UserController@listUser'));

//display a form to edit users information
Route::get('user/edit/{id}',array('as'=>'edituser', 'uses'=>'UserController@edit'));

//editng users information
Route::post('user/edit/{id}',array('as'=>'edituser', 'uses'=>'UserController@update'));

//deleting user
Route::post('user/delete/{id}',array('as'=>'deleteuser', 'uses'=>'UserController@destroy'));

//display a system usage log for a user
Route::get('user/log/{id}',array('as'=>'userlog', 'uses'=>'UserController@show'));



///////////////////////////////////////////////////////////////////////////////////////
/////ROUTES MANAGING DRIVER ACTIONS
///////////////////////////////////////////////////////////////////////////////////////
//display adding form
Route::get('driver',array('as'=>'driver', 'uses'=>'DriverController@index'));
//adding new user
Route::post('driver/add',array('as'=>'addriver', 'uses'=>'DriverController@store'));

//viewing list of users
Route::get('driver/list',array('as'=>'listdriver', 'uses'=>'DriverController@listUser'));

//display a form to edit users information
Route::get('driver/edit/{id}',array('as'=>'editdriver', 'uses'=>'DriverController@edit'));

//editng users information
Route::post('driver/edit/{id}',array('as'=>'editdriver', 'uses'=>'DriverController@update'));

//deleting user
Route::post('driver/delete/{id}',array('as'=>'deletedriver', 'uses'=>'DriverController@destroy'));
