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
                'koleksiKategori' => $koleksi,
                'term' => $data,
                'title' => 'Hasil Pencarian ' . $data . ': ',
                'nav' => 'berita',
                'cari' => 'Hasil Pencarian \'' . $data . '\': ',
            ]);
        } else {
            return view('berita', [
                "message" => "Berita tidak ditemukan!",
                'cari' => 'Hasil Pencarian \'' . $data . '\': '
            ]);
        }


        // return response()->json([
        //     'message' => 'success',
        //     'data' => $search
        // ]);
    }

    public function searchTag ($term = '')
    {
        $data = trim($term);
        // return response()->json($data);

        try {
            $tag = DB::table('tag')
                    ->where('nama_tag','like','%'.$data.'%')
                    ->get();
        } catch (Exception $e) {
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'message' => 'success',
            'data' => $tag
        ]);
    }

    public function jsonCAB()
    {
        $data = DB::table('cab')->latest()->get();

        return response()->json(['code'=>200,'data' => $data]);
    }
}
