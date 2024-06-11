<?php

use App\Http\Controllers\SantriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/santri', [SantriController::class, 'tampil'])->name('Santri.tampil');
Route::get('/santri/tambah', [SantriController::class, 'tambah'])->name('Santri.tambah');
Route::post('/santri/submit', [SantriController::class, 'submit'])->name('Santri.submit');
Route::get('/santri/edit/{id}', [SantriController::class, 'edit'])->name('Santri.edit');
Route::post('/santri/update/{id}', [SantriController::class, 'update'])->name('Santri.update');
Route::post('/santri/delete/{id}', [SantriController::class, 'delete'])->name('Santri.delete');