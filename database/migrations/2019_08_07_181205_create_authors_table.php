<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAuthorsTable extends Migration {

	public function up()
	{
		Schema::create('authors', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->smallInteger('userID')->unsigned();
			$table->string('packageName', 255);
			$table->string('className', 255);
			$table->string('publisher', 255);
			$table->string('company', 255);
			$table->text('description');
		});
	}

	public function down()
	{
		Schema::drop('authors');
	}
}