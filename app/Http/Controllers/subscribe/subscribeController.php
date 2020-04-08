<?php

namespace App\Http\Controllers\subscribe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\subscribeModel as Subscribe;

class subscribeController extends Controller
{
    public function store(Request $request)
    {
        $email = $request->input('email');
        $subscribed = Subscribe::onlyTrashed()
                        ->where('email',$email)
                        ->get();

        if(!$subscribed) {
            try {
                $data = DB::table('subscribe')->insert([
                    'email' => $email,
                ]);
            } catch (Exception $e) {
                return back()->with('error','Gagal berlangganan, silakan hubungi kami melalui Contact Us');
            }
        } else {
            try {
                $data = Subscribe::onlyTrashed()
                                ->where('email',$email)
                                ->restore();
            } catch (Exception $e) {
                return back()->with('error','Gagal berlangganan, silakan hubungi kami melalui Contact Us');
            }
        }

        return back()->with('success','Terima kasih telah berlangganan');
    }

    public function destroy(Request $request)
    {
        $email = $request->input('email');
        try {
            $data = Subscribe::where('email',$email)->delete();
            
        } catch (Exception $e) {
            return '<center>Gagal berhenti berlangganan, silakan hubungi tim kami pada <a href="127.0.0.1:8000">Contact Us</a>.</center>';
        }

        if($data) {
            return '<center>Berhasil berhenti berlangganan, silakan kunjungi <a href="127.0.0.1:8000">situs kami</a> untuk melihat info terbaru.</center>';
        } else {
            return 'Email tidak ditemukan';
        }
    }
}
