<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatesTable extends Migration {

	public function up()
	{
		Schema::create('candidates', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->string('first_name', 255);
			$table->string('last_name', 255);
			$table->string('class_name');
			$table->string('year_of_study', 255);
			$table->date('date_of_birth');
			$table->string('gender', 255);
			$table->string('nationality', 255);
		});
	}

	public function down()
	{
		Schema::drop('candidates');
	}
}
