<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\verifMail;
use DB;
use App\Http\Controllers\cab\cabController as Pdf;

class sendMailVerified implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    public $pdf;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $pdf)
    {
        $this->email = $email;
        $this->pdf = $pdf;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)
            ->send(new verifMail($this->pdf));
    }
}
