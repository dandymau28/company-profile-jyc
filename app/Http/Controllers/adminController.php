<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\beritaModel as Berita;
use App\Models\kategoriModel as Kategori;
use App\Models\tagModel as Tag;
use App\Models\prestasiModel as Prestasi;
use App\Models\penghargaanModel as Penghargaan;
use Illuminate\Support\Facades\Storage;
use \Carbon\Carbon;
use Illuminate\Support\Str;

class adminController extends Controller
{
    public function berita(Request $request)
    {
        
    }

    public function showCAB()
    {
        $calonAnggota = DB::table('cab')->get();

        return view('admin.anggota.cab',[
            'cab' => $calonAnggota,
            'title' => 'CAB'
        ]);
    }

    public function store(Request $request)
    {
        switch ($request->input('action')) {
            case 'post':
                //slug judul
                $slug = Str::slug($request->judul,'-');

                //upload foto
                if($request->file('image')){
                    $uploadFoto = $request->file('image');
                    $name = rand(1,999).'-'.time().'.'.$uploadFoto->getClientOriginalExtension();
                    $pathPhoto = $uploadFoto->storeAs('public/assets/img', $name);
                } else {
                    $pathPhoto = 'public/assets/img/705-1585565895.jpg';
                }

                //adding tag
                if($request->input('tag')){
                    $tags = $request->input('tag');
                    $tag = implode(',', $tags);
                }

                //penentuan tanggal
                $tanggal = Carbon::now();
                // return $tanggal;
                // dd($tanggal);
                //simpan data

                //jika berita tidak penting
                if(!$request->input('penting')){
                    $penting = '0';
                } else {
                    $penting = $request->input('penting');
                }

                try {
                    $saveData = Berita::create([
                        'judul' => $request->judul,
                        'slug' => $slug,
                        'banner' => $pathPhoto,
                        'isi_berita' => $request->isi_berita,
                        'id_user' => 1,
                        'kategori' => $request->kategori,
                        'tgl_publish' => $tanggal,
                        'status' => 'terbit',
                        'penting' => $penting,
                        // 'tag' => $tag,
                    ]);

                    return back()->with("success", "Berita berhasil di-post");
                } catch (Exception $e) {
                    return $error = [
                        'code' => $e->getCode(),
                        'message' => $e->getMessage()
                    ];
                }
                break;

            case 'save':
                //slug judul
                $slug = Str::slug($request->judul,'-');

                //upload foto
                if($request->file('image')){
                    $uploadFoto = $request->file('image');
                    $name = rand(1,999).'-'.time().'.'.$uploadFoto->getClientOriginalExtension();
                    $pathPhoto = $uploadFoto->storeAs('public/assets/img', $name);
                } else {
                    $pathPhoto = 'public/assets/img/705-1585565895.jpg';
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
                        'id_user' => 1,
                        'kategori' => $request->kategori,
                        'tgl_publish' => NULL,
                        'penting' => $penting,
                    ]);
                    
                    return back()->with("success", "Berita berhasil disimpan");
                } catch (Exception $e) {
                    return $error = [
                        'code' => $e->getCode(),
                        'message' => $e->getMessage()
                    ];
                }
                break;
        }
    }

    public function create()
    {
        $kategori = DB::table('kategori')
                    ->latest()
                    ->get();
        
        return view('admin.berita.buatBerita',[
            'title' => "Buat Berita",
            'kategoris' => $kategori
        ]);
    }

    public function countByKategori()
    {
        
        $kategori = DB::table('kategori')
                    ->latest()->get();
        $koleksi = [];
        // return $kategori;
        foreach($kategori as $index) 
        {
            $hitung = DB::table('berita')
                    ->where('kategori', $index->nama_kategori)
                    ->count();
            
            $koleksi[] = [
                'kategori' => $index->nama_kategori,
                'hasil' => $hitung
            ];
        }

        return $koleksi;
    }

    public function viewKategoriTag()
    {
        $kategori = DB::table('kategori')->oldest()->get();
        $tag = DB::table('tag')->latest()->get();
        $koleksi = [];

        foreach($kategori as $satuan) {
            $jumlahBerita = DB::table('berita')
                            ->where('kategori',$satuan->nama_kategori)
                            ->count();
            $koleksi[] = [
                'nama_kategori' => $satuan->nama_kategori,
                'jumlah_berita' => $jumlahBerita
            ];
        }

        return view('admin.berita.tambahKategoridanTag', [
            'kategori' => $koleksi,
            'tag' => $tag
        ]);
    }

    public function tambahKategori(Request $request)
    {
        $kategori = Kategori::create([
            'nama_kategori' => $request->input('nama_kategori'),
        ]);

        return back()->with('success','berhasil menambahkan kategori');
    }

    public function tambahTag(Request $request)
    {
        $tag = Tag::create([
            'nama_tag' => $request->input('nama_tag'),
        ]);

        return back()->with('success','berhasil menambahkan tag');
    }

    public function formPrestasi()
    {
        return view('admin.prestasi.prestasi');
    }

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
            $logo = $idFoto.'-logo-'.'.'.$uploadFoto->getClientOriginalExtension();
            $pathLogo = $uploadFoto->storeAs('public/assets/img', $logo);
        } else {
            $pathLogo = 'public/assets/img/705-1585565895.jpg';
        }

        //upload foto
        if($request->file('foto_tim')){
            $uploadFoto = $request->file('foto_tim');
            $tim = $idFoto.'-tim-'.'.'.$uploadFoto->getClientOriginalExtension();
            $pathTim = $uploadFoto->storeAs('public/assets/img', $tim);
        } else {
            $pathTim = 'public/assets/img/705-1585565895.jpg';
        }

        //upload foto
        if($request->file('foto_piala')){
            $uploadFoto = $request->file('foto_piala');
            $piala = $idFoto.'-piala-'.'.'.$uploadFoto->getClientOriginalExtension();
            $pathPiala = $uploadFoto->storeAs('public/assets/img', $piala);
        } else {
            $pathPiala = 'public/assets/img/705-1585565895.jpg';
        }

        $gelar = $request->input('gelar');
        try {
            $prestasi = new Prestasi;
            $prestasi->nama_kompetisi = $request->input('nama_kompetisi');
            $prestasi->kota = $request->input('kota');
            $prestasi->negara = $request->input('negara');
            $prestasi->tgl_mulai = $request->input('tgl_mulai');
            $prestasi->tgl_selesai = $request->input('tgl_selesai');
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
            return $e;
        }

        return back()->with('success','berhasil menambahkan data prestasi');
    }

    public function hapusPrestasi($id)
    {
        $prestasi = Prestasi::find($id);
        $prestasi->delete();

        return back()->with('success','berhasil menghapus data prestasi');
    }

    public  function viewBerita()
    {
        $berita = DB::table('berita')->whereNull('deleted_at')->whereNotNull('tgl_publish')->latest()->get();

        $beritaDraft = DB::table('berita')->whereNull('deleted_at')->whereNull('tgl_publish')->latest()->get();

        $totalBerita = DB::table('berita')->whereNull('deleted_at')->latest()->count();

        $totalKategori = DB::table('kategori')->count();

        $rekomendasi = DB::table('berita')->where('penting', '1')->whereNull('deleted_at')->count();

        $totalDraftBerita = DB::table('berita')->whereNull('tgl_publish')->whereNull('deleted_at')->count();

        return view('admin.berita.berita',[
            'berita' => $berita,
            'totalBerita' => $totalBerita,
            'totalKategori' => $totalKategori,
            'rekomendasi' => $rekomendasi,
            'totalDraftBerita' => $totalDraftBerita,
            'beritaDraft' => $beritaDraft,
        ]);
    }

    public function hapusBerita($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return back()->with('success','Berita berhasil dihapus');
    }

    public function editBerita($id)
    {
        $berita = DB::table('berita')->where('id', $id)->first();
        $kategori = DB::table('kategori')->latest()->get();

        return view('admin.berita.editBerita',[
            'berita' => $berita,
            'kategori' => $kategori,
        ]);
    }

    public function updateBerita(Request $request, $id)
    {
                //slug judul
                $slug = Str::slug($request->judul,'-');

                //upload foto
                if($request->file('image')){
                    $uploadFoto = $request->file('image');
                    $name = rand(1,999).'-'.time().'.'.$uploadFoto->getClientOriginalExtension();
                    $pathPhoto = $uploadFoto->storeAs('public/assets/img', $name);
                } else {
                    $pathPhoto = 'public/assets/img/705-1585565895.jpg';
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
                        'id_user' => 1,
                        'kategori' => $request->kategori,
                        'penting' => $penting,
                        'tgl_publish' => $publish,
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