<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fotoModel as FotoModel;
use DB;

class storeFoto extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            // file validation
            // $this->validate($request, [
            //     'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
            $uploadedPhoto = $request->file('images');        
            
            $kategori = trim($request->input('kategori'));
            // return $kategori;
            $deskripsi = $request->input('deskripsi');
            // {{ Storage::url($foto->alamat_foto) }}
            // return $id_kegiatan;
            // if validation success
            // $images = array();
    
            // if($request->file('images') != NULL) {
                // dd('woy');
                // $files = $request->file('images');
            foreach($uploadedPhoto as $index => $file) {
                $name = $kategori.'-'.$index.'-'.time().'.'.$file->getClientOriginalExtension();
                // $path = $request->file('images')->store('kegiatan');
                
                $pathPhoto = $file->storeAs('public/img/', $name);
                // if($file->move($path, $name)) {
                    // $images[]   =   $name;
                $saveResult   =   FotoModel::create([
                    'kategori' => $kategori,
                    'deskripsi' => $deskripsi,
                    'alamat_foto' => '/img/'.$name
                    ]);
                // }
            }
            DB ::commit();
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('error','Gagal upload file. Error Message= '.$e->getMessage());
        }

            return back()->with("success", "Berhasil upload file.");
    }
}
