<?php  
class GendersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$gender = array(

			array(
				'description'=>'Male'
			),
			array(
				'description'=>'Female'
			)
		);

		DB::table('genders')->insert($gender);
	}

}