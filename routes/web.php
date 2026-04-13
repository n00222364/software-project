<?php

use App\Http\Controllers\BeachController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// home
Route::get('/', function () {
    return view('welcome');
});

// about
Route::get('/about', function () {
    return view('about');
});

// beach view routes
Route::get('/beaches', [BeachController::class, 'index'])->name('beaches.index');
Route::get('/beaches/{beach}', [BeachController::class, 'show'])->name('beaches.show');

// beach CRUD routes
// beaches/create must come before beaches/{beach} otherwise laravel mistakes beaches/create for a beach id
Route::get('/beaches/create', [BeachController::class, 'create'])->name('beaches.create');
Route::post('/beaches', [BeachController::class, 'store'])->name('beaches.store');
Route::get('/beaches/{beach}/edit', [BeachController::class, 'edit'])->name('beaches.edit');
Route::put('/beaches/{beach}', [BeachController::class, 'update'])->name('beaches.update');
Route::delete('/beaches/{beach}', [BeachController::class, 'destroy'])->name('beaches.destroy');

// dashboard redirect (sends logged in users to home page)
Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

// profile routes (from Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';