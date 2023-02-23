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