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

//splash routing
Route::get('/', function () {
    return view('splash');
});

//Routes for authentication
Auth::routes();

//Event hub
Route::get('/home', 'EventController@index');

//Routing for showing individual events
Route::get('/event/{id}', 'EventController@show');

//creating events
Route::post('/create',
	['as' => 'event_create', 'uses' => 'EventController@create']);
//showing the form for creating events
Route::get('/create',
	['as' => 'event_show', 'uses' => 'EventController@showCreate']);


