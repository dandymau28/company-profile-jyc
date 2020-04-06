<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class terimaBuktiBayar extends Controller
{
    public function terimaBuktiBayar($kode_bayar)
    {
        $data = DB::table('cab')
                ->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                ->where('kode_pembayaran_cab.kode_bayar',$kode_bayar)
                ->select('cab.*','kode_pembayaran_cab.*')
                ->first();
                
        $person = $data->nama;

        //upload foto
        $uploadFoto = $request->file('image');
        $name = 'buktipembayaran'.'-'.$person.'-'.$kode_bayar.'.'.$uploadFoto->getClientOriginalExtension();
        $fotoBukti = $uploadFoto->storeAs('public/pembayaran', $name);

        $data = DB::table('kode_pembayaran_cab')
                ->where('kode_bayar', $kode_bayar)
                ->update([
                    'foto_bukti' => $fotoBukti
                ]);

        return back()->with('success','Berhasil upload bukti');
    }
}
