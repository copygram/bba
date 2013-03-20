<?php  
class DonorsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
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
				'lastDonated'=>'03/12/2013',
				'lat'=>'56.90273329999999',
				'lng'=>'12.488801299999977',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime,
                'email_verified' => 0,
                'email_hash' => Hash::make('kennedy.otis@gmail.com')
			), array(
				'fname'=>'Oskar',
				'lname'=>'Adin',
				'email'=>'oskar@copygr.am',
				'gender_id'=>1,
				'bloodtype_id'=>1,
				'countrycode'=>'+46',
				'mobile'=>'0723267567',
				'address'=>'Falkenberg,Sweden',
				'lastDonated'=>'03/12/2013',
				'lat'=>'56.90273329999999',
				'lng'=>'12.488801299999977',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime,
                'email_verified' => 0,
                'email_hash' => Hash::make('oskar@copygr.am')
			), array(
				'fname'=>'Linus',
				'lname'=>'Designer',
				'email'=>'linus@copygr.am',
				'gender_id'=>1,
				'bloodtype_id'=>2,
				'countrycode'=>'+46',
				'mobile'=>'0763166147',
				'address'=>'Falkenberg,Sweden',
				'lastDonated'=>'03/12/2013',
				'lat'=>'56.90273329999999',
				'lng'=>'12.488801299999977',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
                'email_verified' => 0,
                'email_hash' => Hash::make('linus@copygr.am'),
			), array(
				'fname'=>'Jane',
				'lname'=>'Doe',
				'email'=>'jane@doe.am',
				'gender_id'=>2,
				'bloodtype_id'=>3,
				'countrycode'=>'+46',
				'mobile'=>'07255045856652',
				'address'=>'Falkenberg,Sweden',
				'lastDonated'=>'03/12/2013',
				'lat'=>'57.70887',
				'lng'=>'11.974559999999997',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime,
                'email_verified' => 1,
                'email_hash' => Hash::make('jane@doe.am'),
			), array(
				'fname'=>'Mary',
				'lname'=>'Doe',
				'email'=>'mary@doe.am',
				'gender_id'=>2,
				'bloodtype_id'=>4,
				'countrycode'=>'+46',
				'mobile'=>'07255045856652',
				'address'=>'Falkenberg,Sweden',
				'lastDonated'=>'03/12/2013',
				'lat'=>'56.90273329999999',
				'lng'=>'12.488801299999977',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime,
                'email_verified' => 1,
                'email_hash' => Hash::make('mary@doe.am'),
			)
		);

		DB::table('donors')->insert($donors);
	}
}