<div id="about">
    <div class="row m-5">
        <div class="col-md" data-aos="fade-right">

            <img src="{{ asset('/').$about->photo }}" alt="Zuyel Image" class="img-fluid" />
        </div>

        <div class="col-md" data-aos="fade-left">
            <h4 class="sub-tittle-w3 text-center">About Me</h4>
            <h3 data-aos="fade-left" class="tittle-w3 text-uppercase mb-lg-5 text-center mytext3">Welcome to My
                website
            </h3>
            <p>{{ $about->description }}.</p>
        </div>
    </div>
</div>
