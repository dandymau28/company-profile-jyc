<?php

namespace App\Http\Controllers\loginSystem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logout extends Controller
{
    public function logout()
    {
        if(Auth::user())
        {
            Auth::logout();
            return redirect()->route('login');
        } else {
            return redirect()->route('beranda');
        }
    }
}
