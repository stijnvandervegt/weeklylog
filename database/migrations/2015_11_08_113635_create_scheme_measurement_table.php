<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchemeMeasurementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheme_measurement', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('measurement_id')->unsigned();
            $table->foreign('measurement_id')->references('id')->on('measurement');
            $table->string('value');
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
        Schema::drop('scheme_measurement');
    }
}
