<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSelfCandidatesTable extends Migration {

	public function up()
	{
		Schema::create('self_candidates', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('userID');
			$table->string('schoolName', 255);
			$table->string('className', 255);
			$table->string('yearOfStudy', 255);
			$table->string('nationality', 255);
		});
	}

	public function down()
	{
		Schema::drop('self_candidates');
	}
}