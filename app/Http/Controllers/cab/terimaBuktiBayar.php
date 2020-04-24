<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class terimaBuktiBayar extends Controller
{
    public function terimaBuktiBayar(Request $request)
    {
        $kode_bayar = $request->input('kode_bayar');
        $data = DB::table('cab')
                ->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                ->where('kode_pembayaran_cab.kode_bayar',$kode_bayar)
                ->select('cab.*','kode_pembayaran_cab.*')
                ->first();
                
        if (empty($data)) {
            return back()->with('error','Data tidak ditemukan. Silakan hubungi tim kami pada Contact Us');
        } 

        $person = $data->nama_panggilan;

        //upload foto
        $uploadFoto = $request->file('image');
        $name = $kode_bayar.'.'.$uploadFoto->getClientOriginalExtension();
        $fotoBukti = $uploadFoto->storeAs('public/pembayaran', $name);

        try {
            $data = DB::table('kode_pembayaran_cab')
                    ->where('kode_bayar', $kode_bayar)
                    ->update([
                        'foto_bukti' => $fotoBukti,
                        'status' => 'wait_conf'
                    ]);
        } catch (Exception $e) {
            return back()->with('error','Terjadi kesalahan Error Code: '.$e->getCode().'. Silakan hubungi tim kami pada Contact Us');
        }

        return back()->with('success','Berhasil upload bukti pembayaran');
    }
}
