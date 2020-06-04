<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Carbon\Carbon;
use Illuminate\Support\Str;
use DB;
use App\Http\Controllers\loginSystem\statusAuth as Admin;

class updateBerita extends Controller
{
    public function updateBerita(Request $request, $id)
    {
                $admin = new Admin;
                $admin = $admin->checkAuth()->id;

                //slug judul
                $slug = Str::slug($request->judul,'-');

                //upload foto
                // if($request->file('image')){
                //     $uploadFoto = $request->file('image');
                //     $name = rand(1,999).'-'.time().'.'.$uploadFoto->getClientOriginalExtension();
                //     $pathPhoto = $uploadFoto->storeAs('public/assets/img', $name);
                // } else {
                //     $pathPhoto = 'public/assets/img/705-1585565895.jpg';
                // }

                //upload foto
                if($request->file('image')){
                    $uploadFoto = $request->file('image');
                    $name = 'banner'.'-'.$id.'.'.$uploadFoto->getClientOriginalExtension();
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

                if(!$request->input('publish')){
                    $publish = NULL;
                    $status = 'belum_terbit';
                } else {
                    $publish = Carbon::now();
                    $status = 'terbit';
                }

                //simpan data
                try {
                    $saveData = DB::table('berita')->where('id', $id)
                    ->update([
                        'judul' => $request->judul,
                        'slug' => $slug,
                        'banner' => $pathPhoto,
                        'isi_berita' => $request->isi_berita,
                        'status' => $status,
                        'id_user' => $admin,
                        'kategori' => $request->kategori,
                        'penting' => $penting,
                        'tgl_publish' => $publish,
                        'tag' => $tag,
                    ]);
                    // return $saveData;

                    // $saveData = DB::raw("update 'berita' set 'tgl_publish' = ".$publish." where 'berita'.'id' = ".$id);
                    return redirect()->route('olah-berita')->with('success','berita berhasil disimpan');
                } catch (Exception $e) {
                    return $error = [
                        'code' => $e->getCode(),
                        'message' => $e->getMessage()
                    ];
                }
    }
}
