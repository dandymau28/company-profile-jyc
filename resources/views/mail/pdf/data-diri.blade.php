<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="../../../bootstrap-4.4.1-dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web') }}/css/all.css"> --}}
    <title>{{ $cab->nama_lengkap }}</title>
    <style>
        .logo {
            max-height: 40px;
        }
    </style>
</head>
<body>
    {{-- <table>
        <tr>
            <td>
                <img src="../../../assets/img/logo-jyc.png" alt="img" style="width:40px,height:40px">
            </td>
            <td class="text-center">
                <h2>FORMULIR CALON ANGGOTA BARU</h2>
                <h3>Jakarta Youth Choir 2020</h3>
            </td>
            <td>
                <img src="../../../assets/img/dispora.png" alt="img" style="width:40px,height:40px">
            </td>
        </tr>
    </table> --}}
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-3">
                {{-- <img src="../../../assets/img/logo-jyc.png" alt="img" class="img-fluid logo"> --}}
                <img src="assets/img/logo-jyc.png" alt="img" class="img-fluid logo">
            </div>
            <div class="col-6 border border-warning border-bottom">
                <h2>FORMULIR CALON ANGGOTA BARU</h2>
                <h3>Jakarta Youth Choir 2020</h3>
            </div>
            <div class="col-3">
                {{-- <img src="../../../assets/img/dispora.png" alt="img" class="img-fluid logo"> --}}
                <img src="assets/img/dispora.png" alt="img" class="img-fluid logo">
            </div>
        </div>
    </div>
    <ol>
        <li>NamaLengkap={{$cab->nama_lengkap}}</li>
        <li>Tempat & Tanggal Lahir={{$cab->tempat_lahir}},{{Carbon\Carbon::parse($cab->tanggal_lahir)->locale('id')->format('d M Y')}}</li>
        <li>alamat={{$cab->alamat}}</li>
        <li>pekerjaan={{$cab->pekerjaan}}</li>
        <li>agama={{$cab->agama}}</li>
        <li>motivasi={{$cab->motivasi}}</li>
    </ol>
</body>
{{-- <script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap-4.4.1-dist') }}/js/bootstrap.min.js"></script> --}}
</html>