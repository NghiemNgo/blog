<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeContentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_content_types', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('home_content_id')->unsigned();
            $table->integer('home_category_id')->unsigned();
            $table->foreign('home_content_id')->references('id')->on('home_contents')->onDelete('cascade');
            $table->foreign('home_category_id')->references('id')->on('home_categories')->onDelete('cascade');
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
        Schema::drop('home_content_types');
    }
}
