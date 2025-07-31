<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminATKController;
use App\Http\Controllers\ATKController;

Route::get('/', [ATKController::class, 'index'])->name('atk.index');
Route::get('/atk/{id}', [AtkController::class, 'show'])->name('atk.show');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/index', [AdminATKController::class, 'index'])->name('index');
    Route::get('/create', [AdminATKController::class, 'create'])->name('create');
    Route::post('/', [AdminATKController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [AdminATKController::class, 'edit'])->name('edit');
    Route::put('/{id}', [AdminATKController::class, 'update'])->name('update');
    Route::delete('/{id}', [AdminATKController::class, 'destroy'])->name('destroy');
});


require __DIR__.'/auth.php';
