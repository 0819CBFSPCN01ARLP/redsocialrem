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
Route::get('/', "UserController@home")->middleware('auth');

Route::get('/miperfil', "UserController@profile")->middleware('auth');

Route::get('/perfil/{id}', 'UserController@users')->middleware('auth');

Route::get("perfil/{id}/agregaramigo", "UserController@agregarAmigo")->middleware('auth');

Route::get("usuarios", "UserController@usuarios")->middleware('auth');

Route::get("preguntas-frecuentes", "UserController@faq");

Route::get("amigos", "UserController@amigos")->middleware('auth');

Route::get("home", "UserController@home")->middleware('auth');

Route::get("contacto", "UserController@contacto");

Route::get("/post/{id}/editar", "PostController@editarPost")->middleware('auth');

Route::get("/comment/{id}/eliminar", "CommentController@eliminarComentario")->middleware('auth');


// POR POST
Route::post("profilepicture", "UserController@newProfilePicture");

Route::post("perfil/{id}/eliminaramigo", "UserController@eliminarAmigo");

Route::post("newpost", "PostController@newPost");

Route::post("/post/{id}/eliminar", "PostController@eliminarPost");

Route::post("guardarcambios", "PostController@guardarCambios");

Route::post("/post/{id}/comentar", "CommentController@newComment");
