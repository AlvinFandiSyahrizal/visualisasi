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
Route::get('/visual2', [VisualisasiController::class, 'getData2'])->name('data.visual2');
Route::get('/visual3', [VisualisasiController::class, 'getData3'])->name('data.visual3');
Route::get('/visual4', [VisualisasiController::class, 'getData4'])->name('data.visual4');
Route::get('/visual5', [VisualisasiController::class, 'getData5'])->name('data.visual5');
Route::get('/visual6', [VisualisasiController::class, 'getData6'])->name('data.visual6');
Route::get('/visual7', [VisualisasiController::class, 'getData7'])->name('data.visual7');
Route::get('/visual8', [VisualisasiController::class, 'getData8'])->name('data.visual8');
Route::get('/visual9', [VisualisasiController::class, 'getData9'])->name('data.visual9');
Route::get('/visual10', [VisualisasiController::class, 'getData10'])->name('data.visual10');
Route::get('/visual11', [VisualisasiController::class, 'getData11'])->name('data.visual11');
Route::get('/visual12', [VisualisasiController::class, 'getData12'])->name('data.visual12');
Route::get('/visual13', [VisualisasiController::class, 'getData13'])->name('data.visual13');
Route::get('/visual14', [VisualisasiController::class, 'getData14'])->name('data.visual14');
Route::get('/visual15', [VisualisasiController::class, 'getData15'])->name('data.visual15');
Route::get('/visual16', [VisualisasiController::class, 'getData16'])->name('data.visual16');
Route::get('/visual17', [VisualisasiController::class, 'getData17'])->name('data.visual17');
Route::get('/visual18', [VisualisasiController::class, 'getData18'])->name('data.visual18');
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

Route::get('/visualisasi', [VisualisasiController::class, 'index'])->name('data.visualisasi');

Route::get('/cek', [VisualisasiController::class, 'cek'])->name('data.cek');

Route::resource('line2', \App\Http\Controllers\Line2Controller::class );
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


Route::get('/riwayat/line2', [VisualisasiController::class, 'riwayatline2'])->name('riwayat.line2');

Route::get('/riwayat/line3', [VisualisasiController::class, 'riwayatline3'])->name('riwayat.line3');
Route::get('/riwayat/line4', [VisualisasiController::class, 'riwayatline4'])->name('riwayat.line4');


