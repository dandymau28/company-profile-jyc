<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Success</title>
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap-4.4.1-dist') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web') }}/css/all.css"> --}}
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #FCFCEE;
            color: #707070;
        }
        #header-mail1 {
            border-top: 0.6rem solid #C12821;
            color: #C12821;
            display: flex;
        }
        .logo-jyc {
            display: inline-block;
            padding-top: .3125rem;
            padding-bottom: .3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap;
        }
        .logo-jyc img {
            width: 5rem;
            height: 5rem;
            margin-left: 7rem;
        }
        .footer-mail, .footer-mail a {
            background-color: #C12821;
            color: #FFFFF8;
        }
        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            display: flex;
        }
        .container-2 {
            width: 50%;
            margin: auto;
        }

        .text-center {
            text-align: center;
        }

        .row {
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .font-weight-bold {
            font-weight: 700!important;
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }
    </style>

</head>
<body>
    <div id="header-mail1">
        <a class="logo-jyc" href="{{route('beranda')}}"><img src="{{asset('assets/img/logo-jyc.png')}}" alt="img"></a>
        <h4 style="align-self: center">Jakarta Youth Choir</h4>
    </div>
    <div class="container">
        <div class="container-2">
            <h4 class="text-center">Dear, {{$data->nama_panggilan}}</h4>
            <h5>Terima kasih,</h5>
            <h5>telah mendaftar sebagai calon anggota baru JYC 2020.</h5>
            @if($data->status_cab == 'kandidat')
            <p>Berikut pembayaran yang harus diselesaikan.</p>
            <table class="font-weight-bold">
                <tr>
                    <td>Biaya pendaftaran</td>
                    <td style="padding: 0px 10px"> : </td>
                    <td> Rp. 25.000,-</td>
                </tr>
                <tr>
                    <td>No. Rekening</td>
                    <td style="padding: 0px 10px"> : </td>
                    <td> 6340263861</td>
                </tr>
                <tr>
                    <td>Bank / A.n</td>
                    <td style="padding: 0px 10px"> : </td>
                    <td> BCA / Boudowin Samuelle</td>
                </tr>
            </table>
            <p>Setelah melakukan pembayaran, silahkan upload bukti pembayaran melalui link berikut ini:</p>
            <a href="https://www.jakartayouthchoir.com/kegiatan/oprec/upload-bukti-bayar/{{$data->kode_bayar}}">Upload Bukti Pembayaran</a>
            @else
            <p>Mohon maaf {{$data->nama_panggilan}}, jumlah pendaftar sudah melebihi batas, kamu termasuk dalam waiting list. Jika kamu berkesempatan untuk mengikuti audisi, akan diinformasikan lebih lanjut melalui <a href="https://www.instagram.com/jktyouthchoir">instagram</a>. Pantau terus sosial media kita yaa, tetap semangat :)</p>
            @endif
        </div>
    </div>
    <div class="footer-mail fixed-bottom">
        <h4 class="text-center">Jakarta Youth Choir</h4>
        <h5 class="text-center">We Sing For The City and The Country</h5>
        <footer class="text-center"><a href="{{route('beranda')}}">www.jakartayouthchoir.com</a></footer>
    </div>
    {{-- @if($status == 'Berhasil')
    <p><b>Dear, {{$data->nama_panggilan}}</b></p>
    <i>Terima kasih telah mendaftar, untuk selanjutnya bisa transfer ke norek 0000 a.n AtasNama</i>
    <p>Jika sudah transfer, bisa kirim bukti pembayaran melalui link di bawah</p>
    <a href="https://www.jakartayouthchoir.com/kegiatan/oprec/upload-bukti-bayar/{{$data->kode_bayar}}">Upload Bukti Pembayaran</a>
    @else
    <p><b>Dear, {{$data->nama_panggilan}}</b></p>
    <p>Terima kasih telah mendaftar</p>
    <p>Anda termasuk dalam waiting list</p>
    <p>Tunggu kabar selanjutnya dari kami yaaa</p>
    @endif --}}
</body>
</html>