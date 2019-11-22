<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  public $table = "images";
  public $guarded = [];

  public function user() {
    return $this->belongsTo("App\User", "id_user");
  }
}
