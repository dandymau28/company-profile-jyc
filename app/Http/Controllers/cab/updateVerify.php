<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cabModel as CAB;
use DB;

class updateVerify extends Controller
{
    public function verify($id)
    {
        try {
            DB::transaction(function () {
                $update = DB::table('kode_pembayaran_cab')
                    ->where('id_cab',$id)
                    ->update([
                        'status' => 'paid'
                    ]);
            });
        } catch (Exception $e) {
            return back()->with('error','gagal verifikasi. Error Code='.$e->getCode());
        }

        
        $data = CAB::find($id)->get();

        if($data) {
            $pdf = PDF::loadView('mail.pdf.data-diri',$data);
            $pdf = $pdf->stream();
        } else {
            $pdf = PDF::loadHTML('<h1>Data tidak ditemukan!</h1><br/>Silakan hubungi admin melalui contact us.');
            $pdf = $pdf->stream();
        }
        //tambah dispatch untuk mengirim verifikasi email
        

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
