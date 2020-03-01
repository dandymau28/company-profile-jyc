<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('beranda')}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul id="nav-items" class="navbar-nav ml-auto text-center">
                <li class="nav-item">
                    <a class="nav-link" name="beranda" href="{{route('beranda')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" name="profile" href="{{route('profile')}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" name="kegiatan" href="{{route('kegiatan')}}">Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" name="prestasi" href="{{route('prestasi')}}">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" name="berita" href="{{route('berita')}}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" name="tentang" href="{{route('tentang-kami')}}">Tentang Kami</a>
                </li>
          </ul>
        </div>
    </div>
  </nav>