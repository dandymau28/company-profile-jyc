<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class createBerita extends Controller
{
    public function create()
    {
        $kategori = DB::table('kategori')
                    ->latest()
                    ->get();
        
        $tags = DB::table('tag')
                ->latest()
                ->get();

        return view('admin.berita.buatBerita',[
            'title' => "Buat Berita",
            'kategoris' => $kategori,
            'tags' => $tags,
        ]);
    }
}
