<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ---------- Admin ----------
Route::middleware(['auth', 'verified', 'hasRole:admin'])->group(function () {
    Route::get('/admin/', function (){
        return redirect()->route('admin.dashboard');
    });
    Route::get('/admin/dashboard', function (){
        return view('profile.admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/stock', function (){
        return view('profile.admin.stock');
    })->name('admin.stock');

    Route::get('/admin/logistics', function (){
        return view('profile.admin.logistics');
    })->name('admin.logistics');

    Route::get('/admin/employees', function (){
        return view('profile.admin.employees');
    })->name('admin.employees');

    Route::get('/admin/products', function (){
        return view('profile.admin.products');
    })->name('admin.employees');

    Route::get('/admin/warehouses', function (){
        return view('profile.admin.warehouses');
    })->name('admin.warehouses');

    Route::get('/admin/employee-add', function (){
        return view('profile.admin.employee-add');
    })->name('admin.employee-add');

    Route::post('/admin/employee-add', [ProfileController::class, 'store'])->name('admin.employee-add');
});

// ---------- Manager ----------
Route::middleware(['auth', 'verified', 'hasRole:manager'])->group(function () {
    Route::get('/manager/', function (){
        return redirect()->route('manager.dashboard');
    });
    Route::get('/manager/dashboard', function (){
        return view('profile.manager.dashboard');
    })->name('manager.dashboard');

    Route::get('/manager/stock', function (){
        return view('profile.manager.stock');
    })->name('manager.stock');

    Route::get('/manager/logistics', function (){
        return view('profile.manager.logistics');
    })->name('manager.logistics');

    Route::get('/manager/employees', function (){
        return view('profile.manager.employees');
    })->name('manager.employees');

    Route::get('/manager/products', function (){
        return view('profile.manager.products');
    })->name('manager.employees');
});

// ---------- Seller ----------
Route::middleware(['auth', 'verified', 'hasRole:seller'])->group(function () {
    Route::get('/seller/', function (){
        return redirect()->route('seller.dashboard');
    });
    Route::get('/seller/dashboard', function (){
        return view('profile.seller.dashboard');
    })->name('seller.dashboard');

    Route::get('/seller/stock', function (){
        return view('profile.seller.stock');
    })->name('seller.stock');

    Route::get('/seller/logistics', function (){
        return view('profile.seller.logistics');
    })->name('seller.logistics');

    Route::get('/seller/products', function (){
        return view('profile.seller.products');
    })->name('seller.employees');
});
