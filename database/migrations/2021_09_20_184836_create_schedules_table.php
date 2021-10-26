<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->date('departure_date');
            $table->string('pet_room');
            $table->integer('id_pet_service')->unsigned();
            $table->integer('id_quote')->unsigned();
            $table->timestamps();
            $table->foreign('id_pet_service')->references('id')->on('pet_services');
            $table->foreign('id_quote')->references('id')->on('quotes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}