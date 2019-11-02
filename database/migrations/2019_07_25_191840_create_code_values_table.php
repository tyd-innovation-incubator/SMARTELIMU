<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('code_id')->unsigned();
            $table->foreign('code_id')->references('id')->on('codes')->onDelete('cascade');
            $table->string('values');
            $table->string('isactive');
            $table->string('reference');
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
        Schema::dropIfExists('code_values');
    }
}
