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

  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}fontend/images/icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/') }}fontend/images/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}fontend/images/icon/favicon-16x16.png">
  <script>
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }

  </script>
  <!-- //Slick -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/') }}fontend/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('/') }}fontend/slick/slick-theme.css">
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

    /* Project data */

    .infocardContainer * {
      font-family: "Fira Sans Condensed", sans-serif;
      font-weight: 300;
    }

    .infocardContainer {
      display: flex;
      height: 200px;
      width: 200px;
      border-radius: 100px;
      background: rgb(0, 159, 255);
      background: linear-gradient(121deg,
          rgba(42, 21, 2, 0) 13%,
          rgb(174, 0, 255) 100%);

      transition: all 500ms ease-in;
      transition-delay: 0.4s;
      margin: auto;
      margin-top: 100px;
    }

    .infocardContainer:hover {
      width: 500px;
      border-radius: 100px 10px 100px 100px;
      transition: all 0.4s ease-out;
    }

    .infocardContainer div {
      text-color: white;
      flex-shrink: 1;
      width: 100%;
      --background-color: green;
    }

    .infocardContainer div * {
      display: flex;
      --flex: inherit;
      overflow: hidden;
      text-overflow: hidden;
      --background-color: yellow;
      color: white;
      white-space: nowrap;
      width: 0;
      height: auto;
      transition: all 450ms ease-in;
      transition-delay: 0.4s;
    }

    .infocardContainer:hover div * {
      --background-color: purple;
      display: flex;
      visibility: visible;
      transition: all 0.4s ease-out;
      transition-delay: 500ms;
      width: 100%;
      height: auto;
    }

    .infocardContainer #main,
    .infocardContainer #main img {
      --background-color: red;
      height: 200px;
      width: 200px;
      padding-right: 10px;
      border-radius: 100%;
      flex-shrink: 0;
      object-fit: cover;
    }

    .infocardContainer #main img {
      height: 180px;
      width: 180px;
      transition: none;
      display: float;
      position: relative;
      border: 5px solid rgb(248, 252, 14);
      margin: 0 0 0 0;
      padding: 0 0 0 0;
    }

    .infocardContainer #textbois {
      position: relative;
    }

    .infocardContainer #textbois #hotlinks {
      max-width: 60%;
      max-height: 30px;

      --background-color: white;
      position: absolute;
      bottom: 5px;
      display: flex;
      justify-content: space-between;
      border-radius: 13px;
    }

    .infocardContainer #textbois #hotlinks * {
      background-color: white;
      max-width: 30px;
      --margin: 0 1px 0 1px;
      border-radius: 25px;
    }

    /*TODO: animate copy main transition style for info*/
    .infocardContainer #textbois #hotlinks *:hover {}

  </style>
  <!-- Slick -->

  <!-- Bootstrap-Core-CSS -->
  <link rel="stylesheet" href="{{ asset('/') }}fontend/css/bootstrap.css">

  <link href="{{ asset('/') }}fontend/css/simpleLightbox.css" rel='stylesheet' type='text/css' />
  <!-- simpleLightbox -->

  <link rel="stylesheet" href="{{ asset('/') }}fontend/css/snow.css">
  <link rel="stylesheet" href="{{ asset('/') }}fontend/css/aos.css">
  <link href='{{ asset('/') }}fontend/css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('/') }}fontend/css/style.css" type="text/css" media="all" />
  <!-- Custom-Files -->
  <!-- toastr Css -->
  <link href="{{ asset('/') }}backend/css/toastr.min.css" rel="stylesheet">
  <!-- Style-CSS -->
  <link rel="stylesheet" href="{{ asset('/') }}fontend/css/fontawesome-all.css">
  <!-- Font-Awesome-Icons-CSS -->
  <!-- /Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,400i,500,500i,700,700i,900" rel="stylesheet">
  <!-- //Fonts -->

</head>

<body>
  <img class="centered" src="{{ asset('fontend/images/ajax-loader.gif') }}" alt="">
  @include('fontend.include.hero')
  @include('fontend.include.about')
  @include('fontend.include.skill1')
  @include('fontend.include.service')
  @include('fontend.include.education')
  @include('fontend.include.project')
  @include('fontend.include.certificate')
  @include('fontend.include.stats')
  @include('fontend.include.skill')
  @include('fontend.include.award')
  @include('fontend.include.testimonials')
  @include('fontend.include.contact')
  @include('fontend.include.footer')
  @include('fontend.include.js')
</body>

</html>

