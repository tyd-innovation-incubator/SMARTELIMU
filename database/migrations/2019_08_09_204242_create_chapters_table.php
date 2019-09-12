<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChaptersTable extends Migration {

	public function up()
	{
		Schema::create('chapters', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('subject_id')->unsigned();
            $table->text('name');
			$table->text('description');
			$table->boolean('status');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('chapters');
	}
}