<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('subjects', function(Blueprint $table) {
			$table->foreign('package_id')->references('id')->on('package')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('chapters', function(Blueprint $table) {
			$table->foreign('subject_id')->references('id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('section', function(Blueprint $table) {
			$table->foreign('chapter_id')->references('id')->on('chapters')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('subjects', function(Blueprint $table) {
			$table->dropForeign('subjects_package_id_foreign');
		});
		Schema::table('chapters', function(Blueprint $table) {
			$table->dropForeign('chapters_subject_id_foreign');
		});
		Schema::table('section', function(Blueprint $table) {
			$table->dropForeign('section_chapter_id_foreign');
		});
	}
}