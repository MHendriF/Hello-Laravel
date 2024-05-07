<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', Controllers\HomeController::class);
Route::get('/about-us', [Controllers\AboutController::class, 'index'])->name('about');
//Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery',[Controllers\GalleryController::class, 'index']);

Route::resource('contact', Controllers\ContactController::class)
->except(['create','store','edit','show','update','destroy']);

Route::resource('users', Controllers\UserController::class);
// Route::get('/users',[Controllers\UserController::class, 'index'])->name('users.index');
// Route::get('/users/create',[Controllers\UserController::class, 'create'])->name('users.create');
// Route::post('/users',[Controllers\UserController::class, 'store'])->name('users.store');
// Route::get('/users/{user:id}',[Controllers\UserController::class, 'show'])->name('users.show');
// Route::get('/users/{user:id}/edit',[Controllers\UserController::class, 'edit'])->name('users.show');
// Route::put('/users/{user:id}',[Controllers\UserController::class, 'update'])->name('users.update');
// Route::delete('/users/{user:id}',[Controllers\UserController::class, 'destroy'])->name('users.destroy');