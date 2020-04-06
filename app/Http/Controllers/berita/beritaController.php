<?php

namespace App\Http\Controllers\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class beritaController extends Controller
{
    public function beritaHangat()
    {
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

        return $beritaTerhangat;
    }
}