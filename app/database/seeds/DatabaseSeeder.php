<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('GurusTableSeeder');
		$this->call('KelasTableSeeder');
		$this->call('SiswasTableSeeder');
		$this->call('AdminsTableSeeder');
	}

}
