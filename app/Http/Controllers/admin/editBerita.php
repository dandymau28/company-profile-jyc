<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class editBerita extends Controller
{
    public function editBerita($id)
    {
        $berita = DB::table('berita')->where('id', $id)->first();
        $kategori = DB::table('kategori')->latest()->get();
        $tags = DB::table('tag')->latest()->get();

        //ambil berita 
        $tagBerita = explode(',',$berita->tag);

        //mengasosiasikan ke dalam array agar mudah dipanggil
        // foreach($tagBerita as $tagged ){
        //     $satuanTag[] = ['tagged' => $tagged];
        // }
        
        return view('admin.berita.editBerita',[
            'berita' => $berita,
            'tagged' => $tagBerita,
            'kategori' => $kategori,
            'tags' => $tags,
        ]);
    }
}
