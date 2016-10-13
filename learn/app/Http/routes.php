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
Route::auth();


Route::get('/', function () {
    return view('welcome');
});

Route::post('/create', 'HomeController@create');

Route::get('/', 'HomeController@show_blog');
Route::get('/home', 'HomeController@index');
Route::get('/blog/{id}', 'HomeController@detail');
Route::get('/myblog', 'HomeController@show_blog');
Route::get('/teach', 'HomeController@teach_detail');




