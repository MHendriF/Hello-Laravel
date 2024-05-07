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
        User::create($request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email',
            'password' => ['required', 'min:6']
        ]));
        return redirect('/users');
    }

    public function show(User $user) {
        return view('users.show', [
            'user' => $user
        ]);
    }
}
