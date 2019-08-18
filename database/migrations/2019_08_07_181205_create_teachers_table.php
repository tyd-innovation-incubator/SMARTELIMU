<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration {

	public function up()
	{
		Schema::create('teachers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('schoolName', 255);
			$table->string('nationality', 255);
			$table->string('phone', 255);
			$table->string('photo', 255);
			$table->string('address', 255);
			$table->string('gender', 255);
			$table->string('email', 255);
			$table->text('description');
		});
	}

	public function down()
	{
		Schema::drop('teachers');
	}
}