<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    public function berita(Request $request)
    {
        
    }

    public function showCAB()
    {
        $calonAnggota = DB::table('cab')->get();

        return view('admin.anggota.cab',[
            'cab' => $calonAnggota,
            'title' => 'CAB'
        ]);
    }
}
