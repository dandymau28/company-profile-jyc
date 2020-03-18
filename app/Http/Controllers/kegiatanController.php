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

        try {
            $allVideo = DB::table('video')
            ->orderBy('created_at','desc')
            ->get();
        } catch (Exception $e) {
            report ($e);
    
            return false;
        }

        return view('kegiatan',[
            'prestasis' => $prestasi,
            'kegiatans' => $kegiatan,
            'videos' => $allVideo,
            'title' => 'Kegiatan'
        ]);
    }
}
