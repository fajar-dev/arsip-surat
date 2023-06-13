<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DisposisiController extends Controller
{
    public function index()
    {
        $data = DB::table('disposisis')
        ->select('disposisis.id', 'disposisis.letter_id', 'agencies.name', 'disposisis.tgl_surat', 'disposisis.no_agenda', 'disposisis.tgl_diterima', 'disposisis.tgl_penyelesaian', 'disposisis.hal', 'disposisis.diteruskan_kpd', 'disposisis.instruksi', 'disposisis.letter_file')
        ->join('agencies', 'agencies.id', '=', 'disposisis.agency_id')
        ->get();
        return view('disposisi', compact('data'));
    }

    public function detail($id)
    {
        $data = DB::table('disposisis')
        ->select('disposisis.id', 'disposisis.letter_id', 'agencies.name', 'disposisis.tgl_surat', 'disposisis.no_agenda', 'disposisis.tgl_diterima', 'disposisis.tgl_penyelesaian', 'disposisis.hal', 'disposisis.diteruskan_kpd', 'disposisis.instruksi', 'disposisis.letter_file')
        ->join('agencies', 'agencies.id', '=', 'disposisis.agency_id')
        ->first();
        // dd($data);
        return view('disposisi_detail', compact('data'));
    }

    public function add()
    {
        $data['instansi'] = DB::table('agencies')->get();
        return view('disposisi_add', compact('data'));
    }

    public function submit(Request $request)
    {
        $path = $request->file('file')->store('image', 'public');
        DB::table('disposisis')->insert([
            'letter_id' => $request->no,
            'agency_id' => $request->agency,
            'tgl_surat' => $request->tgl_surat,
            'no_agenda' => $request->agenda,
            'tgl_diterima' => $request->tgl_diterima,
            'tgl_penyelesaian' => $request->tgl_penyelesaian,
            'hal' => $request->hal,
            'diteruskan_kpd' => $request->disposisi,
            'instruksi' => $request->instruksi,
            'letter_file' => $path

        ]);
        return redirect()->route('disposisi')->with('success','Notes have been added');
    }
}
