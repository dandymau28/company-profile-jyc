<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class prestasiController extends Controller
{
    public function prestasi()
    {
        $prestasi = DB::table('prestasi')
            ->latest()
            ->get();

        return view('prestasi',[
            'prestasis' => $prestasi,
            'title' => 'prestasi',
            'nav' => 'prestasi'
        ]);
    }
}
