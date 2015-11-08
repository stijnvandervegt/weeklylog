<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiSchemePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_scheme', function (Blueprint $table) {
            $table->integer('api_id')->unsigned()->index();
            $table->foreign('api_id')->references('id')->on('api')->onDelete('cascade');
            $table->integer('scheme_id')->unsigned()->index();
            $table->foreign('scheme_id')->references('id')->on('scheme')->onDelete('cascade');
            $table->primary(['api_id', 'scheme_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('api_scheme');
    }
}
