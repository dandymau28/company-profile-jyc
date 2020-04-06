<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class editCAB extends Controller
{
    public function editCAB($id)
    {
        $data = DB::table('cab')
                ->join('kode_pembayaran_cab', 'cab.id','=','kode_pembayaran_cab.id_cab')
                ->select('cab.*','kode_pembayaran_cab.*')
                ->where('cab.id',$id)
                ->first();

        return view('admin.anggota.detail');
    }
}
