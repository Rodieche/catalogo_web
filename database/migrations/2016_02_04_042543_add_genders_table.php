<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('item_geneder', function(Blueprint $table){
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->integer('gender_id')->unsigned();

            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('gender_id')->references('id')->on('genders');

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
        Schema::drop('genders');
    }
}
