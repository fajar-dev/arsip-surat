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
}
