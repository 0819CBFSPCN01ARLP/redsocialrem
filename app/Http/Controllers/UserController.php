<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Image;
use App\Post;
use App\User;

class UserController extends Controller
{
  public function profile(Request $request) {
    if (Auth::check()) {
      $user = $request->user();
    }
    else {
      return redirect("login");
    }
    $posts = Post::where("id_user", "=", $user->id)->get();
    $images = Image::where("id_user", "=", $user->id)->get();
    $vac = compact("images", "posts", "user");
    return view('perfil', $vac);
  }

  public function friend($id) {
    $user = Auth::user();
    if ($user->id == $id) {
      return redirect('/miperfil');
    }
    $collection = User::where("id", "=", $id)->get();
    $user = $collection->first();
    $posts = Post::where("id_user", "=", $id)->get();
    $images = Image::where("id_user", "=", $id)->get();
    $vac = compact("images", "posts", "user");
    return view('perfil', $vac);
  }

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
}
