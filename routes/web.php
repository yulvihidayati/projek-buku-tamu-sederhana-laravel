<?php

use App\Http\Controllers\User\TamuController ;
use App\Http\Controllers\Admin\TamuController as AdminTamuController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::post('simpan-bukutamu',[TamuController::class, 'simpanTamu'])->name('simpan-bukutamu');
Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');

//bagian admin
Route::get('admin/tamu',[AdminTamuController::class, 'index'])->name('admin-tamu');
Route::get('admin/form-tambah',[AdminTamuController::class, 'formtambah'])->name('admin-form-tambah');
Route::post('admin/simpan-data',[AdminTamuController::class, 'simpanData'])->name('admin-simpan-data');
Route::get('admin/form-edit/{id}',[AdminTamuController::class, 'formEdit'])->name('admin-form-edit');
Route::post('admin/update-data',[AdminTamuController::class, 'updateTamu'])->name('admin-update-data');
Route::post('admin/hapus-data',[AdminTamuController::class, 'hapusTamu'])->name('admin-hapus-data');