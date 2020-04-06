<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\cab\cabController as CAB;
use \Carbon\Carbon;
use DB;

class createCAB extends Controller
{
    public function create()
    {
        return view('',[
            'banyak_pendaftar' => CAB::countCAB(),
        ]);
    }
}
