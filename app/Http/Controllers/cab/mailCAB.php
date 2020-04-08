<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use \Carbon\Carbon;
use App\Mail\AfterRegister;
use Illuminate\Support\Facades\Mail;
use PDF;
use Uuid;

class mailCAB extends Controller
{
    public function nextStep($id)
    {
        $year = Carbon::now()->format('Y');

        $pendaftar = DB::table('cab')
                    ->where(DB::raw("YEAR(created_at)",$year))
                    ->count();

        $waktu = Carbon::now()->format('YMd');

        if ($pendaftar < 90) {
            $kode_bayar = Uuid::generate()->string;

            $insert = DB::table('kode_pembayaran_cab')
                        ->insert([
                            'id_cab' => $id,
                            'kode_bayar' => $kode_bayar,
                            'status' => 'not_paid'
                        ]);
                
            $cab = DB::table('cab')->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                        ->where('cab.id',$id)
                        ->whereNull('cab.deleted_at')
                        ->select('cab.*','kode_pembayaran_cab.*')
                        ->first();

            $data = [
                'status' => 'Berhasil',
                'identitas' => $cab,
            ];

            // $pdf = PDF::loadView('mail.success',$data);
            // $pdf = $pdf->stream();
            // Mail::to($cab->email)
            //     ->send(new AfterRegister($data));

        } elseif ($pendaftar >= 90 && $pendaftar < 110) {
            $cab = DB::table('cab')
                        ->where('id',$id)
                        ->whereNull('deleted_at')
                        ->first();
            
            $data = [
                'status' => 'Waiting List',
                'identitas' => $cab
            ];

            // Mail::to($cab->email)
            //     ->send(new AfterRegister($data));
        } else {
            return back()->with('error', 'Maaf pendaftaran sudah penuh, silakan coba tahun depan');
        }
        return back()->with('success', 'Anda berhasil mendaftar, silakan cek email untuk info selanjutnya. Jika Anda belum mendapatkan email dalam 1x24 jam, silakan hubungi kami pada Contact Us');
    }
}
