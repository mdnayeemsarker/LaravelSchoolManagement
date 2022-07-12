<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function adminlogin(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required',
        ]);
        // dd($request->all());

        if(auth()->attempt($formFields)){
            $request ->session()->regenerate();
            return redirect('/admindashboard')->with('message', 'Admin Login Successful.!');
        }

        // if (Auth::guard('admin')->attempt($formFields)) {
        //     $request ->session()->regenerate();
        //     return redirect('/admindashboard')->with('message', 'Admin Login Successful.!');
        // }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
