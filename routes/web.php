<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::resource('products', ProductController::class);
