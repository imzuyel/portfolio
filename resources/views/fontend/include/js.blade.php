<script src="{{ asset('/') }}fontend/js/jquery-2.2.3.min.js"></script>
<!-- banner-type-text -->
<script src="{{ asset('/') }}fontend/js/aos.js"></script>
<script>
    AOS.init({
                easing: 'ease-out-back',
                duration: 1000
            });

</script>
<!-- sticky nav bar-->
<script>
    $(() => {

                //On Scroll Functionality
                $(window).scroll(() => {
                    var windowTop = $(window).scrollTop();
                    windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
                    windowTop > 100 ? $('ul.nav-honey').css('top', '50px') : $('ul.nav-honey').css('top', '160px');
                });

                //Click Logo To Scroll To Top
                $('#logo').on('click', () => {
                    $('html,body').animate({
                        scrollTop: 0
                    }, 500);
                });

                // //Smooth Scrolling Using Navigation Menu
                // $('a[href*="#"]').on('click', function(e) {
                //     $('html,body').animate({
                //         scrollTop: $($(this).attr('href')).offset().top - 100
                //     }, 500);
                //     e.preventDefault();
                // });

                //Toggle Menu
                $('#menu-toggle').on('click', () => {
                    $('#menu-toggle').toggleClass('closeMenu');
                    $('ul').toggleClass('showMenu');

                    $('li').on('click', () => {
                        $('ul').removeClass('showMenu');
                        $('#menu-toggle').removeClass('closeMenu');
                    });
                });

            });

</script>
<!-- //sticky nav bar -->

<!-- simpleLightbox -->

<!-- scripts required  for particle effect -->
<script src="{{ asset('/') }}fontend/js/particles.min.js"></script>
<script src="{{ asset('/') }}fontend/js/particles.js"></script>
<!-- //scripts required for particle effect -->


<!-- chart -->
<script src="{{ asset('/') }}fontend/js/core.js"></script>
<script src="{{ asset('/') }}fontend/js/charts1.js"></script>
<script src="{{ asset('/') }}fontend/js/material.js"></script>
<script src="{{ asset('/') }}fontend/js/animated.js"></script>
{{-- <script src="{{ asset('/') }}fontend/js/chart.js"></script> --}}
<script>
    // Themes begin
    am4core.useTheme(am4themes_material);
    am4core.useTheme(am4themes_animated);
    // Themes end
    var chart = am4core.create("chartdiv", am4charts.PieChart3D);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in


    chart.data = [
    @foreach ($skill as $item)
    {
    "skill": "{{ $item->skill_name }}",
    "value": {{ $item->value }}
    },
@endforeach
    ];

    // Add and configure Series
    var pieSeries = chart.series.push(new am4charts.PieSeries3D());

    pieSeries.dataFields.value = "value";
    pieSeries.dataFields.category = "skill";

    // Add legend
    chart.legend = new am4charts.Legend();

    // Responsive
    chart.responsive.enabled = true;
    chart.responsive.rules.push({
    relevant: function(target) {
    if (target.pixelWidth <= 600) { return true; } return false; }, state: function(target, stateId) { if (target instanceof
        am4charts.PieSeries) { var state=target.states.create(stateId); var
        labelState=target.labels.template.states.create(stateId); labelState.properties.disabled=true; var
        tickState=target.ticks.template.states.create(stateId); tickState.properties.disabled=true; return state; } return
        null; } });
</script>


<!-- //chart -->


<script src="{{ asset('/') }}fontend/js/simpleLightbox.js"></script>
<script>
    $('.proj_gallery_grid a').simpleLightbox();

</script>
<!-- //simpleLightbox -->
<!-- stats -->
<script src="{{ asset('/') }}fontend/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('/') }}fontend/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

<!--/ start-smoth-scrolling -->
<script src="{{ asset('/') }}fontend/js/move-top.js"></script>
<script src="{{ asset('/') }}fontend/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 900);
                });
            });

</script>
<script>
    $(document).ready(function () {

                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                };


                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });

</script>
<!--// end-smoth-scrolling -->

<!-- //js -->
<!-- Carousel -->
<!-- slick slider -->
<script>
    $(window).resize(function () {
                $('.js-slider').not('.slick-initialized').slick('resize');
            });

            $(window).on('orientationchange', function () {
                $('.js-slider').not('.slick-initialized').slick('resize');
            });
</script>
<script src="{{ asset('/') }}fontend/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).on('ready', function () {

                $(".regular").slick({
                    dots: false,
                    infinite: true,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    pauseOnHover: false,
                    swipe: true,

                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 5,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        }

                    ]


                });
            });
</script>
<!-- Moving Text -->
{{--  Toastr  --}}
<script src="{{ asset('/') }}backend/js/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>



{{--  //All Erros  --}}
<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
{{--  End Toastr  --}}

<script src="{{ asset('/') }}fontend/js/bootstrap.js"></script>
