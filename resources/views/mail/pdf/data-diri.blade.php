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
            margin-top: 3cm;
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
            margin-top: 30px;
            /* display: flex;
            flex-direction: row; */
            width: 100%;
        }

        .container-besar div.container-kecil {
            /* display: flex; */
            /* flex-direction: column; */
        }

        .container-kecil .item.gambar {
            width: 30%;
        }
        .container-kecil .satu {
            width: 70%;
        }

        .item {
            font-size: 14px;
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

        main {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <img src="assets/img/header.png" alt="img" width="100%" height="100%">
    </header>
    <main>
        <table>
            <tr style="border: 0.3px solid black;">
                <td>Nama Lengkap </td>
                <td> : </td>
                <td>{{$cab->nama_lengkap}}</td>
                <td rowspan="5">
                    <img src="{{Storage::url($cab->foto)}}" alt="Foto CAB" width="3cm" height="4cm">
                </td>
            </tr>
            <tr>
                <td>Nama Panggilan </td>
                <td> : </td>
                <td>{{$cab->nama_panggilan}}</td>
            </tr>
            <tr>
                <td>Email </td>
                <td> : </td>
                <td>{{$cab->email}}</td>
            </tr>
            <tr>
                <td>Instagram </td>
                <td> : </td>
                <td>{{$cab->instagram}}</td>
            </tr>
            <tr>
                <td>Tempat & Tanggal Lahir </td>
                <td> : </td>
                <td>{{$cab->tempat_lahir}}, {{Carbon\Carbon::parse($cab->tanggal_lahir)->locale('id')->format('d M Y')}}</td>
            </tr>
        </table>

        <div class="container-besar">
            <div class="container-kecil no-border">
                <div class="satu">
                    <div class="item">
                        Nama Lengkap : 
                    </div>
                    <div class="item">
                        Nama Panggilan : 
                    </div>
                    <div class="item">
                        Email : 
                    </div>
                    <div class="item">
                        Instagram : 
                    </div>
                    <div class="item">
                        Tempat & Tanggal Lahir : 
                    </div>
                </div>
                <div class="item gambar">
                    <img src="{{Storage::url($cab->foto)}}" alt="Foto CAB" width="3cm" height="4cm">
                </div>
            </div>
            <div class="item">
                Alamat : {{$cab->alamat}}
            </div>
            <div class="item">
                Pekerjaan
            </div>
            <div class="item">
                Nama Institusi
            </div>
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
    <ol>
        <li>NamaLengkap=</li>
        <li>Tempat & Tanggal Lahir={{$cab->tempat_lahir}},{{Carbon\Carbon::parse($cab->tanggal_lahir)->locale('id')->format('d M Y')}}</li>
        <li>alamat={{$cab->alamat}}</li>
        <li>pekerjaan={{$cab->pekerjaan}}</li>
        <li>agama={{$cab->agama}}</li>
        <li>motivasi={{$cab->motivasi}}</li>
    </ol>
    <span>jadwal, kemampuan_bermusik, prestasi_seni, prestasi_non_seni, riwayat_organisasi, padus</span>
</body>
{{-- <script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap-4.4.1-dist') }}/js/bootstrap.min.js"></script> --}}
</html>