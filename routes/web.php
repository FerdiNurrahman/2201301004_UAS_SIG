<?php

use App\Http\Controllers\MapController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\EditController;
use Illuminate\Support\Facades\Route;

//tampil map
Route::get('/map', [MapController::class, 'index'])->name('map');

//tampil kelola data
Route::get('/keloladata', [DataController::class, 'index'])->name('data.index');

// edit data
Route::get('/edit/{id}', [EditController::class, 'edit'])->name('edit');

//ubah data
Route::put('/update/{id}', [EditController::class, 'update'])->name('update');

// tambah data
Route::get('/data/create', [DataController::class, 'create'])->name('data.create');

// simpan data
Route::post('/data', [DataController::class, 'store'])->name('data.store');

// hapus data
Route::get('/data/{id}/hapus', [DataController::class, 'hapus'])->name('data.hapus');