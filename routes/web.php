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





Route::get('/', 'ProdController@index')->name('index');
Route::get('/categories', 'ProdController@categories')->name('categories');

Route::group(['prefix' => 'basket'], function (){
    Route::post('/add/{product}', 'BasketController@add')->name('add');

    Route::group([
        'middleware' => 'basket_not_empty',
    ], function (){
        Route::get('/', 'BasketController@basket')->name('basket');
        Route::get('/place', 'BasketController@place')->name('place');
        Route::post('/remove/{product}', 'BasketController@remove')->name('remove');
        Route::post('/place', 'BasketController@confirm')->name('confirm');
    });

});


Route::get('/about', 'AbouteController@index')->name('about');


Route::get('/{category}', 'ProdController@category')->name('category');
Route::get('/product', 'ProdController@get')->name('product');


