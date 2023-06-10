<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data['masuk'] = DB::table('letters')->count();
        $data['keluar'] = DB::table('lettersouts')->count();
        return view('dashboard', compact('data'));
    }
}
