<nav class="navbar-fixed">
    <div class="container">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-dev" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{route('beranda')}}">Beranda</a></li>
                <li><a href="{{route('profile')}}">Profile</a></li>
                <li><a href="{{route('kegiatan')}}">Kegiatan</a></li>
                <li><a href="{{route('prestasi')}}">Prestasi</a></li>
                <li><a href="{{route('berita')}}">Berita</a></li>
                <li><a href="{{route('tentang-kami')}}">Tentang Kami</a></li>
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
