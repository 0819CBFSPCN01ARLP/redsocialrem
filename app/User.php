<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;
use App\Image;

class User extends Authenticatable
{
    use Notifiable;

    public function friends() {
      return $this->belongsToMany("App\User", "friends", "id_user", "id_friend");
    }
    public function posts() {
      return $this->hasMany("App\Post", "id_user");
    }
    public function images() {
      return $this->hasMany("App\Image", "id_user");
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
