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
        $data = DB::table('cab')
                ->whereRaw(DB::raw("YEAR(created_at)=YEAR(CURRENT_DATE)"))
                ->count();

        return $data;
    }

    public function exportPDF($kode_bayar) {
        $id_cab = DB::table('kode_pembayaran_cab')->where('kode_bayar', $kode_bayar)->first();
        $id_cab = $id_cab->id_cab;
        $cab = DB::table('cab')->where('id', $id_cab)->first();
        $jadwal = DB::table('jadwal_audisi')->where('id', $cab->id_audisi)->first();
        $kemampuan_musik = DB::table('kemampuan_bermusik')->where('id_cab', $id_cab)->get();
        $prestasi_seni = DB::table('prestasi_kesenian_cab')->where('id_cab', $id_cab)->get();
        $prestasi_non_seni = DB::table('prestasi_nonkesenian_cab')->where('id_cab', $id_cab)->get();
        $riwayat_organisasi = DB::table('riwayat_organisasi')->where('id_cab', $id_cab)->get();
        $padus = DB::table('paduan_suara')->where('id_cab', $id_cab)->get();

        // return response()->json([
        //     "code" => 200,
        //     "message" => 'Data CAB Ditemukan!',
        //     "result" => [
        //         "cab" => $cab,
        //         "jadwal" => $jadwal,
        //         "kemampuan_bermusik" => $kemampuan_musik,
        //         "prestasi_seni" => $prestasi_seni,
        //         "prestasi_non_seni" => $prestasi_non_seni,
        //         "riwayat_organisasi" => $riwayat_organisasi,
        //         "padus" => $padus
        //     ]
        // ]);        

        $pdf = PDF::loadView('mail.pdf.data-diri', [
            "cab" => $cab,
            "jadwal" => $jadwal,
            "kemampuan_bermusik" => $kemampuan_musik,
            "prestasi_seni" => $prestasi_seni,
            "prestasi_non_seni" => $prestasi_non_seni,
            "riwayat_organisasi" => $riwayat_organisasi,
            "padus" => $padus])->setPaper('a4', 'portrait');
        $filename = $cab->nama_panggilan . '-' . $kode_bayar;

        return $pdf->stream($filename . '.pdf');
    }
}
