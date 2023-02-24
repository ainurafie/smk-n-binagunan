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
Route::get('/kulikuler', function () {
    return view('Kulikuler.index');
});
Route::get('/kulikuler/badminton', function () {
    return view('Kulikuler.badminton');
});
Route::get('/kulikuler/voli', function () {
    return view('Kulikuler.voli');
});
Route::get('/kulikuler/basket', function () {
    return view('Kulikuler.basket');
});
Route::get('/kulikuler/pmr', function () {
    return view('Kulikuler.pmr');
});
Route::get('/kulikuler/pmr', function () {
    return view('Kulikuler.pmr');
});
Route::get('/kulikuler/english', function () {
    return view('Kulikuler.english');
});
Route::get('/kulikuler/sepakbola', function () {
    return view('Kulikuler.sepakbola');
});
Route::get('/kulikuler/fotografi', function () {
    return view('Kulikuler.fotografi');
});
Route::get('/kulikuler/jepang', function () {
    return view('Kulikuler.jepang');
});
Route::get('/kulikuler/musik', function () {
    return view('Kulikuler.musik');
});
Route::get('/kulikuler/futsal', function () {
    return view('Kulikuler.futsal');
});
Route::get('/kulikuler/rebana', function () {
    return view('Kulikuler.rebana');
});
Route::get('/kulikuler/it', function () {
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
Route::get('/gukar/guru', function () {
    return view('GuKar.guru');
});