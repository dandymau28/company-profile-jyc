<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification Mail</title>
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
        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }
        .text-center {
            text-align: center;
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
            <h4 class="text-center">Dear, Swardi</h4>
            <h5>Pembayaranmu telah berhasil!</h5>
            <h5>Selanjutnya, silahkan cetak form dibawah ini. Form <b>WAJIB</b> dibawa saat audisi.</h5>
        </div>
    </div>
    <a href="http://127.0.0.1:8000/kegiatan/oprec/form/{{$kode}}">Form Data Diri</a>
    <div class="footer-mail fixed-bottom">
        <h4 class="text-center">Jakarta Youth Choir</h4>
        <h5 class="text-center">We Sing For The City and The Country</h5>
        <footer class="text-center"><a href="{{route('beranda')}}">www.jakartayouthchoir.com</a></footer>
    </div>
</body>
</html>