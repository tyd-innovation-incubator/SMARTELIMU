<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackageTable extends Migration {

	public function up()
	{
		Schema::create('packages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('package_group_cv_id');
			$table->text('description');
			$table->string('class', 255);
			$table->integer('price');
			$table->boolean('status');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('package');
	}
}