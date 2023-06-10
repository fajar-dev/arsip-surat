<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LettersoutController extends Controller
{
    public function index()
    {
        $data = DB::table('lettersouts')->get();
        return view('letterout', compact('data'));
    }

    public function add()
    {
        return view('letterout_add');
    }

    public function submit(Request $request)
    {
        $path = $request->file('file')->store('image', 'public');
        DB::table('lettersouts')->insert([
            'letter_no' => $request->no,
            'letterout_date' => $request->tgl_surat,
            'regarding' => $request->perihal,
            'purpose' => $request->tujuan,
            'letter_file' => $path,
        ]);
        return redirect()->route('letter_out')->with('success','Notes have been added');
    }

    public function delete($id)
    {
        DB::table('lettersouts')->where('id', $id)->delete();
        return redirect()->route('letter_out')->with('success','Notes have been added');
    }

    public function edit($id)
    {
        $data = DB::table('lettersouts')->where('id', $id)->first();
        return view('letterout_edit', compact('data'));
    }

    public function update( Request $request)
    {
        if(empty($request->file)){
            DB::table('lettersouts')->where('id', $request->id)->update([
                'letter_no' => $request->no,
                'letterout_date' => $request->tgl_surat,
                'regarding' => $request->perihal,
                'purpose' => $request->tujuan,
            ]);
        }else{
            $path = $request->file('file')->store('image', 'public');
            DB::table('lettersouts')->where('id', $request->id)->update([
                'letter_no' => $request->no,
                'letterout_date' => $request->tgl_surat,
                'regarding' => $request->perihal,
                'purpose' => $request->tujuan,
                'letter_file' => $path,
            ]);
        }
        return redirect()->route('letter_out')->with('success','Notes have been added');

    }

    public function detail($id)
    {
        $data = DB::table('lettersouts')->where('id', $id)->first();
        return view('letterout_detail', compact('data'));
    }

}

