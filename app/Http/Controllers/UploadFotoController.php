<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotoModel;
use DB;
class UploadFotoController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
        // }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
