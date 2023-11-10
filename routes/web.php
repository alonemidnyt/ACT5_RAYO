<?php

use Illuminate\Support\Facades\Route;

// routes/web.php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;

Route::resource('login', LoginController::class)->only(['index', 'store', 'destroy']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
