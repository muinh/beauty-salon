<!-- JS Global Compulsory -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{{ asset('js/back-to-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smoothScroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<!-- JS Customization -->
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>

<!-- fancy -->
<script type="text/javascript" src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.fancybox-media.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fancy-box.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        FancyBox.initFancybox();
    });

    $(document).ready(function() {
        $('.fancybox-media').fancybox({
            openEffect  : 'none',
            closeEffect : 'none',
            helpers : {
                media : {}
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#owl-brands").owlCarousel({
            items : 4,
            itemsTablet: [768,2],
            itemsMobile : [479,1],
            autoPlay : 5000,
            stopOnHover : true,
            slideSpeed : 200,
            navigation : false
        });
    });
</script>
<!-- Questa pagina -->
<script type="text/javascript" src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/revolution-slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl-carousel.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initParallaxBg();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullWidth();
    });
</script>
