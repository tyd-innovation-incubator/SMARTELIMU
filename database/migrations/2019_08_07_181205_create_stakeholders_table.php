<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStakeholdersTable extends Migration {

	public function up()
	{
		Schema::create('stakeholders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 255);
			$table->string('company', 255);
			$table->string('email', 255);
			$table->text('description');
		});
	}

	public function down()
	{
		Schema::drop('stakeholders');
	}
}