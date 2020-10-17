<!-- awards -->
<div class="awards-w3ls py-5" id="awards">
    <div class="container py-xl-5 py-lg-3">
        <!-- heading title -->
        <div class="mb-lg-5 mb-4 text-center">
            <h3 class="title-wthree text-white mb-2">
                <span class="text-white mb-2">Some More</span>My Awards</h3>
            <p class="sub-tittle">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <!-- //heading title -->
        <div class="row pt-sm-5">
            <div class="offset-lg-1"></div>
            <div class="col-lg-5 col-md-7 col-sm-9 awards-agileits-w3layouts text-center" data-aos="flip-left"
                data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                @foreach ($award as $item)
                <div class="w3_agileits_services_grid bg-white p-4 mt-3">
                    <i class="{{ $item->icon }} mb-2"></i>
                    <h4 class="text-dark mb-3">{{ $item->name }} <a target="_blank" style="font-size: 12px;color: red"
                            href="{{ $item->source }}" class="">Source
                            <i style="font-size: 12px" class="fas fa-link"></i></a></h4>
                    <p>{{ $item->details }}</p>
                </div>
                @endforeach

            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<!-- //awards -->
