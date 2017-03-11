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
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/producten', 'AdminProductController@index')->name('products');
Route::post('/producten', 'AdminProductController@post');

Route::get('/brokken', 'ProductController@index')->name('brokken');
Route::get('/snacks', 'ProductController@index')->name('snacks');;
Route::get('/training', 'ProductController@index')->name('training');;

Route::get('/winkelwagen', 'ShoppingcartController@index');

Route::get('/afrekenen', 'CheckoutController@index');

Route::get('/profiel', 'UserController@index');
Route::post('/profiel', 'UserController@update');
