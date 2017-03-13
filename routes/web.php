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

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store');

/* Dashboard - Admin only */
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('dashboard/producten', 'AdminProductsController@index')->name('products');
Route::post('dashboard/products', 'AdminProductsController@post');

Route::get('dashboard/product/{id}', 'AdminProductController@index');
Route::patch('dashboard/product/{id}', 'AdminProductController@update');
Route::delete('dashboard/product/{id}', 'AdminProductController@destroy')->name('destroy');

Route::get('/dashboard/users', 'AdminUsersController@index')->name('users');

Route::get('/dashboard/categorys', 'AdminCategorysController@index')->name('categorys');
/**************************/
Route::get('/product/{id}', 'ProductController@index')->name('product');

Route::get('/brokken', 'ProductController@show')->name('brokken');
Route::get('/snacks', 'ProductController@show')->name('snacks');
Route::get('/training', 'ProductController@show')->name('training');
Route::get('/about', 'AboutController@index');

Route::get('/winkelwagen', 'ShoppingcartController@index')->name('winkelwagen');

Route::get('/afrekenen', 'CheckoutController@index');

Route::get('/profiel', 'UserController@index')->name('profiel');
Route::post('/profiel', 'UserController@update');
