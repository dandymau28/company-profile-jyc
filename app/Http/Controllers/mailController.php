<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\successMail;
use PDF;

class mailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = ['isi_pesan' => 'Ini PDF'];

        $pdf = PDF::loadView('mail.success',$data);
        $pdf = $pdf->stream();
        Mail::to('dandy.maulana99@gmail.com')
            ->send(new successMail($request, $pdf));
    }
}
