<?php

class HospitalTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('hospital')->truncate();

		$hospital = array(

			array(
				'name' => 'Nairobi Hospital',
				'countrycode' => '+254',
				'mobile' => '07334567',
				'telephone' => '67820263',
				'email' => 'nairobi@hospital.co.ke',
				'address'=>'67923 Huligam',
				'lat' => '56.90273329999999',
				'lng' => '12.488801299999977'
			)
		);

		// Uncomment the below to run the seeder
		 DB::table('hospitals')->insert($hospital);
	}

}
