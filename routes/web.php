<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/',[HomeController::class,'index']);

route::get('/artikel',[ArtikelController::class, 'index']);
route::get('/pelanggan',[PelangganController::class, 'index']);
route::get('/anggota',[AnggotaController::class, 'index']);
route::get('/pegawai',[PegawaiController::class, 'index']);
route::get('/supplier',[SupplierController::class, 'index']);
