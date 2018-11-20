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