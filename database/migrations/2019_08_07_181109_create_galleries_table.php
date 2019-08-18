<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGalleriesTable extends Migration {

	public function up()
	{
		Schema::create('galleries', function(Blueprint $table) {
			$table->increments('id');
			$table->string('image', 255);
			$table->string('caption', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('galleries');
	}
}