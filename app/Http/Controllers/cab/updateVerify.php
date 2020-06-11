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
use Illuminate\Support\Facades\Auth;

class updateVerify extends Controller
{
    public function verify($id)
    {
        try {
            DB::beginTransaction();
            $user_id = Auth::id();
            $update = DB::table('kode_pembayaran_cab')
                ->where('id_cab',$id)
                ->update([
                    'status' => 'paid',
                    'verified_by' => $user_id
                ]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('error','gagal verifikasi. Error Code='.$e->getCode());
        }

        
        $cab = CAB::find($id)->kodebayar()->first();
        $data = DB::table('cab')->where('id',$id)->first();
        $audisiCAB = CAB::find($id)->audisi()->first();
        $linkGrup = $audisiCAB->link_grup;

        $kode_bayar = $cab->kode_bayar;
        $nama = $data->nama_panggilan;
        //tambah dispatch untuk mengirim verifikasi email
        // VerifMail::dispatch($data->email, $pdf);

        //send email
        Mail::to($data->email)
            ->queue(new verifMail($kode_bayar, $nama, $linkGrup));

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
