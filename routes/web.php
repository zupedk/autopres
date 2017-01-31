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
Route::get('/', 'ClientsController@index');

Route::get('clients', 'ClientsController@index');
Route::get('clients/create', 'ClientsController@create');
Route::post('clients', 'ClientsController@store');

Route::get('displays', 'DisplaysController@index');
Route::get('displays/create', 'DisplaysController@create');
Route::post('displays', 'DisplaysController@store');