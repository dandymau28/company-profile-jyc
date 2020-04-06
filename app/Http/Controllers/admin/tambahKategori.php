<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kategoriModel as Kategori;

class tambahKategori extends Controller
{
    public function tambahKategori(Request $request)
    {
        $kategori = Kategori::create([
            'nama_kategori' => $request->input('nama_kategori'),
        ]);

        return back()->with('success','berhasil menambahkan kategori');
    }
}
