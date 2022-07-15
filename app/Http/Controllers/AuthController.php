<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required',
        ]);
        // dd($request->all());
        if(auth()->attempt($formFields)){
            $request ->session()->regenerate();
            return redirect('/dashboard')->with('message', 'Admin Login Successful.!');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
