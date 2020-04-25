<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\cab\cabController as Pdf;

class verifMail extends Mailable
{
    use Queueable, SerializesModels;

    public $kode;
    public $pdf;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($kode)
    {
        $this->kode = $kode;
        // $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $pdf = new Pdf;

        return $this->view('mail.verified')
                    ->subject('Berhasil Pembayaran!')
                    // ->with(['kode' => $this->kode]);
                    ->attachData($pdf->exportPDF($this->kode), 'data-diri.pdf', [
                        'mime' => 'application/pdf'
                    ]);
    }
}
