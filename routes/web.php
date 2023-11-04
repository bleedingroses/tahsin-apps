<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TahsinController;
use App\Http\Controllers\HafalanController;
use App\Http\Controllers\GrupController;
use App\Http\Controllers\SantriController;

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

Route::get('/santri',[SantriController::class, 'index']);
Route::get('/santri/tambah',[SantriController::class, 'tambah']);
Route::post('/santri/simpan',[SantriController::class, 'simpan']);

Route::get('/tahsin/{id}/ubah',[TahsinController::class, 'ubah']);
Route::put('/tahsin/{id}',[TahsinController::class, 'update']);
Route::delete('/tahsin/{id}',[TahsinController::class, 'destroy']);

Route::get('/tahsin/{id}/profile', [TahsinController::class, 'profile']);
Route::post('/tahsin/{id}/tahfidz', [TahsinController::class, 'tahfidz']);


Route::get('/tahsin/hafalan', [HafalanController::class,'index']);