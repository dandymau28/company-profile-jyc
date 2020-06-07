<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Carbon\Carbon;
use Illuminate\Support\Str;
use DB;
use App\Http\Controllers\loginSystem\statusAuth as Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class updateBerita extends Controller
{
    public function updateBerita(Request $request, $id)
    {
                $admin = new Admin;
                $admin = $admin->checkAuth()->id;
                
                $messages = [
                    'slug.unique' => 'Sudah ada judul yang sama. Pastikan Anda memposting judul yang berbeda',
                    'required' => ':attribute harus terisi',
                    'size' => ':attribute ukuran tidak lebih dari 1MB',
                    'mimes' => ':attribute format file harus berupa JPEG, JPG, atau PNG'
                ];

                $validatedData = Validator::make($request->all(),[
                    'image' => 'file|size:1024|mimes:jpeg,jpg,png',
                    'isi_berita' => 'required'
                ],$messages);

                //slug judul
                $slug = Str::slug($request->judul,'-');

                $checkSlug = ['slug' => $slug];
                Validator::make($checkSlug, [
                    'slug' => 'unique:berita,slug,NULL,id,deleted_at,NULL',
                ], $messages)->validate();


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
                    $oldName = explode('.',$request->input('pathPhoto'));
                    if($oldName[0] = 'no-image-available') {
                        $name = 'banner'.'-'.$id.'.'.$uploadFoto->getClientOriginalExtension();
                        $pathPhoto = $uploadFoto->storeAs('public/assets/img', $name);
                    } else if (explode('-', $oldName[0]) != $id) {
                        $name = 'banner'.'-'.$id.'.'.$uploadFoto->getClientOriginalExtension();
                        $pathPhoto = $uploadFoto->storeAs('public/assets/img', $name);
                    } else {
                        $name = $oldName[0]. '.' .$uploadFoto->getClientOriginalExtension();
                        $pathPhoto = $uploadFoto->storeAs($name, "");
                    }
                } else {
                    $pathPhoto = $request->input('pathPhoto');
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
                    $cekData = DB::table('berita')->where('id', $id)->first();
                    if ($cekData->tgl_publish != NULL) {
                        $publish = $cekData->tgl_publish;
                        $status = 'terbit';
                    } else {
                        $publish = Carbon::now();
                        $status = 'terbit';
                    }
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
