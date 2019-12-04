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

  // funcion para ver un usuario particular
  public function users($id) {
    // anda cuando quiere
    $user = Auth::user();
    if ($user->id == $id) {
      return redirect('/miperfil');
    }
    $collection = User::where("id", "=", $id)->get();
    $user = $collection->first();
    $posts = $user->posts;
    $images = $user->images;
    $vac = compact("images", "posts", "user");
    return view('perfil', $vac);
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
    return view('home');
  }
  public function contacto() {
    return view('contacto');
  }
}
