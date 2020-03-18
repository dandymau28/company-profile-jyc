<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotoModel;
class UploadFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.foto.index', ["title" => "Upload Foto"]);
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
        $this->validate($request, [
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // if validation success
        $images       =       array();

        if($files     =       $request->file('images')) {
            console.log('woy');
            foreach($files as $file) {
                $name     =    time().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('/assets/img/galeri');

                if($file->move($destinationPath, $name)) {
                    $images[]   =   $name;
                    $saveResult   =   FotoModel::create([
                        'id_kegiatan' => 1,
                        'alamat_foto' => $name
                        ]);
                }
            }

            return back()->with("success", "File uploaded successfully");
        }
    
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
