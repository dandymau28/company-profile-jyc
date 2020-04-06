<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class viewVideo extends Controller
{
    public  function videoView()
    {
        try{
            $kegiatans = DB::table('kegiatan')->get();
        } catch (Exception $e) {
            return $hasil = [
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ];
        }

        return view('admin.video.video',[
            'kegiatans' => $kegiatans
        ]);
    }
}
