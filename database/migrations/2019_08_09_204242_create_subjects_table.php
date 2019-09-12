<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubjectsTable extends Migration {

	public function up()
	{
		Schema::create('subjects', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('package_id')->unsigned();
			$table->string('name', 255);
			$table->text('description');
			$table->boolean('status');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('subjects');
	}
}