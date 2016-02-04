<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLanguajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('item_languaje', function(Blueprint $table){
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->integer('languaje_id')->unsigned();

            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('languaje_id')->references('id')->on('languajes');

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
        Schema::drop('languajes');
    }
}
