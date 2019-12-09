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
Route::get('/', "UserController@home");

Route::get('/miperfil', "UserController@profile");

Route::get('/perfil/{id}', 'UserController@users');

Route::get("usuarios", "UserController@usuarios");

Route::get("preguntas-frecuentes", "UserController@faq");

Route::get("amigos", "UserController@amigos");

Route::get("home", "UserController@home");

Route::get("contacto", "UserController@contacto");

Route::get("/post/{id}/editar", "PostController@editarPost");

// POR POST
Route::post("profilepicture", "UserController@newProfilePicture");

Route::post("newpost", "PostController@newPost");

Route::post("/post/{id}/eliminar", "PostController@eliminarPost");

Route::post("guardarcambios", "PostController@guardarCambios");

Route::get("perfil/{id}/agregaramigo", "UserController@agregarAmigo");
