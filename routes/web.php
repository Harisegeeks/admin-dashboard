<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {return view('welcome');});
Route::get('/admin', function () {return view('admin');})->middleware(['auth', 'verified'])->name('admin');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/admin-dashboard', function () {return view('admin-dashboard'); })->middleware(['auth', 'role:admin'])->name('admin-dashboard');
Route::get('/dashboard', function () {return view('dashboard'); })->middleware(['auth'])->name('dashboard');
Route::middleware(['auth', 'role:admin'])->group(function () {
Route::get('/admin-dashboard', function () {return view('admin-dashboard');})->name('admin-dashboard');});
Route::middleware(['auth', 'role:user'])->group(function () {
Route::get('/user-dashboard', function () {return view('user-dashboard');})->name('user-dashboard');});
Route::get('header', function () {return view('header');});
Route::get('footer', function () {return view('footer');});
Route::get('sidebar', function () {return view('sidebar');});
Route::get('maincontent', function () {return view('maincontent');});
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});
require __DIR__.'/auth.php';
