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
Route::get('/login', 'PagesController@login');
Route::get('/endSession', 'PagesController@endSession');
Route::get('/mainAfterLogin', 'PagesController@indexAfterLogin');
Route::get('/hiring', 'PagesController@hiring');
Route::get('/detailTour/{id}', 'PagesController@detailTourPage');
Route::get('/detailProduct/{id}', 'PagesController@detailProductPage');
Route::get('/validacionInicioSesion',  'PagesController@validacionInicioSesion');
Route::get('/restorePasswordBlade',  'PagesController@restorePassword');

//USERS CONTROLLER
Route::get('validateUser', 'UsersController@validateUser');
Route::get('createUser', 'UsersController@createUser');
Route::get('resetPassword', 'UsersController@resetPassword');
Route::get('restorePassword', 'UsersController@restorePassword');

//VIAJE CONTROLLER
Route::get('selectTour', 'ViajeController@selectAllTours');
Route::get('selectTourForHire', 'ViajeController@selectAllToursForHire');
Route::get('selectFilterAllTours', 'ViajeController@selectFilterAllTours');
Route::get('selectFilterToursBetterRating', 'ViajeController@selectFilterToursBetterRating');
Route::get('selectFilterToursMoreBooking', 'ViajeController@selectFilterToursMoreBooking');
Route::get('selectFilterToursNacionals', 'ViajeController@selectFilterToursNacionals');
Route::get('selectFilterToursInternacionals', 'ViajeController@selectFilterToursInternacionals');

//PRDOUCTS CONTROLLER
Route::get('selectProducto', 'ProductsController@selectAllProducts');

//CONTACT CONTROLLER
Route::get('insertMessage', 'ContactsController@createMessage');
Route::get('sendMail', 'ContactsController@sendEmailforContact');

//HIRING CONTROLLER
Route::get('insertHiring', 'HiringController@createHiring');

//RATINGS CONTROLLER
Route::get('insertRating', 'RatingsController@insertRating');

//BOOKINGS CONTROLLER
Route::get('insertBooking', 'BookingsController@insertBooking');
Route::get('calculatePrice', 'BookingsController@calculatePrice');

//COMMENTS CONTROLLER
Route::get('loadComment', 'CommentsController@loadComment');
Route::get('saveNewComments', 'CommentsController@saveNewComments');
