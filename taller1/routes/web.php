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

Route::get('/', function () {
    return view('welcome');
});

//My routes
Route::get('/index', 'HomeController@index')->name("home.index");

Route::get('/showProduct/show', 'ProductController@show')->name("showProduct.show");

Route::get('/product/create', 'ProductController@create')->name("product.create");
Route::post('/product/save', 'ProductController@save')->name("product.save");

Route::get('/product/delete/{id}', 'ProductController@delete')->name("product.delete");

Route::get('/showWithID/showWithID/{id}', 'ProductController@showWithID')->name("product.showWithID");


