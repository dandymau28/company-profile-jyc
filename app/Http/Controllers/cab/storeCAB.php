<?php

namespace App\Http\Controllers\cab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\prestasinonKesenianModel as Nonkesenian;
use App\Models\riwayatOrganisasiModel as Organisasi;
use App\Models\kemampuanBermusikModel as Bermusik;
use App\Models\prestasiKesenianModel as Kesenian;
use App\Models\kode_pembayaran_cab as KodeBayar;
use App\Http\Controllers\cab\cabController;
use App\Models\paduanSuaraModel as Padus;
use Illuminate\Support\Facades\Mail;
use App\Models\cabModel as CAB;
use App\Mail\AfterRegister;
use Illuminate\Support\Str;
use App\Jobs\sendMailCAB;
use \Carbon\Carbon;
use PDF;
use DB;


class storeCAB extends Controller
{
    public function store(Request $request)
    {
        $oprec = new cabController;
        $oprec = $oprec->configOprec();

        try {
            $data = DB::table('cab')
                    ->where('batch', $oprec->batch)
                    ->where('nik', $request->input('nik'))
                    ->orWhere('no_passport', $request->input('no_passport'))
                    ->first();

            if(!empty($data)) {
                if($data->nik == $request->input('nik') || $data->no_passport == $request->input('no_passport')) {
                    return back()->with('error','NIK/No. Passport sudah pernah digunakan');
                }
            }
        } catch (Exception $e) {
            return back()->with('error','Gagal cek data. Error message= '.$e->getMessage());
        }

        try {
            DB::beginTransaction();
            $uploadFoto = $request->file('foto');
            $name = 'foto'.'-'.trim($request->input('nama_lengkap')).'.'.$uploadFoto->getClientOriginalExtension();
            $pathPhoto = $uploadFoto->storeAs('public/assets/img', $name);
        
            //identitas cab
            $cab = new CAB;
            $cab->foto = '/img/'.$name;
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
            $cab->batch = $oprec->batch;
            $cab->save();

            //bermusik
            if(!empty($request->input('alat_musik')[0])) {
                $musik = $request->input('alat_musik');
                $tingkatmusik = $request->input('tingkat_kemampuan');
                $bermusik = new Bermusik;
                foreach($musik as $key => $value) {
                    $skillmusik = $cab->kemampuanBermusik()->create([
                        'alat_musik' => $musik[$key],
                        'tingkat_kemampuan' => $tingkatmusik[$key]
                    ]);
                }
            }

            //paduan suara
            if (!empty($request->input('nama_padus')[0])){
                $padus = new Padus;
                foreach($request->input('nama_padus') as $key => $value) {
                    $pasu = $cab->paduanSuara()->create([
                        'nama_padus' => $request->input('nama_padus')[$key],
                        'ambitus' => $request->input('ambitus')[$key],
                        'tahun_aktif' => $request->input('tahun_aktif_padus')[$key]
                    ]);
                }
            }

            //prestasi kesenian
            if (!empty($request->input('nama_kegiatan_seni')[0])) {
                $kesenian = new Kesenian;
                foreach($request->input('nama_kegiatan_seni') as $key => $value) {
                    $seni = $cab->prestasiKesenian()->create([
                        'nama_kegiatan' => $request->input('nama_kegiatan_seni')[$key],
                        'tempat' => $request->input('tempat_seni')[$key],
                        'tingkat' => $request->input('tingkat_seni')[$key],
                        'juara' => $request->input('juara_seni')[$key],
                    ]);
                }
            }

            //prestasi non kesenian
            if (!empty($request->input('nama_kegiatan_non')[0])){
                $nonkesenian = new Nonkesenian;
                foreach($request->input('nama_kegiatan_non') as $key => $value) {
                    $nonseni = $cab->prestasiNonkesenian()->create([
                        'nama_kegiatan' => $request->input('nama_kegiatan_non')[$key],
                        'tempat' => $request->input('tempat_non')[$key],
                        'tingkat' => $request->input('tingkat_non')[$key],
                        'juara' => $request->input('juara_non')[$key],
                    ]);
                }
            }

            //riwayat organisasi
            if (!empty($request->input('nama_organisasi')[0])) {
                $organisasi = new Organisasi;
                foreach($request->input('nama_organisasi') as $key => $value) {
                    $org = $cab->riwayatOrganisasi()->create([
                        'nama_organisasi' => $request->input('nama_organisasi')[$key],
                        'jabatan' => $request->input('jabatan')[$key],
                        'tahun_aktif' => $request->input('tahun_aktif_org')[$key],
                    ]);
                }
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('errors','Gagal mendaftar. Error Code: '.$e->getCode().'. Silakan hubungi tim kami pada <a href="/tentang-kami">Contact Us</a>');
        }

        $pendaftar = DB::table('cab')
            ->where('batch', $oprec->batch)
            ->count();

        $waktu = Carbon::now()->format('YMd');
        $id = $cab->id;

        if ($pendaftar < $oprec->batas_kandidat) {
            $kode_bayar = Str::uuid();

            DB::table('cab')->where('id', $id)->update([
                'status_cab' => 'kandidat'
            ]);
            
            $insert = DB::table('kode_pembayaran_cab')
                        ->insert([
                            'id_cab' => $id,
                            'kode_bayar' => $kode_bayar,
                            'status' => 'not_paid'
                        ]);
            

            $data = DB::table('cab')->join('kode_pembayaran_cab','cab.id','=','kode_pembayaran_cab.id_cab')
                        ->where('cab.id',$id)
                        ->whereNull('cab.deleted_at')
                        ->select('cab.*','kode_pembayaran_cab.*')
                        ->first();

            sendMailCAB::dispatch($data);

        } elseif ($pendaftar >= $batas_kandidat && $pendaftar < $batas_pendaftar) {
            DB::table('cab')->where('id', $id)->update([
                'status_cab' => 'waiting_list'
            ]);
            
            $data = DB::table('cab')
                        ->where('id',$id)
                        ->whereNull('deleted_at')
                        ->first();
            
            dispatch(new sendMailCAB($data));
        } else {
            return back()->with('error', 'Maaf pendaftaran sudah penuh, silakan coba tahun depan');
        }
        return back()->with('success', 'Anda berhasil mendaftar, silakan cek email untuk info selanjutnya. Jika Anda belum mendapatkan email dalam 1x24 jam, silakan hubungi kami pada Contact Us');

    }
}
