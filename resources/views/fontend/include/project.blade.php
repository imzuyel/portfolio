<section class="why-choose-agile gallery py-md-5 py-3" id="projects">


    <div class="gallery-inner container py-md-5 pb-3 text-center">
        <h3 class="title-wthree mb-2 mytext2 text-uppercase">
            <span class="text-danger mb-2">My</span> <span class="text-warning">Project</span> </h3>

        <div class="row">

            @foreach ($projects->random(4) as $item)

            <div class="col-md-6 proj_gallery_grid" data-aos="zoom-in">
                <div class="infocardContainer">
                    <div id="main">
                        <img src="{{ asset('/').$item->photo }}"></img>
                    </div>
                    <section class="pra" id="id">
                        <h6 class="text-light">{{ $item->name }}</h6>
                        <p class="text-light aleft"> {{ $item->details }}</p>



                        @foreach (explode(',', $item->cat) as $cat)


                        @if ($loop->first)
                        <span  class="badge badge-danger aleft">{{ $cat }}</span>
                        @elseif ($loop->last)
                        <span class="badge badge-success aleft">{{ $cat }}</span>


                        @else
                        <span class="badge badge-info aleft">{{ $cat }}</span>


                        @endif
                        @endforeach

                        <br>
                        <br>
                        <br>
                        <div id="textbois">
                         <div id="hotlinks">
                                @if ($item->title!=null)
                                <li class="p-2">
                                    <a target="_blank" href="{{ $item->title }}" class="rounded-circle">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </li>
                                @endif
                                @if ($item->date!=null)
                                <li class="p-2">
                                    <a target="_blank" href="{{ $item->date }}" class="rounded-circle">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>
                                @endif

                            </div>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="btn work mt-2" href="{{ route('project') }}">More Project</a>
        <!--end portfolio-area -->
    </div>
    <!-- //gallery container -->
    </div>
</section>
