<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class viewBuktiBayar extends Controller
{
    public function viewBuktiBayar($kode_bayar)
    {
        $data = DB::table('cab')
                ->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                ->where('kode_pembayaran_cab.kode_bayar',$kode_bayar)
                ->whereNull('deleted_at')
                ->select('cab.*','kode_pembayaran_cab.kode_bayar')
                ->first();
        
        if(!$data->isEmpty()) {
            return view('',[
                'data' => $data,
            ]);
        } else {
            return '<center>Data tidak ditemukan. Silakan lakukan pendaftaran terlebih dahulu atau hubungi kami melalui <a href="127.0.0.1:8000/tentang-kami">Contact Us</a></center>';
        }

    }
}
