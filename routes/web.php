<?php

use App\Http\Controllers\Products\ProductsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Products\ProductsController::class, 'index'])->name('welcome');



Route::resource('products', ProductsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

