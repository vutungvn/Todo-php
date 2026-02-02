<?php

use App\Http\Controllers\AgeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckTimeAccess;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

// Product
Route::prefix('product')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index')->name('product');
        Route::get('/add', 'create')->name('add');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::get('/detail/{id?}', 'getDetail')->name('detail');
        Route::post('/store', 'store');
        Route::get('/login', 'login');
        Route::post('/checkLogin', 'checkLogin');
        Route::get('/register', 'register');
        Route::post('/checkRegister', 'checkRegister');
    });
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

// Admin Layout
Route::get('/admin', function () {
    return view('layout.admin');
});

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/checkLogin', [AuthController::class, 'checkLogin'])->name('checkLogin');
