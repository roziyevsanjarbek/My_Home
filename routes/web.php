<?php

use App\Http\Controllers\Admin\HouseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('users/store', [UserController::class, 'show'])->name('admin.add-users.show');
    Route::get('/house', [HouseController::class, 'index'])->name('admin.house');
    Route::get('/house/store', [HouseController::class, 'show'])->name('admin.add-house.show');
    Route::get('/payment-history', [PaymentController::class, 'index'])->name('admin.payment-history');
    Route::get('/late-payments', [PaymentController::class, 'late'])->name('admin.late-payments');
    Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');
});









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
