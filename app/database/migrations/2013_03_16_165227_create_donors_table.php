<?php

use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donors', function($table)
		{
			$table->increments('id');
			$table->string('fname');
			$table->string('lname');
			$table->integer('gender');
			$table->string('bloodtype');
			$table->string('mobile');
			$table->string('email');
			$table->string('address');
			$table->string('lastDonated');
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
		Schema::drop('donors');
	}

}