<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\videoModel as Video;
use App\Http\Controllers\loginSystem\statusAuth as Admin;

class storeVideo extends Controller
{
    public  function video(Request $request)
    {
        $admin = new Admin;
        $admin = $admin->checkAuth()->id;
        try {
            $saveData = Video::create([
                'alamat' => $request->input('alamat'),
                'id_user' => $admin,
            ]);
            return back()->with('success','berhasil submit');
        } catch (Exception $e) {
            return $e;
        }
    }
}
