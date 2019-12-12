<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
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
    public function fotoPerfil() {
      $images = $this->images;
      foreach ($images as $image) {
        if ($image->position == "fotoPerfil") {
          return $image->path;
        }
      }
    }
    public function isFriend($id) {
      return $this->friends->find($id);
    }
    public function friendsPosts() {
      $post = new Post();
      $posts = DB::table('posts')
            ->join('friends', 'posts.id_user', '=', 'friends.id_friend')
            ->where("friends.id_user", "=", $this->id)
            ->select('posts.*');
      $builder = new Builder($posts);
      $builder->setModel($post);
      return $builder->get();
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
