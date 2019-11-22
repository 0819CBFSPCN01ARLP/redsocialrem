<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("text");
            $table->unsignedBigInteger("id_image")->nullable();
            $table->unsignedBigInteger("id_post");
            $table->unsignedBigInteger("id_user");
            $table->foreign("id_image")->references("id")->on("images");
            $table->foreign("id_post")->references("id")->on("posts");
            $table->foreign("id_user")->references("id")->on("users");
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
        Schema::table("comments", function (Blueprint $table) {
          $table->dropForeign(comments_id_image_foreign);
          $table->dropForeign(comments_id_post_foreign);
          $table->dropForeign(comments_id_user_foreign);
        });
        Schema::dropIfExists('comments');
    }
}
