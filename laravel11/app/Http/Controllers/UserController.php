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
        return view('users.form', [
            'user' => new User(),
            'page_meta' => [
                'title' => 'Create new user',
                'method' => 'post',
                'url' => '/users',
                'submit_text' => 'Create'
            ]
        ]);
    }

    public function store(Request $request) {
        User::create($request->validate($this->requestValidation()));
        return redirect('/users');
    }

    public function show(User $user) {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function edit(User $user) {
        return view('users.form', [
            'user' => $user,
            'page_meta' => [
                'title' => 'Edit user: '.$user->name,
                'method' => 'put',
                'url' => '/users/'.$user->id,
                'submit_text' => 'Update'
            ]
        ]);
    }

    public function update(User $user, Request $request) {
        $user->update($request->validate($this->requestValidation()));
        return redirect('/users');  
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect('/users');
    }

    protected function requestValidation(): array {
        return [
            'name' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email',
            'password' => ['required', 'min:6']
        ];
    }
}
