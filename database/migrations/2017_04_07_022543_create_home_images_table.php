<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_images', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('home_content_id')->unsigned();
            $table->integer('image_id')->unsigned();
            $table->foreign('home_content_id')->references('id')->on('home_contents')->onDelete('cascade');
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
        Schema::drop('home_images');
    }
}
