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
Route::get('/mainAdmin', 'PagesController@indexAdmin');

//USERS CONTROLLER
Route::get('validateUser', 'UsersController@validateUser');
Route::get('createUser', 'UsersController@validateNewUser');

//VIAJE CONTROLLER
Route::get('selectTour', 'ViajeController@selectAllTours');


/*Route::get('/', function () {
    return view('welcome');
});*/
