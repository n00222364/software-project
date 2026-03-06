<?php

use App\Http\Controllers\BeachController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/beaches', function(){
    return view('beaches');
});

Route::get('/about', function(){
    return view('about');
});

// beach routes
Route::get('/beaches', [BeachController::class, 'index'])->name('beaches.index');
Route::get('/beaches/create', [BeachController::class, 'create'])->name('beaches.create');
Route::get('/beaches/{beach}', [BeachController::class, 'show'])->name('beaches.show');
Route::post('/beaches', [BeachController::class, 'store'])->name('beaches.store');

// edit update destroy
Route::get('/beaches/{beach}/edit', [BeachController::class, 'edit'])->name('beaches.edit');
Route::put('/beaches/{beach}', [BeachController::class, 'update'])->name('beaches.update');
Route::delete('/beaches/{beach}', [BeachController::class, 'destroy'])->name('beaches.destroy');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
