<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Models\beritaModel as Berita;
use Illuminate\Support\Facades\Storage;
use \Carbon\Carbon;
use App\Models\kategoriModel as Kategori;
use App\Models\tagModel as Tag;

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
            
            $koleksi[] = [
                'kategori' => $index->nama_kategori,
                'hasil' => $hitung
            ];
        }

        //berita terhangat
        try {
            $beritaTerhangat = DB::table('berita')
                                ->whereNull('deleted_at')
                                ->whereNotNull('tgl_publish')
                                ->where('penting', '1')
                                ->latest()
                                ->take(3)
                                ->get();
        } catch (Exception $e) {
            return $e;
        }

        return view('berita', [
            'beritas' => $beritaTerbaru,
            'beritaCarousel' => $beritaCarouselTerbaru,
            // 'beritaPerTahun' => $beritaPerTahun,
            'videos' => $allVideo,
            'koleksiKategori' => $koleksi,
            'beritaTerhangat' => $beritaTerhangat,
            'title' => 'Berita',
            'nav' => 'berita'
            ]);
    }

    public function show($slug)
    {
        $berita = DB::table('berita')
            ->where('slug', $slug)
            ->first();
        
        $beritaPaginated = DB::table('berita')
            ->where('slug', $slug)
            ->simplePaginate(1);

        //berita terhangat
        try {
            $beritaTerhangat = DB::table('berita')
                                ->whereNull('deleted_at')
                                ->whereNotNull('tgl_publish')
                                ->where('penting', '1')
                                ->latest()
                                ->take(3)
                                ->get();
        } catch (Exception $e) {
            return $e;
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
            
            $koleksi[] = [
                'kategori' => $index->nama_kategori,
                'hasil' => $hitung
            ];
        }

        // mengambil tag
        $tag = explode(',', $berita->tag );

        //associative array
        foreach ($tag as $index) {
            $tags[] = [
                'tag' => $index
            ];
        }
        

        return view('detailberita', [
            'nav' => 'berita',
            'title' => $berita->judul,
            'berita' => $berita,
            'beritaTerhangat' => $beritaTerhangat,
            'paginasi' =>$beritaPaginated,
            'koleksiKategori' => $koleksi,
            'tags' => $tags
        ]);
    }

    public function getBeritaByKategori($kategori)
    {
        //get berita by kategori
        $berita = DB::table('berita')
                ->where('kategori',$kategori)
                ->simplePaginate(3);
        
        //berita terhangat
        try {
            $beritaTerhangat = DB::table('berita')
                                ->whereNull('deleted_at')
                                ->whereNotNull('tgl_publish')
                                ->where('penting', '1')
                                ->latest()
                                ->take(3)
                                ->get();
        } catch (Exception $e) {
            return $e;
        }

        //menghitung kategori
        $kategoris = DB::table('kategori')
                    ->oldest()->get();
        $koleksi = [];
        // return $kategoris;
        foreach($kategoris as $index) 
        {
            $hitung = DB::table('berita')
                    ->where('kategori', $index->nama_kategori)
                    ->count();
            
            $koleksi[] = [
                'kategori' => $index->nama_kategori,
                'hasil' => $hitung
            ];
        }
        return view('berita',[
            'beritas' => $berita,
            'beritaTerhangat' => $beritaTerhangat,
            'koleksiKategori' => $koleksi,
            'kategori' => $kategori,
            'title' => 'Kategori Berita',
            'nav' => 'berita'
        ]);
        // return $koleksi;
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
        
    }
}