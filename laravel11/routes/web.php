<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', Controllers\HomeController::class);
Route::get('/about', [Controllers\AboutController::class, 'index']);
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery',[Controllers\GalleryController::class, 'index']);
Route::get('/users',[Controllers\UserController::class, 'index']);
Route::get('/users/create',[Controllers\UserController::class, 'create']);