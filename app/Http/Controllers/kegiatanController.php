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


        $kegiatan = DB::table('kategori_foto')
        ->get();

        try {
            $foto = DB::table('foto')
                    ->leftJoin('kategori_foto', 'kategori_foto.id', '=', 'foto.id_kategori')
                    ->select('foto.alamat_foto', 'kategori_foto.nama as nama_kategori', 'foto.deskripsi')
                    ->get();
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
        $kegiatan = DB::table('kategori_foto')->where('id', $id_kegiatan)->first();
        $foto = DB::table('foto')->where('kategori', $kegiatan->nama)->get();

        if($foto->isEmpty()) {
            return $data = [
                'code' => 404,
                'message' => 'Kegiatan tidak ada Foto!'
            ];
        } else {
            return $data = [
                'code' => 200,
                'message' => 'Foto kegiatan ditemukan!',
                'fotos' => $foto
            ];
        }
    }

}
