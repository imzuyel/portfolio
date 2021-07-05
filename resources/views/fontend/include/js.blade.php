<script src="{{ asset('fontend/js/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('fontend/js/aos.js') }}"></script>

<script>
    AOS.init({
                easing: 'ease-out-back',
                duration: 1000
            });
</script>
<script>
    $(() => {
                $(window).scroll(() => {
                    var windowTop = $(window).scrollTop();
                    windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
                    windowTop > 100 ? $('ul.nav-honey').css('top', '50px') : $('ul.nav-honey').css('top', '160px');
                });
                $('#logo').on('click', () => {
                    $('html,body').animate({
                        scrollTop: 0
                    }, 500);
                });
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

<script src="{{ asset('fontend/js/particles.min.js') }}"></script>
<script src="{{ asset('fontend/js/particles.js') }}"></script>
<script src="{{ asset('fontend/js/core.js') }}"></script>
<script src="{{ asset('fontend/js/charts1.js') }}"></script>
<script src="{{ asset('fontend/js/material.js') }}"></script>
<script src="{{ asset('fontend/js/animated.js') }}"></script>
<script>
    am4core.useTheme(am4themes_material);
    am4core.useTheme(am4themes_animated);
    var chart = am4core.create("chartdiv", am4charts.PieChart3D);
    chart.innerRadius = am4core.percent(30);
    chart.data = [
    @foreach ($skill as $item)
    {
    "skill": "{{ $item-> skill_name}}",
    "value": {{ $item-> value}},
    },
    @endforeach
    ];
    var pieSeries = chart.series.push(new am4charts.PieSeries3D());
    pieSeries.dataFields.value = "value";
    pieSeries.dataFields.category = "skill";
    pieSeries.slices.template.stroke = am4core.color("#f47b10");
    pieSeries.slices.template.strokeWidth = 2;
    pieSeries.slices.template.strokeOpacity = 1;
    chart.legend = new am4charts.Legend();
    chart.legend.position = "right";
    chart.legend.scrollable = true;
    pieSeries.ticks.template.disabled = true;
    pieSeries.slices.template.states.getKey("hover").properties.shiftRadius = 0;
    pieSeries.slices.template.states.getKey("hover").properties.scale = 1.1;
    chart.responsive.enabled = true;
    if ($(window).width() < 700)
    {
        pieSeries.labels.template.disabled=true;

    }
    else
    {
        pieSeries.labels.template.disabled=false;
    }

</script>

<script src="{{ asset('fontend/js/move-top.js') }}"></script>
<script src="{{ asset('fontend/js/easing.js') }}"></script>
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
                    containerID: 'toTop',
                    containerHoverID: 'toTopHover',
                    scrollSpeed: 1200,
                    easingType: 'linear'
                };
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });

</script>
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
                    slidesToShow: 4,
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
<script src="{{ asset('/') }}fontend/js/jquery.waypoints.min.js"></script>

<script src="{{ asset('fontend/js/jquery.countup.js') }}"></script>
<script>
  $('.counter').countUp();

</script>
<script>
  $(document).ready(function() {
    $('.testimonial-slider').slick({
      autoplay: true
      , autoplaySpeed: 1000
      , speed: 600
      , draggable: true
      , infinite: true
      , slidesToShow: 1
      , slidesToScroll: 1
      , arrows: false
      , dots: true
    , });

    @foreach ($testimonials as $key => $item)
           $('.slick-dots li:nth-child({{ $key+1 }})').html('<button style="background: url({{$item->photo}})"></button>');
    @endforeach


  });

</script>
<script src="{{ asset('backend/js/toastr.min.js') }}"></script>
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
<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
var textWrapper = document.querySelector('.ml11 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml11 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700
  })
  .add({
    targets: '.ml11 .line',
    translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
    easing: "easeOutExpo",
    duration: 700,
    delay: 100
  }).add({
    targets: '.ml11 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 34 * (i+1)
  }).add({
    targets: '.ml11',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
<script src="{{ asset('fontend/js/bootstrap.js') }}"></script>
<script src="{{ asset('fontend/js/ajax.js') }}"></script>
