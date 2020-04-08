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
                ->latest()
                ->get();

            $gelar = [];
            foreach($prestasi as $item) {
                $penghargaan = DB::table('penghargaan')
                    ->where('prestasi_id', $item->id)
                    ->get();

                $gelar = $penghargaan;
            }
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
