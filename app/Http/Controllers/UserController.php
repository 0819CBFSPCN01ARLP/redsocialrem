<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Image;
use App\Post;
use App\User;

class UserController extends Controller
{
  // cambiar foto de perfil
  public function newProfilePicture(Request $req) {
    $rules = [
      "profilePicture" => "file"
    ];
    $messages = [
      "file" => "La foto debe ser un archivo"
    ];
    $this->validate($req, $rules, $messages);

    $user = Auth::user();
    $collection = Image::where("position", "=", "fotoPerfil")
    ->where("id_user", "=", $user->id)
    ->get();
    $photo = $collection->first();
    $path = $req->file("profilePicture")->store("public");
    $name = basename($path);
    $photo->path = $name;
    $photo->save();
    return redirect("miperfil");
  }

  public function agregarAmigo(Request $req) {
    $user = Auth::user();
    $user->friends()->attach($req['id_friend']);
    return redirect("/miperfil");
  }

  // VISTAS

  // funcion que va al perfil
  public function profile(Request $request) {
    if (Auth::check()) {
      $user = $request->user();
    }
    else {
      return redirect("login");
    }
    $posts = $user->posts;
    $images = $user->images;
    $vac = compact("images", "posts", "user");
    return view('perfil', $vac);
  }

  // funcion que va a usuarios
  public function usuarios() {
    $users = User::all();
    $vac = compact("users");
    return view("usuarios", $vac);
  }

  // funcion que va a perfil amigo
  public function users($id) {
    // anda cuando quiere
    $user = Auth::user();
    if ($user->id == $id) {
      return redirect('/miperfil');
    }
    $collection = User::where("id", "=", $id)->get();
    $friend = $collection->first();
    $posts = $friend->posts;
    $images = $friend->images;
    $vac = compact("images", "posts", "user", "friend");
    return view('perfilamigo', $vac);
  }

  public function faq() {
    return view('preguntas-frecuentes');
  }

  // funcion que va a amigos
  public function amigos() {
    $user = Auth::user();
    $users = $user->friends;
    $vac = compact("users");
    return view('amigos', $vac);
  }
  public function home() {
    $user = Auth::user();
    $friends = $user->friends;
    $posts = [];
    $images = [];
    foreach ($friends as $friend) {
      $posts[] = $friend->posts->first();
      $images[] = $friend->images->first();
    }
    $vac = compact("user", "friends", "posts", "images");
    return view('home', $vac);
  }
  public function contacto() {
    return view('contacto');
  }
}
