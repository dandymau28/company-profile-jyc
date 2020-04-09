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
            $foto = DB::table('foto')->where('id_kegiatan', '1')->get();
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
            'fotos' => $foto,
            'title' => 'Kegiatan',
            'nav' => 'kegiatan'
        ]);
    }

    public function fotoKegiatan($id_kegiatan) {
        $foto = DB::table('foto')->where('id_kegiatan', $id_kegiatan)->get();
        return $data = [
            'code' => 200,
            'fotos' => $foto
        ];
    }

}
