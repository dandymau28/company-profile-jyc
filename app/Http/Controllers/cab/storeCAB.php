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
use App\Mail\AfterRegister;
use PDF;
use Illuminate\Support\Str;
use App\Jobs\sendMailCAB;


class storeCAB extends Controller
{
    public function store(Request $request)
    {
        try {
            
            $uploadFoto = $request->file('foto');
            $name = 'foto'.'-'.trim($request->input('nama_lengkap')).'.'.$uploadFoto->getClientOriginalExtension();
            $pathPhoto = $uploadFoto->storeAs('public/assets/img', $name);
            
            //identitas cab
            $cab = new CAB;
            $cab->foto = $pathPhoto;
            $cab->nama_lengkap = $request->input('nama_lengkap');
            $cab->nik = $request->input('nik');
            $cab->no_passport = $request->input('no_passport');
            $cab->nama_panggilan = $request->input('nama_panggilan');
            $cab->email = $request->input('email');
            $cab->instagram = $request->input('instagram');
            $cab->tempat_lahir = $request->input('tempat_lahir');
            $cab->tanggal_lahir = $request->input('tanggal_lahir');
            $cab->alamat = $request->input('alamat');
            $cab->pekerjaan = $request->input('pekerjaan');
            $cab->institusi = $request->input('institusi');
            $cab->agama = $request->input('agama');
            $cab->info_jyc = $request->input('info_jyc');
            $cab->tentang_jyc = $request->input('tentang_jyc');
            $cab->motivasi = $request->input('motivasi');
            $cab->keahlian_lain = $request->input('keahlian_lain');
            $cab->save();

            //bermusik
            if(is_null($request->input('alat_musik'))) {
                return response()->json([
                    "data" => $request->input('alat_muasik')
                ]);
                $musik = $request->input('alat_musik');
                $tingkatmusik = $request->input('tingkat_kemampuan');
                $bermusik = new Bermusik;
                foreach($musik as $key => $value) {
                    $bermusik->alat_musik = $musik[$key];
                    $bermusik->tingkat_kemampuan = $tingkatmusik[$key];
                    $cab->kemampuanBermusik()->save($bermusik);
                }
            }

            //paduan suara
            if (is_null($request->filled('nama_padus'))){
                $padus = new Padus;
                foreach($request->input('nama_padus') as $key => $value) {
                    $padus->nama_padus = $request->input('nama_padus')[$key];
                    $padus->ambitus = $request->input('ambitus')[$key];
                    $padus->tahun_aktif = $request->input('tahun_aktif_padus')[$key];
                    $cab->paduanSuara()->save($padus);
                }
            }

            //prestasi kesenian
            if (is_null($request->filled('nama_kegiatan_seni'))) {
                $kesenian = new Kesenian;
                foreach($request->input('nama_kegiatan_seni') as $key => $value) {
                    $kesenian->nama_kegiatan = $request->input('nama_kegiatan_seni')[$key];
                    $kesenian->tempat = $request->input('tempat_seni')[$key];
                    $kesenian->tingkat = $request->input('tingkat_seni')[$key];
                    $kesenian->juara = $request->input('juara_seni')[$key];
                    $cab->prestasiKesenian()->save($kesenian);
                }
            }

            //prestasi non kesenian
            if (is_null($request->filled('nama_kegiatan_non'))){
                $nonkesenian = new Nonkesenian;
                foreach($request->input('nama_kegiatan_non') as $key => $value) {
                    $nonkesenian->nama_kegiatan = $request->input('nama_kegiatan_non')[$key];
                    $nonkesenian->tempat = $request->input('tempat_non')[$key];
                    $nonkesenian->tingkat = $request->input('tingkat_non')[$key];
                    $nonkesenian->juara = $request->input('juara_non')[$key];
                    $cab->prestasiNonkesenian()->save($nonkesenian);
                }
            }

            //riwayat organisasi
            if (is_null($request->filled('nama_organisasi'))) {
                $organisasi = new Organisasi;
                foreach($request->input('nama_organisasi') as $key => $value) {
                    $organisasi->nama_organisasi = $request->input('nama_organisasi')[$key];
                    $organisasi->jabatan = $request->input('jabatan')[$key];
                    $organisasi->tahun_aktif = $request->input('tahun_aktif_org')[$key];
                    $cab->riwayatOrganisasi()->save($organisasi);
                }
            }
        } catch (Exception $e) {
            return back()->with('errors','Gagal mendaftar. Error Code: '.$e->getCode().'. Silakan hubungi tim kami pada <a href="/tentang-kami">Contact Us</a>');
        }

        // $year = Carbon::now()->format('Y');

        $pendaftar = DB::table('cab')
            // ->whereRaw(DB::raw("YEAR(created_at)=YEAR(CURRENT_DATE"))
            ->count();

        $waktu = Carbon::now()->format('YMd');
        $id = $cab->id;

        if ($pendaftar < 90) {
            $kode_bayar = Str::uuid();

            $insert = DB::table('kode_pembayaran_cab')
                        ->insert([
                            'id_cab' => $id,
                            'kode_bayar' => $kode_bayar,
                            'status' => 'not_paid'
                        ]);
                
            // $cab = DB::table('cab')->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
            //             ->where('cab.id',$id)
            //             ->whereNull('cab.deleted_at')
            //             ->select('cab.*','kode_pembayaran_cab.*')
            //             ->first();

            // $data = CAB::find($id)->get();

            $data = [
                'status' => 'Berhasil',
                'identitas' => $cab,
            ];

            // $pdf = PDF::loadView('mail.pdf.data-diri',$data);
            // $pdf = $pdf->stream();

            // dispatch(new sendMailCAB($data));
            sendMailCAB::dispatch($data);

        } elseif ($pendaftar >= 90 && $pendaftar < 110) {
            $cab = DB::table('cab')
                        ->where('id',$id)
                        ->whereNull('deleted_at')
                        ->first();
            
            $data = [
                'status' => 'Waiting List',
                'identitas' => $cab
            ];

            $pdf = 'Waiting List';

            dispatch(new sendMailCAB($data, $pdf));
        } else {
            return back()->with('error', 'Maaf pendaftaran sudah penuh, silakan coba tahun depan');
        }
        return back()->with('success', 'Anda berhasil mendaftar, silakan cek email untuk info selanjutnya. Jika Anda belum mendapatkan email dalam 1x24 jam, silakan hubungi kami pada Contact Us');

    }
}
