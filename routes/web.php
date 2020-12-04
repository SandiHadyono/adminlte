<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Mahasiswa;
use App\Http\Controllers\Dosen;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',function(){
    return view('layouts/newlogin');
});
Route::get('/newlogin',[AuthController::class,'login']);//login
Route::get('/newregister',[AuthController::class,'register']);//register
Route::get('/logout',[AuthController::class,'logout']);//logout
Route::post('/postlogin',[AuthController::class,'postlogin']);//postlogin
Route::get('/reject',[AuthController::class,'reject'])->name('reject');//reject
Route::get('/rejectrole',[AuthController::class,'rejectrole'])->name('rejectrole');//rejectrole

Route::group(['middleware' => 'auth'], function(){

	//dashboard
	Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');

	//role mahasiswa
	Route::group(['middleware' => 'CheckRole:mahasiswa,admin'], function(){
		//Route Mahasiswa
		Route::get('/mahasiswa', [Mahasiswa::class, 'index']);
		//Route Mahasiswa Show
		Route::get('/mahasiswa/show/{id}', [Mahasiswa::class, 'show']);
		//Route Mahasiswa Search
		Route::post('/mahasiswa/search', [Mahasiswa::class, 'search']);
	});

	//role dosen
	Route::group(['middleware' => 'CheckRole:dosen,admin'], function(){
		//Route Dosen
		Route::get('/dosen', [Dosen::class, 'index']);
		//Route Dosen Show
		Route::get('/dosen/show/{id}', [Dosen::class, 'show']);
		//Route Dosen Search
		Route::post('/dosen/search', [Dosen::class, 'search']);
	});

	//role admin
	Route::group(['middleware' => 'CheckRole:admin'], function(){
		//form create data mahasiswa
		Route::get('/mahasiswa/create', [Mahasiswa::class, 'create']);
		//simpan Data Mahasiswa
		Route::post('/mahasiswa/store', [Mahasiswa::class, 'store']);
		//form edit data mahasiswa
		Route::get('/mahasiswa/edit/{id}', [Mahasiswa::class, 'edit']);
		//simpan edit Data Mahasiswa
		Route::post('/mahasiswa/update/{id}', [Mahasiswa::class, 'update']);
		//delete data mahasiswa
		Route::get('/mahasiswa/delete/{id}', [Mahasiswa::class, 'destroy']);
		//Route Mahasiswa Search
		Route::post('/mahasiswa/search', [Mahasiswa::class, 'search']);

		//form create data dosen
		Route::get('/dosen/create', [Dosen::class, 'create']);
		//simpan Data dosen
		Route::post('/dosen/store', [Dosen::class, 'store']);
		//form edit data dosen
		Route::get('/dosen/edit/{id}', [Dosen::class, 'edit']);
		//simpan edit Data dosen
		Route::post('/dosen/update/{id}', [Dosen::class, 'update']);
		//delete data dosen
		Route::get('/dosen/delete/{id}', [Dosen::class, 'destroy']);
		//Route Dosen Search
		Route::post('/dosen/search', [Dosen::class, 'search']);
	});
});