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
Route::get('/visual2', [VisualisasiController::class, 'getData2'])->name('data.visual2');
Route::get('/visual3', [VisualisasiController::class, 'getData3'])->name('data.visual3');
Route::get('/visual4', [VisualisasiController::class, 'getData4'])->name('data.visual4');
Route::get('/visual5', [VisualisasiController::class, 'getData5'])->name('data.visual5');
Route::get('/visual6', [VisualisasiController::class, 'getData6'])->name('data.visual6');
Route::get('/visual7', [VisualisasiController::class, 'getData7'])->name('data.visual7');
Route::get('/visual8', [VisualisasiController::class, 'getData8'])->name('data.visual8');
Route::get('/visual9', [VisualisasiController::class, 'getData9'])->name('data.visual9');
Route::get('/visual10', [VisualisasiController::class, 'getData10'])->name('data.visual10');

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

