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

Route::get('/', function () {
    return view('home');
});

Route::get("/post/{id}/editar", "PostController@editarPost");

// POR POST
Route::post("profilepicture", "UserController@newProfilePicture");

Route::post("newpost", "PostController@newPost");

Route::post("/post/{id}/eliminar", "PostController@eliminarPost");

Route::post("guardarcambios", "PostController@guardarCambios");
