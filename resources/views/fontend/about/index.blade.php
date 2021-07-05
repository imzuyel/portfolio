<!DOCTYPE html>
<html lang="en">

<head>

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fontend/images/icon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('fontend/images/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('fontend/images/icon/favicon-16x16.png') }}">
    <script>
        addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }

    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/slick/slick-theme.css') }}">
    <style type="text/css">
        * {
            box-sizing: border-box;
        }

        .slider {
            width: 50%;
            margin: 100px auto;
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }


        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
        }

        .slick-active {
            opacity: .5;
        }

        .slick-current {
            opacity: 1;
        }

        .centered {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transform: -webkit-translate(-50%, -50%);
            transform: -moz-translate(-50%, -50%);
            transform: -ms-translate(-50%, -50%);
            color: darkred;
            z-index: 100;
            visibility: hidden;
        }

        /* Testimonial */
        .testimonial {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #212529;
            color: #ffffff;
        }

        .testimonial-slide {
            padding: 40px 20px;
        }

        .testimonial_box-top {
            background: #FC354C;
            background: -webkit-linear-gradient(to right, #0ABFBC, #FC354C);
            background: linear-gradient(to right, #0ABFBC, #FC354C);

            padding: 30px;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(206, 212, 218, 0.534);
        }

        .testimonial_box-icon {
            padding: 10px 0;
        }

        .testimonial_box-icon i {
            font-size: 25px;
            color: #ffff;
        }

        .testimonial_box-text {
            padding: 10px 0;
        }

        .testimonial_box-text p {
            color: #ffffff;
            font-size: 14px;
            line-height: 20px;
            margin-bottom: 0;
        }

        .testimonial_box-name {
            padding-top: 10px;
        }

        .testimonial_box-name h4 {
            font-size: 20px;
            line-height: 25px;
            color: #ffff;
            margin-bottom: 0;
        }

        .testimonial_box-job p {
            color: #ffff;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 3px;
            line-height: 20px;
            font-weight: 300;
            margin-bottom: 0;
        }

        .slick-dots li {
            padding: 0 30px;
            opacity: 0.5;
        }

        .slick-dots li button {

            background-position: center !important;
            background-size: cover !important;
            text-indent: -9999px;
            overflow: hidden;
            width: 60px;
            height: 60px;
            border-radius: 50px;
            border: 4px solid #dee2e6;
        }

        .slick-dots .slick-active {
            opacity: 1;
        }


        .projectbg {
            background: #70e1f5;
            background: -webkit-linear-gradient(to right, #ffd194, #70e1f5);
            background: linear-gradient(to right, #ffd194, #70e1f5);

        }

        /* End testimonial */
    </style>
    <link rel="stylesheet" href="{{ asset('fontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/snow.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/aos.css') }}">
    <link href='{{ asset('fontend/css/aos-animation.css') }}' rel='stylesheet prefetch' type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('fontend/css/style.css') }}" type="text/css" media="all" />
    <link href="{{ asset('backend/css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontend/css/fontawesome-all.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,400i,500,500i,700,700i,900"
        rel="stylesheet">
</head>

<body>
    <img class="centered" src="{{ asset('fontend/images/ajax-loader.gif') }}" alt="">
    <header class="index-banner" id="home">
        <nav class="main-header d-flex">
            <div id="brand">
                <div id="logo">
                    <a href="#" class="scroll">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                    </a>
                </div>
                <div id="word-mark">
                    <h5>
                        <a href="#" class="scroll" style="color:white">{{ $setting->name }}</a>
                    </h5>
                </div>
            </div>
            <div id="menu" class="menu">
                <div id="menu-toggle">
                    <div id="menu-icon">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
                <ul class="text-center nav-honey mynav">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a class="scroll" href="#skill">Skills</a>
                    </li>

                    <li>
                        <a href="{{ route('project') }}">Projects</a>
                    </li>

                    <li>
                        <a class="scroll" href="#Certificate">Certificate</a>
                    </li>
                    <li>
                        <a class="scroll" href="#testimonial">Testimonial</a>
                    </li>

                    <li>
                        <a class="scroll" href="#contact">Contact</a>
                    </li>

                </ul>

            </div>
            <div class="clearfix"></div>
        </nav>
    </header>
    <section class="projectbg gallery py-md-5 py-3" id="projects">
        <div class="gallery-inner container py-md-5 pb-3 text-center">
            <br>
            <br>

            <h3> <span class="text-danger mb-2">Introduction <span class="text-secondary">&</span> </span> <span
                    class="text-success">What is will do</span> <span class="text-secondary">?</span> </h3>
            <div class="row">
                <div id="about">
                    <div class="row m-5">
                        <div class="col-md" data-aos="fade-right">

                            <img src="{{ asset('/').$about->photo }}" alt="Zuyel Image" class="img-fluid" />
                        </div>

                        <div class="col-md" data-aos="fade-left">
                            <h4 class="sub-tittle-w3 text-center">About Me</h4>
                            <h3 data-aos="fade-left" class="tittle-w3 text-uppercase mb-lg-5 text-center mytext3"> <span
                                    class="text-warning">Welcome</span> to My <span class="text-danger">website</span>
                            </h3>
                            <p class="text-dark">{{ $about->description }}.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>

    @include('fontend.include.service')
    @include('fontend.include.education')
    @include('fontend.include.certificate')
    @include('fontend.include.stats')
    @include('fontend.include.skill')
    @include('fontend.include.award')
    @include('fontend.include.testimonials')
    @include('fontend.include.contact')
    @include('fontend.include.footer')
    <script src="{{ asset('fontend/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset('fontend/js/aos.js') }}"></script>
    <script>
        AOS.init({
      easing: 'ease-out-back'
      , duration: 1000
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
      @foreach($skill as $item) {
        "skill": "{{ $item-> skill_name}}"
        , "value": {{$item -> value }},
      }
      , @endforeach
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
    if ($(window).width() < 700) {
      pieSeries.labels.template.disabled = true;

    } else {
      pieSeries.labels.template.disabled = false;

    }

    </script>
    <script src="{{ asset('fontend/js/move-top.js') }}"></script>
    <script src="{{ asset('fontend/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
      $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 900);
      });
    });

    </script>
    <script>
        $(document).ready(function() {

      var defaults = {
        containerID: 'toTop'
        , containerHoverID: 'toTopHover'
        , scrollSpeed: 1200
        , easingType: 'linear'
      };

      $().UItoTop({
        easingType: 'easeOutQuart'
      });

    });

    </script>
    <script>
        $(window).resize(function() {
      $('.js-slider').not('.slick-initialized').slick('resize');
    });

    $(window).on('orientationchange', function() {
      $('.js-slider').not('.slick-initialized').slick('resize');
    });

    </script>
    <script src="{{ asset('fontend/slick/slick.min.js') }}"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {

      $(".regular").slick({
        dots: false
        , infinite: true
        , slidesToShow: 4
        , slidesToScroll: 1
        , autoplay: true
        , autoplaySpeed: 2000
        , pauseOnHover: false
        , swipe: true,

        responsive: [{
            breakpoint: 1024
            , settings: {
              slidesToShow: 5
              , slidesToScroll: 2
            , }
          }
          , {
            breakpoint: 600
            , settings: {
              slidesToShow: 3
              , slidesToScroll: 2
            }
          }
          , {
            breakpoint: 480
            , settings: {
              slidesToShow: 2
              , slidesToScroll: 1
            }
          }

        ]


      });
    });

    </script>
    <script>
        $(document).ready(function() {
      $('.testimonial-slider').slick({
        autoplay: false
        , autoplaySpeed: 1000
        , speed: 600
        , draggable: true
        , infinite: true
        , slidesToShow: 1
        , slidesToScroll: 1
        , arrows: false
        , dots: true
      , });

      @foreach($testimonials as $key => $item)
      $('.slick-dots li:nth-child({{ $key+1 }})').html('<button style="background: url({{$item->photo}})"></button>');
      @endforeach


    });

    </script>
    <script src="{{ asset('fontend/js/jquery.countup.js') }}"></script>
    <script>
        $('.counter').countUp();

    </script>

    <script src="{{ asset('backend/js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch (type) {
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
            @foreach($errors -> all() as $error)
            toastr.error("{{ $error }}");
            @endforeach
        @endif

    </script>
    <script src="{{ asset('fontend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('fontend/js/ajax.js') }}"></script>
</body>

</html>
