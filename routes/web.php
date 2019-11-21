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

Route::get('login', function () {
    return view('login');
});

Route::get('registro', function () {
    return view('register');
});

Route::get('perfil', function () {
    return view('perfil');
});

Route::get('preguntas-frecuentes', function () {
    return view('preguntas-frecuentes');
});

Route::get('amigos', function () {
    return view('amigos');
});

Route::get('home', function () {
    return view('home');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('/', function () {
    return view('app');
});
