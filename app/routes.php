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

Route::get( '/',           'PostsController@index');
Route::get( '/posts/{id}', 'PostsController@show');
Route::get( '/create',     'PostsController@create');
Route::post('/create',     ['before' => 'csrf', 'uses' => 'PostsController@store']);
