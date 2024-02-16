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


Route::get('/navbar', function (){
    return view('dashboard.dashboard');
});

use App\Http\Controllers\BelajarController;

Route::get('/belajar', 'BelajarController@getData')->name('data.belajar');

Route::get('/belajar', [BelajarController::class, 'getData'])->name('data.belajar');
Route::get('/belajara', [BelajarController::class, 'index'])->name('data.belajara');

use App\Http\Controllers\VisualisasiController;

Route::get('/visual', [VisualisasiController::class, 'getData'])->name('data.visual');

Route::get('/visual19', [VisualisasiController::class, 'getData19'])->name('data.visual19');
Route::get('/visual20', [VisualisasiController::class, 'getData20'])->name('data.visual20');
Route::get('/visual21', [VisualisasiController::class, 'getData21'])->name('data.visual21');
Route::get('/visual22', [VisualisasiController::class, 'getData22'])->name('data.visual22');
Route::get('/visual23', [VisualisasiController::class, 'getData23'])->name('data.visual23');
Route::get('/visual24', [VisualisasiController::class, 'getData24'])->name('data.visual24');
Route::get('/visual25', [VisualisasiController::class, 'getData25'])->name('data.visual25');
Route::get('/visual26', [VisualisasiController::class, 'getData26'])->name('data.visual26');
Route::get('/visual27', [VisualisasiController::class, 'getData27'])->name('data.visual27');
Route::get('/visual28', [VisualisasiController::class, 'getData28'])->name('data.visual28');
Route::get('/visual29', [VisualisasiController::class, 'getData29'])->name('data.visual29');
Route::get('/visual30', [VisualisasiController::class, 'getData30'])->name('data.visual30');
Route::get('/visual31', [VisualisasiController::class, 'getData31'])->name('data.visual31');
Route::get('/visual32', [VisualisasiController::class, 'getData32'])->name('data.visual32');
Route::get('/visual33', [VisualisasiController::class, 'getData33'])->name('data.visual33');
Route::get('/visual34', [VisualisasiController::class, 'getData34'])->name('data.visual34');
Route::get('/visual35', [VisualisasiController::class, 'getData35'])->name('data.visual35');
Route::get('/visual36', [VisualisasiController::class, 'getData36'])->name('data.visual36');
Route::get('/visual37', [VisualisasiController::class, 'getData37'])->name('data.visual37');
Route::get('/visual38', [VisualisasiController::class, 'getData38'])->name('data.visual38');
Route::get('/visual39', [VisualisasiController::class, 'getData39'])->name('data.visual39');
Route::get('/visual40', [VisualisasiController::class, 'getData40'])->name('data.visual40');
Route::get('/visual41', [VisualisasiController::class, 'getData41'])->name('data.visual41');
Route::get('/visual42', [VisualisasiController::class, 'getData42'])->name('data.visual42');

//ini buat line3
Route::get('/visual19line3', [VisualisasiController::class, 'getData19line3'])->name('data.visual19line3');
Route::get('/visual20line3', [VisualisasiController::class, 'getData20line3'])->name('data.visual20line3');
Route::get('/visual21line3', [VisualisasiController::class, 'getData21line3'])->name('data.visual21line3');
Route::get('/visual22line3', [VisualisasiController::class, 'getData22line3'])->name('data.visual22line3');
Route::get('/visual23line3', [VisualisasiController::class, 'getData23line3'])->name('data.visual23line3');
Route::get('/visual24line3', [VisualisasiController::class, 'getData24line3'])->name('data.visual24line3');
Route::get('/visual25line3', [VisualisasiController::class, 'getData25line3'])->name('data.visual25line3');
Route::get('/visual26line3', [VisualisasiController::class, 'getData26line3'])->name('data.visual26line3');
Route::get('/visual27line3', [VisualisasiController::class, 'getData27line3'])->name('data.visual27line3');
Route::get('/visual28line3', [VisualisasiController::class, 'getData28line3'])->name('data.visual28line3');
Route::get('/visual29line3', [VisualisasiController::class, 'getData29line3'])->name('data.visual29line3');
Route::get('/visual30line3', [VisualisasiController::class, 'getData30line3'])->name('data.visual30line3');
Route::get('/visual31line3', [VisualisasiController::class, 'getData31line3'])->name('data.visual31line3');
Route::get('/visual32line3', [VisualisasiController::class, 'getData32line3'])->name('data.visual32line3');
Route::get('/visual33line3', [VisualisasiController::class, 'getData33line3'])->name('data.visual33line3');
Route::get('/visual34line3', [VisualisasiController::class, 'getData34line3'])->name('data.visual34line3');
Route::get('/visual35line3', [VisualisasiController::class, 'getData35line3'])->name('data.visual35line3');
Route::get('/visual36line3', [VisualisasiController::class, 'getData36line3'])->name('data.visual36line3');
Route::get('/visual37line3', [VisualisasiController::class, 'getData37line3'])->name('data.visual37line3');
Route::get('/visual38line3', [VisualisasiController::class, 'getData38line3'])->name('data.visual38line3');
Route::get('/visual39line3', [VisualisasiController::class, 'getData39line3'])->name('data.visual39line3');
Route::get('/visual40line3', [VisualisasiController::class, 'getData40line3'])->name('data.visual40line3');
Route::get('/visual41line3', [VisualisasiController::class, 'getData41line3'])->name('data.visual41line3');
Route::get('/visual42line3', [VisualisasiController::class, 'getData42line3'])->name('data.visual42line3');

//ini buat line
Route::get('/visual19line2', [VisualisasiController::class, 'getData19line2'])->name('data.visual19line2');
Route::get('/visual20line2', [VisualisasiController::class, 'getData20line2'])->name('data.visual20line2');
Route::get('/visual21line2', [VisualisasiController::class, 'getData21line2'])->name('data.visual21line2');
Route::get('/visual22line2', [VisualisasiController::class, 'getData22line2'])->name('data.visual22line2');
Route::get('/visual23line2', [VisualisasiController::class, 'getData23line2'])->name('data.visual23line2');
Route::get('/visual24line2', [VisualisasiController::class, 'getData24line2'])->name('data.visual24line2');
Route::get('/visual25line2', [VisualisasiController::class, 'getData25line2'])->name('data.visual25line2');
Route::get('/visual26line2', [VisualisasiController::class, 'getData26line2'])->name('data.visual26line2');
Route::get('/visual27line2', [VisualisasiController::class, 'getData27line2'])->name('data.visual27line2');
Route::get('/visual28line2', [VisualisasiController::class, 'getData28line2'])->name('data.visual28line2');
Route::get('/visual29line2', [VisualisasiController::class, 'getData29line2'])->name('data.visual29line2');
Route::get('/visual30line2', [VisualisasiController::class, 'getData30line2'])->name('data.visual30line2');
Route::get('/visual31line2', [VisualisasiController::class, 'getData31line2'])->name('data.visual31line2');
Route::get('/visual32line2', [VisualisasiController::class, 'getData32line2'])->name('data.visual32line2');
Route::get('/visual33line2', [VisualisasiController::class, 'getData33line2'])->name('data.visual33line2');
Route::get('/visual34line2', [VisualisasiController::class, 'getData34line2'])->name('data.visual34line2');
Route::get('/visual35line2', [VisualisasiController::class, 'getData35line2'])->name('data.visual35line2');
Route::get('/visual36line2', [VisualisasiController::class, 'getData36line2'])->name('data.visual36line2');
Route::get('/visual37line2', [VisualisasiController::class, 'getData37line2'])->name('data.visual37line2');
Route::get('/visual38line2', [VisualisasiController::class, 'getData38line2'])->name('data.visual38line2');
Route::get('/visual39line2', [VisualisasiController::class, 'getData39line2'])->name('data.visual39line2');
Route::get('/visual40line2', [VisualisasiController::class, 'getData40line2'])->name('data.visual40line2');
Route::get('/visual41line2', [VisualisasiController::class, 'getData41line2'])->name('data.visual41line2');
Route::get('/visual42line2', [VisualisasiController::class, 'getData42line2'])->name('data.visual42line2');

Route::get('/visualisasi', [VisualisasiController::class, 'index'])->name('belajar.visualisasi');

Route::get('/cek', [VisualisasiController::class, 'cek'])->name('data.cek');

Route::resource('/line2', \App\Http\Controllers\Line2Controller::class );
Route::resource('line3', \App\Http\Controllers\Line3Controller::class );
Route::resource('line4', \App\Http\Controllers\Line4Controller::class );


// Route::get('/line2', [VisualisasiController::class, 'line2'])->name('line2.visual');
// Route::get('/line2s', [VisualisasiController::class, 'getLine2Data'])->name('line2.visual');

// Route::get('/line3', [VisualisasiController::class, 'line3'])->name('line3.visual');
// Route::get('/line3s', [VisualisasiController::class, 'getLine3Data'])->name('line3.visual');

// Route::get('/line4', [VisualisasiController::class, 'line4'])->name('line4.visual');
// Route::get('/line4s', [VisualisasiController::class, 'getLine4Data'])->name('line4.visual');

Route::get('/riwayat', [VisualisasiController::class, 'riwayat'])->name('riwayat.visual');
Route::get('/riwayat2', [VisualisasiController::class, 'riwayat2'])->name('riwayat.visual');
Route::get('/riwayat3', [VisualisasiController::class, 'riwayat3'])->name('riwayat.visual');
Route::get('/visualline2', [VisualisasiController::class, 'visualline2'])->name('riwayat.visualline2');
Route::get('/testdrive', [VisualisasiController::class, 'testdrive'])->name('riwayat.testdrive');

use App\Http\Controllers\LoggingController;
Route::get('/logging', [LoggingController::class, 'index']);


Route::get('/riwayat/line2', [VisualisasiController::class, 'riwayatline2'])->name('riwayat.line2');

Route::get('/riwayat/line3', [VisualisasiController::class, 'riwayatline3'])->name('riwayat.line3');
Route::get('/riwayat/line4', [VisualisasiController::class, 'riwayatline4'])->name('riwayat.line4');



