<!-- footer begin -->
<footer>
{{--    <div class="container text-center text-light">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="social-icons big">--}}
{{--                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>--}}
{{--                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>--}}
{{--                    <a href="#"><i class="fa fa-rss fa-lg"></i></a>--}}
{{--                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>--}}
{{--                    <a href="#"><i class="fa fa-skype fa-lg"></i></a>--}}
{{--                    <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container text-center" style="margin-top: -48px;">
        &copy; Copyright {{date('Y')}} - {{env('APP_NAME')}}
    </div>
</footer>
<!-- footer close -->

<a href="#" id="back-to-top"></a>
<div id="preloader">
    <div class="s1">
        <span></span>
        <span></span>
    </div>
</div>



<!-- Javascript Files
================================================== -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/easing.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<script src="{{asset('js/validation.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/enquire.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/jquery.plugin.js')}}"></script>
<script src="{{asset('js/typed.js')}}"></script>
<script src="{{asset('js/typed-custom.js')}}"></script>
<script src="{{asset('js/supersized.3.2.7.min.js')}}"></script>
<script src="{{asset('js/particles.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/designesia.js')}}"></script>

<script type="text/javascript">

    jQuery(function ($) {

        $.supersized({

            // Functionality
            slide_interval: 2000,		// Length between transitions
            transition: 1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed: 700,		// Speed of transition

            // Components
            slide_links: 'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
            slides: [			// Slideshow Images
                { image: 'images/background/numbers.jpg', url: '' },
                { image: 'images/background/stats.jpg', url: '' },
                { image: 'images/background/3.jpg', url: '' },
                { image: 'images/background/financial-2860753_1280.jpg', url: '' }
            ]

        });
    });

</script>
