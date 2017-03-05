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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/brokken', 'ProductController@index');
Route::get('/snacks', 'ProductController@index');
Route::get('/training', 'ProductController@index');

Route::get('/winkelwagen', 'ShoppingcartController@index');

Route::get('/afrekenen', 'CheckoutController@index');

Route::get('/profiel', 'UserController@index');
Route::post('/profiel', 'UserController@store');
