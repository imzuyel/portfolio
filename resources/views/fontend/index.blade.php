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
