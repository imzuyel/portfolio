<div class="info-w3layouts" id="education">
    <div class="w3l-overlay py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="edu-agile-info">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="3000">
                        <div class="grid-flex bg-white p-5">
                            <div class="pl-4 title-edu py-2 mb-5">
                                <i class="fas fa-book-reader mb-2"></i>
                                <h3 class="title-style mb-3 mytext2 text-uppercase">My<span class="text-danger mb-2"> Educations</span></h3>
                            </div>
                            @foreach ($education as $item)
                            <div class="grids-agiles-one">
                                <h5 class="text-dark mb-2">{{ $item->title }}</h5>
                                <p>{{ $item->academy }}.</p>
                                <small>{{ $item->start }}<span> {{ $item->finish }}</span></small>
                            </div>
                            @endforeach



                            <div class="style-book-wthree">
                                <i class="fas fa-book-open"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5" data-aos="fade-up" data-aos-duration="3000">
                        <div class="grid-flex bg-white p-5">
                            <div class="pl-4 title-edu py-2 mb-5">
                                <i class="fas fa-chalkboard-teacher mb-2"></i>
                                <h3 class="title-style mb-3 mytext3">My<span class="text-warning mb-2"> Experience</span></h3>
                            </div>
                            @foreach ($exprence as $item)
                            <div class="grids-agiles-one">
                                <h5 class="text-dark mb-2">{{ $item->title }}</h5>
                                <p>{{ $item->academy }}.</p>
                                <p>{{ $item->start }}-{{ $item->finish }}</p>
                            </div>
                            @endforeach

                            <div class="style-book-wthree">
                                <i class="fas fa-edit"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
