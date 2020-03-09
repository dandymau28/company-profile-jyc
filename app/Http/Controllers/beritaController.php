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
        $berita = DB::table('berita')
            ->where(DB::raw('YEAR(tgl_publish)=2015'))
            ->orderBy('tgl_publish','desc')
            ->take(3)
            ->get();

        //Berita Terbaru untuk Carousel
        $beritaCarouselTerbaru = DB::table('berita')
            ->latest()
            ->take(5)
            ->get();

        return view('beranda', [
            'berita' => $beritaTerbaru,
            'beritaByYear' => $beritaByYear,
            'beritaCarousel' => $beritaCarouselTerbaru
            ]);
    }
}
