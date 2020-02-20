<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <title>JYC: {{$title}}</title>
</head>
<body>
    @include('templates.navbar')
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="{{asset('assets/img/slider/1.png')}}">
                <div class="caption left-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="{{asset('assets/img/slider/2.png')}}">
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src="{{asset('assets/img/slider/3.png')}}">
                <div class="caption right-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>

    <!-- Page Layout here -->
    <section class="brown lighten-5">

        <div class="container">
            <div class="row align-items-center">
                {{-- Berita --}}
                <div class="col berita-border align-self-center s12 m8 l9">
                    <div class="row align-items-center">
                        <div class="col align-self-center">
                            <h2 id="berita" class="center-align">Berita</h2>
                        </div>
                    </div>
                    {{-- Card Berita --}}
                    <div class="row card-border">
                        <div class="col s12 m6 l6">
                            <img class="responsive-img" src="{{asset('assets/img/berita/3.png')}}" alt="">
                        </div>
                        <div class="col s12 m6 l6">
                            <div class="judul-berita">
                                <h5 class="my-0">Judul Berita</h5>
                            </div>
                            <div class="waktu-berita">
                                <i class="tiny material-icons">access_time</i>
                                29 Agustus 2019
                            </div>
                            <div class="isi-berita">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt placeat voluptate, rem deleniti quasi voluptatibus iure minus amet aliquam at laboriosam qui reprehenderit neque repudiandae. Corporis exercitationem velit vero eveniet! Voluptates nemo minima facilis dicta veniam. Officiis, iste perferendis expedita veritatis ab tenetur tempore incidunt dignissimos animi dolorum molestiae labore ullam dolor consequatur suscipit magnam. Nesciunt eaque neque illo labore! Eveniet, atque mollitia laboriosam pariatur dicta molestias quibusdam repellendus magni natus consequatur ab est doloremque, voluptatum nihil ipsa alias vel dolorem iure quod totam sapiente odit, dolorum qui sequi? In suscipit nihil quo iusto expedita pariatur temporibus earum, dolore consectetur?
                            </div>
                        </div>
                    </div>
                    <div class="row card-border">
                        <div class="col s12 m6 l6">
                            <img class="responsive-img" src="{{asset('assets/img/berita/3.png')}}" alt="">
                        </div>
                        <div class="col s12 m6 l6">
                            <div class="judul-berita">
                                <h5 class="my-0">Judul Berita</h5>
                            </div>
                            <div class="waktu"></div>
                        </div>
                    </div>

                    <div class="row card-border">
                        <div class="col s12 m6 l6">
                            <img class="responsive-img" src="{{asset('assets/img/berita/3.png')}}" alt="">
                        </div>
                        <div class="col s12 m6 l6">
                            <div class="judul-berita">
                                <h5 class="my-0">Judul Berita</h5>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination align-center">
                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                        <li class="active"><a href="#!">1</a></li>
                        <li class="waves-effect"><a href="#!">2</a></li>
                        <li class="waves-effect"><a href="#!">3</a></li>
                        <li class="waves-effect"><a href="#!">4</a></li>
                        <li class="waves-effect"><a href="#!">5</a></li>
                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                      </ul>
                </div>

                {{-- Sidebar --}}
                <div class="col align-self-center s12 m4 l3">
                    <div class="row"></div>
                    <div class="row">
                        <div class="col">
                            <div id="search-berita" class="nav-wrapper">
                                <form>
                                  <div class="input-field">
                                    <input id="search" type="search" required>
                                    <label class="label-icon" for="search"></label>
                                    <i class="material-icons">search</i>
                                  </div>
                                </form>
                              </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Galeri --}}
            <hr />
            <section class="galeri">
                <div class="row">
                    <h4>Galeri</h4>
                    <div class="input-field col s12 m3 l3">
                        <select>
                          <option value="" disabled selected>Pilih Kegiatan</option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                          <option value="3">Option 3</option>
                        </select>
                        {{-- <label>Materialize Select</label> --}}
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="fotorama" 
                            data-nav="thumbs"
                            data-transition="crossfade"
                            data-autoplay="true"
                            data-width="100%"
                            data-ratio="800/600">
                            <img src="{{asset('assets/img/berita/1.png')}}">
                            <img src="{{asset('assets/img/berita/2.png')}}">
                            <img src="{{asset('assets/img/berita/3.png')}}">
                        </div>
                    </div>
                </div>
            </section>
            <hr />

            {{-- Videos --}}
            <section class="videos">
                <div class="row">
                    <h4>Videos</h4>
                </div>
                <div class="col s12 m12 l12">
                    <div class="fotorama" 
                        data-nav="thumbs"
                        data-transition="crossfade"
                        data-autoplay="true"
                        data-width="100%"
                        data-ratio="800/600">
                        <a href="https://www.youtube.com/watch?v=ftNXzo9rovM&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU"></a>
                        <a href="https://www.youtube.com/watch?v=5wWAc8mVhZw&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=2"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=3"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=4"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=5"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=6"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=7"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=8"></a>
                        <a href="https://www.youtube.com/watch?v=yXU0tDJCzKc&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU&index=9"></a>
                        {{-- <a href="https://www.youtube.com/watch?v=ftNXzo9rovM&list=PL39FGp6oBye4C4xgtKTou-t1iLXRiiulU"></a> --}}
                    </div>
                </div>
            </section>
        </div>
    </section>
    @include('templates.footer')
</body>
    @include('templates.foot')
    <script>
        
        // $('.carousel.carousel-slider').carousel({
        //     fullWidth: false,
        //     indicators: true,
        //     duration: 200
        // });

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            fullWidth: true,
            // height: 00,
            duration: 400,
            interval: 3000
        });

        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
</html>