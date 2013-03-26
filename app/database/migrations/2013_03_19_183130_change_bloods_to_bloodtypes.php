<?php

use Illuminate\Database\Migrations\Migration;

class ChangeBloodsToBloodtypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bloods', function($table)
		{
			DB::statement('RENAME table bloods to bloodtypes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bloods', function($table)
		{
            DB::statement('RENAME table bloodtypes to bloods');
		});
	}

}