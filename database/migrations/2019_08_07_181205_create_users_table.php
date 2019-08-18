<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('fname', 255);
			$table->string('lname', 255);
			$table->string('userName', 255);
			$table->string('phone', 255);
			$table->string('address', 255);
			$table->string('gender', 255);
			$table->string('roles', 255);
			$table->string('email', 255);
			$table->string('password', 255);
			$table->string('category', 255);
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}