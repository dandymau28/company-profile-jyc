<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotoModel;
use App\Models\videoModel as Video;
use DB;

class galeriController extends Controller
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
                    'alamat_foto' => 'img/'.$name
                    ]);
                // }
            }

            return back()->with("success", "File uploaded successfully");
        // }
    
    }

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

    public  function video(Request $request)
    {
        try {
            $saveData = Video::create([
                'alamat' => $request->input('alamat'),
                'id_user' => 1,
            ]);

            return back()->with('success','berhasil submit');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function galeriView()
    {
        $foto = DB::table('foto')->latest()->get();

        $video = DB::table('video')->latest()->get();

        return view('admin.video.galeri',[
            'foto' => $foto,
            'video' => $video
        ]);
    }
}
