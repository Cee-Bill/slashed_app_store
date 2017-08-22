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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','pagesController@index')->name('home');
Route::get('/hairs', 'pagesController@hairs')->name('hairs');
Route::get('/garments', 'pagesController@garments');
Route::get('/hair', 'pagesController@hairItem')->name('hairItem');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/cart', 'cartController');


Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin','middleware'=>'auth'], function() {
    Route::get('/', function() {
        return view('admin.index');
    })->name('admin.index');
    // Route::get('/admin','pagesController@admin')->name('admin');

    Route::resource('productItem', 'productItemsController');
    Route::resource('product', 'productsController');
    Route::resource('stock', 'stocksController');
    Route::resource('sorting', 'sortingsController');
});

    
