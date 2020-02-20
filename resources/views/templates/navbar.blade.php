<nav class="navbar-fixed red darken-4">
    <div class="container">
        <div class="nav-wrapper">
            <a href="{{route('beranda')}}" class="brand-logo"><img class="brand-logo" src="{{asset('assets/img/logo-jyc.png')}}" alt="Logo"></a>
            <a href="#" data-target="mobile-dev" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-link" class="right hide-on-med-and-down">
                <li class="nav-item" name="beranda"><a href="{{route('beranda')}}">Beranda</a></li>
                <li class="nav-item" name="profile"><a href="{{route('profile')}}">Profile</a></li>
                <li class="nav-item" name="kegiatan"><a href="{{route('kegiatan')}}">Kegiatan</a></li>
                <li class="nav-item" name="prestasi"><a href="{{route('prestasi')}}">Prestasi</a></li>
                <li class="nav-item" name="berita"><a href="{{route('berita')}}">Berita</a></li>
                <li class="nav-item" name="tentang"><a href="{{route('tentang-kami')}}">Tentang Kami</a></li>
            </ul>
        </div>
    </div>
</nav>

<ul class="sidenav" id="mobile-dev">
    <li><a href="{{route('beranda')}}">Beranda</a></li>
    <li><a href="{{route('profile')}}">Profile</a></li>
    <li><a href="{{route('kegiatan')}}">Kegiatan</a></li>
    <li><a href="{{route('prestasi')}}">Prestasi</a></li>
    <li><a href="{{route('berita')}}">Berita</a></li>
    <li><a href="{{route('tentang-kami')}}">Tentang Kami</a></li>
</ul>
