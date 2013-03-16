<?php

use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hospitals', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('licenceNo');
			$table->string('mobile');
			$table->string('email');
			$table->string('address');
			$table->string('lat');
			$table->string('lng');
			$table->timestamps();


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hospitals');
	}

}