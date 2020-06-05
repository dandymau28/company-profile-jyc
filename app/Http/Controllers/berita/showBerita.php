<?php

namespace App\Http\Controllers\berita;

use App\Http\Controllers\Controller;
use App\Http\Controllers\berita\beritaController as Berita;
use App\Http\Controllers\admin\adminController as Admin;
use Illuminate\Http\Request;
use DB;

class showBerita extends Controller
{
    public function show($slug)
    {
        $berita = DB::table('berita')
            ->whereNull('deleted_at')
            ->whereNotNull('tgl_publish')
            ->where('slug', $slug)
            ->first();
        
        $beritaPaginated = DB::table('berita')
            ->where('slug', $slug)
            ->simplePaginate(1);

            //menghitung kategori
        $kategori = DB::table('kategori')
                    ->whereNull('deleted_at')
                    ->latest()->get();
        $koleksi = [];
         // return $kategori;
        foreach($kategori as $index) 
        {
            $hitung = DB::table('berita')
                    ->whereNull('deleted_at')
                    ->whereNotNull('tgl_publish')
                    ->where('kategori', $index->nama_kategori)
                    ->count();
            
            $koleksi[] = [
                'kategori' => $index->nama_kategori,
                'hasil' => $hitung
            ];
        }

        // mengambil tag
        $tag = explode(',', $berita->tag );

        //associative array
        // foreach ($tag as $index) {
        //     $tags[] = [
        //         'tag' => $index
        //     ];
        // }
        
        $beritaClass = new Berita;
        $admin = new Admin;

        return view('detailberita', [
            'nav' => 'berita',
            'title' => $berita->judul,
            'berita' => $berita,
            'beritaTerhangat' => $beritaClass->beritaHangat(),
            'paginasi' =>$beritaPaginated,
            'koleksiKategori' => $admin->countKategori(),
            'tags' => $tag
        ]);
    }
}
