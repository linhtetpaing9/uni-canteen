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

<<<<<<< HEAD
Route::get('/feedback',function(){
	return view('layouts.feedback');
});

Route::get('/about',function(){
	return view('layouts.about1');
});

// Route::get('/login',function(){
// 	return view('layouts.login');
// });

Route::get('/register',function(){
	return view('layouts.register');
});

Route::get('/logout',function(){
	return view('layouts.logout');
});

Route::get('/header',function(){
	return view('layouts.header');
});



Route::get('/contact',function(){
	return view('layouts.contact');
});


Route::get('/menu',function(){
	return view('layouts.menu');
});
Auth::routes();
=======
Route::get('/item', 'AdminController@item');
Route::get('/addItem', 'AdminController@addItem');
Route::get('/viewSale', 'AdminController@viewSale');
Route::get('/order', 'AdminController@order');

Route::get('/login', 'CustomerController@login');
Route::get('/register', 'CustomerController@register');
Route::get('/logout', 'CustomerController@logout');
Route::get('/shop', 'CustomerController@shop');
Route::get('/shop1', 'CustomerController@shop1');




>>>>>>> 20199cbfd432a69ea0e840747fb739170ec8deb9

