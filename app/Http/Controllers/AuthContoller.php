<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Exception;

use Redirect;

class AuthContoller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function login(Request $request)
    {
        $credentials = DB::table('users')->where('username', $request->username)->first();
        
        if(Auth::attempt($credentials))
        {
            return redirect()->intended('admin');
        }
    }
}
