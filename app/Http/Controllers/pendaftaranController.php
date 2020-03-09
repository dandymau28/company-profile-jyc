<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cabModel as CAB;

use Redirect;

class pendaftaranController extends Controller
{
    /**
     * @return \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $cab = CAB::create($request->all());
        return view('pendaftaran')->with('berhasil daftar!');
    }
}
