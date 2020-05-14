<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class viewKegiatan extends Controller
{
    public function kegiatan()
    {
        $kegiatan = DB::table('kategori_foto')->latest()->get();

        return view('admin.kegiatan.kegiatan',[
            'kegiatan' => $kegiatan,
        ]);
    }
}
