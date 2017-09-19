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
    return view('welcome');
});
Route::get('/modelowanie-3d', function(){
	return view('modelowanie_3d');
});

Route::get('/porownanie-wersji', function(){
	return view('porownanie_wersji');
});

Route::get('/kontakt', function(){
	return view('kontakt');
});

Route::get('/cennik', function(){
	return view('cennik');
});


Route::post('/wyslij-wiadomosc', 'FormController@message');
