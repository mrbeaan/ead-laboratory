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

//About-us
Route::get('/aboutus', 'AboutusController@index');
Route::get('/aboutus/assistant', 'AboutusController@assistant');
Route::get('/aboutus/alumnus', 'AboutusController@alumnus');