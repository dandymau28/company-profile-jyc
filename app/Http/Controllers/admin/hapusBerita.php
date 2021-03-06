<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\beritaModel as Berita;

class hapusBerita extends Controller
{
    public function hapusBerita($id)
    {
        $berita = Berita::find($id);
        if(empty($berita)) {
            return back()->with('success', 'Berita tidak ditemukan');
        }
        $berita->delete();

        return back()->with('success','Berita berhasil dihapus');
    }
}
