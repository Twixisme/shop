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
//
Auth::routes([
	'reset' => false,
	'confirm' => false,
	'verifi' =>false,
]);

Route::get('/logout', 'Auth\LoginController@logout')->name('log');

Route::middleware(['auth'])->group(function () {
    Route::group([
        'prefix' => 'person',
        'namespace' => 'Person',
        'as' => 'person.',
    ], function () {
        Route::get('/orders', 'OrderController@index')->name('orders.index');
        Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
    });

    Route::group([
        'namespace' => 'Admin',
        'prefix' => 'admin',
    ], function () {
        Route::group(['middleware' => 'is_admin'], function () {
            Route::get('/orders', 'OrderController@index')->name('orders.index');
            Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
        });

        Route::resource('categories', 'CategoryController');
        Route::resource('products', 'ProductController');
    });
});



Route::post('/basket/remove/{id}', 'BasketController@remove')->name('remove');
Route::post('/basket/place', 'BasketController@confirm')->name('confirm');

Route::get('/', 'ProdController@index')->name('index');
Route::get('/categories', 'ProdController@categories')->name('categories');

Route::get('/basket', 'BasketController@basket')->name('basket');
Route::get('/basket/place', 'BasketController@place')->name('place');
Route::post('/basket/add/{id}', 'BasketController@add')->name('add');

Route::get('/{category}', 'ProdController@category')->name('category');
Route::get('/product', 'ProdController@get')->name('product');


