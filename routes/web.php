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
    return view('layouts.master');
});

Route::get('/item', 'AdminController@item');
Route::get('/addItem', 'AdminController@addItem');
Route::get('/viewSale', 'AdminController@viewSale');
Route::get('/order', 'AdminController@order');

Route::get('/login', 'CustomerController@login');
Route::get('/register', 'CustomerController@register');
Route::get('/logout', 'CustomerController@logout');
Route::get('/shop', 'CustomerController@shop');
Route::get('/shop1', 'CustomerController@shop1');





