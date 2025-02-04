<!-- SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('libs/bootstrap4/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('libs/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('libs/match-height/dist/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('libs/fancybox/dist/jquery.fancybox.min.js') }}"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.eqh').matchHeight();
        $("[data-fancybox]").fancybox();
        $(".mobile-button").click(function(e) {
            e.preventDefault();
            $('.mobile-nav').toggleClass("active");
        });
        $('.navbar-toggle').click(function(e){
            e.preventDefault();
            $(".mobile-menu").toggleClass('pushy-right');
        });
        $(".mobile-menu .close-btn").click(function(e){
            $(".mobile-menu").toggleClass('pushy-right');
        });
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() != 0) {
                    if ($('.scroll-up').hasClass('show-up-btn')) {
                        // TODO: bang!
                    } else {
                        $('.scroll-up').addClass('show-up-btn');
                    }
                } else {
                    if ($('.scroll-up').hasClass('show-up-btn')) {
                        $('.scroll-up').removeClass('show-up-btn');
                    } else {
                        // TODO: bang!
                    }
                }
            });
            $('.scroll-up').click(function(e) {
                e.preventDefault();
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
            });
        });
        $('.featured-carousel').owlCarousel({
            loop: false,
            items: 4,
            margin: 0,
            nav: true,
            dots: true,
            navText: ['<div class="f-slider-btn effect ver-center"><i class="fa fa-angle-left"></i></div>', '<div class="f-slider-btn effect ver-center"><i class="fa fa-angle-right"></i></div>'],
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false
                },
                1200: {
                    items: 4,
                    nav: true
                }
            }
        });
    });
</script>
