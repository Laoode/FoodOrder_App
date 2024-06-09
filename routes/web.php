<?php

use App\Http\Controllers\backend\AdminDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CekStatus;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('frontend.index');
})->middleware(CekStatus::class)->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/AdminDashboard', [AdminDashboardController::class, 'index'])->name('admin.index');

require __DIR__.'/auth.php';
