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

//PAGES CONTROLLER
Route::get('/', 'PagesController@index');
Route::get('/menu', 'PagesController@menu');

//USERS CONTROLLER


/*Route::get('/', function () {
    return view('welcome');
});*/
