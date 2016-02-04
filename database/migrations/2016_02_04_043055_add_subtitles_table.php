<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubtitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtitles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('item_subtitle', function(Blueprint $table){
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->integer('subtitle_id')->unsigned();

            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('subtitle_id')->references('id')->on('subtitles');

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
        Schema::drop('subtitles');
    }
}
