<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignUp()
    {
        return view('auth.signUp');
    }

    public function postSignUp(Request $request)
    {

        // dd($request);
        $this->validate($request, [
            'email' => 'required|max:255|email',
            'username' => 'required|alpha_dash|max:20',
            'password' => 'required|min:6',
        ]);

        User::created([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ]);

        return redirect()->route('home')->with('info', 'You successfully registered');
    }
}
