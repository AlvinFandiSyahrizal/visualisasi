<?php

use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

use App\Http\Controllers\BelajarController;

Route::get('/belajar', 'BelajarController@getData')->name('data.belajar');

Route::get('/belajar', [BelajarController::class, 'getData'])->name('data.belajar');
Route::get('/belajara', [BelajarController::class, 'index'])->name('data.belajara');

use App\Http\Controllers\VisualisasiController;

Route::get('/visual', [VisualisasiController::class, 'getData'])->name('data.visual');
Route::get('/visualisasi', [VisualisasiController::class, 'index'])->name('data.visualisasi');



Route::get('/line2', [VisualisasiController::class, 'line2'])->name('line2.visual');
Route::get('/line2s', [VisualisasiController::class, 'getLine2Data'])->name('line2.visual');

Route::get('/line3', [VisualisasiController::class, 'line3'])->name('line3.visual');
Route::get('/line3s', [VisualisasiController::class, 'getLine3Data'])->name('line3.visual');

Route::get('/line4', [VisualisasiController::class, 'line4'])->name('line4.visual');
Route::get('/line4s', [VisualisasiController::class, 'getLine4Data'])->name('line4.visual');

Route::get('/riwayat', [VisualisasiController::class, 'riwayat'])->name('riwayat.visual');
Route::get('/riwayat/line2', [VisualisasiController::class, 'riwayatline2'])->name('riwayat.line2');

Route::get('/riwayat/line3', [VisualisasiController::class, 'riwayatline3'])->name('riwayat.line3');
Route::get('/riwayat/line4', [VisualisasiController::class, 'riwayatline4'])->name('riwayat.line4');

