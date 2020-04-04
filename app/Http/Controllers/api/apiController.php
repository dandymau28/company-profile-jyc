<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class apiController extends Controller
{
    public function searchByTerm ($term = '')
    {
        $data = trim($term);
        
        try {
            $search = DB::table('berita')
                        ->where('tag', 'like', "%{$data}%")
                        ->whereNull('deleted_at')
                        ->whereNotNull('tgl_publish')
                        ->orWhere('kategori', 'like', "%{$data}%")
                        ->orWhere('judul', 'like', "%{$data}%")
                        ->limit(3)
                        ->get();
        } catch (Exception $e) {
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'message' => 'success',
            'data' => $search
        ]);
    }

    public function searchTag ($term = '')
    {
        $data = trim($term);
        // return response()->json($data);

        try {
            $tag = DB::table('tag')
                    ->where('nama_tag','like','%'.$data.'%')
                    ->get();
        } catch (Exception $e) {
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'message' => 'success',
            'data' => $tag
        ]);
    }

    public function jsonCAB()
    {
        $data = DB::table('cab')->latest()->get();

        return response()->json(['code'=>200,'data' => $data]);
    }
}
