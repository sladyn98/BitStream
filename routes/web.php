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

/* Route::get('/', 'pagesController@login');*/
Route::get('/', 'pagesController@register');
Route::get('/profile', 'pagesController@dashboard');
Auth::routes();

Route::get('/dashboard', 'pagesController@dashboard');
