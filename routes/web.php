<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('admin.dashboard');
})->middleware(['auth', 'role:admin']);












require __DIR__.'/auth.php';
