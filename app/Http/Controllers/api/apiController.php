<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class apiController extends Controller
{
    public function searchByTerm (Request $req)
    {
        $data = trim($req->input('term'));
        
        try {
            $search = DB::table('berita')
                        ->where('tag', 'like', "%{$data}%")
                        ->whereNull('deleted_at')
                        ->whereNotNull('tgl_publish')
                        ->orWhere('kategori', 'like', "%{$data}%")
                        ->orWhere('judul', 'like', "%{$data}%")
                        ->simplePaginate(3);
        } catch (Exception $e) {
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }

        //berita terhangat
        try {
            $beritaTerhangat = DB::table('berita')
                                ->whereNull('deleted_at')
                                ->whereNotNull('tgl_publish')
                                ->where('penting', '1')
                                ->latest()
                                ->take(3)
                                ->get();
        } catch (Exception $e) {
            return $e;
        }

        //menghitung kategori
        $kategoris = DB::table('kategori')
                    ->oldest()->get();
        $koleksi = [];
        // return $kategoris;
        foreach($kategoris as $index) 
        {
            $hitung = DB::table('berita')
                    ->where('kategori', $index->nama_kategori)
                    ->count();
            
            $koleksi[] = [
                'kategori' => $index->nama_kategori,
                'hasil' => $hitung
            ];
        }
        if(!empty($search)) {
            return view('berita',[
                'beritas' => $search,
                'beritaTerhangat' => $beritaTerhangat,
                'koleksiKategori' => $koleksi,
                'term' => $data,
                'title' => 'Hasil Pencarian ' . $data . ': ',
                'nav' => 'berita',
                'cari' => 'Hasil Pencarian \'' . $data . '\': ',
            ]);
        } else {
            return view('berita', [
                "message" => "Berita tidak ditemukan!",
                'beritaTerhangat' => $beritaTerhangat,
                'cari' => 'Hasil Pencarian \'' . $data . '\': '
            ]);
        }


        // return response()->json([
        //     'message' => 'success',
        //     'data' => $search
        // ]);
    }

    public function searchTag ($tag)
    {
        //get berita by kategori
        $berita = DB::table('berita')
            ->where('tag', 'like', "%{$tag}%")
            ->simplePaginate(3);
        
        //berita terhangat
        try {
            $beritaTerhangat = DB::table('berita')
                                ->whereNull('deleted_at')
                                ->whereNotNull('tgl_publish')
                                ->where('penting', '1')
                                ->latest()
                                ->take(3)
                                ->get();
        } catch (Exception $e) {
            return $e;
        }

        //menghitung kategori
        $kategoris = DB::table('kategori')
                    ->oldest()->get();
        $koleksi = [];
        // return $kategoris;
        foreach($kategoris as $index) 
        {
            $hitung = DB::table('berita')
                    ->where('kategori', $index->nama_kategori)
                    ->count();
            
            $koleksi[] = [
                'kategori' => $index->nama_kategori,
                'hasil' => $hitung
            ];
        }
        return view('berita',[
            'beritas' => $berita,
            'beritaTerhangat' => $beritaTerhangat,
            'koleksiKategori' => $koleksi,
            'kategori' => $tag,
            'title' => 'Kategori Berita',
            'nav' => 'berita'
        ]);
    }

    public function jsonCAB()
    {
        $data = DB::table('cab')->latest()->get();

        return response()->json(['code'=>200,'data' => $data]);
    }
}
