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
    return view('isi.utama');
});

Route::get('/tentang', function () {
    return view('isi.tentang');
});

Route::get('/menu', function () {
    return view('isi.menu');
});

Route::get('/selera-anda', function () {
    return view('isi.selera');
});

Route::get('/kontak-kami', function () {
    return view('isi.kontak');
});