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
Route::get('/', 'pagesController@home');
Route::get('/profile', 'pagesController@dashboard');
Route::get('/code','pagesController@code_editor');
Route::get('/output', array('as' => 'output', function()
{
    return view('output');
}));







Auth::routes();

Route::get('/dashboard', array('as' => 'dashboard', function()
{
    return view('dashboard');
}));



Route::get('/javasection', array('as' => 'javasection', function()
{
    return view('javasection');
}));


Route::get('/javaq', array('as' => 'javaq', function()
{
    return view('javaq');
}));


Route::get('/javaq2', array('as' => 'javaq2', function()
{
    return view('javaq2');
}));


Route::get('/cplussection', array('as' => 'cplussection', function()
{
    return view('cplussection');
}));

Route::get('/pythonsection', array('as' => 'pythonsection', function()
{
    return view('pythonsection');
}));

/*Route::get('/compiler',function() {
    return view('compile_source');
});
*/

// Route::get('/javasection',function(){

//      return view('javasection');
//  });


Route::get('/compiler', 'compileSourceController@check');

Route::get('/runner','compileSourceController@code');

Route::get('/wrong','pagesController@wrong_answer');