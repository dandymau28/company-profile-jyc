<!-- JS Boostrap 4.0 -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap-4.4.1-dist') }}/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @stack('js')
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- INI JS APA? -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/galleria.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script>
    $(function () {
        AOS.init();

        $(document).on("scroll", function () {
            var $nav = $("#navbar");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });

        let title = $('title').text();
        let nav = $('#nav-active').text();
        title = title.slice(5);
        title = title.toLowerCase();
        // console.log(title);
        var navigasi =  $('#nav-items').find('.nav-link');
        // console.log(navigasi);
        navigasi.each((i, el) => {
            if ($(el).attr('name') == nav) {
                // console.log($(el));
                $(el).addClass('active')
            } else {
                $(el).removeClass('active');
            }
        })
    })

    $(document).ready(function(){ 
        $(window).scroll(function(){ 
            if ($(this).scrollTop() > 100) { 
                $('#scroll').fadeIn(); 
            } else { 
                $('#scroll').fadeOut(); 
            } 
        }); 
        $('#scroll').click(function(){ 
            $("html, body").animate({ scrollTop: 0 }, 600); 
            return false; 
        }); 
    });
</script>