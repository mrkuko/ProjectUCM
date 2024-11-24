<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    if (Auth::check()) {
       return redirect('/error');
    } else {
        return view('auth.login');
    }
});

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/error', function () {
    return view('profile.error');
})->middleware(['auth', 'verified'])->name('error');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/dashboard', function () {
    return view('profile.admin.dashboard');
})->middleware(['auth', 'verified', 'hasRole:admin'])->name('admin.dashboard');

Route::get('/manager/dashboard', function () {
    return view('profile.manager.dashboard');
})->middleware(['auth', 'verified', 'hasRole:manager'])->name('manager.dashboard');

Route::get('/seller/dashboard', function () {
    return view('profile.seller.dashboard');
})->middleware(['auth', 'verified', 'hasRole:seller'])->name('seller.dashboard');


require __DIR__.'/auth.php';
