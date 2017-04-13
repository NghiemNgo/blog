<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmallContentImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('small_content_images', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('home_small_content_id')->unsigned();
            $table->integer('image_id')->unsigned();
            $table->foreign('home_small_content_id')->references('id')->on('home_small_contents')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
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
        Schema::drop('small_content_images');
    }
}
