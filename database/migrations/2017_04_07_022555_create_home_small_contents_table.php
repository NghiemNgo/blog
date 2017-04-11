<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeSmallContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_small_contents', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('home_content_id')->unsigned();
            $table->integer('small_content_id')->unsigned();
            $table->foreign('home_content_id')->references('id')->on('home_contents')->onDelete('cascade');
            $table->foreign('small_content_id')->references('id')->on('small_contents')->onDelete('cascade');
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
        Schema::drop('home_small_contents');
    }
}
