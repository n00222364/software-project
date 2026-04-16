<?php

use App\Http\Controllers\BeachController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// home
Route::get('/', function () {
    return view('welcome');
});

// beach CRUD routes
// beaches/create must come before beaches/{beach} otherwise laravel mistakes beaches/create for a beach id

// makes sure the user is logged in before accessing these routes, because a user must be logged in to have admin permissions to access CRUD.
Route::middleware('auth')->group(function () {
// favourites page
 Route::get('/favourites', [BeachController::class, 'favourites'])->name('beaches.favourites');

Route::get('/beaches/create', [BeachController::class, 'create'])->name('beaches.create');
Route::post('/beaches', [BeachController::class, 'store'])->name('beaches.store');

// get the edit form
Route::get('/beaches/{beach}/edit', [BeachController::class, 'edit'])->name('beaches.edit');
// post or "update" the edit form results
Route::put('/beaches/{beach}', [BeachController::class, 'update'])->name('beaches.update');

// delete the beach
Route::delete('/beaches/{beach}', [BeachController::class, 'destroy'])->name('beaches.destroy');

// favourites routes
Route::post('/beaches/{beach}/favourite', [BeachController::class, 'favourite'])->name('beaches.favourite');
Route::delete('/beaches/{beach}/unfavourite', [BeachController::class, 'unfavourite'])->name('beaches.unfavourite');
});

// beach view routes, outside middleware so anybody can view these, no account needed
Route::get('/beaches', [BeachController::class, 'index'])->name('beaches.index');
Route::get('/beaches/{beach}', [BeachController::class, 'show'])->name('beaches.show');



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