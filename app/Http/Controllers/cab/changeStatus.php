<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Jobs\sendMailCAB;

class changeStatus extends Controller
{
    public function change($id)
    {
        try {
            DB::beginTransaction();

            $data = DB::table('cab')->where('id',$id)->update([
                'status_cab' => 'kandidat'
            ]);

            $kode_bayar = Str::uuid();

            $insert = DB::table('kode_pembayaran_cab')
                        ->insert([
                            'id_cab' => $id,
                            'kode_bayar' => $kode_bayar,
                            'status' => 'not_paid'
                        ]);
            
            $data = DB::table('cab')->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                    ->where('cab.id',$id)
                    ->whereNull('cab.deleted_at')
                    ->select('cab.*','kode_pembayaran_cab.*')
                    ->first();

            sendMailCAB::dispatch($data);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('error','Gagal update data. Error message= '.$e->getMessage());
        }
        
        return back()->with('success','Berhasil update data.');
    }
}
