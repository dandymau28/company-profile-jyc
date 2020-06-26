<!DOCTYPE html>
<html lang="en">

<head>
    @include('templates.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/jquery.carousel-3d.default.css')}}" rel="stylesheet">
    <title>{{$title}} - Jakarta Youth Choir</title>
</head>

<body>
    <!-- Navbar -->
    @include('templates.navbar')

    <!-- Banner Kegiatan -->
    <div id="banner-oprec">
        <div id="text-oprec" class="container-fluid">
            {{-- Slide 1 --}}
            <div class="row justify-content-center mx-2 mx-sm-1 mx-md-0">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    @if(Session::has('success'))
                    <div class="row">
                        <h1 class="">Hai, {{ Str::title($data->nama_panggilan) }}!</h1>
                    </div>
                    <div class="row text-dark bg-light p-3 p-sm-4 p-md-5 text-left mt-2">
                        <div class="col-12">
                            <h4 class="pt-2">Terimakasih :)</h4>
                            <h5>Kamu berhasil mengunggah bukti pembayaran calon anggota baru JYC 2020.</h5>
                            <p class="text-justify">Segera lakukan konfirmasi pembayaran ke panitia melalui CP dibawah. Setelah itu silahkan cek email dalam 1 x 24 jam, panitia akan mengirimkan link grup untuk audisi serta borang untuk dibawa saat audisi. Jika ada pertanyaan, silahkan hubungi panitia melalui CP. Sampai bertemu di hari Audisi :)</p>
                            <p><strong>CP: +62812-8921-8785 (Febri)</strong></p>
                        </div>
                        <div class="col-12 pt-3">
                            <div class="text-right">
                                <a href="{{ route('beranda') }}"><button type="button" class="btn btn-danger">Oke,
                                        mengerti.</button></a>
                            </div>
                        </div>
                    </div>
                    @elseif($data->foto_bukti)
                    <div class="row">
                        <h1 class="">Hai, {{ Str::title($data->nama_panggilan) }}!</h1>
                    </div>
                    <div class="row text-dark bg-light p-3 p-sm-4 p-md-5 text-left mt-2">
                        <div class="col-12">
                            <h4 class="pt-2">Konfirmasi</h4>
                            <h5>Kamu telah mengunggah bukti pembayaran calon anggota baru JYC 2020.</h5>
                            <p class="text-justify">Segera lakukan konfirmasi pembayaran ke panitia melalui CP dibawah. Setelah itu silahkan cek email dalam 1 x 24 jam, panitia akan mengirimkan link grup untuk audisi serta borang untuk dibawa saat audisi. Jika ada pertanyaan, silahkan hubungi panitia melalui CP. Sampai bertemu di hari Audisi :)</p>
                            <p><strong>CP: +62812-8921-8785 (Febri)</strong></p>
                        </div>
                        <div class="col-12 pt-3">
                            <div class="text-right">
                                <a href="{{ route('beranda') }}"><button type="button" class="btn btn-danger">Oke,
                                        mengerti.</button></a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="row">
                        <h1 class="">UNGGAH BUKTI PEMBAYARAN</h1>
                    </div>
                    <form action="{{ route('post-bukti-bayar') }}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="row text-dark bg-light p-3 p-sm-4 p-md-5 text-left mt-2">
                            <div class="col-12">
                                <h3 class="pt-2">Terimakasih :)</h3>
                                <h5>telah melakukan proses pembayaran</h5>
                                <div class="row pt-3">
                                    <div class="col-3">
                                        Kode Pembayaran
                                    </div>
                                    <div class="col">
                                        : {{ $data->kode_bayar }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        Nama Lengkap
                                    </div>
                                    <div class="col">
                                        : {{ $data->nama_lengkap  }}
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-3">
                                        Email
                                    </div>
                                    <div class="col">
                                        : {{ $data->email }}
                                    </div>
                                </div>
                                <select name="tanggal_audisi" class="custom-select my-2">
                                    <option selected disabled>Pilih jadwal audisi</option>
                                    @foreach ($jadwal as $item)   
                                    <option value={{ $item->id }}>{{ $item->tanggal }}</option>
                                    @endforeach
                                </select>
                                <div class="alert alert-danger" role="alert">
                                    Jadwal yang sudah dipilih, tidak dapat diganti dengan alasan apapun!
                                  </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="image">Silahkan unggah bukti pembayaran</label>
                                        <input id="image" name="image" type="file" class="form-control" required>
                                        <input type="text" name="kode_bayar" id="kode_bayar" value="{{ $data->kode_bayar }}" hidden>
                                    </div>
                                </div>
                                {{-- <p class="text-justify pt-3">Silahkan unggah bukti pembayaran</p> --}}
                            </div>
                            <div class="col-12 pt-3">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-danger">Unggah</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>


</body>
@include('templates.foot')
@include('templates.footer')

</html>
