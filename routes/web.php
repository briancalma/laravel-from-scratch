<?php

use Illuminate\Filesystem\Filesystem;

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

// app()->bind('example', function(){
//     return new App\Example;
// });

// use App\Example;

// app()->singleton('example', function() {
//     return new App\Example;
// });



// Route::get('/', function () {

    ///dd(app(Filesystem::class));
    // dd(app('\App\Example'));
    // dd(app('example'), app('example'));

    // return view('welcome');
// });

Route::get('/', 'EventsController@index');


Route::resource('events','EventsController');

Route::patch('/tasks/{task}', 'EventsTaskController@update');
Route::post('/events/{event}/store', 'EventsTaskController@store');
Route::post('/complete-task/{task}', 'CompletedTasksController@store');
Route::delete('/complete-task/{task}', 'CompletedTasksController@destroy');

/*
    Route::get('/events', 'EventsController@index');
    Route::get('/events/create', 'EventsController@create');
    Route::get('/events/{event}', 'EventsController@show');
    Route::post('/events', 'EventsController@store');
    Route::get('/events/{event}/edit', 'EventsController@edit');
    Route::patch('/events/{event}', 'EventsController@update');
    Route::delete('/events/{event}', 'EventsController@destroy');
*/