<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('templates.head')
    <link  href="{{asset('assets/css/jquery.carousel-3d.default.css')}}" rel="stylesheet">
    <title>{{$title}} - Jakarta Youth Choir</title>
</head>

<body>
    <!-- Navbar -->
    @include('templates.navbar')

    <!-- Banner Kegiatan -->
    <div id="banner-oprec">
        <div class="container text-kegiatan">
            <h1 class="display-judul">PENERIMAAN ANGGOTA BARU</h1>
            <h4 class="">JAKARTA YOUTH CHOIR</h4>
            <h4 class="">2020</h4>
        </div>
    </div>

</body>
@include('templates.foot')
@include('templates.footer')
<script src="{{ asset('assets/js/jquery.resize.ex.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waitforimages.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.js') }}"></script>
<script src="{{ asset('assets/js/jquery.carousel-3d.js') }}"></script>
<script>
    $(function () {
        $('#pilih-kegiatan').on('change', function () {
            let id_kegiatan = $(this).val();
            $.ajax({
                url: '/api/foto/' + id_kegiatan,
                method: 'GET'
            }).done(res => {
                console.log(res);
                let fotos = res.fotos;
                console.log(fotos);
                $('#coba-carousel').empty();
                fotos.forEach((foto, i) => {
                    $('#coba-carousel').append(`
                        <img src="storage/${foto.alamat_foto}">
                    `);
                });
            }).done(res => {
                $('[data-carousel-3d]').Carousel3d();
            })
        })
    });
</script>
</html>
