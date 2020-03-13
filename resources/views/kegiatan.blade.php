<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <title>JYC: {{$title}}</title>
</head>

<body>
    <!-- Navbar -->
    @include('templates.navbar')

    <!-- Carousel -->
    <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/img/kegiatan/slide-1.png')}}" class="d-block w-100" alt="img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/img/kegiatan/slide-2.png')}}" class="d-block w-100" alt="img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/img/kegiatan/slide-3.png')}}" class="d-block w-100" alt="img">
                </div>
            </div>
        </div>
    </div>

    <!-- Latihan Rutin -->
    <div class="latihan-rutin">
        <h3>Latihan Rutin</h3>

        <div class="container">
        @foreach( $kegiatans as $kegiatan )
            <div class="row card-kompetisi">
                <div class="col detail-kompetisi">
                    <img src="{{asset('assets/img/kegiatan/kompetisi-1.png')}}" class="rounded float-left" alt="img">
                    <h4>{{ $kegiatan->nama }}</h4><br>
                    <p>{{ $kegiatan->jenis }}</p>
                </div>
            </div>
        @endforeach
        </div>
    </div>



    <!-- Kompetisi -->
    <div class="kompetisi">
        <h3>Kompetisi yang akan diikuti</h3>

        <div class="container">
            <div class="row card-kompetisi">
                <div class="col detail-kompetisi">
                    <img src="{{asset('assets/img/kegiatan/kompetisi-1.png')}}" class="rounded float-left" alt="img">
                    <h4>Nama Kompetisi</h4><br>
                    <p>Tempat dan Waktu Kompetisi</p>
                </div>
            </div>

            <div class="row card-kompetisi">
                <div class="col detail-kompetisi">
                    <img src="{{asset('assets/img/kegiatan/kompetisi-1.png')}}" class="rounded float-left" alt="img">
                    <h4>Nama Kompetisi</h4><br>
                    <p>Tempat dan Waktu Kompetisi</p>
                </div>
            </div>

            <div class="row card-kompetisi">
                <div class="col detail-kompetisi">
                    <img src="{{asset('assets/img/kegiatan/kompetisi-1.png')}}" class="rounded float-left" alt="img">
                    <h4>Nama Kompetisi</h4><br>
                    <p>Tempat dan Waktu Kompetisi</p>
                </div>
            </div>

        </div>

    </div>


    <!-- Jakarta National Choir Competition -->
    <div class="JNCC">
        <h3>Jakarta National Choir Competition</h3>

        <!-- 3 CARD -->
        <div class="card-group">
            @foreach( $prestasis as $prestasi)
            <div class="card">
                <img class="card-img-top" src="{{asset('assets/img/beranda/card-1.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $prestasi->nama_kompetisi }}</h5>
                    <p class="card-text">{{ $prestasi->gelar_juara }}
                    </p>
                    <p class="card-text"><small class="text-muted">{{ $prestasi->tanggal_kompetisi }}</small></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>



</body>
@include('templates.foot')
@include('templates.footer')

</html>
