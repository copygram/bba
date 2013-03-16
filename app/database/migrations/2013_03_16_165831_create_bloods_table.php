<?php

use Illuminate\Database\Migrations\Migration;

class CreateBloodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bloods', function($table)
		{
			$table->increments('id');
			$table->string('bloodtype');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bloods');
	}

}