<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Image;
use App\Post;

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

    public function newPost(Request $req) {
      $rules = [
        "image" => "file",
        "text" => "string|max:255|required"
      ];
      $messages = [
        "file" => "La foto debe ser un archivo",
        "string" => "El campo :attribute debe ser un texto",
        "max" => "El campo :attribute tiene un maximo de :max caracteres",
        "required" => "El campo :attribute es obligatorio"
      ];
      $this->validate($req, $rules, $messages);

      $user = Auth::user();
      $image = new Image();
      $path = $req->file("image")->store("public");
      $name = basename($path);
      $image->position = "post";
      $image->path = $name;
      $image->id_user = $user->id;
      $image->save();

      $post = new Post();
      $post->text = $req["text"];
      $post->id_user = $user->id;
      $post->id_image = $image->id;
      $post->save();
      return redirect("perfil");
    }

    public function editarPost(Request $req) {
      // Redirecciona para editar el post
      if (isset($req["editar"])) {
        $id = $req["post"];
        $collection = Post::where("id", "=", $id)->get();
        $post = $collection->first();
        $collection = Image::where("id", "=", $post->id_image)->get();
        $image = $collection->first();
        $vac = compact("post", "image");
        return view("editarpost", $vac);
      }
    }

    public function guardarCambios(Request $req) {
      $id = $req["postid"];
      $collection = Post::where("id", "=", $id)->get();
      $post = $collection->first();
      $collection = Image::where("id", "=", $post->id_image)->get();
      $image = $collection->first();

      $rules = [
        "image" => "file",
        "text" => "string|max:255"
      ];
      $messages = [
        "file" => "La foto debe ser un archivo",
        "string" => "El campo :attribute debe ser un texto",
        "max" => "El campo :attribute tiene un maximo de :max caracteres",
      ];
      $this->validate($req, $rules, $messages);

      if (isset($req["image"])) {
        $path = $req->file("image")->store("public");
        $name = basename($path);
        $image->path = $name;
        $image->save();
      }
      if (isset($req["text"])) {
        $post->text = $req["text"];
        $post->save();
      }
      return redirect("perfil");
    }

    public function eliminarPost() {
      $id = $req["eliminar"];
    }

    public function newProfilePicture(Request $req) {
      $rules = [
        "profilePicture" => "file"
      ];
      $messages = [
        "file" => "La foto debe ser un archivo"
      ];
      $this->validate($req, $rules, $messages);

      $photo = new Image();
      $path = $req->file("profilePicture")->store("public");
      $name = basename($path);

      $photo->position = "fotoPerfil";
      $photo->path = $name;
      $user = Auth::user();
      $photo->id_user = $user->id;
      $photo->save();
      //dd($path, $name, $user->id);
      return redirect("perfil");
    }
}
