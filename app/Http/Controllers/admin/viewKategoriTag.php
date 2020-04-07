<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\adminController as Admin;
use DB;

class viewKategoriTag extends Controller
{
    public function viewKategoriTag()
    {
        $kategori = DB::table('kategori')->oldest()->get();
        $tag = DB::table('tag')->latest()->get();
        $admin = new Admin;

        return view('admin.berita.tambahKategoridanTag', [
            'kategori' => $admin->countKategori(),
            'tag' => $tag
        ]);
    }
}
