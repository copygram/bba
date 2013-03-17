<?php

use Illuminate\Database\Migrations\Migration;

class CreateGendersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('genders', function($table)
		{
			$table->increments('id');
			$table->text('name',11);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('genders');
	}

}