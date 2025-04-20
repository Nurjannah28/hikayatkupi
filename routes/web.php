<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'home']);
Route::get('menu', [BlogController::class, 'menu']);
Route::get('services', [BlogController::class, 'services']);
Route::get('about', [BlogController::class, 'about']);
Route::get('shop', [BlogController::class, 'shop']);
Route::get('contact', [BlogController::class, 'contact']);
Route::get('cart', [BlogController::class, 'cart']);