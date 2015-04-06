<?php

class Guru extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'niy'=>'required|min:4|unique:gurus,niy',
		'nuptk'=>'required|min:4|unique:gurus,nuptk',
		'ttl'=>'required',
		'jk'=>'required',
		'pendidikan'=>'required|min:2',
		'nama_guru'=>'required|min:4',
	];

	//validasi untuk update, karena ada unique pada $rules,
	//karena blm nemu cara yg jitu, maka saya buat validasi baru.
	public static $update = [
		// 'title' => 'required'
		'niy'=>'required|min:4',
		'nuptk'=>'required|min:4',
		'ttl'=>'required',
		'jk'=>'required',
		'pendidikan'=>'required|min:2',
		'nama_guru'=>'required|min:4',
	];

	// Don't forget to fill this array
	protected $fillable = ['niy', 'nuptk', 'ttl', 'jk', 'pendidikan', 'nama_guru'];

}