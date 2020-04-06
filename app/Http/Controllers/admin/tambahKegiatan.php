<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kegiatanModel as Kegiatan;

class tambahKegiatan extends Controller
{
    public function tambahKegiatan(Request $request)
    {
        $saveData = Kegiatan::create([
            'nama' => $request->nama_kegiatan,
            'jenis' => $request->jenis,
        ]);

        return back()->with('success','kegiatan berhasil ditambahkan');
    }
}
