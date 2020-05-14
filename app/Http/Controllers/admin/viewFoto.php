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
            $kategori = DB::table('kategori_foto')->get();
        } catch (Exception $e) {
            return $hasil = [
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ];
        }
        return view('admin.foto.index', [
            "title" => "Upload Foto",
            "kategori" => $kategori
            ]);
    }
}
