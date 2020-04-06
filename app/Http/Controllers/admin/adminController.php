<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    public function showCAB()
    {
        $calonAnggota = DB::table('cab')->get();

        return view('admin.anggota.cab',[
            'cab' => $calonAnggota,
            'title' => 'CAB'
        ]);
    }

    public function countKategori()
    {
        
        $kategori = DB::table('kategori')
                    ->latest()->get();
        $koleksi = [];
        // return $kategori;
        foreach($kategori as $index) 
        {
            $hitung = DB::table('berita')
                    ->where('kategori', $index->nama_kategori)
                    ->count();
            
            $koleksi[] = [
                'nama_kategori' => $index->nama_kategori,
                'jumlah_berita' => $hitung
            ];
        }
        return $koleksi;
    }

    public function formPrestasi()
    {
        return view('admin.prestasi.prestasi');
    }

    public function viewCAB()
    {
        return view('admin.anggota.cab-master');
    }
}