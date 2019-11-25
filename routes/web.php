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

Auth::routes();

// POR GET
Route::get('/perfil', "UserController@profile");

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

Route::get("editarpost", function() {
    return view("editarpost");
});

Route::get('/', function () {
    return view('home');
});

// POR POST
Route::post("profilepicture", "UserController@newProfilePicture");

Route::post("newpost", "UserController@newPost");

Route::post("editarpost", "UserController@editarPost");

Route::post("eliminarpost", "UserController@eliminarPost");

Route::post("guardarcambios", "UserController@guardarCambios");
