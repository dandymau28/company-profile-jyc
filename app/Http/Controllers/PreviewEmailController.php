<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AfterRegister as ar;
use App\Mail\verifMail as verif;
use App\Models\cabModel as CAB;
use DB;

class PreviewEmailController extends Controller
{
    public function emailAR() {
        $data = DB::table('cab')->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                    ->whereNull('cab.deleted_at')
                    ->select('cab.*','kode_pembayaran_cab.*')
                    ->first();

        return new ar($data);
    }

    public function emailVerif() {
        $cab = DB::table('cab')->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                    ->whereNull('cab.deleted_at')
                    ->select('cab.*','kode_pembayaran_cab.*')
                    ->first();

        $kode_bayar = $cab->kode_bayar;

        return new verif($kode_bayar);
    }
}
