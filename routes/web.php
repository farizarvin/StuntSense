<?php

use Illuminate\Support\Facades\Route;

// 1. Landing Page & Auth
Route::get('/', function () { return view('landing'); });
Route::get('/login', function () { return view('auth.login'); });
Route::get('/register', function () { return view('auth.register'); });

// 2. User (Ibu/Orang Tua)
Route::prefix('user')->group(function () {
    Route::get('/dashboard', function () { return view('user.dashboard'); })->name('user.dashboard');
    Route::get('/stunting-check', function () { return view('user.stunting-check'); })->name('user.check');
    Route::get('/nutrition', function () { return view('user.nutrition'); });
    Route::get('/education', function () { return view('user.education'); });
});

// 3. Mitra Posyandu
Route::prefix('posyandu')->group(function () {
    Route::get('/dashboard', function () { return view('posyandu.dashboard'); })->name('posyandu.dashboard');
    Route::get('/schedule', function () { return view('posyandu.schedule'); });
    Route::get('/input-manual', function () { return view('posyandu.input'); });
});

// 4. Super Admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::get('/cms', function () { return view('admin.cms'); });
    Route::get('/users', function () { return view('admin.users'); });
});