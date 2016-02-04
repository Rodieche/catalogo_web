<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->tinyInteger('dvds');
            $table->tinyInteger('seasons');
            $table->integer('episodes');
            $table->integer('duration');
            $table->string('sentense');
            $table->integer('year');
            $table->string('micro');
            $table->integer('ram');
            $table->integer('gpu');
            $table->integer('hdd');
            $table->integer('user_id')->unsigned();
            $table->integer('categories_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::drop('items');
    }
}
