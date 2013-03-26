<?php

use Illuminate\Database\Migrations\Migration;

class DonorsGenderRelation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
	    DB::statement('ALTER TABLE donors CHANGE gender gender_id int(11)');
	    DB::statement('ALTER TABLE genders CHANGE name description varchar(10)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
        DB::statement('ALTER TABLE donors CHANGE gender_id gender int(11)');
        DB::statement('ALTER TABLE genders CHANGE description name text');
	}
}