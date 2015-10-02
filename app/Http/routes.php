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

Route::get('Movies', function () {
    return view('welcome');
});
Route::get('movies', function()
{
    return view('movies');
});

Route::get('/about',function () {
	   return view('about');
	});
Route::get('/movies','MoviesController@index');
Route::controller('/movies','MoviesController');




