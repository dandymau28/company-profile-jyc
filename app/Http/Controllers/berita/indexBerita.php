<?php

namespace App\Http\Controllers\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\berita\beritaController as Berita;
use App\Http\Controllers\admin\adminController as Admin;
use DB;

class indexBerita extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function berita()
    {
        //3 Berita Terbaru
        $beritaTerbaru = DB::table('berita')->latest()->simplePaginate(3);

        // return $beritaTerbaru;

        try {
            //Berita Terbaru untuk Carousel
            $beritaCarouselTerbaru = DB::table('berita')
            ->latest()
            ->take(5)
            ->get();
        } catch (Exception $e) {
            report($e);
            return false;
        }
        
        try {
            $allVideo = DB::table('video')
            ->orderBy('created_at','desc')
            ->get();
        } catch (Exception $e) {
            report ($e);
            return false;
        }

        //menghitung kategori
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
                'kategori' => $index->nama_kategori,
                'hasil' => $hitung
            ];
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

        return view('berita', [
            'beritas' => $beritaTerbaru,
            'beritaCarousel' => $beritaCarouselTerbaru,
            // 'beritaPerTahun' => $beritaPerTahun,
            'videos' => $allVideo,
            'koleksiKategori' => Admin::countKategori(),
            'beritaTerhangat' => Berita::beritaHangat(),
            'title' => 'Berita',
            'nav' => 'berita'
            ]);
    }
}
