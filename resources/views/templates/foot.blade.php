<!-- JS Boostrap 4.0 -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap-4.4.1-dist') }}/js/bootstrap.min.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- INI JS APA? -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/galleria.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script>
    let title = $('title').text();
    title = title.slice(5);
    title = title.toLowerCase();
    console.log(title);
    var navigasi =  $('#nav-items').find('.nav-link');
    // console.log(navigasi);
    navigasi.each((i, el) => {
        if ($(el).attr('name') == title) {
            console.log($(el));
            $(el).addClass('active')
        } else {
            $(el).removeClass('active');
        }
    })
</script>