<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'DashboardController@index')->middleware(['auth'])->name('index');

Auth::routes();

Route::get('/login', 'Auth\LoginController@index')->middleware(['guest'])->name('login');
Route::post('/login', 'Auth\LoginController@login')->middleware(['guest'])->name('login.post');
