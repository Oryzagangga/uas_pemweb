<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('forgot-password');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'hint' => 'required'
        ]);

        $user = User::firstWhere('username', $request->username);
        if (is_null($user) || $user->hint !== $request->hint) {
            return redirect()->route('forgotPassword.index')->withErrors(['forgotPassword' => 'Credentials is not valid.']);
        }

        $request->session()->put('ucp_id', $user->id);

        return redirect()->route('changePassword.index');
    }
}
