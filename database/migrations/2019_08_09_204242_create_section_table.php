<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSectionTable extends Migration {

	public function up()
	{
		Schema::create('section', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('chapter_id')->unsigned();
			$table->string('section_name', 255);
			$table->text('text_file');
			$table->string('video_file', 255);
			$table->string('audio_file', 255);
			$table->string('photo', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('section');
	}
}