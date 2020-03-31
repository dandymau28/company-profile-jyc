<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Models\beritaModel as Berita;
use Illuminate\Support\Facades\Storage;
use \Carbon\Carbon;

class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function berita()
    {
        //3 Berita Terbaru
        $beritaTerbaru = DB::table('berita')->latest()->simplePaginate(3);

        // return $beritaTerbaru;
    
        //Berita berdasarkan tahun
        try {
            $berita = DB::table('berita')
                ->where(DB::raw('YEAR(tgl_publish)=2015'))
                ->orderBy('tgl_publish','desc')
                ->take(3)
                ->get();
        } catch (Exception $e) {
            report($e);

            return false;
        }

        try {
            //Berita Terbaru untuk Carousel
            $beritaCarouselTerbaru = DB::table('berita')
            ->latest()
            ->take(5)
            ->get();
        } catch (Exception $e) {
            report($e);

            return false;
        }

        try {//list berita berdasarkan tahun
        $beritaPerTahun = DB::table('berita')
            ->where(DB::raw('YEAR(tgl_publish)=2015'))
            ->orderBy('tgl_publish','desc')
            ->get();
        } catch (Exception $e) {
            report ($e);

            return false;
        }
        
        try {
            $allVideo = DB::table('video')
            ->orderBy('created_at','desc')
            ->get();
        } catch (Exception $e) {
            report ($e);
    
            return false;
        }

        //menghitung kategori
        $kategori = DB::table('kategori')
                    ->latest()->get();

        $koleksi = [];
        
        // return $kategori;
        foreach($kategori as $index) 
        {
            $hitung = DB::table('berita')
                    ->where('kategori', $index->nama_kategori)
                    ->count();
            
            $koleksi = [
                'kategori' => $index->nama_kategori,
                'hasil' => $hitung
            ];
        }

        return view('berita', [
            'beritas' => $beritaTerbaru,
            'beritaCarousel' => $beritaCarouselTerbaru,
            'beritaPerTahun' => $beritaPerTahun,
            'videos' => $allVideo,
            'koleksiKategori' => $koleksi,
            'title' => 'Berita',
            'nav' => 'berita'
            ]);
    }

    public function show($slug)
    {
        $berita = DB::table('berita')
            ->where('slug', $slug)
            ->get();

        return $berita;
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
}