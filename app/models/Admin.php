<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Admin extends \Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
		'nama'=>'required|min:3',
		'jk'=>'required',
		'username'=>'required|min:4|unique:admins,username',
		'password'=>'required',
		'email'=>'required|email',

	];

	//validasi untuk update, karena ada unique pada $rules,
	//karena blm nemu cara yg jitu, maka saya buat validasi baru.
	public static $update = [
		// 'title' => 'required'
		'nama'=>'required|min:3',
		'jk'=>'required',
		'username'=>'required|min:4',
		'password'=>'required',
		'email'=>'required|email',

	];

	// Don't forget to fill this array
	protected $fillable = ['nama', 'jk', 'username', 'password', 'email', 'remember_token'];

}