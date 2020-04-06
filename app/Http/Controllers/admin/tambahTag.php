<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tagModel as Tag;

class tambahTag extends Controller
{
    public function tambahTag(Request $request)
    {
        $tag = Tag::create([
            'nama_tag' => $request->input('nama_tag'),
        ]);

        return back()->with('success','berhasil menambahkan tag');
    }
}
