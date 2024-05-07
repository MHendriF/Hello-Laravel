<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', Controllers\HomeController::class);
Route::get('/about-us', [Controllers\AboutController::class, 'index'])->name('about');
Route::get('/gallery',[Controllers\GalleryController::class, 'index']);

Route::resource('contact', Controllers\ContactController::class)
->except(['create','store','edit','show','update','destroy']);

Route::resource('users', Controllers\UserController::class);
Route::get('login', [Controllers\LoginController::class, 'loginForm'])->name('login')->middleware('guest'); 
Route::post('login', [Controllers\LoginController::class, 'authenticate'])->middleware('guest'); 
Route::post('logout', Controllers\LogoutController::class)->name('logout')->middleware('auth');
