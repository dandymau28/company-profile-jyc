<?php

namespace App\Http\Controllers;

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
            $beritaTerbaru = DB::table('berita')->latest()->take(4)->get();
        } catch (Exception $e) {
            return $e;
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

        return view('beranda', [
            'beritas' => $beritaTerbaru,
            'beritaCarousel' => $beritaCarousel,
            'title' => 'Beranda',
            'nav' => 'beranda'
            ]);
    }
}
