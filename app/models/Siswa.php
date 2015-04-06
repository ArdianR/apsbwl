<?php

class Siswa extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'nis'=>'required|min:4|unique:siswas,nis',
		'nama_siswa'=>'required|min:4',
		'kelas'=>'required|min:1',
		'jk'=>'required',
		'ttl'=>'required',
		'ayah'=>'required|min:3',
		'ibu'=>'required|min:3',
		'alamat'=>'required',
		'idguru'=>'required'
	];

	//validasi untuk update, karena ada unique pada $rules,
	//karena blm nemu cara yg jitu, maka saya buat validasi baru.
	public static $update = [
		// 'title' => 'required'
		'nis'=>'required|min:4',
		'nama_siswa'=>'required|min:4',
		'kelas'=>'required|min:1',
		'jk'=>'required',
		'ttl'=>'required',
		'ayah'=>'required|min:3',
		'ibu'=>'required|min:3',
		'alamat'=>'required',
		'idguru'=>'required'
	];

	public static function updateRules($id)
	{
		return self::$rules['nis'] = 'required|min:4|unique:siswas,nis,' . $id;
	}

	// Don't forget to fill this array
	protected $fillable = ['nis','nama_siswa', 'kelas', 'jk', 'ttl', 'ayah', 'ibu', 'alamat', 'wali_kls', 'status'];

	public function guru()
	{
		return $this->hasOne('Guru', 'id', 'wali_kls');
	}

	public function kela()
	{
		return $this->hasOne('Kela', 'id', 'kelas');
	}
}