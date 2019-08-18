<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleChargesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('role_charges', function(Blueprint $table)
		{
			$table->smallInteger('id', true);
			$table->smallInteger('role_id');
			$table->decimal('amount', 14);
			$table->smallInteger('currency_id')->default(1);
			$table->timestamps();
			$table->smallInteger('payment_period_cv_id');
			$table->smallInteger('isfree')->default(0)->comment('show whether is free or not i.e. 1. Free 0. Not Free');
			$table->unique(['role_id','payment_period_cv_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role_charges');
	}

}
