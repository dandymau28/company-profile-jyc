<?php

namespace App\Http\Controllers\beranda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subscribeModel as Subscribe;
use DB;
use App\Mail\unsubscribeMail;
use Illuminate\Support\Facades\Mail;

class subscribeController extends Controller
{
    public function subscribe(Request $request)
    {
        try {
            $data = Subscribe::create([
                'email' => $request->input('email')
            ]);
        } catch (Exception $e) {
            return response()->json([
                "code" => 500,
                "message" => "failed. Cannot do request"
            ]);
        }

        return response()->json([
            "code" => 200,
            "message" => "success"
        ]);
    }

    public function unsubscribe ($email)
    {
        try {
            $data = Subscribe::find($email);
            if(!$data->isEmpty()){
                Mail::to($data->email)
                    ->send(new unsubscribeMail);
            } else {
                return response()->json([
                    "code" => 404,
                    "message" => "failed. Cannot find data"
                ]);
            }
        } catch (Exception $e) {
            
        }
        
        $data->delete();
        return response()->json([
            "code" => 200,
            "message" => "success"
        ]);
    }
}
