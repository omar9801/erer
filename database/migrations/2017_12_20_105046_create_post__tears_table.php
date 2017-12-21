<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post__tears', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('posts_idd')->unsigned();
            $table->foreign('posts_idd')->references('posts_id')->on('posts');
            $table->integer('tears_idd')->unsigned();
            $table->foreign('tears_idd')->references('tears_id')->on('tears');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post__tears');
    }
}
