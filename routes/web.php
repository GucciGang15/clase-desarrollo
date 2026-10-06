<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PostController;

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

Route::get('/Fligths', [FlightController::class, 'index'])->name('flights.index');

Route::get('/Posts', [PostController::class, 'index'])->name('posts.index');