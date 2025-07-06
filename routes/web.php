<?php

use App\Http\Controllers\Admin\HouseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('users/store', [UserController::class, 'show'])->name('admin.add-users.show');
    Route::get('/house', [HouseController::class, 'index'])->name('admin.house');
    Route::get('/house/store', [HouseController::class, 'show'])->name('admin.add-house.show');
    Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');


})->middleware(['auth', 'role:admin']);












require __DIR__.'/auth.php';
