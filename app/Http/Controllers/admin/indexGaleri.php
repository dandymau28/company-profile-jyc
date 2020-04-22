<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class indexGaleri extends Controller
{
    public function galeriView()
    {
        try {
            $foto = DB::table('foto')->latest()->get();
        } catch (Exception $e) {
            $foto = $e->getMessage();
        }

        try{
            $kegiatans = DB::table('kegiatan')->latest()->get();
        } catch (Exception $e) {
            $kegiatans = $e->getMessage();
        }

        try {
            $video = DB::table('video')->latest()->get();
        } catch (Exception $e) {
            $video = $e->getMessage();
        }

        return view('admin.video.galeri',[
            'foto' => $foto,
            'video' => $video,
            'kegiatans' => $kegiatans
        ]);
    }
}
