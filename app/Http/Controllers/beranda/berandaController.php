<?php

namespace App\Http\Controllers\beranda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class berandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function beranda()
    {
        try {
            //4 Berita Terbaru
            $beritaTerbaru = DB::table('berita')->latest()->whereNull('deleted_at')->take(4)->get();
        } catch (Exception $e) {
            return $e;
        }

        if(empty($beritaTerbaru)){
            $beritaTerbaru = 'Tidak ada berita yang dapat ditampilkan';
        }

        try {
            //Berita Terbaru untuk Carousel
            $beritaCarousel = DB::table('berita')
                ->where('penting','1')
                ->latest()
                ->take(5)
                ->get();
        }catch (Exception $e) {
            return $e;
        }

        if(empty($beritaCarousel)){
            $beritaCarousel = 'Tidak ada berita yang dapat ditampilkan';
        }

        return view('beranda', [
            'beritas' => $beritaTerbaru,
            'beritaCarousel' => $beritaCarousel,
            'title' => 'Beranda',
            'nav' => 'beranda'
            ]);
    }
}
