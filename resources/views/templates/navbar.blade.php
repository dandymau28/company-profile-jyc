<nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('beranda')}}"><img src="{{asset('assets/img/logo-jyc.png')}}" alt="img"></a>
        {{-- <a class="navbar-brand" href="{{route('beranda')}}"><img src="{{asset('assets/img/logo-jyc.png')}}" alt="img"></a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div id="nav-items" class="navbar-nav ml-auto">
                <a class="nav-item nav-link" name="beranda" href="{{route('beranda')}}"><i class="fas fa-home"></i> Beranda</a>
                <a class="nav-item nav-link" name="profile" href="{{route('profile')}}"><i class="fas fa-user-circle"></i> Profile</a>
                <a class="nav-item nav-link" name="kegiatan" href="{{route('kegiatan')}}"><i class="fas fa-music"></i> Kegiatan</a>
                <a class="nav-item nav-link" name="prestasi" href="{{route('prestasi')}}"><i class="fas fa-trophy"></i> Prestasi</a>
                <a class="nav-item nav-link" name="berita" href="{{route('berita')}}"><i class="fas fa-envelope"></i> Berita</a>
                <a class="nav-item nav-link" name="tentang" href="{{route('tentang-kami')}}"><i class="fas fa-users"></i> Tentang Kami</a>
            </div>
        </div>
    </div>
</nav>
