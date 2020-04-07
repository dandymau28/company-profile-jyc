<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Carbon\Carbon;
use App\Models\cabModel as CAB;
use App\Models\kemampuanBermusikModel as Bermusik;
use App\Models\paduanSuaraModel as Padus;
use App\Models\prestasiKesenianModel as Kesenian;
use App\Models\prestasinonKesenianModel as Nonkesenian;
use App\Models\riwayatOrganisasiModel as Organisasi;
use App\Models\kode_pembayaran_cab as KodeBayar;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\successMail;
use PDF;

class cabController extends Controller
{
    public function countCAB()
    {
        $year = Carbon::now()->format('Y');
        $data = DB::table('cab')
                ->where(DB::raw("YEAR(created_at)=".$year))
                ->count();

        return $data;
    }
}
