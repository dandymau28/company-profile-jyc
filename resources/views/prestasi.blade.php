<!DOCTYPE html>
<html lang="en">
<head>
    @include('templates.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} - Jakarta Youth Choir</title>
</head>
<body>
    @include('templates.navbar')

    <!-- Banner Prestasi -->
    <div id="banner-prestasi">
        <div class="container-fluid text-prestasi text-center">
            <h1 class="display-judul">PRESTASI</h1>
            <h4 class="">JAKARTA YOUTH CHOIR</h4>
        </div>
    </div>

    <!--Prestasi -->
    <div id="konten-prestasi" class="prestasi bg-light py-5 w-80">
        <h3 class="mb-5">PRESTASI</h3>
        @foreach ($prestasis as $prestasi)
        <div data-aos="zoom-in" class="row justify-content-center my-5">
            <div class="col-sm-12 col-md-4">
                <div id="carousel{{$prestasi->id}}" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel{{$prestasi->id}}" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel{{$prestasi->id}}" data-slide-to="1"></li>
                        <li data-target="#carousel{{$prestasi->id}}" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            {{-- <img src="{{asset('assets/img/prestasi/1.png')}}" class="d-block card-img-top" alt="..."> --}}
                            <img src="{{url($prestasi->logo_kompetisi)}}" class=" img-fluid card-img-top" alt="...">
                        </div>
                        <div class="carousel-item">
                            {{-- <img src="{{asset('assets/img/prestasi/2.png')}}" class="d-block card-img-top" alt="..."> --}}
                            <img src="{{url($prestasi->foto_tim)}}" class="d-block card-img-top" alt="...">
                        </div>
                        <div class="carousel-item">
                            {{-- <img src="{{asset('assets/img/prestasi/3.png')}}" class="d-block card-img-top" alt="..."> --}}
                            <img src="{{url($prestasi->foto_piala)}}" class="d-block card-img-top" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel{{$prestasi->id}}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel{{$prestasi->id}}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="">
                    {{-- <h5 class="card-title text-bold">1st Lanna International Choir Competition</h5> --}}
                    <h5 class="card-title text-bold">{{ $prestasi->nama_kompetisi }}</h5>
                    <h5 class="text-bold">{{ $prestasi->kota }}, {{ $prestasi->negara }}</h5>
                    <h5 class="text-muted text-small">{{ $prestasi->tgl_kompetisi }}</h5>
                    <ul class="list-group list-group-flush bg-transparent pt-2">
                    @foreach($gelars as $gelar)
                        @if($prestasi->id == $gelar->prestasi_id)
                        {{-- <li class="list-group-item bg-light text-danger"><i class="fas fa-trophy pr-2"></i>Gold Medal Folklore Category</li> --}}
                        <li class="list-group-item bg-light text-danger py-1"><i class="fas fa-trophy pr-2"></i>{{ $gelar->gelar }}</li>
                        @endif
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
        
        {{-- <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">{{ $prestasi->nama_kompetisi }}</h5>
                <h5 class="card-title text-bold">1st Lanna International Choir Competition</h5>
                <h5>Chiang Mai, Thailand</h5>
                <h5>Oktober 2016</h5>
                <p class="card-text">{{ $prestasi->gelar_juara }}</p>
                <p class="card-text">Penghargaan</p>
                <h5 class="card-text"><i class="fas fa-medal text-warning fa-2x pr-2"></i>Gold Medal Folklore Category<i class="fas fa-medal text-warning fa-2x pl-2"></i></h5>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/img/prestasi/1.png')}}" class="d-block card-img-top" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/img/prestasi/1.png')}}" class="d-block card-img-top" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/img/prestasi/1.png')}}" class="d-block card-img-top" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="card-footer">
                <small class="text-muted">Sumber: Dokumentasi Jakarta Youth Choir</small>
            </div>
            <img src="{{asset('assets/img/prestasi/1.png')}}" class="card-img-top" alt="...">
        </div> --}}
    </div>


@include('templates.footer')
</body>
@include('templates.foot')
</html>