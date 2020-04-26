<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\oprecModel as Oprec;

class storeOprec extends Controller
{
    public function store(Request $request)
    {
        try {
            $insert = Oprec::create($request->all());
        } catch (Exception $e) {
            return back()->with('error','Gagal input data. Error message: '.$e->getMessage());
        }
        return back()->with('success','Berhasil input data');
    }
}
