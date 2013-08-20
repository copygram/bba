<?php

class GendersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('genders')->truncate();

		$genders = array(
				array(
				'type'=>'Male'
				),
				array(
					'type'=>'Female'
				)
		);

		// Uncomment the below to run the seeder
		 DB::table('genders')->insert($genders);
	}

}
