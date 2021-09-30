<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner');
            $table->string('email');
            $table->string('phone');
            $table->date('date');
            $table->integer('id_state')->unsigned();
            $table->integer('id_pet')->unsigned();
            $table->integer('id_service')->unsigned();
            $table->timestamps();
            $table->foreign('id_state')->references('id')->on('states');
            $table->foreign('id_pet')->references('id')->on('pets');
            $table->foreign('id_service')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}
