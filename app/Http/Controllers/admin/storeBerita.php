<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\beritaModel as Berita;
use \Carbon\Carbon;
use DB;
use App\Http\Controllers\loginSystem\statusAuth as Admin;

class storeBerita extends Controller
{
    public function store(Request $request)
    {
        $admin = new Admin;
        $admin = $admin->checkAuth()->id;

        switch ($request->input('action')) {
            case 'post':
                $validatedData = Validator::make($request->all(),[
                    'judul' => 'required|unique:berita,judul',
                    'image' => 'file|max:1024|mimes:png,jpg,jpeg',
                    'isi_berita' => 'required'
                ]);
                if($validatedData->fails()){
                    return back()->with('error',$validatedData->errors());
                };

                //slug judul
                $slug = Str::slug($request->judul,'-');

                //get ID for banner
                $data = DB::table('berita')->whereNull('deleted_at')->whereNotNull('tgl_publish')->latest()->first();
                if(!$data){
                    $currentID = 1;
                } else {
                   $latestID = $data->id;
                   $currentID = $latestID +1;
                }
                //upload foto
                if($request->file('image')){
                    $uploadFoto = $request->file('image');
                    $name = 'banner'.'-'.$currentID.'.'.$uploadFoto->getClientOriginalExtension();
                    $pathPhoto = $uploadFoto->storeAs('public/assets/img', $name);
                } else {
                    $pathPhoto = 'public/assets/img/no-image-available.jpg';
                }

                //adding tag
                if($request->input('tag')){
                    $tags = $request->input('tag');
                    $tag = implode(',', $tags);
                } else {
                    $tag = NULL;
                }

                //penentuan tanggal
                $tanggal = Carbon::now();
                // return $tanggal;
                // dd($tanggal);
                
                //jika berita tidak penting
                if(!$request->input('penting')){
                    $penting = '0';
                } else {
                    $penting = '1';
                }

                //simpan data
                try {
                    $saveData = Berita::create([
                        'judul' => $request->judul,
                        'slug' => $slug,
                        'banner' => $pathPhoto,
                        'isi_berita' => $request->isi_berita,
                        'id_user' => $admin,
                        'kategori' => $request->kategori,
                        'tgl_publish' => $tanggal,
                        'status' => 'terbit',
                        'penting' => $penting,
                        'tag' => $tag,
                    ]);

                    return back()->with("success", "Berita berhasil di-post");
                } catch (Exception $e) {
                    return back()->with("error", $e->getMessage());
                    // return $error = [
                    //     'code' => $e->getCode(),
                    //     'message' => $e->getMessage()
                    // ];
                }
                break;

            case 'save':
                $validatedData = Validator::make($request->all(),[
                    'judul' => 'required|unique:berita,judul',
                    'image' => 'file|size:1024|mimes:jpeg,jpg,png',
                    'isi_berita' => 'required'
                ]);
                if($validatedData->fails()){
                    return back()->with('error',$validatedData->errors());
                };

                //slug judul
                $slug = Str::slug($request->judul,'-');

                //get ID for banner
                $data = DB::table('berita')->whereNull('deleted_at')->whereNotNull('tgl_publish')->latest()->first();
                $latestID = $data->id;
                $currentID = $latestID + 1;

                //upload foto
                if($request->file('image')){
                    $uploadFoto = $request->file('image');
                    $name = 'banner'.'-'.$currentID.'.'.$uploadFoto->getClientOriginalExtension();
                    $pathPhoto = $uploadFoto->storeAs('public/assets/img', $name);
                } else {
                    $pathPhoto = 'public/assets/img/no-image-available.jpg';
                }

                //adding tag
                if($request->input('tag')){
                    $tags = $request->input('tag');
                    $tag = implode(',', $tags);
                } else {
                    $tag = NULL;
                }
                
                //jika berita tidak penting
                if(!$request->input('penting')){
                    $penting = '0';
                } else {
                    $penting = $request->input('penting');
                }

                //simpan data
                try {
                    $saveData = Berita::create([
                        'judul' => $request->judul,
                        'slug' => $slug,
                        'banner' => $pathPhoto,
                        'isi_berita' => $request->isi_berita,
                        'status' => 'belum_terbit',
                        'id_user' => $admin,
                        'kategori' => $request->kategori,
                        'tgl_publish' => NULL,
                        'penting' => $penting,
                        'tag' => $tag
                    ]);
                    
                    return back()->with("success", "Berita berhasil disimpan");
                } catch (Exception $e) {
                    return back()->with("error", $e->getMessage());
                    // return $error = [
                    //     'code' => $e->getCode(),
                    //     'message' => $e->getMessage()
                    // ];
                }
                break;
        }
    }
}
