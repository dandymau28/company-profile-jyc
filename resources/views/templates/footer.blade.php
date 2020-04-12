<footer  class="page-footer merah ">
    <div id="footer-top" class="row pb-3 pt-4 w-90">
        <div class="col-sm-12 col-md-3">
            <img id="footer-logo" class="bg-light rounded-circle my-2 shadow" src="{{asset('assets/img/logo-jyc.png')}}" alt="img">
            <div class="text-white">We Sing for The City And The Country</div>

            <div class="mt-3">
                <div class="footer-title">
                    Hubungi Kami
                </div>
                <div class="text-white">
                    <div>
                        <i class="fab fa-whatsapp pr-md-2"></i>+6281316487896
                    </div>
                    <div>
                        <i class="far fa-envelope pr-md-2"></i></i>jakartayouthchoir@gmail.com
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-3 mt-sm-3 mt-md-0">
            <div class="footer-title pb-1">Navigasi</div>
            <ul class="list-unstyled">
                <li><a class="text-white" href="{{route('berita')}}">Berita</a></li>
                <li><a class="text-white" href="{{route('profile')}}">Profile</a></li>
                <li><a class="text-white" href="{{route('prestasi')}}">Prestasi</a></li>
                <li><a class="text-white" href="{{route('beranda')}}">Beranda</a></li>
                <li><a class="text-white" href="{{route('kegiatan')}}">Kegiatan</a></li>
                <li><a class="text-white" href="{{route('tentang-kami')}}">Tentang Kami</a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-3 mt-sm-3 mt-md-0">
            <div class="footer-title pb-1">Tautan Penting</div>
            <ul class="list-unstyled">
                <li><a class="text-white" href="{{route('jncc')}}">Jakarta National Choir Competition</a></li>
                <li><a class="text-white" href="{{route('berita')}}/kategori/Kompetisi%20Internasional">Kompetisi International</a></li>
                <li><a class="text-white" href="{{route('berita')}}/kategori/Kompetisi%20Nasional">Kompetisi Nasional</a></li>
                <li><a class="text-white" href="{{route('oprec')}}">Penerimaan Anggota Baru</a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-3 mt-sm-3 mt-md-0">
            <div class="footer-title mb-1">Berlangganan surat elektronik</div>
            <form action="{{route('subscribe')}}" method="post">
                @csrf
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="text" name="email" class="form-control shadow" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Masukkan email anda">
                </div>
                <button type="submit" class="btn btn-warning text-white shadow">Langganan</button>
                <a href="#" class="shadow" id="scroll" style="display: none;"><span></span></a>
            </form>
        </div>
    </div>
    <div id="footer-bottom" class="row justify-content-between w-90 align-items-center py-3">
        <div class="col-12 col-lg-6 text-right p-2">
            <a class="shadow-lg" href="https://www.youtube.com/channel/UCUelE1nt2PXC_SN6aAfbs8A"><img class="social-links " src="{{asset('/assets/img/youtube-1.png')}}" alt="Youtbe"></a>
            <a class="shadow-lg" href="https://www.facebook.com/jktyouthchoir/"><img class="social-links ml-2" src="{{asset('/assets/img/facebook-1.png')}}" alt="Fb"></a>
            <a class="shadow-lg" href="https://www.instagram.com/jktyouthchoir/"><img class="social-links ml-2" src="{{asset('/assets/img/ig-1.png')}}" alt="Ig"></a>
            <a class="shadow-lg" href="https://twitter.com/JktYouthChoir"><img class="social-links ml-2" src="{{asset('/assets/img/twitter-1.png')}}" alt="Twitter"></a>
            <a class="shadow-lg" href="mailto:jakartayouthchoir@gmail.com"><img class="social-links ml-2" src="{{asset('/assets/img/email-2.png')}}" alt="Twitter"></a>
        </div>
        <div class="col-12 col-lg-6 text-right footer-title ">
            &copy 2016 - {{ now()->year }}. Jakarta Youth Choir
        </div>
      </div>
    {{-- <div id="footer" class="w-80">
        <div class="row">
            <div class="col-md-4 text-center">
                <h5 class="text-white">Kegiatan</h5>
                    <ul class="list-unstyled footer-border">
                        <li><a class="text-white" href="#!">Latihan Rutin</a></li>
                        <li><a class="text-white" href="#!">Daftar Kompetisi</a></li>
                        <li><a class="text-white" href="#!">Jakarta National Choir Competition</a></li>
                    </ul>
            </div>
            <div class="col-md-2 text-center">
                <h5 class="text-white">Berita</h5>
                <ul class="list-unstyled footer-border">
                    <li><a class="text-white" href="#!">Recent</a></li>
                    <li><a class="text-white" href="{{ route('kegiatan') }}/#galeri">Galeri</a></li>
                    <li><a class="text-white" href="{{ route('kegiatan') }}/#video">Video</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="mt-5"><a class="text-white" href="#!"><h5>Prestasi</h5></a></div>
            </div>
            <div class="col-md-3">
                <h5 class="white-text right-align">
                    <ul class="list-unstyled">
                        <a class="grey-text text-lighten-3" href="#!"><img class="social-links" src="{{asset('/assets/img/youtube.png')}}" alt="Youtbe"></a>
                        <a class="grey-text text-lighten-3" href="#!"><img class="social-links" src="{{asset('/assets/img/facebook.png')}}" alt="Fb"></a>
                        <a class="grey-text text-lighten-3" href="#!"><img class="social-links" src="{{asset('/assets/img/ig.png')}}" alt="Ig"></a>
                        <a class="grey-text text-lighten-3" href="#!"><img class="social-links" src="{{asset('/assets/img/twitter.png')}}" alt="Twitter"></a>
                    </ul>
                </h5>
                <div class="row">
                        <div class="col text-white">
                            Jl. Jatinegara Timur No.55, RT.11/RW.3, Bali Mester, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13310
                        </div>
                        {{-- <div class="col">
                            <i class="material-icons">location_on</i>
                        </div>
                </div>
            </div>  
        </div>
        <div class="row justify-content-center">
            <div class="col text-center">
                <a class="grey-text text-lighten-3" href="#!"><img class="social-links" src="{{asset('/assets/img/youtube.png')}}" alt="Youtbe"></a>
                <a class="grey-text text-lighten-3" href="#!"><img class="social-links" src="{{asset('/assets/img/facebook.png')}}" alt="Fb"></a>
                <a class="grey-text text-lighten-3" href="#!"><img class="social-links" src="{{asset('/assets/img/ig.png')}}" alt="Ig"></a>
                <a class="grey-text text-lighten-3" href="#!"><img class="social-links" src="{{asset('/assets/img/twitter.png')}}" alt="Twitter"></a>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container text-center">
                &copy 2016 - {{ now()->year }}. Jakarta Youth Choir
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container text-center">
            &copy 2020 - Promise Developer
        </div>
    </div> --}}
</footer>