<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class viewBerita extends Controller
{
    public  function viewBerita()
    {
        $berita = DB::table('berita')->whereNull('deleted_at')->whereNotNull('tgl_publish')->latest()->get();

        $beritaDraft = DB::table('berita')->whereNull('deleted_at')->whereNull('tgl_publish')->latest()->get();

        $totalBerita = DB::table('berita')->whereNull('deleted_at')->latest()->count();

        $totalKategori = DB::table('kategori')->count();

        $rekomendasi = DB::table('berita')->where('penting', '1')->whereNull('deleted_at')->count();

        $totalDraftBerita = DB::table('berita')->whereNull('tgl_publish')->whereNull('deleted_at')->count();

        return view('admin.berita.berita',[
            'berita' => $berita,
            'totalBerita' => $totalBerita,
            'totalKategori' => $totalKategori,
            'rekomendasi' => $rekomendasi,
            'totalDraftBerita' => $totalDraftBerita,
            'beritaDraft' => $beritaDraft,
        ]);
    }
}
