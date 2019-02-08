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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('events','EventsController');

/*
    Route::get('/events', 'EventsController@index');
    Route::get('/events/create', 'EventsController@create');
    Route::get('/events/{event}', 'EventsController@show');
    Route::post('/events', 'EventsController@store');
    Route::get('/events/{event}/edit', 'EventsController@edit');
    Route::patch('/events/{event}', 'EventsController@update');
    Route::delete('/events/{event}', 'EventsController@destroy');
*/