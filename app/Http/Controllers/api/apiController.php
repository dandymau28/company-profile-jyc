<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class apiController extends Controller
{
    public function searchByTerm (Request $request)
    {
        $data = $request->get('search');

        $search = DB::table('berita')
                    ->where('tag', 'like', '%{$data}%')
                    ->orWhere('kategori', 'like', '%{$data}%')
                    ->get();

        return response()->json(['result' => $search]);
    }
}
