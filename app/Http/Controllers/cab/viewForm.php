<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class viewForm extends Controller
{
    public function create()
    {
        return view('oprec',[
            'title' => 'Pendaftaran',
            'nav' => 'oprec'
        ]);
    }
}
