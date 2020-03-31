<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class apiController extends Controller
{
    public function searchByTerm (Request $request)
    {
        $data = $request->input('search');
        
        try {
            $search = DB::table('berita')
                        ->where('tag', 'like', '%'.$data.'%')
                        ->orWhere('kategori', 'like', '%'.$data.'%')
                        ->get();
        } catch (Exception $e) {
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'code' => 200,
            'result' => $search
        ]);
    }

    public function searchTag (Request $request)
    {
        $data = $request->input('nama_tag');
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
            'code' => 200,
            'result' => $tag
        ]);
    }
}
