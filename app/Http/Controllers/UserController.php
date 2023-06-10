<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = DB::table('users')->get();
        return view('user', compact('data'));
    }

    public function add(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->nama,
            'email' => $request->email,
            'password' =>  Hash::make($request->password)
        ]);
        return redirect()->route('user')->with('success','Notes have been added');
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->nama,
            'email' => $request->email,
        ]);
        return redirect()->route('user')->with('success','Notes have been added');
    }

    public function change(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([
            'password' =>  Hash::make($request->password)
        ]);
        return redirect()->route('user')->with('success','Notes have been added');
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('user')->with('success','Notes have been added');
    }
}
