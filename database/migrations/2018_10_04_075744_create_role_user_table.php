<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleUserTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('role_user', function(Blueprint $table)
		{
			$table->smallInteger('id', true);
			$table->integer('user_id');
			$table->smallInteger('role_id');
			$table->timestamps();
			$table->unique(['user_id','role_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role_user');
	}

}
