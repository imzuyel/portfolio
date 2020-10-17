<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Zuyel Rana Online Resume| Home :: Zuyel Rana</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- //Meta tag Keywords -->
        <!-- Custom-Files -->
        <link rel="stylesheet" href="{{ asset('/') }}fontend/css/bootstrap.css">
        <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}fontend/css/animation-aos.css">
        <link href='{{ asset('/') }}fontend/css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
        <!-- animation css -->
        <link rel="stylesheet" href="{{ asset('/') }}fontend/css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('/') }}fontend/css/toastr.min.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}fontend/css/all.min.css">

        <!-- Font-Awesome-Icons-CSS -->
        <!-- //Custom-Files -->

        <!-- Web-Fonts -->
        <link
            href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext"
            rel="stylesheet">
        <link
            href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
            rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
        <!-- //Web-Fonts -->


        <style>
            .card:hover {
                box-shadow: 0 0 11px rgba(33, 33, 33, .2);
            }
        </style>
    </head>

    <body>
        @include('fontend.include.hero')
        <!-- //main -->
        <!-- banner bottom -->
        @include('fontend.include.banner_bottom')
        <!-- //banner bottom -->
        <!-- services -->
        @include('fontend.include.service')
        <!-- //services -->
        <!-- skills -->
        @include('fontend.include.skill')
        <!-- //skills -->
        <!-- education -->
        @include('fontend.include.education')
        <!-- //End education -->
        <!-- Cerificate -->
        @include('fontend.include.certificate')
        <!-- //EndCerificate -->
        <!-- facts -->
        @include('fontend.include.facts')
        <!-- //Endfacts -->
        <!-- projects -->
        @include('fontend.include.project')
        <!--//End Project-->
        <!-- awards -->
        @include('fontend.include.award')
        <!-- //Endawards -->
        <!-- contact -->
        @include('fontend.include.contact')
        <!-- //Endcontact -->
        <!-- contact -->
        @include('fontend.include.footer')
        <!-- //Endcontact -->
        @include('fontend.include.js')
    </body>

</html>
