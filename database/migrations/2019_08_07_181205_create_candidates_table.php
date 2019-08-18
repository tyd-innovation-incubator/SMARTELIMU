<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatesTable extends Migration {

	public function up()
	{
		Schema::create('candidates', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('userID')->unsigned();
			$table->string('fname', 255);
			$table->string('lname', 255);
			$table->string('className');
			$table->string('yearOfStudy', 255);
			$table->date('DOB');
			$table->string('gender', 255);
			$table->string('nationality', 255);
		});
	}

	public function down()
	{
		Schema::drop('candidates');
	}
}