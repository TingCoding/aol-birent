<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Models\Register;
use Illuminate\Support\Facades\Route;

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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('index');
});

Route::get('/sign-in', function() {
    return view('signin');
});

Route::get('/sign-up', function() {
    return view('signup');
});

// Route::post('/sign-up1', [RegisteredUserController::class, '']);

Route::get('/add-car', [CarController::class, 'createCar']);
Route::post('/add-car1', [CarController::class, 'createCar1']);
Route::get('/display', [CarController::class, 'viewCars']);

Route::get('/add-order', [OrderController::class, 'add']);
Route::post('/add-order1', [OrderController::class, 'add1']);

Route::get('/sign-up', [RegisterController::class, 'showRegisterForm']);
Route::post('/sign-up1', [RegisterController::class, 'register']);

Route::get('/sign-in', [LoginController::class, 'showLoginForm']);
Route::post('/sign-in1', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
