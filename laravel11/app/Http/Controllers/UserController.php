<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::latest()->get();
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        User::create($request->only('name', 'email', 'password'));
        return redirect('/users');
    }
}
