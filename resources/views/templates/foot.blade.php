<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="{{ asset('materialize') }}/js/materialize.js"></script>
<script src="{{ asset('assets') }}/js/main.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/galleria.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script>
    let title = $('title').text();
    title = title.slice(5);
    title = title.toLowerCase();
    // console.log(title);
    var navigasi =  $('#nav-link').find('.nav-item');
    navigasi.each((i, el) => {
        if ($(el).attr('name') == title) {
            $(el).addClass('active')
        } else {
            $(el).removeClass('active');
        }
    })
    // console.log(navigasi);
</script>