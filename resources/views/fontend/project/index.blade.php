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
    @include('fontend.include.css')
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
                        <a href="{{ route('project') }}">Projects</a>
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

            <h3 class="title-wthree mb-2 mytext2 text-uppercase">
                <span class="text-danger mb-2">All</span> <span class="text-warning">Project</span>
            </h3>
            <div class="row">
                @foreach ($projects as $item)

                <div class="col-md-6 proj_gallery_grid" data-aos="zoom-in">
                    <div class="infocardContainer">
                        <div id="main">
                            <img src="{{ asset('/') . $item->photo }}"></img>
                        </div>
                        <section class="pra" id="id">
                            <h5 class="text-light">{{ $item->name }}</h5>
                            <p class="text-light aleft"> {{ $item->details }}</p>
                            @foreach (explode(',', $item->cat) as $cat)
                            @if ($loop->first)
                            <span class="badge badge-danger aleft">{{ $cat }}</span>
                            @elseif ($loop->last)
                            <span class="badge badge-success aleft">{{ $cat }}</span>
                            @else
                            <span class="badge badge-info aleft">{{ $cat }}</span>
                            @endif
                            @endforeach
                            <br>
                            <br>
                            <br>
                            <div id="textbois">
                                <div id="hotlinks">
                                    @if ($item->title!=null)
                                    <li class="p-2">
                                        <a target="_blank" href="{{ $item->title }}" class="rounded-circle">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </li>
                                    @endif
                                    @if ($item->date!=null)
                                    <li class="p-2">
                                        <a target="_blank" href="{{ $item->date }}" class="rounded-circle">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </li>
                                    @endif

                                </div>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('fontend.include.contact')
    @include('fontend.include.footer')

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
    <script src="{{ asset('fontend/js/core.js') }}"></script>
    <script src="{{ asset('fontend/js/material.js') }}"></script>
    <script src="{{ asset('fontend/js/animated.js') }}"></script>
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
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: false,
        swipe: true,

        responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2,
          }
        }, {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2
          }
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }]
      });
    });
    </script>
    <script src="{{ asset('backend/js/toastr.min.js') }}"></script>
    <script>
        @if (Session::has('message'))
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
        @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        toastr.error("{{ $error }}");
      @endforeach
    @endif
    </script>
    <script src="{{ asset('fontend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('fontend/js/ajax.js') }}"></script>
</body>

</html>
