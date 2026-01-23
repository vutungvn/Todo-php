<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

// Product
Route::prefix('product')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index')->name('product');
        Route::get('/add', 'create')->name('add');
        Route::get('/detail/{id?}', 'getDetail')->name('detail');
        Route::post('/store', 'store');
        Route::get('/login', 'login');
        Route::post('/checkLogin', 'checkLogin');
        Route::get('/register', 'register');
        Route::post('/checkRegister', 'checkRegister');
    });

    // Matches The "/admin/users" URL
    // Route::get('/', [ProductController::class, 'index'])->name('product');

    // Route::get('/add', [ProductController::class, "create"])->name('add');

    // Route::get('/detail/{id?}', [ProductController::class, "getDetail"])->name('detail');
});

// Page Not Found
Route::fallback(function () {
    return View("error.404");
});

// Sinh viên
Route::get('/sinhvien/{name?}/{mssv?}', function (?string $name = "Luong Xuan Hieu", ?string $mssv = "123456") {
    return view('sinhvien.index', ['name' => $name, 'mssv' => $mssv]);
});

// Bàn cờ
Route::get('/banco/{n}', function (int $n) {
    return view('banco.index', ['n' => $n]);
});

