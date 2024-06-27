<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;

// Default welcome route redirected to login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('home');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Registration routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Room routes (accessible without authentication)
Route::get('/room/view', [RoomController::class, 'index'])->name('room.index');
Route::get('/room/create/view', [RoomController::class, 'create'])->name('room.create');
Route::post('/room', [RoomController::class, 'store'])->name('room.store');
Route::get('/room/{room}/edit', [RoomController::class, 'edit'])->name('room.edit');
Route::put('/room/{room}', [RoomController::class, 'update'])->name('room.update');
Route::delete('/room/{room}', [RoomController::class, 'destroy'])->name('room.destroy');

// Booking routes
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::get('/booking/form', [BookingController::class, 'showBookingForm'])->name('booking.form');
Route::post('/booking', [BookingController::class, 'submitBooking'])->name('booking.submit');
Route::get('/booking/confirmation/{booking}', [BookingController::class, 'showConfirmation'])->name('booking.confirmation');
Route::get('/booking/{booking}/edit', [BookingController::class, 'edit'])->name('booking.edit');
Route::put('/booking/{booking}', [BookingController::class, 'update'])->name('booking.update');
Route::delete('/booking/{booking}', [BookingController::class, 'delete'])->name('booking.delete');
Route::post('booking/{id}/confirm', [BookingController::class, 'confirmBooking'])->name('booking.confirm');

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin dashboard route
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// EMAIL
Route::get('/send-email', [EmailController::class, 'sendWelcomeEmail']);

// Include the auth.php routes for authentication features if applicable
require __DIR__.'/auth.php';
