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
Route::get('/event/{id}',
       ['as' => 'event_show', 'uses' => 'EventController@show']);

//creates comments
Route::post('/event/{id}',
	['as' => 'comment_create', 'uses' => 'CommentController@create']);

//creating events
Route::post('/create',
	['as' => 'event_create', 'uses' => 'EventController@create']);
//showing the form for creating events
Route::get('/create',
	['as' => 'create_show', 'uses' => 'EventController@showCreate']);

Route::post('/event/confirm_create/{id}',
	['as' => 'confirm_create', 'uses' => 'VolunteerController@create']);

Route::get('event/volunteers/{id}', "VolunteerControl@show");
