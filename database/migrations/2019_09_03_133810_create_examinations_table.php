<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExaminationsTable extends Migration {

	public function up()
	{
		Schema::create('examinations', function(Blueprint $table) {
			$table->increments('id');
			$table->string('subject', 255);
			$table->string('class', 255);
			$table->string('year', 255);
			$table->string('file', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('examinations');
	}
}