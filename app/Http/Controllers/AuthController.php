<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth');
    }

    public function login_action(Request $request ){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->with('success','username or password is incorrect, please try again');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
