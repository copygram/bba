<?php  
class RolesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$users = array(

			array(
				'name'=>'Administrator',
				
			),

			array(
				'name'=>'Doctor',
				
			),

			array(
				'name'=>'Nurse',
				
			)

			
			
		);

		DB::table('roles')->insert($users);
	}

}