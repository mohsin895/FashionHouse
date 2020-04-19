<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','Frontend\PagesController@index')->name('index');
Route::get('/contact','Frontend\PagesController@contact')->name('contact');

Route::prefix('products')->group(function () {

Route::get('/','Frontend\ProductsController@index')->name('products');
Route::get('/{slug}','Frontend\ProductsController@show')->name('products.show');
Route::get('/new/search','Frontend\PagesController@search')->name('search');


Route::get('/categories','Frontend\CategoriesController@index')->name('categories.index');
Route::get('/category/{id}','Frontend\CategoriesController@show')->name('categories.show');

});

Route::prefix('admin')->group(function () {


   Route::get('/','Backend\PagesController@index')->name('admin.index');

   //product route
   Route::get('/products','Backend\ProductsController@index')->name('admin.products');
   Route::get('/product/create','Backend\ProductsController@create')->name('admin.product.create');
   Route::get('/product/edit/{id}','Backend\ProductsController@edit')->name('admin.product.edit');
   Route::post('/product/create','Backend\ProductsController@store')->name('admin.product.store');
   Route::post('/product/edit/{id}','Backend\ProductsController@update')->name('admin.product.update');
   Route::post('/product/delete/{id}','Backend\ProductsController@delete')->name('admin.product.delete');


   //Category route
   Route::get('/categories','Backend\CategoriesController@index')->name('admin.categories');
   Route::get('/category/create','Backend\CategoriesController@create')->name('admin.category.create');
   Route::get('/category/edit/{id}','Backend\CategoriesController@edit')->name('admin.category.edit');
   Route::post('/category/create','Backend\CategoriesController@store')->name('admin.category.store');
   Route::post('/category/edit/{id}','Backend\CategoriesController@update')->name('admin.category.update');
   Route::post('/category/delete/{id}','Backend\CategoriesController@delete')->name('admin.category.delete');




   //Brand route
   Route::get('/brands','Backend\BrandsController@index')->name('admin.brands');
   Route::get('/brand/create','Backend\BrandsController@create')->name('admin.brand.create');
   Route::get('/brand/edit/{id}','Backend\BrandsController@edit')->name('admin.brand.edit');
   Route::post('/brand/create','Backend\BrandsController@store')->name('admin.brand.store');
   Route::post('/brand/edit/{id}','Backend\BrandsController@update')->name('admin.brand.update');
   Route::post('/brand/delete/{id}','Backend\BrandsController@delete')->name('admin.brand.delete');




      //Division route
      Route::get('/divisions','Backend\DivisionsController@index')->name('admin.divisions');
      Route::get('/division/create','Backend\DivisionsController@create')->name('admin.division.create');
      Route::get('/division/edit/{id}','Backend\DivisionsController@edit')->name('admin.division.edit');
      Route::post('/division/create','Backend\DivisionsController@store')->name('admin.division.store');
      Route::post('/division/edit/{id}','Backend\DivisionsController@update')->name('admin.division.update');
      Route::post('/division/delete/{id}','Backend\DivisionsController@delete')->name('admin.division.delete');



      //District route
      Route::get('/districts','Backend\DistrictsController@index')->name('admin.districts');
      Route::get('/district/create','Backend\DistrictsController@create')->name('admin.district.create');
      Route::get('/district/edit/{id}','Backend\DistrictsController@edit')->name('admin.district.edit');
      Route::post('/district/create','Backend\DistrictsController@store')->name('admin.district.store');
      Route::post('/district/edit/{id}','Backend\DistrictsController@update')->name('admin.district.update');
      Route::post('/district/delete/{id}','Backend\DistrictsController@delete')->name('admin.district.delete');


});

//User Route
Route::prefix('user')->group(function () {

Route::get('/dashboard','Frontend\UsersController@dashboard')->name('user.dashboard');
Route::get('/profile','Frontend\UsersController@profile')->name('user.profile');
Route::post('/profile/update','Frontend\UsersController@profileUpdate')->name('user.profile.update');
});


Route::get('/token/{token}','Frontend\VerificationController@verify')->name('user.verification');

//cart Routes

Route::prefix('carts')->group(function () {

Route::get('/','Frontend\CartsController@index')->name('carts');
Route::post('/store','Frontend\CartsController@store')->name('carts.store');
Route::post('/update/{id}','Frontend\CartsController@update')->name('carts.update');
Route::post('/delete/{id}','Frontend\CartsController@store')->name('carts.delete');
});


//Checkout Routes

Route::prefix('checkout')->group(function () {

Route::get('/','Frontend\CheckoutsController@index')->name('checkouts');
Route::post('/store','Frontend\CheckoutsController@destroy')->name('carts.delete');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
