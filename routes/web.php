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

Route::get('/', 'PagesController@home');
// Route::get('/products', 'ProductsController@index');
// Route::get('/products/create', 'ProductsController@create');
// Route::get('/products/{product}', 'ProductsController@show');
// Route::post('/products', 'ProductsController@store');
// Route::delete('/products/{product}', 'ProductsController@destroy');
// Route::get('/products/{product}/edit', 'ProductsController@edit');
// Route::patch('/products/{product}', 'ProductsController@update');

Route::resource('products', 'ProductsController');
