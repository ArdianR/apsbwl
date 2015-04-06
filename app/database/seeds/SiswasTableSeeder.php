<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class SiswasTableSeeder extends Seeder {

	public function run()
	{
		// $fakerker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Siswa::create([
				'nis'=>1234,
				'nama_siswa'=>'Saya Sendiri',
				'kelas'=>'1',
				'jk'=>'L',
				'ttl'=>'Demak Sembarang',
				'ayah'=>'Mashudi 1234',
				'ibu'=>'Mushodah 1234',
				'alamat'=>'Jl. Sembarang',
				'wali_kls'=>1,
				'status'=>1
			]);
		}
	}

}