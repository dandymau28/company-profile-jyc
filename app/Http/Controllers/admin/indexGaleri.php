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

        try {
            $video = DB::table('video')->latest()->get();
        } catch (Exception $e) {
            $video = $e->getMessage();
        }

        $kategori = DB::table('kategori_foto')->latest()->get();

        return view('admin.video.galeri',[
            'foto' => $foto,
            'video' => $video,
            'kategori' => $kategori
        ]);
    }
}
