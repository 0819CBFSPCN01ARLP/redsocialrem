<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_user");
            $table->unsignedBigInteger("id_friend");
            $table->foreign("id_user")->references("id")->on("users");
            $table->foreign("id_friend")->references("id")->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("friends", function (Blueprint $table) {
          $table->dropForeign(friends_id_user_foreign);
          $table->dropForeign(friends_id_friend_foreign);
        });
        Schema::dropIfExists('friends');
    }
}
