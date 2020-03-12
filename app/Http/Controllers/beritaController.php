<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\beritaModel as Berita;

class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function berita()
    {
        //3 Berita Terbaru
        $beritaTerbaru = DB::table('berita')->latest()->take(3)->get();

        //Berita berdasarkan tahun
        try {
            $berita = DB::table('berita')
                ->where(DB::raw('YEAR(tgl_publish)=2015'))
                ->orderBy('tgl_publish','desc')
                ->take(3)
                ->get();
        } catch (Exception $e) {
            report($e);

            return false;
        }

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

        try {//list berita berdasarkan tahun
        $beritaPerTahun = DB::table('berita')
            ->where(DB::raw('YEAR(tgl_publish)=2015'))
            ->orderBy('tgl_publish','desc')
            ->get();
        } catch (Exception $e) {
            report ($e);

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


        return view('berita', [
            'beritas' => $beritaTerbaru,
            'beritaCarousel' => $beritaCarouselTerbaru,
            'beritaPerTahun' => $beritaPerTahun,
            'videos' => $allVideo,
            'title' => 'Berita'
            ]);
    }

    public function show($id)
    {
        $berita = DB::table('berita')
            ->where('id', $id)
            ->get();

        return $berita;
    }
}
