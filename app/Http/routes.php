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

Route::get('/', 'MainController@index');
Route::get('/search-result', 'MainController@search_result');
Route::get('/product-details', 'MainController@product_details');
Route::get('/login', 'MainController@login');
Route::get('/signup', 'MainController@signup');

//Admin routes
Route::get('/admin', 'AdminController@index');