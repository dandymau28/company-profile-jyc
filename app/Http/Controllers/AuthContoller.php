<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use Redirect;

class AuthContoller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function login()
    {
        if(Auth::attempt($request->only('username','password')))
        {
            $credentials = DB::table('users')->where('email', $request->email)->first();
            dd($credentials);
        }
    }
}
