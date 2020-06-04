<?php

namespace App\Http\Controllers\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\berita\beritaController as Berita;
use App\Http\Controllers\admin\adminController as Admin;
use DB;

class beritabyKategori extends Controller
{
    public function getBeritaByKategori($kategori)
    {
        //get berita by kategori
        $berita = DB::table('berita')
                ->whereNull('deleted_at')
                ->where('kategori',$kategori)
                ->simplePaginate(3);

        $admin = new Admin;
        $beritaClass = new Berita;

        return view('berita',[
            'beritas' => $berita,
            'beritaTerhangat' => $beritaClass->beritaHangat(),
            'koleksiKategori' => $admin->countKategori(),
            'kategori' => $kategori,
            'title' => 'Kategori Berita',
            'nav' => 'berita'
        ]);
        // return $koleksi;
    }
}
