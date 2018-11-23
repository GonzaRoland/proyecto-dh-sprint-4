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
    return view('dogo');
});


Route::get('/regprod', 'ProductController@create')->middleware('admin');
Route::post('/regprod', 'ProductController@store')->middleware('admin');
Route::get('/regprod/{id}/edit', 'ProductController@edit')->middleware('admin');
Route::patch('/regprod/{id}', 'ProductController@update')->middleware('admin');

Route::get('/perfil/edit', 'ProfileController@edit')->middleware('profile');
//Route::get('/perfil/edit', 'ProfileController@edit');
Route::patch('/perfil/{id}', 'ProfileController@update');
Route::get('/productos', 'GenreController@index');
Route::get('/productos/categoria/{id}', 'GenreController@show');
Route::post('/productos/{id}/agregar', 'ProductController@addToCart');
Route::get('/carrito', 'CartController@index');
Route::get('/productos/{id}', 'ProductController@show');
/* Route::get('/carrito/{id}/quitar', 'CartController@remove');
Route::get('/carrito/limpiar', 'CartController@flush');
Route::get('/carrito/pagar', 'CartController@checkout'); */





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
