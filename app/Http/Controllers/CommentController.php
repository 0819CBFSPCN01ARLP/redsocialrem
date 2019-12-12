<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;

class CommentController extends Controller
{
    public function newComment(Request $req) {
      $rules = [
        "comment" => "string|max:255|required"
      ];
      $messages = [
        "string" => "El campo :attribute debe ser un texto",
        "max" => "El campo :attribute tiene un maximo de :max caracteres",
        "required" => "El campo :attribute es obligatorio"
      ];
      $this->validate($req, $rules, $messages);

      $user = Auth::user();
      $comment = new Comment();
      $comment->text = $req["comment"];
      $comment->id_post = $req["postId"];
      $comment->id_user = $user->id;
      $comment->save();
      if ($req["page"] == "home") {
        return redirect("home");
      }
      else if ($req["page"] == "miperfil") {
        return redirect("miperfil");
      }
      else {
        return redirect("perfil/" . $req["page"]);
      }

    }

    public function eliminarComentario(Request $req) {
      $id = $req["id"];
      $comment = Comment::where("id", "=", $id);
      $comment->delete();
      if ($req["page"] == "home") {
        return redirect("home");
      }
      else if ($req["page"] == "miperfil") {
        return redirect("miperfil");
      }
      else {
        return redirect("perfil/" . $req["page"]);
      }
    }

}
