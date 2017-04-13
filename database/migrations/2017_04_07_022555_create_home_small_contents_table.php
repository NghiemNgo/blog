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
            $table->string('title', 100);
            $table->string('content', 500);
            $table->integer('home_content_id')->unsigned();
            $table->foreign('home_content_id')->references('id')->on('home_contents')->onDelete('cascade');
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
