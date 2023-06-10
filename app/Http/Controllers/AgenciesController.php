<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgenciesController extends Controller
{
    public function index()
    {
        $data = DB::table('agencies')->get();
        return view('agency', compact('data'));
    }

    public function add(Request $request)
    {
        DB::table('agencies')->insert([
            'name' => $request->nama
        ]);
        return redirect()->route('agency')->with('success','Notes have been added');
    }

    public function update(Request $request)
    {
        DB::table('agencies')->where('id', $request->id)->update([
            'name' => $request->nama
        ]);
        return redirect()->route('agency')->with('success','Notes have been added');
    }

    public function delete($id)
    {
        DB::table('agencies')->where('id', $id)->delete();
        return redirect()->route('agency')->with('success','Notes have been added');

    }
}