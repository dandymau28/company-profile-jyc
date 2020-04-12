<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin')}}" class="brand-link">
        <img src="/assets/img/logo-jyc.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><b>Admin</b>JYC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/assets/img/avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->username}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item level-1">
                    <a href="{{route('admin')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview level-1">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Anggota
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item level-2">
                            <a href="{{route('anggota-master')}}" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Data Master</p>
                            </a>
                        </li>
                        <li class="nav-item level-2">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-check"></i>
                                <p>Anggota Aktif</p>
                            </a>
                        </li>
                        <li class="nav-item level-2">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-clock"></i>
                                <p>Anggota Cuti</p>
                            </a>
                        </li>
                        <li class="nav-item level-2">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-times"></i>
                                <p>Anggota Tidak Aktif</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview level-1">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Calon Anggota
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item level-2">
                            <a href="{{route('cab-master')}}" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Data Master</p>
                            </a>
                        </li>
                        <li class="nav-item level-2">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-tag"></i>
                                <p>Sudah Bayar</p>
                            </a>
                        </li>
                        <li class="nav-item level-2">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-times"></i>
                                <p>Belum Bayar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview level-1">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Berita
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item level-2">
                            <a href="{{route('olah-berita')}}" class="nav-link">
                                <i class="nav-icon far fa-edit"></i>
                                <p>Olah Berita</p>
                            </a>
                        </li>
                        <li class="nav-item level-2">
                            <a href="{{route('buat-berita')}}" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>Buat Berita</p>
                            </a>
                        </li>
                        <li class="nav-item level-2">
                            <a href="{{route('kategoriTag')}}" class="nav-link">
                                <i class="nav-icon fas fa-tags"></i>
                                <p>Kategori dan Tag</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item level-1">
                    <a href="{{route('kegiatan-view')}}" class="nav-link">
                        <i class="nav-icon fas fa-running"></i>
                        <p>Kegiatan</p>
                    </a>
                </li>
                <li class="nav-item level-1">
                    <a href="{{route('form-prestasi')}}" class="nav-link">
                        <i class="nav-icon fas fa-trophy"></i>
                        <p>Prestasi</p>
                    </a>
                </li>
                <li class="nav-item has-treeview level-1">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-photo-video"></i>
                        <p>
                            Galeri
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item level-2">
                            <a href="{{route('galeri')}}" class="nav-link">
                                <i class="nav-icon fas fa-video"></i>
                                <p>Galeri Master</p>
                            </a>
                        </li>
                        <li class="nav-item level-2">
                            <a href="{{route('upload-foto-view')}}" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>Foto</p>
                            </a>
                        </li>
                        <li class="nav-item level-2">
                            <a href="{{route('video-view')}}" class="nav-link">
                                <i class="nav-icon fas fa-video"></i>
                                <p>Video</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item level-1">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <p class="text">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

@push('js')
<script>
    /** add active class and stay opened when selected */
    var url = window.location;
    const allLinks = document.querySelectorAll('.nav-item a');
    const currentLink = [...allLinks].filter(e => {
        return e.href == url;
    });
    console.log(currentLink[0]);
    if (currentLink[0].parentElement.classList.contains('level-2')) {
        currentLink[0].parentElement.parentElement.parentElement.classList.add('menu-open');
        console.log(currentLink[0].parentElement);
        currentLink[0].classList.add('active')
    } else {
        currentLink[0].classList.add('active')
    }

</script>
@endpush
