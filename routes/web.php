<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TahsinController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('skudetto.index');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/tahsin',[TahsinController::class, 'show']);
Route::get('/tahsin/tambah',[TahsinController::class, 'tambah']);
Route::post('/tahsin/simpan',[TahsinController::class, 'simpan']);
Route::get('/tahsin/{id}/ubah',[TahsinController::class, 'ubah']);
Route::put('/tahsin/{id}',[TahsinController::class, 'update']);
Route::delete('/tahsin/{id}',[TahsinController::class, 'destroy']);

Route::get('/tahsin/tambahg',[CategoryController::class, 'tambahg']);
Route::post('/tahsin/simpang',[CategoryController::class, 'simpang']);