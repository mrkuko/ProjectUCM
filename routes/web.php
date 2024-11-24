<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::fallback(function () {
//    if (Auth::check()) {
//       return redirect('/error');
//    } else {
//        abort(404);
////        return view('auth.login');
//    }
//});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/error', function () {
    return view('profile.error');
})->middleware(['auth', 'verified'])->name('error');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/profile.php';
