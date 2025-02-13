<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// admin controller
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\Admin\AboutAdminController;
use App\Http\Controllers\admin\CategoryAdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/admin/dashboard',[AdminController::class, 'index'])->middleware('auth','admin');
Route::get('/pemasok/dashboard',[PemasokController::class, 'index'])->middleware('auth','pemasok');
Route::resource('/admin/about', AboutAdminController::class);
Route::resource('/admin/category', CategoryAdminController::class);

require __DIR__.'/auth.php';
