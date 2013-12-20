<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('hospital_id');
			$table->string('fname');
			$table->string('lname');
			$table->string('email');
			$table->string('mobile');
			$table->integer('gender_id');
			$table->integer('role_id');
			$table->string('password');
			$table->boolean('status')->default(0);
			$table->text('email_hash');
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
		Schema::drop('users');
	}

}
