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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login_pilih', function () {
    return view('login2');
});

Route::get('/sidebar', function () {
    return view('layout.sidebar');
});

// sekertaris
Route::get('/dashboard_sekertaris', function () {
    return view('sekertaris.dash');
});

Route::get('/nav_sekertaris', function () {
    return view('siswa.navbar');
});


// end 

// siswa
Route::get('/dashboard_siswa', function () {
    return view('siswa.dash');
});

Route::get('/jadwal_siswa', function () {
    return view('siswa.jadwal');
});

Route::get('/rekap_siswa', function () {
    return view('siswa.rekap');
});

Route::get('/surat_siswa', function () {
    return view('siswa.surat');
});

Route::get('/nav_siswa', function () {
    return view('siswa.navbar');
});

Route::get('/nav_siswa', function () {
    return view('siswa.navbar');
});

Route::get('/bulanan_siswa', function () {
    return view('siswa.bulanan');
});

Route::get('/harian_siswa', function () {
    return view('siswa.harian');
});

Route::get('/clock_siswa', function () {
    return view('siswa.clock');
});

Route::get('/detail_siswa', function () {
    return view('siswa.detail');
});

Route::get('/detail_pengajar', function () {
    return view('siswa.pengajar');
});

Route::get('/date', function () {
    return view('siswa.date');
});
// end
