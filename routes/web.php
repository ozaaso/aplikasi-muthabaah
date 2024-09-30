<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('jurnal/konten');
});

Route::get('/konten', function () {
    return view('jurnal/konten');
});


Route::get('/form', function () {
    return view('jurnal/form');
});


Route::get('/list', function () {
    return view('jurnal/list');
});

Route::get('/bulanan', function () {
    return view('jurnal/bulanan');
});


Route::get('/harian', function () {
    return view('jurnal/harian');
});


