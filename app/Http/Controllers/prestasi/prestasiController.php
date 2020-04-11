<?php

namespace App\Http\Controllers\prestasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class prestasiController extends Controller
{
    public function prestasi()
    {
        try {
            $prestasi = DB::table('prestasi')
                ->oldest()
                ->get();

            $gelar = DB::table('penghargaan')
                ->oldest()
                ->get();
        } catch (Exception $e) {
            $prestasi = $e->getMessage();
        }

        return view('prestasi',[
            'prestasis' => $prestasi,
            'gelars' => $gelar,
            'title' => 'Prestasi',
            'nav' => 'prestasi'
        ]);
    }
}
