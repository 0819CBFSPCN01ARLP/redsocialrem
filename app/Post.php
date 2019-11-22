<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = "posts";
    public $guarded = [];

    public function image() {
      return $this->belongsTo("App\Image", "id_image");
    }
    public function user() {
      return $this->belongsTo("App\User", "id_user");
    }
}