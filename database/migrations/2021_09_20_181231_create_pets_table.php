<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('old');
            $table->string('race');
            $table->string('weight');
            $table->string('behaviour');
            $table->string('photo');
            $table->integer('id_gender')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->timestamps();
            $table->foreign('id_gender')->references('id')->on('genders');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
