<?php

class Kela extends \Eloquent {

	protected $table = 'kelas';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'nama_kls'=>'required|min:2|unique:kelas,nama_kls',
		'idguru'=>'required'
	];

	//validasi untuk update, karena ada unique pada $rules,
	//karena blm nemu cara yg jitu, maka saya buat validasi baru.
	public static $update = [
		// 'title' => 'required'
		'nama_kls'=>'required|min:2',
		'idguru'=>'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['nama_kls', 'wali_kls'];

	

	public function siswa()
	{
		return $this->belongsTo('Siswa');
	}

	public function guru()
	{
		return $this->belongsTo('Guru', 'wali_kls', 'id');
	}
}