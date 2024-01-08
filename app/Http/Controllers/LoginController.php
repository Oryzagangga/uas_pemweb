<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::firstWhere('username', $request->username);
        if (is_null($user) || ! Hash::check($request->password, $user->password)) {
            return redirect()->route('login.index')->withErrors(['login' => 'Credentials is not valid.']);
        }

        Auth::login($user);

        return redirect()->route('cashier.index');
    }
}
