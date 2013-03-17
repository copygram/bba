<?php  
class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$users = array(

			array(
				'hospital_id'=>1,
				'fname'=>'Kennedy',
				'lname'=>'Otis',
				'email'=>'kennedy.otis@gmail.com',
				'gender'=>1,
				'password'=>Hash::make('123456'),
				'countrycode'=>'+46',
				'mobile'=>'0725504592',
				'role'=>1,
				'status'=>1,
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime

			),

				array(
				'hospital_id'=>1,
				'fname'=>'oskar',
				'lname'=>'adin',
				'email'=>'oskar@copygr.am',
				'gender'=>1,
				'password'=>Hash::make('123456'),
				'countrycode'=>'+46',
				'mobile'=>'0723267567',
				'role'=>1,
				'status'=>1,
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime

			),

			array(
				'hospital_id'=>1,
				'fname'=>'linus',
				'lname'=>'coder',
				'email'=>'linus@copygr.am',
				'gender'=>1,
				'password'=>Hash::make('123456'),
				'countrycode'=>'+46',
				'mobile'=>'0763166147',
				'role'=>1,
				'status'=>1,
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime

			)

			
			
		);

		DB::table('users')->insert($users);
	}

}