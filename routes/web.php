<?php

use App\Http\Controllers\SantriController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/santri', [SantriController::class, 'tampil'])->name('Santri.tampil');
Route::get('/santri/tambah', [SantriController::class, 'tambah'])->name('Santri.tambah');
Route::post('/santri/submit', [SantriController::class, 'submit'])->name('Santri.submit');
Route::post('/santri/update/{id}', [SantriController::class, 'update'])->name('Santri.update');
Route::get('/santri/edit/{id}', [SantriController::class, 'edit'])->name('Santri.edit');
Route::post('/santri/delete/{id}', [SantriController::class, 'delete'])->name('Santri.delete');

//Route::middleware('guest')->group(function(){});
 
Route::get('/login', [SessionController::class, 'index']);
Route::post('/login/login', [SessionController::class, 'login']);
Route::get('/register', [SessionController::class, 'create']);
Route::post('/register/register', [SessionController::class, 'register']);
Route::get('/login/logout', [SessionController::class, 'logout']);
//Route::get('/santri/edit/{id}', [SantriController::class, 'edit'])->name('Santri.edit');