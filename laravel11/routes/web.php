<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', Controllers\HomeController::class);
Route::get('/about', [Controllers\AboutController::class, 'index']);
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery',[Controllers\GalleryController::class, 'index']);

Route::get('/users',[Controllers\UserController::class, 'index']);
Route::get('/users/create',[Controllers\UserController::class, 'create']);
Route::post('/users',[Controllers\UserController::class, 'store']);
Route::get('/users/{user:id}',[Controllers\UserController::class, 'show']);
Route::get('/users/{user:id}/edit',[Controllers\UserController::class, 'edit']);
Route::put('/users/{user:id}',[Controllers\UserController::class, 'update']);
Route::delete('/users/{user:id}',[Controllers\UserController::class, 'destroy']);