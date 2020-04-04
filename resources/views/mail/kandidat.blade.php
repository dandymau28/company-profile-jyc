<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Success</title>
</head>
<body>
    @if($status == 'kandidat')
    <p><b>Dear, {{$data->nama_panggilan}}</b></p>
    <i>Terima kasih telah mendaftar, untuk selanjutnya bisa transfer ke norek 0000 a.n AtasNama</i>
    <p>Jika sudah transfer, bisa kirim bukti pembayaran melalui link di bawah</p>
    <a href="http://127.0.0.1/upload-bukti-bayar/{{$data->kode_bayar}}">Upload Bukti Pembayaran</a>
    @else
    <p><b>Dear, {{$data->nama_panggilan}}</b></p>
    <p>Terima kasih telah mendaftar</p>
    <p>Anda termasuk dalam waiting list</p>
    <p>Tunggu kabar selanjutnya dari kami yaaa</p>
    @endif
</body>
</html>