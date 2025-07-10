<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});


Route::get('/about', function () {
    return view('components.about');
});


// Admin Login Routes (public)
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// 🔐 All Admin Routes - Protected
Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        $admin = Auth::guard('admin')->user();
        return view('admin.dashboard', compact('admin'));
    })->name('admin.dashboard');
});

// 🔐 Superadmin Only Routes
Route::middleware(['auth:admin', 'admin.super'])->prefix('admin')->group(function () {
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::post('/settings/update', [AdminController::class, 'updateSelf'])->name('admin.updateSelf');
    Route::get('/admins', [AdminController::class, 'index'])->name('admin.list');
    Route::post('/admins/create', [AdminController::class, 'store'])->name('admin.create');
});