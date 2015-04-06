<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class AdminsTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

			Admin::create([
				'nama'=>'Roisul',
				'jk'=>'P',
				'username'=>'saya',
				'password'=>Hash::make('roisul'),
				'email'=>'roisul@gmail.com'
			]);
		
	}

}