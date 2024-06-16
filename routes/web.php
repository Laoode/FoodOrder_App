<?php

use App\Http\Controllers\backend\AdminDashboardController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\frontend\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CekStatus;
use App\Http\Middleware\verifikasi;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $home = 'active';
    $food = Menu::where('category', 'food')->paginate(10);
    $drink = Menu::where('category', 'drink')->paginate(10);
    return view('frontend.index', compact('home','food', 'drink'));
});

Route::get('/dashboard', function () {
    $home = 'active';
    return view('frontend.index', compact('home'));
})->middleware(CekStatus::class)->name('dashboard');

Route::get('/about', [DashboardController::class, 'about'])->name('about.index');
Route::get('/menu', [DashboardController::class, 'menu'])->name('menu.index');
Route::get('/detail/{id}', [DashboardController::class, 'detail'])->name('detail');
Route::get('/comment', [DashboardController::class, 'comment'])->middleware(verifikasi::class)->name('comment');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/AdminDashboard', [AdminDashboardController::class, 'index'])->name('admin.index');
Route::post('/CreateMenu', [MenuController::class, 'store'])->name('menu.store');
Route::delete('/DeleteMenu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
Route::get('/EditMenu/{id}', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('/UpdateMenu/{id}', [MenuController::class, 'update'])->name('menu.update');

Route::get('/UserMenu', [AdminDashboardController::class, 'userMenu'])->name('user.index');
Route::get('/EditUser/{id}', [AdminDashboardController::class, 'userEdit'])->name('user.edit');
Route::delete('/DeleteUser/{id}', [AdminDashboardController::class, 'userDestroy'])->name('user.destroy');
Route::put('/UpdateUser/{id}', [AdminDashboardController::class, 'userUpdate'])->name('user.update');

require __DIR__.'/auth.php';
