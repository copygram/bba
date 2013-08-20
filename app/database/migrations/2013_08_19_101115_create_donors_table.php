<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donors', function(Blueprint $table) {
			$table->increments('id');
			$table->string('fname');
			$table->string('lname');
			$table->integer('gender_id');
			$table->integer('bloodtype_id');
			$table->text('countrycode');
			$table->text('mobile');
			$table->string('email');
			$table->text('address');
			$table->text('lastDonated');
			$table->text('lat');
			$table->text('lng');
			$table->text('email_hash');
			$table->boolean('email_verified')->default(0);
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
