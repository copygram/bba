<?php

use Illuminate\Database\Migrations\Migration;

class DonorsBloodtypesRelation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		DB::statement('ALTER TABLE donors CHANGE bloodtype bloodtype_id int(11)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		DB::statement('ALTER TABLE donors CHANGE bloodtype_id bloodtype int(11)');
	}
}
