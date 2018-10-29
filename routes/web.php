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

Route::get('/', function () {
    return session()->all();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@hola')->name('hola');

Route::get('/productos', 'ProductController@index')->name('produtcs.index');
Route::post('/productos/agregar', 'ProductController@addCart')->name('produtcs.addCart');

Route::get('/carrito', 'CartController@index')->name('cart.index');
