<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTable extends Migration {

	public function up()
	{
		Schema::create('news', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('image', 255);
			$table->text('content');
			$table->string('slug', 255);
			$table->string('category', 255);
			$table->string('status', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('news');
	}
}