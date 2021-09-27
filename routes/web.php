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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/donation', 'HomeController@show')->name('donation');

Route::post('/payment', 'PaymentController@payShow'); 
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); 
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::resource('home', 'DashboardController');