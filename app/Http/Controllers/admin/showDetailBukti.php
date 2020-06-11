<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class showDetailBukti extends Controller
{
    public function show($id) {
        $file = DB::table('kode_pembayaran_cab')->where('id_cab', $id)->first();
        $file = $file->foto_bukti;

        return view('admin.details',[
            'img' => $file
        ]);
    }
}
