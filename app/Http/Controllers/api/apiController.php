<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\admin\adminController as Admin;
use App\Http\Controllers\berita\beritaController as Berita;

class apiController extends Controller
{
    public function searchByTerm (Request $req)
    {
        $beritaClass = new Berita;
        $admin = new Admin;

        $data = trim($req->input('term'));
        
        try {
            $search = DB::table('berita')
                        ->where('tag', 'like', "%{$data}%")
                        ->whereNull('deleted_at')
                        ->whereNotNull('tgl_publish')
                        ->orWhere('kategori', 'like', "%{$data}%")
                        ->orWhere('judul', 'like', "%{$data}%")
                        ->simplePaginate(3);
        } catch (Exception $e) {
            return view('berita', [
                "message" => "Terjadi kesalahan. Silakan hubungi melalui contact us!",
                'beritaTerhangat' => $beritaClass->beritaHangat(),
                'cari' => 'Hasil Pencarian \'' . $tag . '\': '
            ]);
        }

        if(!empty($search)) {
            return view('berita',[
                'beritas' => $search,
                'beritaTerhangat' => $beritaClass->beritaHangat(),
                'koleksiKategori' => $admin->countKategori(),
                'term' => $data,
                'title' => 'Hasil Pencarian ' . $data . ': ',
                'nav' => 'berita',
                'cari' => 'Hasil Pencarian \'' . $data . '\': ',
            ]);
        } else {
            return view('berita', [
                "message" => "Berita tidak ditemukan!",
                'beritaTerhangat' => $beritaClass->beritaHangat(),
                'cari' => 'Hasil Pencarian \'' . $data . '\': '
            ]);
        }


        // return response()->json([
        //     'message' => 'success',
        //     'data' => $search
        // ]);
    }

    public function searchTag ($tag)
    {
        $admin = new Admin;
        $beritaClass = new Berita;

        try {
            //get berita by tag
            $search = DB::table('berita')
                ->whereNull('deleted_at')
                ->whereNotNull('tgl_publish')
                ->where('tag', 'like', "%{$tag}%")
                ->simplePaginate(3);
        } catch (Exception $e) {   
            return view('berita', [
                "message" => "Terjadi kesalahan. Silakan hubungi melalui contact us!",
                'beritaTerhangat' => $beritaClass->beritaHangat(),
                'cari' => 'Hasil Pencarian \'' . $tag . '\': '
            ]);
        }
        
        if(!empty($search)) {
            return view('berita',[
                'beritas' => $search,
                'beritaTerhangat' => $beritaClass->beritaHangat(),
                'koleksiKategori' => $admin->countKategori(),
                'term' => $tag,
                'title' => 'Hasil Pencarian ' . $tag . ': ',
                'nav' => 'berita',
                'cari' => 'Hasil Pencarian \'' . $tag . '\': ',
            ]);
        } else {
            return view('berita', [
                "message" => "Berita tidak ditemukan!",
                'beritaTerhangat' => $beritaClass->beritaHangat(),
                'cari' => 'Hasil Pencarian \'' . $tag . '\': '
            ]);
        }
    }

    public function jsonCAB()
    {
        $data = DB::table('cab')
                    ->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                    ->select('cab.id','cab.nama_lengkap','kode_pembayaran_cab.kode_bayar', 'cab.email', 'kode_pembayaran_cab.status')
                    ->get();

        return response()->json(['code'=>200,'data' => $data]);
    }

    public function getAllPrestasi () {
        $prestasis = DB::table('prestasi')->where('deleted_at', null)->get();  

        if(!empty($prestasis)) {
            return response()->json([
                "code" => 200,
                "message" => "Data prestasi ditemukan!",
                "result" => $prestasis
            ]);
        } else {
            return response()->json([
                "code" => 200,
                "message" => "Belum ada data prestasi"
            ]);
        }
    }

    public function getPrestasiByID ($id) {
        $prestasi = DB::table('prestasi')->where('deleted_at', null)->where('id', $id)->first();
        $penghargaan = DB::table('penghargaan')->where('deleted_at', null)->where('prestasi_id', $id)->get();

        if(!empty($prestasi)) {
            return response()->json([
                "code" => 200,
                "message" => 'Data prestasi ditemukan!',
                "result" => [
                    "prestasi" => $prestasi,
                    "penghargaan" => $penghargaan
                ]
            ]);
        } else {
            return response()->json([
                "code" => 200,
                "message" => "Data Prestasi tidak ditemukan!"
            ]);
        }
    }

    public function getPenghargaanByID ($id_prestasi) {
        $penghargaan = DB::table('penghargaan')->where('deleted_at', null)->where('prestasi_id', $id_prestasi)->get();

        if(!empty($penghargaan)) {
            return response()->json([
                "code" => 200,
                "message" => "Data penghargaan ditemukan!",
                "result" => $penghargaan,
            ]);
        } else {
            return response()->json([
                "code" => 200,
                "message" => "Prestasi blm memiliki penghargaan!",
            ]);
        }
    }
}
