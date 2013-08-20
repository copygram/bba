<?php

class DonorsTableSeeder extends Seeder {

	private $salt;

	public function __construct()
	{
		$this->salt = Config::get('app.key');
	}

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('donors')->truncate();

		$donors = array(
			array(
				'fname'=>'Kennedy',
				'lname'=>'Otis',
				'email'=>'kennedy.otis@gmail.com',
				'gender_id'=>1,
				'bloodtype_id'=>1,
				'countrycode'=>'+46',
				'mobile'=>'0725504592',
				'address'=>'Falkenberg,Sweden',
				'lastDonated'=>'2013-01-15',
				'lat'=>'56.90273329999999',
				'lng'=>'12.488801299999977',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime,
                'email_verified' => 0,
                'email_hash' => md5('kennedy.otis@gmail.com' . $this->salt),
			), array(
				'fname'=>'Oskar',
				'lname'=>'Adin',
				'email'=>'oskar@copygr.am',
				'gender_id'=>1,
				'bloodtype_id'=>1,
				'countrycode'=>'+46',
				'mobile'=>'0723267567',
				'address'=>'Falkenberg,Sweden',
				'lastDonated'=>'2012-03-25',
				'lat'=>'56.90273329999999',
				'lng'=>'12.488801299999977',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime,
                'email_verified' => 0,
                'email_hash' => md5('oskar@copygr.am' . $this->salt),
			), array(
				'fname'=>'Linus',
				'lname'=>'Designer',
				'email'=>'linus@copygr.am',
				'gender_id'=>1,
				'bloodtype_id'=>2,
				'countrycode'=>'+46',
				'mobile'=>'0763166147',
				'address'=>'Falkenberg,Sweden',
				'lastDonated'=>'2013-01-05',
				'lat'=>'56.90273329999999',
				'lng'=>'12.488801299999977',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
                'email_verified' => 0,
                'email_hash' => md5('linus@copygr.am' . $this->salt),
			)

		);

		// Uncomment the below to run the seeder
		 DB::table('donors')->insert($donors);
	}

}
