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
Route::get('/profile', function () {
    return view('tentang');
});
// Menu Jurusan
Route::get('/tkr', function () {
    return view('Jurusan.tkr');
});
Route::get('/multimedia', function () {
    return view('Jurusan.multimedia');
});
Route::get('/tkj', function () {
    return view('Jurusan.tkj');
});
Route::get('/tp', function () {
    return view('Jurusan.tp');
});
// Menu Berita
Route::get('/detail1', function () {
    return view('Berita.berita-ppdb');
});
Route::get('/detail2', function () {
    return view('Berita.berita-daftarulang');
});
Route::get('/detail3', function () {
    return view('Berita.berita-penerimaan2021');
});
Route::get('/detail4', function () {
    return view('Berita.berita-smkchallenge');
});
Route::get('/detail5', function () {
    return view('Berita.berita-pelantikan');
});
Route::get('/detail6', function () {
    return view('Berita.berita-mos');
});
// Menu Kulikuler
Route::get('/siswa/kulikuler', function () {
    return view('Kulikuler.index');
});
Route::get('/siswa/kulikuler/badminton', function () {
    return view('Kulikuler.badminton');
});
Route::get('/siswa/kulikuler/voli', function () {
    return view('Kulikuler.voli');
});
Route::get('/siswa/kulikuler/basket', function () {
    return view('Kulikuler.basket');
});
Route::get('/siswa/kulikuler/pmr', function () {
    return view('Kulikuler.pmr');
});
Route::get('/siswa/kulikuler/english', function () {
    return view('Kulikuler.english');
});
Route::get('/siswa/kulikuler/sepakbola', function () {
    return view('Kulikuler.sepakbola');
});
Route::get('/siswa/kulikuler/fotografi', function () {
    return view('Kulikuler.fotografi');
});
Route::get('/siswa/kulikuler/jepang', function () {
    return view('Kulikuler.jepang');
});
Route::get('/siswa/kulikuler/musik', function () {
    return view('Kulikuler.musik');
});
Route::get('/siswa/kulikuler/futsal', function () {
    return view('Kulikuler.futsal');
});
Route::get('/siswa/kulikuler/rebana', function () {
    return view('Kulikuler.rebana');
});
Route::get('/siswa/kulikuler/it', function () {
    return view('Kulikuler.it');
});
// Siswa
Route::get('/siswa', function () {
    return view('Siswa.index');
});
// GuKar
Route::get('/gukar/guru', function () {
    return view('GuKar.guru');
});
Route::get('/gukar/karyawan', function () {
    return view('GuKar.karyawan');
});
// Prestasi
Route::get('/siswa/prestasi', function () {
    return view('Prestasi.index');
});

Route::get('/login', function () {
    return view('Alumni.login');
});
Route::get('/alumni/form', function () {
    return view('Alumni.Form');
});
Route::get('/alumni/list-peserta-didik', function () {
    return view('Alumni.list');
});
// PPDB
Route::get('/ppdb', function () {
    return view('PPDB.index');
});
// Galeri
Route::get('/galeri', function () {
    return view('galeri.index');
});