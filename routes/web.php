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

//harian mvc laravel 30 juni 2020
// Route::get('/', 'HomeController@home');

// Route::get('/register', 'AuthController@register');

// Route::post('/welcome_post', 'AuthController@welcome_post');

//harian MATERI templateBlade 01 juli 2020
// Route::get('/master', function(){
	// return view('/adminlte/master');
// });

// Route::get('/items', function(){
	// return view('/items/index');
// });

// Route::get('/items/create', function(){
	// return view('/items/create');
// });

//harian CHALLENGE templateBlade 01 juli 2020
Route::get('/', function(){
	return view('/adminlte/index');
});

Route::get('/data-tables', function(){
	return view('adminlte/data-tables');
});
