<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('email', 255);
			$table->text('location');
			$table->text('address');
			$table->string('mobile1', 255);
			$table->string('mobile2', 255);
			$table->string('facebook', 255);
			$table->string('twitter', 255);
			$table->string('youtube', 255);
			$table->string('instagram', 255);
			$table->string('linkedin', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('contacts');
	}
}