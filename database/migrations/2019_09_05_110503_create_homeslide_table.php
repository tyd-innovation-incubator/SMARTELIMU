<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHomeslideTable extends Migration {

	public function up()
	{
		Schema::create('homeslide', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('image', 255);
			$table->text('content');
			$table->string('status', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('homeslide');
	}
}