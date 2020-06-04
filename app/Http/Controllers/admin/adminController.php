<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    public function countKategori()
    {
        
        $kategori = DB::table('kategori')
                    ->latest()->get();
        $koleksi = [];
        // return $kategori;
        foreach($kategori as $index) 
        {
            $hitung = DB::table('berita')
                    ->whereNull('deleted_at')
                    ->where('kategori', $index->nama_kategori)
                    ->count();
            
            if($hitung != '0') {
                $koleksi[] = [
                    'nama_kategori' => $index->nama_kategori,
                    'jumlah_berita' => $hitung
                ];
            }
        }
        return $koleksi;
    }
}