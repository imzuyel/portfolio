<div class="why-choose-agile py-5" id="services">
    <div class="container py-xl-5 py-lg-3">
        <!-- heading title -->
        <div class="mb-lg-5 mb-4 text-center">
            <h3 class="title-wthree mb-2 mytext3 text-uppercase">
                <span class=" text-warning">Excellent</span>  Services</h3>
            <p class="sub-tittle">I will provide those awesome service for you.</p>
        </div>
        <!-- //heading title -->

        <div class="row agileits-w3layouts-grid pt-md-4">
            @foreach ($service as $item)
            <div class="col-lg-4 services-agile-1" data-aos="zoom-in-up">
                <div class="row wthree_agile_us py-md-4 py-3">
                    <div class="col-lg-3 col-sm-2 col-3 pr-lg-2">
                        <div class="wthree_features_grid text-center py-3">
                            <i class="{{ $item->icon }}"></i>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-10 col-9 agile-why-text">
                        <h4 class="text-white font-weight-bold mb-3">{{ $item->title }}</h4>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>
