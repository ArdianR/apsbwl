<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class KelasTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Kela::create([
				'nama_kls' => 'Kelas IA',
				'wali_kls' => '1'
			]);
		}
	}

}