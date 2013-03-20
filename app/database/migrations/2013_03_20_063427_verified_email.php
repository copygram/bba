<?php

use Illuminate\Database\Migrations\Migration;

class VerifiedEmail extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('donors', function($table)
		{
            $table->boolean('email_verified');
            $table->string('email_hash');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('donors', function($table)
		{
			$table->dropColumn('email_verified');
			$table->dropColumn('email_hash');
		});
	}

}