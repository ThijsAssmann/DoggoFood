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
Auth::routes();

Route::get('/', 'IndexController@index')->name('index');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store');

/* Dashboard - Admin only */
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('producten', 'AdminProductController@index')->name('products');
    Route::post('products', 'AdminProductController@post');

    Route::get('product/edit/{id}', 'AdminProductController@show');
    Route::patch('product/update/{id}', 'AdminProductController@update');
    Route::delete('product/{id}', 'AdminProductController@destroy')->name('destroy_product');
    Route::get('product/create', 'AdminProductController@create');
    Route::post('product/store', 'AdminProductController@store');

    Route::get('users', 'AdminUserController@index')->name('users');
    Route::delete('users/{id}', 'AdminUserController@destroy')->name('destroy');
    Route::get('user/edit/{id}', 'AdminUserController@show');
    Route::patch('user/update/{id}', 'AdminUserController@updateUser');

    Route::get('categorys', 'AdminCategoryController@index')->name('categorys');
    Route::patch('category/update/{id}', 'AdminCategoryController@update');
    Route::get('category/edit/{id}', 'AdminCategoryController@show');
    Route::delete('category/{id}', 'AdminCategoryController@destroy')->name('category_destroy');
    Route::get('category/create', 'AdminCategoryController@create');
    Route::post('category/store', 'AdminCategoryController@store');

    Route::get('subcategory/edit/{id}', 'AdminSubcategoryController@index');
    Route::patch('subcategory/update/{id}', 'AdminSubcategoryController@update');
    Route::get('subcategory/edit/{id}', 'AdminSubcategoryController@show');
    Route::delete('subcategory/{id}', 'AdminSubcategoryController@destroy')->name('subcategory_destroy');
    Route::get('subcategory/create', 'AdminSubcategoryController@create');
    Route::post('subcategory/store', 'AdminSubcategoryController@store');

    Route::get('orders', 'AdminOrderController@index')->name('orders');
});
/**************************/
Route::get('/product/{id}', 'ProductController@show')->name('product');

Route::get('/category/{slug}', 'CategoryController@show');
Route::get('/category/{category}/{subcategory}', 'SubcategoryController@show');
Route::get('header', 'CategoryController@all');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/winkelwagen', 'CartController@index')->name('winkelwagen');
Route::post('/winkelwagen/store', 'CartController@store');

Route::delete('winkelwagen/{id}', 'CartController@destroy')->name('cart_destroy');
Route::post('winkelwagen', 'CartController@update');
Route::post('winkelwagen/order', 'CartController@cartToOrder')->name('cart_order');

Route::get('/zoeken', 'SearchCatalogController@index');
Route::post('/zoeken', 'SearchCatalogController@getProducts')->name('search_products');

Route::get('/afrekenen', 'CheckoutController@index');

Route::get('/profiel', 'UserController@index')->name('profiel');
Route::post('/profiel', 'UserController@update');

Route::delete('/order/{id}', 'AdminOrderController@destroy')->name('order_destroy');