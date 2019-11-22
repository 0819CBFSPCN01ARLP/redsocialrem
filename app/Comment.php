<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public $table = "comments";
  public $guarded = [];

  public function image() {
    return $this->belongsTo("App\Image", "id_image");
  }
  public function post() {
    return $this->belongsTo("App\Post", "id_post");
  }
  public function user() {
    return $this->belongsTo("App\User", "id_user");
  }
}
