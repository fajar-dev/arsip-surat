<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SenderController extends Controller
{
    public function index()
    {
        $data = DB::table('senders')->get();
        return view('sender', compact('data'));
    }

    public function add(Request $request)
    {
        DB::table('senders')->insert([
            'name' => $request->nama,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email

        ]);
        return redirect()->route('sender')->with('success','Notes have been added');
    }

    public function update(Request $request)
    {
        DB::table('senders')->where('id', $request->id)->update([
            'name' => $request->nama,
            'name' => $request->nama,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email
        ]);
        return redirect()->route('sender')->with('success','Notes have been added');
    }

    public function delete($id)
    {
        DB::table('senders')->where('id', $id)->delete();
        return redirect()->route('sender')->with('success','Notes have been added');

    }
}
