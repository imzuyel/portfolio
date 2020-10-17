<!-- footer -->
<footer>
    <div class="w3ls-footer-grids py-4">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
                <div class="col-lg-5 w3l-footer-logo">
                    <!-- footer logo -->
                    <a class="navbar-brand" href="{{ route('index') }}"><i
                            class="fas fa-laptop-code"></i>{{ $headstext->name }}</a>
                    <!-- //footer logo -->
                </div>
                <!-- button -->
                <div class="col-lg-5 w3l-footer text-lg-right text-center mt-3">
                    <ul class="list-unstyled footer-nav-wthree">
                        <li class="mr-4">
                            <a href="{{ route('index') }}" class="active">Home</a>
                        </li>
                        <li class="mr-4">
                            <a class="scroll" href="#about">About Me</a>
                        </li>
                        <li class="mr-4">
                            <a class="scroll" href="#services">My Services</a>
                        </li>
                        <li>
                            <a class=" scroll" href="#projects">Projects</a>
                        </li>
                    </ul>
                </div>
                <!-- //button -->
                <div class="col-lg-2 mt-lg-0 mt-3">
                    <div class="button-w3ls mt-0 text-lg-right text-center">
                        <a href="#contact" class="btn btn-sm animated-button thar-four scroll">Contact Me</a>
                    </div>
                </div>
            </div>
            <div class="row border-top mt-4 pt-lg-4 pt-3 text-lg-left text-center">
                <!-- copyright -->
                <p class="col-lg-8 copy-right-grids mt-lg-1">© {{ date('Y') }} Online Resume. All Rights
                    Reserved | Design
                    by
                    <a href="" target="_blank">Zuye Rana</a>
                </p>
                <!-- //copyright -->
                <!-- social icons -->
                <div class="col-lg-4 w3social-icons text-lg-right text-center mt-lg-0 mt-3">
                    <ul>
                        @foreach ($folower as $item)
                        <li>
                            <a target="_blank" href="{{ $item->link }}" class="rounded-circle">
                                <i class="{{ $item->icon }}"></i>
                            </a>
                        </li>
                        @endforeach


                    </ul>
                </div>
                <!-- //social icons -->
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->
