<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cabModel as CAB;
use App\Http\Controllers\cab\cabController as Pdf;
// use App\Jobs\sendMailVerified as VerifMail;
use DB;
use App\Mail\verifMail;
use Illuminate\Support\Facades\Mail;

class updateVerify extends Controller
{
    public function verify($id)
    {
        try {
            DB::beginTransaction();
            $update = DB::table('kode_pembayaran_cab')
                ->where('id_cab',$id)
                ->update([
                    'status' => 'paid'
                ]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('error','gagal verifikasi. Error Code='.$e->getCode());
        }

        
        $cab = CAB::find($id)->kodebayar()->first();
        $data = DB::table('cab')->where('id',$id)->first();

        $kode_bayar = $cab->kode_bayar;

        //tambah dispatch untuk mengirim verifikasi email
        // VerifMail::dispatch($data->email, $pdf);

        //send email
        Mail::to($data->email)
            ->queue(new verifMail($kode_bayar));

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
