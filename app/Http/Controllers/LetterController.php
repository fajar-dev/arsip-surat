<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LetterController extends Controller
{
    public function index()
    {
        $data = DB::table('letters')
        ->join('senders', 'senders.id', '=', 'letters.sender_id')
        ->get();
        return view('letterin', compact('data'));
    }
}
