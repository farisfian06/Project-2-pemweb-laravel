<?php

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
use App\Http\Controllers\PesananController;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/riwayat-pemesanan', [PesananController::class, 'index']);

Route::post('/riwayat-pemesanan', [PesananController::class, 'pesan']);

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::post('/sign-up', [SignupController::class, 'signup']);

Route::get('/pemesanan/ayla', function () {
    $namaMobil = "Daihatsu Ayla";
    return view('pemesanan', ['namaMobil' => $namaMobil, 'mobil' => 'ayla']);
});

// Route::post('/pemesanan/ayla', function () {
//     $namaMobil = "Daihatsu Ayla";
//     return view('pemesanan', ['namaMobil' => $namaMobil, 'mobil' => 'ayla', App\Http\Controllers\PesananController::class, 'pesan']);
// });

Route::post('/pemesanan/ayla', [PesananController::class, 'pesan'])->name('pemesanan.ayla');

Route::get('/pemesanan/agya', function () {
    $namaMobil = "Toyota Agya";
    return view('pemesanan', ['namaMobil' => $namaMobil]);
});

Route::get('/pemesanan/avanza', function () {
    $namaMobil = "Daihatsu New Avanza";
    return view('pemesanan', ['namaMobil' => $namaMobil]);
});

Route::get('/pemesanan/mobilio', function () {
    $namaMobil = "Honda Mobilio";
    return view('pemesanan', ['namaMobil' => $namaMobil]);
});

Route::get('/pemesanan/elf', function () {
    $namaMobil = "Suzuki Elf Long";
    return view('pemesanan', ['namaMobil' => $namaMobil]);
});

Route::get('/pemesanan/hiace', function () {
    $namaMobil = "Toyota Hiace";
    return view('pemesanan', ['namaMobil' => $namaMobil]);
});




// Route::get('/pemesanan/{namaMobil}', [PesananController::class, 'pesan'])->name('pemesanan.show');
