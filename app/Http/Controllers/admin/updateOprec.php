<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class updateOprec extends Controller
{
    public function openOprec($id) {
        DB::table('info_oprec')->where('id', $id)->update([
            'status' => 'buka'
        ]);

        return back()->with('success', 'Berhasil update status');
    }

    public function closeOprec($id) {
        DB::table('info_oprec')->where('id', $id)->update([
            'status' => 'tutup'
        ]);

        return back()->with('success', 'Berhasil update status');
    }
}
