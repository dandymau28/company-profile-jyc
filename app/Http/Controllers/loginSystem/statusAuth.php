<?php

namespace App\Http\Controllers\loginSystem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class statusAuth extends Controller
{
    public function checkAuth()
    {
        $admin = Auth::user();

        return $admin;
    }
}
