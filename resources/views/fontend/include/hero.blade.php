<div style="background-image: url({{asset('/').$head_banner->banner_image}})" class="mian-content">
    <!-- header -->
    <header data-aos="fade-down">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="logo text-left">
                <h1>
                    <a class="navbar-brand" href="{{ route('index') }}"><i
                            class="fas fa-laptop-code"></i>{{ $headstext->name }}</a>
                </h1>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">

                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto text-lg-right text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('index') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#about">About Me</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Others
                        </a>
                        <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item scroll" href="#services">Services</a>
                            <a class="dropdown-item scroll" href="#skills" title="">Skills</a>
                            <a class="dropdown-item scroll" href="#education" title="">My Education</a>
                            <a class="dropdown-item scroll" href="#education" title="">My Experience</a>
                            <a class="dropdown-item scroll" href="#certificate" title="">Certificate</a>
                            <a class="dropdown-item scroll" href="#awards" title="">Awards</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#contact">Contact Me</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- //header -->

    <!--  particles  -->
    <div id="particles-js"></div>
    <!-- //particles -->

    <!-- banner -->
    <div class="banner-text">
        <div class="effect-text-w3ls">
            <div class="container">
                <h2>{{ $headstext->title }}</h2>
                <span class="mytext1 uppercase mt-2">{{ $headstext->subtitle }}</span>
                <span class="mytext2"> {{ $headstext->name }} </span>
                <p class="para-style text-light mt-xl-4 mt-3">{{ $headstext->description }}</p>
                <div class="button-w3ls" data-aos="fade-up">
                    <a href="{{asset('/').$head_banner->resume}}" download="Zuyel Rana CV"
                        class="btn btn-sm animated-button thar-three mr-2">My Cv
                        <i class="fas fa-download"></i></a>
                    <a href="mailto:zuyel76@gamil.com" class="btn btn-sm animated-button thar-four">Hire Me</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
</div>
