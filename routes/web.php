<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/paquetesn',function(){
    return view('paquetesn');
});

Route::get('/paquetesi',function(){
    return view('paquetesi');
});

Route::get('/paquetes',function(){
    return view('paquetes');
});

Route::get('/eventos',function(){
    return view('eventos');
});

Route::get('/news',function(){
    return view('news');
});

Route::get('/eventos',function(){
    return view('eventos');
});

Route::get('/cotizacion',function(){
    return view('cotizacion');
});

Route::get('twitter', function () {
    return view('twitterAuth');
});


Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');


Route::resource('/paquetes', 'PaquetesController');

Route::get('/home', 'HomeController@index');
