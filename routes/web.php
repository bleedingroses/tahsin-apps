<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\KajianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[GrupController::class, 'index']);
Route::get('/grup/tambah',[GrupController::class, 'tambah']);
Route::post('/grup/simpan',[GrupController::class, 'simpan']);
Route::get('/grup/{id}/ubah',[GrupController::class, 'ubah']);
Route::put('/grup/{id}',[GrupController::class, 'update']);
Route::delete('/grup/{id}',[GrupController::class, 'destroy']);

Route::get('/santri',[SantriController::class, 'index']);
Route::get('/santri/tambah',[SantriController::class, 'tambah']);
Route::post('/santri/simpan',[SantriController::class, 'simpan']);
Route::get('/santri/{id}/ubah',[SantriController::class, 'ubah']);
Route::put('/santri/{id}',[SantriController::class, 'update']);
Route::delete('/santri/{id}',[SantriController::class, 'destroy']);

Route::get('/kajian',[KajianController::class, 'index']);
Route::get('/kajian/tambah',[KajianController::class, 'tambah']);
Route::post('/kajian/simpan',[KajianController::class, 'simpan']);
Route::delete('/kajian/{id}',[KajianController::class, 'destroy']);

Route::get('/belajar', function () {
    return view('belajar');
});