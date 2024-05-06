<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::view('/home', 'home');
Route::get('/about', fn () => view('about'));
Route::get('/contact', fn () => view('contact'));
Route::get('/gallery', fn () => view('gallery'));

Route::get("users", function () {
    $users = [
        [
            "id" => 1,
            "name" => "John",
            'email' => "jhon@mail.com"
        ],
        [
            "id" => 2,
            "name" => "Doe",
            'email' => "doe@mail.com"
        ],
    ];
    return view("users.index", compact("users"));
});