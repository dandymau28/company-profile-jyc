<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\successMail;

class mailController extends Controller
{
    public function sendEmail()
    {
        Mail::to('akunbersama221@gmail.com')
            ->send(new successMail());
    }
}
