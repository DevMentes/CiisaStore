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

Route::get('/', 'IndexController@index');

Route::get('/products', 'ListProductsController@list');

Route::get('/products/detail', 'ProductDetailsController@view');

Route::get('/cart', 'CartController@view');

Route::get('/verify', 'VerifyController@verify');

Route::get('/login', 'LoginController@login');

Route::get('/pay', 'PayController@pay');



Route::group(['prefix' => 'admin'], function (){

    Route::get('/dashboard', 'Admin\DashboardController@view');

    Route::group(['prefix' => 'mantainers'], function (){

        Route::get('/', 'Admin\MantainersController@view');

        Route::group(['prefix' => 'families'], function (){
            Route::get('/', 'Mantainers\FamiliesController@list');
            Route::post('/create', 'Mantainers\FamiliesControlller@store');
        });

        Route::group(['prefix' => 'productos'], function (){
            Route::get('/', 'Mantainers\ProductController@list');
            Route::post('/create', 'Mantainers\ProductControlller@store');
        });

        Route::group(['prefix' => 'proveedor'], function (){
            Route::get('/', 'Mantainers\ProveedorController@list');
            Route::post('/create', 'Mantainers\ProveedorControlller@store');
        });
    });
});
