<?php

class UsersTableSeeder extends Seeder {

	private $salt;

	public function __construct()
	{
		$this->salt = Config::get('app.key');
	}
	
	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('users')->truncate();

		$users = array(
				'hospital_id'=>1,
				'fname'=>'Kennedy',
				'lname'=>'Otis',
				'email'=>'kennedy.otis@gmail.com',
				'gender_id'=>1,
				'password'=>Hash::make('123456'),
				'countrycode'=>'+46',
				'mobile'=>'0725504592',
				'role_id'=>1,
				'status'=>1,
				 'email_hash' => md5('kennedy.otis@gmail.com' . $this->salt),
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}
