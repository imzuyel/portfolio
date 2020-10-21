
<section class="gallery py-md-5 py-3" id="projects">
    <div class="gallery-inner container py-md-5 pb-3 text-center">
        <h3 class="title-wthree mb-2 mytext2 text-uppercase">
            <span class="text-danger mb-2">My</span> Project</h3>
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
