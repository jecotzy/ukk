<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users,name',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    if (Auth::attempt(['name' => $request->username, 'password' => $request->password], $request->remember)) {
        $request->session()->regenerate();
        return redirect()->route('dashboard'); 
    }

    return back()->withErrors(['username' => 'Invalid username or password.']);
}
}