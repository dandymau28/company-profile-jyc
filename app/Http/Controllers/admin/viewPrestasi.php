<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class viewPrestasi extends Controller
{
    public function formPrestasi()
    {
        return view('admin.prestasi.prestasi');
    }
}
