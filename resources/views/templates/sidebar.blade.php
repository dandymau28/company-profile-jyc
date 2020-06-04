{{-- Sidebar --}}
<div id="sidebar-berita" class="col">
    <div class="row d-none d-lg-block">
        <div class="col">
            <form id="cari-berita" action="/berita/cari-berita"  method="GET">
                <div class="input-group custom-search-form border border-danger">
                    <input name="term" id="term" type="text" class="border-0 form-control" placeholder="Cari berita...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-5 p-2 text-center text-white merah ml-3">
            IKUTI KAMI
        </div>
        <div class="col hitam-abu mr-3">

        </div>
    </div>
    <div class="row mt-2 text-center text-white mx-1">
        <div class="col py-3">
            <a class="shadow-lg " href="https://www.facebook.com/jktyouthchoir/"><img class="social-links" src="{{asset('/assets/img/facebook-1.png')}}" alt="Fb"></a>
        </div>
        <div class="col py-3">
            <a class="shadow-lg" href="https://twitter.com/JktYouthChoir"><img class="social-links" src="{{asset('/assets/img/twitter-1.png')}}" alt="Twitter"></a>
        </div>
        <div class="col py-3">
            <a class="shadow-lg" href="https://www.youtube.com/channel/UCUelE1nt2PXC_SN6aAfbs8A"><img class="social-links" src="{{asset('/assets/img/youtube-1.png')}}" alt="Youtbe"></a>
        </div>
        <div class="col py-3">
            <a class="shadow-lg" href="https://www.instagram.com/jktyouthchoir/"><img class="social-links" src="{{asset('/assets/img/ig-1.png')}}" alt="Ig"></a>
        </div>
        <div class="col py-3">
            <a class="shadow-lg" href="mailto:jakartayouthchoir@gmail.com"><img class="social-links" src="{{asset('/assets/img/email-2.png')}}" alt="Twitter"></a>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-5 p-2 text-center text-white merah ml-3">
            TERHANGAT
        </div>
        <div class="col hitam-abu mr-3">
            
        </div>
    </div>
    @foreach( $beritaTerhangat as $berita )
        <div  data-aos="zoom-in" class="row mb-1 text-dark py-3">
            <div class="col-12 col-md-6">
                <a href="/berita/{{ $berita->slug }}">
                    <img class="img-fluid" src="{{Storage::url($berita->banner)}}" alt="Gambar Blog">
                </a>
            </div>
            <div class="col-12 col-md-6 pt-sm-3 pt-md-0">
                <div class=" mb-1 text-justify">
                    <a href="/berita/{{ $berita->slug }}">{{ Str::limit($berita->judul, 80) }}</a>
                    
                </div>
                <div class="tanggal-posting text-muted my-2">
                    <small><i class="far fa-clock pr-1"></i>{{ \Carbon\Carbon::parse($berita->tgl_publish)->locale('id')->diffForHumans() }}</small>
                </div>
            </div>
        </div>
        <hr class="my-n2">
    @endforeach

    <div class="row mt-5">
        <div class="col-5 p-2 text-center text-white merah ml-3">
            KATEGORI
        </div>
        <div class="col hitam-abu mr-3">
            
        </div>
    </div>
    @foreach($koleksiKategori as $koleksi)
    <a href="/berita/kategori/{{$koleksi['nama_kategori']}}">
        <div class="row justify-content-between mt-3">
            <div class="col">
                <ul>
                    <li>{{ $koleksi['nama_kategori'] }}</li>
                </ul>
            </div>
            <div class="col-1 mr-5">
                <span class="badge badge-pill badge-secondary">{{ $koleksi['jumlah_berita'] }}</span>
            </div>
        </div>
    </a>
    <hr class="mt-n2">
    @endforeach
</div>