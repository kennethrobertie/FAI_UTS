<?php

use App\Http\Controllers\IntroController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\TutorDB;
use App\Http\Controllers\TutorFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('contoh')->group(function () {
    // localhost:8000/contoh/aboutme
    Route::get('aboutme', [IntroController::class, 'daftarMahasiswa']);

    // http://localhost:8000/contoh/detail/dosen/nama/jojo
    // http://localhost:8000/contoh/detail/dosen/nama
    Route::get('detail/{jabatan}/nama/{namasaya?}', [IntroController::class, 'detail']);
});

Route::prefix('tutorform')->group(function () {
    Route::prefix('buku')->group(function () {
        // GET localhost:8000/tutorform/buku/
        Route::get('/', [TutorFormController::class, 'index']);
        // POST localhost:8000/tutorform/buku/
        Route::post('/', [TutorFormController::class, 'store']);
        // DELETE localhost:8000/tutorform/buku/67
        Route::delete('/{id}', [TutorFormController::class, 'destroy']);

        // url untuk fitur edit
        Route::get('/{id}', [TutorFormController::class, 'show']);
        Route::put('/{id}', [TutorFormController::class, 'update']);
    });

    Route::prefix('sessioncookie')->group(function () {
        // localhost:8000/tutorform/sessioncookie/buat
        Route::get('buat', [TutorFormController::class, 'buat']);
        Route::get('baca', [TutorFormController::class, 'baca']);
        Route::get('hapus', [TutorFormController::class, 'hapus']);
    });
});

// tutordb
Route::prefix('tutordb')->group(function () {
    Route::get('/', [TutorDB::class, 'index']);
    Route::post('/', [TutorDB::class, 'store']);
    Route::delete('/{id}', [TutorDB::class, 'destroy']);
    Route::get('/{id}', [TutorDB::class, 'edit']);
    Route::put('/{id}', [TutorDB::class, 'update']);
});


// toko
Route::prefix('toko')->group(function () {
    Route::get('/', [TokoController::class, 'index']);
    Route::post('/proses', [TokoController::class, 'proses']);
    Route::get('/hapus/{toko_id}/{book_id}', [TokoController::class, 'hapus']);
});
