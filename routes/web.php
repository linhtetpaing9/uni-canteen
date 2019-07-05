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

Route::get('/home', 'HomeController@index')->name('home');
