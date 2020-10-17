<div class="testimonials py-5" id="certificate">
    <div class="container py-xl-5 py-lg-3">
        <!-- heading title -->
        <div class="mb-sm-5 mb-4 text-center">
            <h3 class="title-wthree text-dark mb-2">
                <span class="mb-2">Cerificate</span>My Certificate</h3>
            <p class="sub-tittle-2">I got those certificate form Sololearn.I always want to know somethis new.So l
                learn eavery day. </p>
        </div>
        <!-- //heading title -->
        <div class="row">
            <div class="col-lg-6 w3_testimonials_grids">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach ($certificate as $item)
                            <li>
                                <div class="w3_testimonials_grid px-xl-5 px-4 mt-xl-4 mx-auto">
                                    <h4 class="text-dark text-center font-weight-light">
                                        <i class="fas fa-quote-left mr-3"></i>{{ $item->details }}<i
                                            class="fas fa-quote-right ml-3"></i>
                                    </h4>
                                    <div class="row mt-5">
                                        <div class="col-6 test-agiles text-right">
                                            <img src="{{ asset('/').$item->photo }}" alt=" "
                                                class="img-fluid rounded-circle" />
                                        </div>
                                        <div class="col-6 right-text-agiles text-left mt-4">
                                            <h5 class="font-weight-bold">{{ $item->name }} <a target="_blank"
                                                    style="font-size: 12px" href="{{ $item->source }}" class="">Source
                                                    <i style="font-size: 12px" class="fas fa-link"></i></a></h5>
                                            <p class="mt-2">{{ $item->date }}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-lg-6 video-w3ls mt-lg-0 mt-sm-5 mt-4" data-aos="zoom-in-left">
                <img src="{{ asset('/') }}fontend/images/testi.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
