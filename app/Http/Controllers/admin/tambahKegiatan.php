<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kegiatanModel as Kegiatan;
use DB;

class tambahKegiatan extends Controller
{
    public function tambahKegiatan(Request $request)
    {
        $cek = DB::table('kategori_foto')->where('nama', $request->nama)->first();

        if(!empty($cek)){
            return back()->with('error', 'Kategori sudah ada!');
        } else {
            $saveData = DB::table('kategori_foto')->insert([
                "nama" => $request->nama
            ]);
    
            return back()->with('success','Kategori berhasil ditambahkan');
        }
    }
}
