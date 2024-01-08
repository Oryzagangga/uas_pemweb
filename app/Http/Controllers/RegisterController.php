<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'hint' => 'required'
        ]);

        if (User::where('username', $request->username)->exists()) {
            return redirect()
                ->route('register.index')
                ->withErrors(['register' => 'Username is exists.']);
        }

        $user = User::create([
            'role' => $request->role,
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'hint' => $request->hint
        ]);

        Auth::login($user);

        return redirect()->route('cashier.index');
    }
}
