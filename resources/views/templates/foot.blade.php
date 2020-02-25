<!-- JS Boostrap 4.0 -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </!-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- INI JS APA? -->
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