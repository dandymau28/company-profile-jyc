<?php

namespace App\Http\Controllers\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\berita\beritaController as Berita;
use App\Http\Controllers\admin\adminController as Admin;

class beritabyKategori extends Controller
{
    public function getBeritaByKategori($kategori)
    {
        //get berita by kategori
        $berita = DB::table('berita')
                ->where('kategori',$kategori)
                ->simplePaginate(3);

        return view('berita',[
            'beritas' => $berita,
            'beritaTerhangat' => Berita::beritaHanget(),
            'koleksiKategori' => Admin::countKategori(),
            'kategori' => $kategori,
            'title' => 'Kategori Berita',
            'nav' => 'berita'
        ]);
        // return $koleksi;
    }
}
