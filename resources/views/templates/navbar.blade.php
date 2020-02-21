<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('assets/img/logo-jyc.png')}}" alt="img"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="{{route('beranda')}}">Beranda</a>
                <a class="nav-item nav-link" href="{{route('profile')}}">Profile</a>
                <a class="nav-item nav-link" href="{{route('kegiatan')}}">Kegiatan</a>
                <a class="nav-item nav-link" href="{{route('prestasi')}}">Prestasi</a>
                <a class="nav-item nav-link" href="{{route('berita')}}">Berita</a>
                <a class="nav-item nav-link" href="{{route('tentang-kami')}}">Tentang Kami</a>
            </div>
        </div>
    </div>
</nav>
