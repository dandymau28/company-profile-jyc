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
                ->select('cab.*','kode_pembayaran_cab.*')
                ->first();

        return view('',[
            'data' => $data,
        ]);
    }
}
