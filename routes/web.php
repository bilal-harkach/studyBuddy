<?php

use App\Http\Controllers\SamenvattingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});

//Route::resource('samenvattingen', SamenvattingController::class)->middleware('auth');
Route::resource('samenvattingen', SamenvattingController::class)->parameters(['samenvattingen'=> 'samenvatting',])->middleware('auth');

require __DIR__.'/auth.php';
