<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class AccountController extends Controller
{
        public function index()
    {
        $data = DB::table('users')
        ->where('id', '=', Auth::user()->name)
        ->get();
        return view('account', compact('data'));
    }

        public function update(Request $request)
    {
        DB::table('users')->where('id', Auth::user()->id)->update([
            'name' => $request->nama,
            'email' => $request->email,
        ]);
        return redirect()->route('account')->with('success','Notes have been added');
    }

    public function change(Request $request)
    {
        DB::table('users')->where('id', Auth::user()->id)->update([
            'password' =>  Hash::make($request->password)
        ]);
        return redirect()->route('account')->with('success','Notes have been added');
    }
}
