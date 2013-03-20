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
			DB::statement('ALTER TABLE donors CHANGE bloodtype bloodtype_id int(11)');
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
            DB::statement('ALTER TABLE donors CHANGE bloodtype_id bloodtype int(11)');
		});
	}

}