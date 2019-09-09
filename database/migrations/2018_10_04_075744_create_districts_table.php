<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Database\TableComment;

class CreateDistrictsTable extends Migration {
    use TableComment;
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('districts', function(Blueprint $table)
		{
			$table->smallInteger('id', true);
			$table->smallInteger('region_id');
			$table->string('name', 150);
			$table->timestamps();
		});
        $this->comment("districts", "list all districts in tanzania");
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('districts');
	}

}
