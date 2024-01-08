<?php

namespace App\Http\Controllers;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware(function (Request $request, Closure $next) {
            if (! $request->session()->exists('ucp_id')) {
                return redirect()->route('login.index');
            }

            return $next($request);
        });
    }

    public function index()
    {
        return view('change-password');
    }

    public function store(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed'
        ]);


        $user = User::find($request->session()->get('ucp_id'));

        $user->update([
            'password' => bcrypt($request->password)
        ]);

        $request->session()->forget('ucp_id');

        return redirect()->route('login.index')->with('onChangedPassword', 'Successfully changed password');
    }
}
