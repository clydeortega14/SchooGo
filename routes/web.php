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



/* FOR CUSTOMERS || USERS */

Route::get('/', 'LandingPageController@index')->name('landing.page');
Route::get('/shop', 'LandingPageController@shop')->name('shop');
Route::get('/blogs', 'LandingPageController@blogs')->name('blogs');
Route::get('/shop/product/{id}', 'GuestProductsController@show')->name('shop.product');

Auth::routes();

Route::middleware(['auth'])->group(function(){
	
	Route::get('/home', 'HomeController@index')->name('home');
	/* FOR ADMIN || SUPERADMIN */
	Route::middleware(['role:admin'])->group(function(){
		//USERS
		Route::resource('users', 'UsersController');
		//roles
		Route::resource('roles', 'RolesController');
		//permissions
		Route::resource('permissions', 'PermissionsController');
		// CATEGORIES
		Route::get('categories', 'CategoriesController@index')->name('categories.index');
		Route::post('category/store', 'CategoriesController@store')->name('category.store');
		Route::get('category/{id}/edit', 'CategoriesController@edit')->name('category.edit');
		Route::put('category/{id}/update', 'CategoriesController@update')->name('category.update');
		Route::put('status/{id}/update', 'CategoriesController@statusUpdate')->name('status.update');

		//DEPARTMENTS
		Route::get('departments', 'DepartmentsController@index')->name('departments');
		Route::get('department/create', 'DepartmentsController@create')->name('department.create');
		Route::post('department/store', 'DepartmentsController@store')->name('department.store');
		Route::get('department/{id}/edit', 'DepartmentsController@edit')->name('department.edit');
		Route::put('department/{id}/update', 'DepartmentsController@update')->name('department.update');
		Route::put('department-status/{id}/update', 'DepartmentsController@departmentStatusUpdate')->name('department.status.update');

		//PRODUCTS
		Route::get('products', 'ProductsController@index')->name('products.index');
		Route::post('product/store', 'ProductsController@store')->name('product.store');
		Route::put('product/{id}/update', 'ProductsController@update')->name('product.update');
		Route::post('product-two-methods/{id}', 'ProductsController@twoMethods')->name('two.methods');
		Route::delete('product/{id}/destroy', 'ProductsController@destroy')->name('product.destroy');
		Route::put('product-status/{id}/update', 'ProductsController@updateStatus')->name('product.status.update');
		
	});
	/* FOR CUSTOMERS */

	Route::get('/display/products', 'GuestProductsController@index')->name('display.products');
	Route::get('/display/product/{id}', 'GuestProductsController@show')->name('display.product.show');
	Route::resource('orders', 'OrdersController');
	Route::resource('checkout', 'CheckoutController');
	Route::resource('carts', 'CartController');
	Route::resource('print-services', 'PrintSerivesController');
});

/* AJAX */
Route::get('/category/department/{id}', 'CategoriesController@getCategoryDept');


