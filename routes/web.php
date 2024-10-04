<?php

use App\Http\Controllers\JurnalsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('jurnal/konten');
// });

Route::get('/', function () {
    return redirect('/konten');
});


Route::get('/form', function () {
    return view('jurnal/form');
});


Route::get('/list', function () {
    return view('jurnal/list');
});

// Route::get('/bulanan', function () {
//     return view('jurnal/bulanan');
// });


Route::get('/harian', function () {
    return view('jurnal/harian');
});

// Route::resource('jurnal', JurnalsController::class); rute semua jurnal
Route::get('/konten', [JurnalsController::class, 'index'])->name('jurnal.index'); // Menampilkan daftar jurna//l
Route::get('/list', [JurnalsController::class, 'list'])->name('jurnal.list'); // Menampilkan daftar jurna//l

// Route::get('jurnal/create', [JurnalsController::class, 'create'])->name('jurnal.create'); // Menampilkan form untuk membuat jurnal baru
Route::post('konten', [JurnalsController::class, 'store'])->name('jurnal.store'); // Menyimpan jurnal baru
Route::get('harian/{uuid}', [JurnalsController::class, 'show'])->name('jurnal.show'); // Menampilkan jurnal tertentu
Route::get('/{nama}/{asal}', [JurnalsController::class, 'bulanan'])->name('jurnal.bulanan'); // Menampilkan daftar jurna//l

// Route::get(uri: 'konten/{uuid}', [JurnalsController::class, 'show'])->name('jurnal.show'); // Menampilkan jurnal tertentu
Route::get('jurnal/{uuid}/edit', [JurnalsController::class, 'edit'])->name('jurnal.edit'); // Menampilkan form untuk mengedit jurnal tertentu
Route::put('jurnal/{uuid}', [JurnalsController::class, 'update'])->name('jurnal.update'); // Mengupdate jurnal tertentu
Route::delete('jurnal/{uuid}', [JurnalsController::class, 'destroy'])->name('jurnal.destroy'); // Menghapus jurnal tertentu


Route::get('/jurnal/search/{name}', [JurnalsController::class, 'searchByName'])->name('jurnal.search.name');
