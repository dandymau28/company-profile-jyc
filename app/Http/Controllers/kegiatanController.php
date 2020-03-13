<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kegiatanController extends Controller
{
    public function kegiatan () 
    {
        $prestasi = DB::table('prestasi')
            ->latest()
            ->take(3)
            ->get();


        $kegiatan = DB::table('kegiatan')
        ->get();

        return view('kegiatan',[
            'prestasis' => $prestasi,
            'kegiatans' => $kegiatan,
            'title' => 'kegiatan'
        ]);
    }
}
