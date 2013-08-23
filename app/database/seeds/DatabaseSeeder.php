<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('DonorsTableSeeder');
		$this->call('BloodtypesTableSeeder');
		$this->call('GendersTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('RolesTableSeeder');
	}

}