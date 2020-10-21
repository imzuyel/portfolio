{{-- <div class="gallery py-5" id="projects">
    <div class="container py-xl-5 py-lg-3">
        <!-- heading title -->
        <div class="mb-lg-5 mb-4 text-center">
            <h3 class="title-wthree text-dark mb-2">
                <span class="mb-2">Gallery</span>My Projests</h3>
            <p class="sub-tittle-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <!-- //heading title -->
        <div class="gallery-grids">
            <section>
                <ul id="da-thumbs" class="da-thumbs">
                    @foreach ($project as $item)
                    <li data-aos="zoom-in" class="card  rounded">

                        <a href="{{ asset('/').$item->photo }}" class="b-link-stripe b-animate-go thickbox">
<img src="{{ asset('/').$item->photo }}" alt="{{ $item->name }}" style="height: 250px" class="card-img-top" />
<div>

    <h5 class="card-title">{{ $item->name }}</h5>

    @if (!is_null($item->link))
    <p class="card-text">{{ \Illuminate\Support\Str::limit($item->details,40) }}</p>
    @else
    <p class="card-text">{{ \Illuminate\Support\Str::limit($item->details,65) }}</p>
    @endif

</div>
</a>

@if (!is_null($item->link))
<button class=" " type="button" style="font-size: 14px;border: none; background: none;color:red ;cursor: pointer;"
    value="Open Window" class="card-link" onclick="window.open('{{ $item->link }}', '_blank');" class="">Visit
    <i style="font-size: 12px" class="fas fa-link"></i></button>
@endif
</li>
@endforeach

</ul>
</section>
</div>
</div>
</div> --}}
<section class="gallery py-md-5 py-3" id="projects">
    <div class="gallery-inner container py-md-5 pb-3">
        <h4 class="sub-tittle-w3 text-uppercase text-center">View all</h4>
        <h3 class="tittle-w3 text-uppercase mb-lg-5 mb-3 text-center">My Projects</h3>
        <div class="row">

            @foreach ($project as $item)
            <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                <div class="section_1_gallery_grid">
                    <a title="{{ $item->details }}" href="{{ asset('/').$item->photo }}">
                        <div class="section_1_gallery_grid1">
                            <img src="{{ asset('/').$item->photo }}" alt="{{ $item->name }}" class="img-fluid" />
                            <div class="proj_gallery_grid1_pos">
                                <h3>View</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
    </div>
</section>
