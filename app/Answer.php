<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
  public $table = "answers";
  public $guarded = [];

  public function comment() {
    return $this->belongsTo("App\Comment", "id_comment");
  }
  public function user() {
    return $this->belongsTo("App\User", "id_user");
  }
}
