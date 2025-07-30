<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminATKController;
use App\Http\Controllers\ATKController;

Route::get('/', [ATKController::class, 'index'])->name('atk.index');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/atk', [AdminATKController::class, 'admin.index']);
    Route::get('/admin/atk/create', [AdminATKController::class, 'admin.create']);
    Route::post('/admin/atk', [AdminATKController::class, 'admin.store']);
    Route::get('/admin/atk/{id}/edit', [AdminATKController::class, 'admin.edit']);
    Route::put('/admin/atk/{id}', [AdminATKController::class, 'admin.update']);
    Route::delete('/admin/atk/{id}', [AdminATKController::class, 'admin.destroy']);
});

require __DIR__.'/auth.php';
