<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\prestasiModel as Prestasi;

class hapusPrestasi extends Controller
{
    public function hapusPrestasi($id)
    {
        try {
            $prestasi = Prestasi::find($id);
            if($prestasi->isEmpty()) {
                return back()->with('errors','Prestasi tidak ditemukan');
            }
            $prestasi->delete();
        } catch (Exception $e) {
            return back()->with('errors', $e->getMessage());
        }

        return back()->with('success','berhasil menghapus data prestasi');
    }
}
