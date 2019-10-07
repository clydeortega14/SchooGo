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

Auth::routes();

Route::middleware(['auth'])->group(function(){


	Route::get('/home', 'HomeController@index')->name('home');

/* FOR ADMIN || SUPERADMIN */

	// CATEGORIES
	Route::get('categories', 'CategoriesController@index')->name('categories');
	Route::get('category/create', 'CategoriesController@create')->name('category.create');
	Route::post('category/store', 'CategoriesController@store')->name('category.store');
	Route::get('category/{id}/edit', 'CategoriesController@edit')->name('category.edit');
	Route::put('category/{id}/update', 'CategoriesController@update')->name('category.update');

	//DEPARTMENTS
	Route::get('departments', 'DepartmentsController@index')->name('departments');
	Route::get('department/create', 'DepartmentsController@create')->name('department.create');
	Route::post('department/store', 'DepartmentsController@store')->name('department.store');
	Route::get('department/{id}/edit', 'DepartmentsController@edit')->name('department.edit');
	Route::put('department/{id}/update', 'DepartmentsController@update')->name('department.update');

	//PRODUCTS
	Route::get('products', 'ProductsController@index')->name('products.index');

	Route::get('product/create', 'ProductsController@create')->name('product.create');

	//ORDERS
});

/* FOR CUSTOMERS || USERS */

Route::resource('products', 'ProductsController');

Route::get('product', 'ProductsController@show');

Route::resource('orders', 'OrdersController');

Route::resource('checkout', 'CheckoutController');


/* AJAX */
Route::get('/category/department/{id}', 'CategoriesController@getCategoryDept');


