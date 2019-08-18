<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestimoniesTable extends Migration {

	public function up()
	{
		Schema::create('testimonies', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('occupation', 255);
			$table->string('image', 255);
			$table->text('message');
			$table->string('status', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('testimonies');
	}
}