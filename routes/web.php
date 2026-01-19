<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('hello');
});



Route::prefix('product')->group(function () {
    // Matches The "/admin/users" URL
    Route::get('/', function () {
        return view('product.index');
    })->name('product');

    Route::get('/{id}', function (int $id) {
        return view('product.product-detail', ['id' => $id]);
    });

    Route::get('/add', function () {
        return view('product.add');
    })->name('add');
});

Route::fallback(function () {
    return View("error.404");
});
