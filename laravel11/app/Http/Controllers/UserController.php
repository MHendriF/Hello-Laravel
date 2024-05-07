<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::findMany([
            1,2,3
        ]);
        $users = User::firstWhere('email', 'hendri@gmail.com');
        $users = User::get();
        return view('users.index', [
            'users' => $users
        ]);
    }
}
