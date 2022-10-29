<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create()
    {
        return view('users.register');
    }

    // Create New User
    public function store(Request $request)
    {
        $formRequest = $request->validate([
            'name' => 'required | min:3',
            'email' =>  [
                'required', 'email', Rule::unique('users', 'email')
            ],
            'password' => 'required | confirmed | min:6'
        ]);

        // Hash Password
        $formRequest['password'] = bcrypt($formRequest['password']);

        // Create User
        $user = User::create($formRequest);

        // Login
        auth()->login($user);

        return redirect('/books')->with('message', 'User created and logged in!');
    }
}