<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="../../../bootstrap-4.4.1-dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web') }}/css/all.css"> --}}
    <title>{{ $cab->nama_lengkap }}</title>
    <style type="text/css" media="all">
        @page {
            margin: 0cm 0cm;
        }
        body {
            font-size: 14px;
            margin-top: 2.5cm;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 1cm;
        }

        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
        }
        .container-besar {
            /* margin-top: 30px; */
            /* display: flex;
            flex-direction: row; */
            width: 100%;
        }

        .container-besar div.container-kecil {
            /* display: flex; */
            /* flex-direction: column; */
        }

        .container-kecil .item.gambar {
            width: 100%;
            margin-left: 28px;
        }
        .container-kecil .satu {
            width: 100%;
        }

        .item {
            border: 0.3px solid black;
            margin: 10px 0px;
            padding: 3px 7px;
        }

        .no-border {
            border: none !important;
        }

        .container {
            display: flex;
        }

        .item-banyak {
            border: 0.3px solid black;
            padding: 3px 7px;
        }

        .text-center {
            text-align: center;
        }

        .table-banyak {
            border: 0.3px solid black; 
            width:100%;
            margin: 10px 0px;
        }
        /* main {
            margin-top: 10px;
        } */

        /* table, td {
            border: 1px solid black;
        } */
    </style>
</head>
<body>
    <header>
        <img src="assets/img/header.png" alt="img" width="100%" height="100%">
    </header>
    <main style="margin-top: 20px">
        <div class="container-besar">
            <div class="container-kecil no-border">
                <table style="width: 100%; margin-bottom: -10px;">
                    <tr>
                        <td style="width: 75%">
                            <div class="satu">
                                <div class="item">
                                    Nama Lengkap : {{$cab->nama_lengkap}}
                                </div>
                                <div class="item">
                                    Nama Panggilan : {{$cab->nama_panggilan}}
                                </div>
                                <div class="item">
                                    NIK : {{$cab->nik}}
                                </div>
                                <div class="item"> 
                                    No. Passport : {{$cab->no_passport ? $cab->no_passport : "-"}}
                                </div>
                                <div class="item"> 
                                    Email : {{$cab->email}}
                                </div>
                                
                            </div>
                        </td>
                        <td style="width: 25%">
                            <div class="item gambar" style="height: 175px">
                                <img src="{{'storage/' . $cab->foto}}" alt="Foto CAB" width="140px" height="175px">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="item">
                Instagram : {{$cab->instagram ? $cab->instagram : "-"}}
            </div>
            <div class="item">
                Tempat & Tanggal Lahir : {{$cab->tempat_lahir}}, {{Carbon\Carbon::parse($cab->tanggal_lahir)->locale('id')->format('d M Y')}}
            </div>
            <div class="item">
                Alamat : {{$cab->alamat}}
            </div>
            <div class="item">
                Pekerjaan : {{ $cab->pekerjaan }}
            </div>
            <div class="item">
                Nama Institusi : {{ $cab->institusi }}
            </div>
            <div class="item">
                Agama : {{ $cab->agama ? $cab->agama : "-" }}
            </div>
            <div class="item">
                Jadwal Audisi : {{ $jadwal->tanggal }}
            </div>
            <div class="item">
                Dari mana Anda tahu tentang JYC : {{ $cab->info_jyc }}
            </div>
            <div class="item">
                Apa yang Anda ketahui tentang JYC : {{ $cab->tentang_jyc }}
            </div>
            <div class="item">
                Motivasi mengikuti JYC : {{ $cab->motivasi }}
            </div>
            <div class="item">
                Keahlian Lain yang Dimiliki : {{ $cab->keahlian_lain }}
            </div>
            <table class="table-banyak">
                <tr>
                    @if($padus->count() == 0)
                    <td style="padding: 3px 7px;">Kelompok Paduan Suara yang pernah diikuti</td>
                    <td> : </td>
                    <td> - </td>
                    @else
                    <td colspan="3" style="padding: 3px 7px;">
                        Kelompok Paduan Suara yang pernah diikuti
                    </td>
                    @endif
                </tr>
                @foreach ($padus as $item)
                <tr>
                    <td class="item-banyak" style="width: 60%;">{{ $item->nama_padus }}</td>
                    <td class="item-banyak text-center" style="width: 20%;">{{ $item->ambitus }}</td>
                    <td class="item-banyak text-center" style="width: 20%;">{{ $item->tahun_aktif }}</td>
                </tr>
                @endforeach
            </table>
            <table class="table-banyak">
                <tr>
                    <td colspan="3" style="padding: 3px 7px;">
                        Riwayat Organisasi
                    </td>
                </tr>
                @foreach ($riwayat_organisasi as $item)
                <tr>
                    <td class="item-banyak" style="width: 60%;">{{ $item->nama_organisasi }}</td>
                    <td class="item-banyak text-center" style="width: 20%;">{{ $item->jabatan }}</td>
                    <td class="item-banyak text-center" style="width: 20%;">{{ $item->tahun_aktif }}</td>
                </tr>
                @endforeach
            </table>
            <table class="table-banyak">
                <tr>
                    <td colspan="4" style="padding: 3px 7px;">
                        Prestasi di Bidang Kesenian
                    </td>
                </tr>
                @foreach ($prestasi_seni as $item)
                <tr>
                    <td class="item-banyak" style="width: 40%;">{{ $item->nama_kegiatan }}</td>
                    <td class="item-banyak text-center" style="width: 20%;">{{ $item->tempat }}</td>
                    <td class="item-banyak text-center" style="width: 20%;">{{ $item->tingkat }}</td>
                    <td class="item-banyak text-center" style="width: 20%;">{{ $item->juara }}</td>
                </tr>
                @endforeach
            </table>
            <table class="table-banyak">
                <tr>
                    <td colspan="4" style="padding: 3px 7px;">
                        Prestasi di Bidang non Kesenian
                    </td>
                </tr>
                @foreach ($prestasi_non_seni as $item)
                <tr>
                    <td class="item-banyak" style="width: 40%;">{{ $item->nama_kegiatan }}</td>
                    <td class="item-banyak text-center" style="width: 20%;">{{ $item->tempat }}</td>
                    <td class="item-banyak text-center" style="width: 20%;">{{ $item->tingkat }}</td>
                    <td class="item-banyak text-center" style="width: 20%;">{{ $item->juara }}</td>
                </tr>
                @endforeach
            </table>
            <table class="table-banyak">
                <tr>
                    <td colspan="2" style="padding: 3px 7px;">
                        Kemampuan Bermain Alat Musik
                    </td>
                </tr>
                @foreach ($kemampuan_bermusik as $item)
                <tr>
                    <td class="item-banyak" style="width: 60%;">{{ $item->alat_musik }}</td>
                    <td class="item-banyak text-center" style="width: 40%;">{{ $item->tingkat_kemampuan }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>
    {{-- <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-3">
                <img src="../../../assets/img/logo-jyc.png" alt="img" class="img-fluid logo">
                <img src="assets/img/logo-jyc.png" alt="img" class="img-fluid logo">
            </div>
            <div class="col-6 border border-warning border-bottom">
                <h2>FORMULIR CALON ANGGOTA BARU</h2>
                <h3>Jakarta Youth Choir 2020</h3>
            </div>
            <div class="col-3">
                <img src="../../../assets/img/dispora.png" alt="img" class="img-fluid logo">
                <img src="assets/img/dispora.png" alt="img" class="img-fluid logo">
            </div>
        </div>
    </div> --}}
    {{-- <ol>
        <li>NamaLengkap=</li>
        <li>Tempat & Tanggal Lahir={{$cab->tempat_lahir}},{{Carbon\Carbon::parse($cab->tanggal_lahir)->locale('id')->format('d M Y')}}</li>
        <li>alamat={{$cab->alamat}}</li>
        <li>pekerjaan={{$cab->pekerjaan}}</li>
        <li>agama={{$cab->agama}}</li>
        <li>motivasi={{$cab->motivasi}}</li>
    </ol> --}}
</body>
{{-- <script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap-4.4.1-dist') }}/js/bootstrap.min.js"></script> --}}
</html>