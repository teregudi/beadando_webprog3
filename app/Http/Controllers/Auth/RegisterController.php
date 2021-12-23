<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Auth;
use Hash;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make($request->password)
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->intended();
    }
}
