<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSyllabusTable extends Migration {

	public function up()
	{
		Schema::create('syllabus', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('file');
			$table->timestamps();

		});
	}

	public function down()
	{
		Schema::drop('syllabus');
	}
}