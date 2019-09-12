<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackageTable extends Migration {

	public function up()
	{
		Schema::create('package', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('category', 255);
			$table->string('image');
			$table->text('description');
			$table->decimal('price');
			$table->boolean('status');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('package');
	}
}