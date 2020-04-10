<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\kategoriModel as Kategori;
use App\Models\tagModel as Tag;
use App\Models\prestasiModel as Prestasi;
use App\Models\penghargaanModel as Penghargaan;
use App\Models\cabModel as CAB;
use Intervention\Image\ImageManagerStatic as Image;
class tambahPrestasi extends Controller
{
    public function tambahPrestasi(Request $request)
    {
        $getID = DB::table('prestasi')->latest()->first();
        if($getID) {
            $latestID = $getID->id;
            $idFoto = $latestID + 1;
        } else {
            $idFoto = 1;
        }

        //upload foto
        if($request->file('logo_kompetisi')){
            $uploadFoto = $request->file('logo_kompetisi');
            $logo = $idFoto.'-logo'.'.'.$uploadFoto->getClientOriginalExtension();
            // $pathLogo = $uploadFoto->storeAs('public/assets/img', $logo);

            $image = Image::make($request->file('logo_kompetisi'));
            $image->fit(1200, 800, function ($constraint) {
                $constraint->upsize();
            });
            $image->save('assets/img/prestasi/'.$logo, 100);
            $pathLogo = '/assets/img/prestasi/'.$logo;

        } else {
            $pathLogo = 'public/assets/img/705-1585565895.jpg';
        }

        //upload foto
        if($request->file('foto_tim')){
            $uploadFoto = $request->file('foto_tim');
            $tim = $idFoto.'-tim'.'.'.$uploadFoto->getClientOriginalExtension();
            // $pathTim = $uploadFoto->storeAs('public/assets/img', $tim);

            $image = Image::make($request->file('foto_tim'));
            $image->fit(1200, 800, function ($constraint) {
                $constraint->upsize();
            });
            $image->save('assets/img/prestasi/'.$tim, 100);
            $pathTim = '/assets/img/prestasi/'.$tim;
        } else {
            $pathTim = 'public/assets/img/705-1585565895.jpg';
        }

        //upload foto
        if($request->file('foto_piala')){
            $uploadFoto = $request->file('foto_piala');
            $piala = $idFoto.'-piala'.'.'.$uploadFoto->getClientOriginalExtension();
            // $pathPiala = $uploadFoto->storeAs('public/assets/img', $piala);

            $image = Image::make($request->file('foto_piala'));
            $image->fit(1200, 800, function ($constraint) {
                $constraint->upsize();
            });
            $image->save('assets/img/prestasi/'.$piala, 100);
            $pathPiala = '/assets/img/prestasi/'.$piala;
        } else {
            $pathPiala = 'public/assets/img/705-1585565895.jpg';
        }

        $gelar = $request->input('gelar');
        try {
            $prestasi = new Prestasi;
            $prestasi->nama_kompetisi = $request->input('nama_kompetisi');
            $prestasi->kota = $request->input('kota');
            $prestasi->negara = $request->input('negara');
            $prestasi->tgl_kompetisi = $request->input('tgl_kompetisi');
            $prestasi->logo_kompetisi = $pathLogo;
            $prestasi->foto_tim = $pathTim;
            $prestasi->foto_piala = $pathPiala;
            $prestasi->save();

            if ($request->input('gelar')) {
                foreach($gelar as $satuan) {
                    $penghargaan = new Penghargaan;
                    $penghargaan->gelar = $satuan;
                    $prestasi->penghargaans()->save($penghargaan);
                }
            }
        } catch (Exception $e) {
            return back()->with('errors','Silakan hubungi tim pengembang. Error Code: '.$e->getCode());
        }

        return back()->with('success','berhasil menambahkan data prestasi');
    }
}
