<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class viewFoto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        try{
            $kegiatans = DB::table('kegiatan')->get();
        } catch (Exception $e) {
            return $hasil = [
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ];
        }
        return view('admin.foto.index', [
            "title" => "Upload Foto",
            "kegiatans" => $kegiatans
            ]);
    }
}
