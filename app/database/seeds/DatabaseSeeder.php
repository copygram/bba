<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 $this->call('DonorsTableSeeder');
		 $this->call('HospitalsTableSeeder');
		 $this->call('UsersTableSeeder');
		 $this->call('RolesTableSeeder');
		 $this->call('GendersTableSeeder');
	}

}