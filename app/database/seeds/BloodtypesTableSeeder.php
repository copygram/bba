<?php

class BloodtypesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('bloodtypes')->truncate();

		$bloodtypes = array(
			array('bloodtype'   => 'A+'
            ),array('bloodtype' => 'A-'
            ),array('bloodtype' => 'B+'
            ),array('bloodtype' => 'B-'
            ),array('bloodtype' => 'AB+'
            ),array('bloodtype' => 'AB-'
            ),array('bloodtype' => 'O+'
            ),array('bloodtype' => 'O-'),
            array('bloodtype' => 'Unknown')
		);

		// Uncomment the below to run the seeder
		DB::table('bloodtypes')->insert($bloodtypes);
	}

}
