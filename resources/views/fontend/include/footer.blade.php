<!--/footer-->
<footer>
    <div class="w3ls-footer-grids py-4">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 w3l-footer-logo">
                    <!-- footer logo -->
                    <a class="navbar-brand" href="#"><i class="fas fa-laptop"></i> {{ $setting->name }}</a>
                    <!-- //footer logo -->
                </div>
                <!-- button -->
                <div class="col-lg-8 col-md-8 col-sm-8 w3l-footer text-lg-right text-center">
                    <ul class="list-unstyled footer-nav-wthree">
                        <li class="mr-2">
                            <a class="scroll" href="#projects">Projects</a>
                        </li>
                        <li class="mr-2">
                            <a class="scroll" href="#services">Services</a>
                        </li>
                        <li>
                            <a class=" scroll" href="#contact">Contact</a>
                        </li>

                    </ul>
                </div>
                <!-- //button -->

            </div>
            <div class="row border-top mt-4 pt-lg-4 pt-3 text-lg-left text-center">
                <!-- copyright -->
                <p class="col-lg-8 copy-right-grids mt-lg-1">© {{ date('Y') }} Online Portfolio. All Rights Reserved |
                    Develope
                    by
                    <a href="https://imzuyel.xyz/" target="_blank">{{ $setting->name }}</a>
                </p>
                <!-- //copyright -->
                <!-- social icons -->
                <div class="col-lg-4 w3social-icons text-lg-right text-center mt-lg-0 mt-3">
                    <ul>
                        @foreach ($folower as $item)
                        <li class="p-2">
                            <a href="{{ $item->link }}" class="rounded-circle">
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
<!--//footer-->
