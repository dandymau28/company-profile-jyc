<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\beritaModel as Berita;
use App\Models\kategoriModel as Kategori;
use App\Models\tagModel as Tag;
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
                        'penting' => $request->input('penting'),
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
                        'penting' => $request->input('penting'),
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
}
