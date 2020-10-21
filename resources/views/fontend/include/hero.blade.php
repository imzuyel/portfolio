<header class="index-banner" id="home">
    <!-- nav -->
    <nav class="main-header d-flex">
        <div id="brand">
            <div id="logo">
                <a href="#" class="scroll">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                </a>
            </div>
            <div id="word-mark">
                <h5>
                    <a href="#" class="scroll">{{ $setting->name }}</a>
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
                    <a href="#home" class="scroll">Home</a>
                </li>
                <li>
                    <a class="scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="scroll" href="#skill">Skills</a>
                </li>
                <li>
                    <a class="scroll" href="#Certificate">Certificate</a>
                </li>
                <li>
                    <a class="scroll" href="#projects">Projects</a>
                </li>
                <li>
                    <a class="scroll" href="#contact">Contact</a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </nav>
    <!-- //nav -->
    <!-- banner -->
    <div class="banner_section" style="background-image: url({{asset('/').$head_banner->banner_image}})">
        <div class="snow-container">
            <div class="snow foreground"></div>
            <div class="snow foreground layered"></div>
            <div class="snow middleground"></div>
            <div class="snow middleground layered"></div>
            <div class="snow background"></div>
            <div class="snow background layered"></div>
        </div>
        <!--  particles  -->
        <div id="particles-js"></div>
        <!-- //particles -->
        <div class="banner-info text-uppercase">
            <h6 data-aos="fade-right">Introduction</h6>
            <h5 data-text="I'm {{ $headstext->name }}">I'm {{ $headstext->name }}</h5>
            <!-- <h3 data-text="I'm a Programmer" class="ml11">I'm a Programmer</h3> -->
            <h4 data-aos="fade-left" class="mytext2">{{ $headstext->title }}</h4>

            <div class="ban-buttons mt-3" data-aos="fade-right">
                <a href="{{asset('/').$head_banner->resume}}" download="Zuyel-Rana's-CV"  class="btn work">CV <i class="fas fa-download"></i>
                </a>
                <a class="btn work scroll" href="#contact">Here me</a>
            </div>

        </div>
    </div>
    <!-- //banner -->
</header>
