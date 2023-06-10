<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\File;


class LetterController extends Controller
{
    public function index()
    {
        $data = DB::table('letters')
        ->select('letters.id', 'letters.letter_no', 'letters.letter_date', 'letters.date_received', 'letters.agenda_no', 'letters.regarding', 'letters.disposisi', 'senders.name')
        ->join('senders', 'senders.id', '=', 'letters.sender_id')
        ->get();
        return view('letterin', compact('data'));
    }

    public function add()
    {
        $data['pengirim'] = DB::table('senders')->get();
        $data['instansi'] = DB::table('agencies')->get();
        return view('letterin_add', compact('data'));
    }

    public function submit(Request $request)
    {
        $path = $request->file('file')->store('image', 'public');
        DB::table('letters')->insert([
            'letter_no' => $request->no,
            'letter_date' => $request->tgl_surat,
            'date_received' => $request->tgl_diterima,
            'agenda_no' => $request->agenda,
            'regarding' => $request->perihal,
            'disposisi' => $request->disposisi,
            'agency_id' => $request->agency,
            'sender_id' => $request->sender,
            'letter_file' => $path,
        ]);
        return redirect()->route('letter_in')->with('success','Notes have been added');
    }

    public function delete($id)
    {
        DB::table('letters')->where('id', $id)->delete();
        return redirect()->route('letter_in')->with('success','Notes have been added');

    }
}
