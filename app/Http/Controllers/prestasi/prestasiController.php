<?php

namespace App\Http\Controllers;

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
        } catch (Exception $e) {
            $prestasi = $e->getMessage();
        }

        return view('prestasi',[
            'prestasis' => $prestasi,
            'title' => 'prestasi',
            'nav' => 'prestasi'
        ]);
    }
}
