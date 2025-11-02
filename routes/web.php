<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllergeenController;
use App\Http\Controllers\LeverancierController;
use App\Http\Controllers\ProductController;


Route::get('/',[ProductController::class, 'index'])->name('home');


Route::get('product/{id}/allergeenInfo',[AllergeenController::class, 'allergenenInfo'])->name('products.allergenenInfo');

Route::get('product/{id}/leveringsInfo',[LeverancierController::class, 'leveringsInfo'])->name('products.leveringsInfo');

