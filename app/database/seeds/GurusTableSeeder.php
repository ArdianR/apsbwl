<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class GurusTableSeeder extends Seeder {

	public function run()
	{
		// $fakerker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Guru::create([
				'niy'=>123456789,
				'nuptk'=>123456778,
				'ttl'=>'Demak',
				'jk'=>'L',
				'pendidikan'=>'S1',
				'nama_guru'=>'Roisul Musthofa'
			]);
		}
	}

}