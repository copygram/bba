<?php  
class HospitalsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$hospital = array(

			array(
				'name'=>'Falkenberg Medical Clinic',
				'licenceNo'=>'708923G',
				'email'=>'Falkenberg@info.se',
				'countrycode'=>'+46',
				'mobile'=>'0725504592',
				'address'=>'Falkenberg,Sweden',
				'lat'=>'56.90273329999999',
				'lng'=>'12.488801299999977',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime

			)
			
			
		);

		DB::table('hospitals')->insert($hospital);
	}

}