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