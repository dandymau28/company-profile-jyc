<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fotoModel as FotoModel;

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
        // file validation
        // $this->validate($request, [
        //     'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $uploadedPhoto = $request->file('images');        
        
        $id_kegiatan = $request->input('pilih-kegiatan');
        // {{ Storage::url($foto->alamat_foto) }}
        // return $id_kegiatan;
        // if validation success
        // $images = array();

        // if($request->file('images') != NULL) {
            // dd('woy');
            // $files = $request->file('images');
            foreach($uploadedPhoto as $index => $file) {
                $name = $id_kegiatan.'-'.$index.'-'.time().'.'.$file->getClientOriginalExtension();
                // $path = $request->file('images')->store('kegiatan');
                
                $pathPhoto = $file->storeAs('public/img/', $name);
                // if($file->move($path, $name)) {
                    // $images[]   =   $name;
                $saveResult   =   FotoModel::create([
                    'id_kegiatan' => $id_kegiatan,
                    'alamat_foto' => '/img/'.$name
                    ]);
                // }
            }

            return back()->with("success", "File uploaded successfully");
    }
}
