<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Auth;
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

// 🔐 All Admin Routes - Protected by auth:admin
Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        $admin = Auth::guard('admin')->user();
        return view('admin.dashboard', compact('admin'));
    })->name('admin.dashboard');

    // Add other admin-only pages here
    // Route::get('/settings', ...);
});

