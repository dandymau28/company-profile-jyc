<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\cab\cabController as CAB;

class viewForm extends Controller
{
    public function create()
    {
        $cab = new CAB;

        return view('oprec',[
            'title' => 'Pendaftaran Calon Anggota Baru',
            'nav' => 'kegiatan',
            'total' => $cab->countCAB(),
            'oprec' => $cab->configOprec()
        ]);
    }
}
