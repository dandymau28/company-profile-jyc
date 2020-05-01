<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class viewOprec extends Controller
{
    public function view()
    {
        $data = DB::table('info_oprec')->whereNull('deleted_at')->latest()->get();
        $jadwal_aud = DB::table('jadwal_audisi')->whereNull('deleted_at')->latest()->get();

        return view('admin.kegiatan.oprec',[
            'oprec' => $data,
            'jadwal' => $jadwal_aud
        ]);
    }
}
