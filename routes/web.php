<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/interfaz', function () {
    return view('interfaz');
})->name('interfaz');

Route::get('/enlaces', function () {
    return view('enlaces');
})->name('enlaces');
