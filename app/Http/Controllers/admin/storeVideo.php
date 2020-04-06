<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\videoModel as Video;

class storeVideo extends Controller
{
    public  function video(Request $request)
    {
        try {
            $saveData = Video::create([
                'alamat' => $request->input('alamat'),
                'id_user' => 1,
            ]);
            return back()->with('success','berhasil submit');
        } catch (Exception $e) {
            return $e;
        }
    }
}
