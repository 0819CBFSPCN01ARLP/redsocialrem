<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("answer");
            $table->unsignedBigInteger("id_comment");
            $table->unsignedBigInteger("id_user");
            $table->foreign("id_comment")->references("id")->on("comments");
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
        Schema::table("answers", function (Blueprint $table) {
          $table->dropForeign(answers_id_comment_foreign);
          $table->dropForeign(answers_id_user_foreign);
        });
        Schema::dropIfExists('answers');
    }
}
