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
    return view('index');
});

Route::get('login/facebook', 'LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'LoginController@handleProviderCallback');
Route::get('Ofertas', 'OfertasController@index');
Route::get('CorreoEnviado/CorreoEnviado', function () {
    return view('CorreoEnviado/CorreoEnviado');
});
Route::post('RegistroUsuario', 'LoginController@RegistroUsuario');
Route::get('Registro', function () {
    return view('Registro/Registro');
});

//Enlace de verificacion de Email
Route::get('/register/verify/{code}', 'LoginController@verify');