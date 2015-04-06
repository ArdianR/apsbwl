<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//protect from crfs
Route::when('*', 'csrf', array('post', 'put', 'delete'));

Route::get('/', function(){
	return View::make('layout.home');
});

//dashboard
Route::get('dashboard', ['as'=>'dashboard', 'uses'=>'HomeController@dash']);

//route group, protect to login first.
Route::group(['before'=>'auth'], function(){

	Route::resource('siswa', 'SiswasController');

	Route::resource('guru', 'GurusController');

	Route::resource('kelas', 'KelasController');

	Route::resource('admin', 'AdminsController');

	//pilih siswa
	Route::get('pilih/kelas', ['as'=>'pilih.siswa', 'uses'=>'SiswasController@pilihSiswa']);

	//alumni
	Route::get('alumni', ['as'=>'alumni', 'uses'=>'AlumniController@index']);

	//cetak
	Route::get('cetak', ['as'=>'cetak', 'uses'=>'MultiController@cetakPdf']);

	//chart
	Route::get('chart', ['as'=>'chart', 'uses'=>'MultiController@chart']);

	//autocomplete wali kelas
	Route::get('getwali', ['as'=>'getwali', 'uses'=>'MultiController@getWali']);

	//autocomplete kelas
	Route::get('getkelas', ['as'=>'getkelas', 'uses'=>'MultiController@getKelas']);

	//API for datatable
	Route::get('api/siswa', ['as'=>'api.siswa', 'uses'=>'SiswasController@getDatatable']);
	Route::get('api/guru', ['as'=>'api.guru', 'uses'=>'GurusController@getDatatable']);
	Route::get('api/kelas', ['as'=>'api.kelas', 'uses'=>'KelasController@getDatatable']);
	Route::get('api/admin', ['as'=>'api.admin', 'uses'=>'AdminsController@getDatatable']);
	Route::get('api/alumni', ['as'=>'api.alumni', 'uses'=>'AlumniController@getDatatable']);

});

//login page
Route::get('login', ['as'=>'login', 'uses'=>'MultiController@login']);

//doLogin
Route::post('login', 'MultiController@doLogin');

//logout page
Route::get('logout', ['as'=>'logout', 'uses'=>'MultiController@doLogout']);

//abaut page
Route::get('about', ['as'=>'about', 'uses'=>'MultiController@about']);

//iseng2
Route::get('coba', function()
{
	return View::make('info');
});