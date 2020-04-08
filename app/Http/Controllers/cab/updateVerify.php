<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class updateVerify extends Controller
{
    public function verify($id)
    {
        try {
            $data = DB::table('kode_pembayaran_cab')
                ->where('id_cab',$id)
                ->update([
                    'status' => 'paid'
                ]);
        } catch (Exception $e) {
            return back()->with('error','gagal verifikasi. Error Code='.$e->getCode());
        }
        return back()->with('success','berhasil verifikasi');
    }

    public function unverify($id)
    {
        try {
            $cek = DB::table('kode_pembayaran_cab')
                        ->where('id_cab',$id)
                        ->first();
            
            if(!$cek->foto_bukti) {
                $data = DB::table('kode_pembayaran_cab')
                            ->where('id_cab',$id)
                            ->update([
                                'status' => 'not_paid'
                            ]);
            } else {
                $data = DB::table('kode_pembayaran_cab')
                            ->where('id_cab',$id)
                            ->update([
                                'status' => 'wait_conf'
                            ]);
            }
        } catch (Exception $e) {
            return back()->with('error','gagal menghapus verifikasi');
        }
        return back()->with('success','berhasil menghapus verifikasi');
    }
}
