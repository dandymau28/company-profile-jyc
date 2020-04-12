<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin');
        } else {
            return 'gagal';
        }
    }

    public function view()
    {
        if (!Auth::user()) {
            return view('admin.auth.login');
        } else {
            return redirect()->route('admin');
        }
    }
}
