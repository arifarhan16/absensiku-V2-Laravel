<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//BAGIAN CLIENT
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'SC@index');



//BAGIAN ADMIN
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/{id}/editsiswa', 'HomeController@editsiswa');
Route::post('/admin/{id}/updatesiswa', 'HomeController@updatesiswa');
Route::get('/admin/{id}/hapussiswa', 'HomeController@hapussiswa');


//jumsis
Route::get('/admin/jumsis', 'HomeController@jumsis');
Route::post('/admin/jumsis/addjumsis', 'HomeController@addjumsis');

//Absen
Route::get('/admin/abs', 'HomeController@abs');
Route::post('/admin/abs/addabs', 'HomeController@addabs');

//Foto
Route::get('/admin/foto', 'HomeController@foto');
Route::post('/foto/addfoto', 'HomeController@addfoto');

//Materi
Route::get('/admin/materi', 'HomeController@materi');
Route::post('/admin/materi/addmat', 'HomeController@addmat');

//Doc
Route::get('/admin/doc', 'HomeController@doc');
Route::post('/admin/doc/adddoc', 'HomeController@adddoc');

// LOOKDOC
Route::get('/admin/lookdoc', 'HomeController@lookdoc');
Route::get('/admin/lookdoc/{id}', 'HomeController@download');
Route::get('/admin/lookdoc/{id}/hapus' ,'HomeController@hapusdoc');


//Look Images
Route::get('/admin/lookimg', 'HomeController@lookimg');
Route::get('/admin/lookimg/{id}','HomeController@downimg');
Route::get('/admin/lookimg/{id}/hapus', 'HomeController@hapusimg');