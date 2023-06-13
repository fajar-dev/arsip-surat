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
}
