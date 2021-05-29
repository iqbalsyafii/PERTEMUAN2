<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controlleriqbal extends Controller
{
    public function ms_buku()
    {
        $ms_buku = DB::table('ms_buku')->get();
        return view('buku0178',['ms_buku' => $ms_buku]);
    }
}