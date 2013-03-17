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
				'name'=>'Male'
			),
			array(
				'name'=>'Female'
			)
		);

		DB::table('genders')->insert($gender);
	}

}