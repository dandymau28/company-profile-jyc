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
use App\Http\Controllers\cab\mailCAB as Nextprocess;

class storeCAB extends Controller
{
    public function store(Request $request)
    {
        try {
            
            $uploadFoto = $request->file('foto');
            $name = 'foto'.'-'.$request->input('nama_panggilan').'.'.$uploadFoto->getClientOriginalExtension();
            $pathPhoto = $uploadFoto->storeAs('public/assets/img', $name);
            
            //identitas cab
            $cab = new CAB;
            $cab->foto = $pathPhoto;
            $cab->nama_lengkap = $request->input('nama_lengkap');
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
            $perulangan = count($request->input('alat_musik'));
            $i = 0;
            $bermusik = new Bermusik;
            while($i < $perulangan) {
                $bermusik->alat_musik = $request->input('alat_musik');
                $bermusik->tingkat_kemampuan = $request->input('tingkat_kemampuan');
                $cab->kemampuanBermusik()->save($bermusik);
                $i++;
            }

            //paduan suara
            $perulangan = count($request->input('nama_padus'));
            $i = 0;
            $padus = new Padus;
            while($i < $perulangan){
                $padus->nama_padus = $request->input('nama_padus');
                $padus->ambitus = $request->input('ambitus');
                $padus->tahun_aktif = $request->input('tahun_aktif_padus');
                $cab->paduanSuara()->save($padus);
                $i++;
            }

            //prestasi kesenian
            $perulangan = count($request->input('nama_kegiatan_seni'));
            $i = 0;
            $kesenian = new Kesenian;
            while($i < $perulangan){
                $kesenian->nama_kegiatan = $request->input('nama_kegiatan_seni');
                $kesenian->tempat = $request->input('tempat_seni');
                $kesenian->tingkat = $request->input('tingkat_seni');
                $kesenian->juara = $request->input('juara_seni');
                $cab->prestasiKesenian()->save($kesenian);
                $i++;
            }

            //prestasi non kesenian
            $perulangan = count($request->input('nama_kegiatan_non'));
            $i = 0;
            $nonkesenian = new Nonkesenian;
            while($i < $perulangan){
                $nonkesenian->nama_kegiatan = $request->input('nama_kegiatan_non');
                $nonkesenian->tempat = $request->input('tempat_non');
                $nonkesenian->tingkat = $request->input('tingkat_non');
                $nonkesenian->juara = $request->input('juara_non');
                $cab->prestasiNonkesenian()->save($nonkesenian);
                $i++;
            }

            //riwayat organisasi
            $perulangan = count($request->input('nama_organisasi'));
            $i = 0;
            $organisasi = new Organisasi;
            while($i < $perulangan) {
                $organisasi->nama_organisasi = $request->input('nama_organisasi');
                $organisasi->jabatan = $request->input('jabatan');
                $organisasi->tahun_aktif = $request->input('tahun_aktif_org');
                $cab->riwayatOrganisasi()->save($organisasi);
                $i++;
            }
        } catch (Exception $e) {
            return back()->with('errors','Gagal mendaftar. Error Code: '.$e->getCode().'. Silakan hubungi tim kami pada Contact Us');
        }

        $next = new Nextprocess;
        $next->nextStep($cab->id);
    }
}
