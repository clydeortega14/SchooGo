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

Route::get('/', 'LandingPageController@index')->name('landing.page');

Route::resource('products', 'ProductsController');

Route::get('orders', 'OrdersController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
