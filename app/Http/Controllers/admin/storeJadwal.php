<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class storeJadwal extends Controller
{
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $insert = DB::table('jadwal_audisi')->insert([
                'tanggal' => $request->input('tanggal'),
                'kuota' => $request->input('kuota'),
                'link_grup' => $request->input('link_grup'),
                'batch' => $request->input('batch')
            ]);
        
            DB::commit();
            return back()->with('success', 'Berhasil input data');
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('error', 'Gagal menginput data. Error Message: '.$e->getMessage());
        }
    }
}
