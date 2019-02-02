<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarenginesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carengines', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('car_id');
            $table->foreign('car_id')->references('id')->on('cars');
            $table->unsignedInteger('engine_id');
            $table->foreign('engine_id')->references('id')->on('engines');
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
        Schema::drop('carengines');
    }
}
