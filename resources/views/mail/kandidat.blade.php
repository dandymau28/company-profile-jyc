<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Success</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-4.4.1-dist') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web') }}/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #FCFCEE;
            color: #707070;
        }
        #header-mail1 {
            border-top: 0.6rem solid #C12821;
            color: #C12821;
        }
        .navbar-brand img {
            width: 5rem;
            height: 5rem;
            margin-left: 7rem;
        }
        .footer-mail, .footer-mail a {
            background-color: #C12821;
            color: #FFFFF8;
        }
    </style>

</head>
<body>
    <div id="header-mail1" class="row align-items-center m-0">
        <a class="navbar-brand py-3" href="{{route('beranda')}}"><img src="{{asset('assets/img/logo-jyc.png')}}" alt="img"></a>
        <h4>Jakarta Youth Choir</h4>
    </div>
    <div class="container">
        <div class="container">
            <h4 class="text-center py-3">Dear, {{$data->nama_panggilan}}</h4>
            <h5 class="pt-2">Terima kasih,</h5>
            <h5>telah mendaftar sebagai calon anggota baru JYC 2020.</h5>
            @if($status == 'Berhasil')
            <p>Berikut pembayaran yang harus diselesaikan.</p>
            <div class="row font-weight-bold">
                <div class="col-3">Biaya pendaftaran</div>
                <div class="col">: Rp. 25.0000,-</div>
            </div>
            <div class="row font-weight-bold">
                <div class="col-3">No. Rekening</div>
                <div class="col">: 0470162261</div>
            </div>
            <div class="row font-weight-bold">
                <div class="col-3">Bank / A.n</div>
                <div class="col">: BNI / Swardiantara Silalahi</div>
            </div>
            <p class="pt-3">Setelah melakukan pembayaran, silahkan upload bukti pembayaran melalui link berikut ini:</p>
            <a href="http://127.0.0.1:8000/kegiatan/oprec/upload-bukti-bayar/{{$data->kode_bayar}}"><button type="button" class="btn btn-outline-danger">Upload Bukti Pembayaran</button></a>
            @else
            <p>Mohon maaf {{$data->nama_panggilan}}, jumlah pendaftar sudah melebihi batas, kamu termasuk dalam waiting list. Jika kamu berkesempatan untuk mengikuti audisi, akan diinformasikan lebih lanjut melalui <a href="https://www.instagram.com/jktyouthchoir">instagram</a>. Pantau terus sosial media kita yaa, tetap semangat :)</p>
            @endif
        </div>
    </div>
    <div class="footer-mail p-2 fixed-bottom">
        <h4 class="text-center">Jakarta Youth Choir</h4>
        <h5 class="text-center">We Sing For The City and The Country</h5>
        <footer class="text-center"><a href="{{route('beranda')}}">www.jakartayouthchoir.com</a></footer>
    </div>
    {{-- @if($status == 'Berhasil')
    <p><b>Dear, {{$data->nama_panggilan}}</b></p>
    <i>Terima kasih telah mendaftar, untuk selanjutnya bisa transfer ke norek 0000 a.n AtasNama</i>
    <p>Jika sudah transfer, bisa kirim bukti pembayaran melalui link di bawah</p>
    <a href="http://127.0.0.1/kegiatan/oprec/upload-bukti-bayar/{{$data->kode_bayar}}">Upload Bukti Pembayaran</a>
    @else
    <p><b>Dear, {{$data->nama_panggilan}}</b></p>
    <p>Terima kasih telah mendaftar</p>
    <p>Anda termasuk dalam waiting list</p>
    <p>Tunggu kabar selanjutnya dari kami yaaa</p>
    @endif --}}
</body>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap-4.4.1-dist') }}/js/bootstrap.min.js"></script>
</html>