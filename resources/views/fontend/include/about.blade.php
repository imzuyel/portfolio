<section class="aboutbg gallery py-md-5 py-3 bg-dark">
  <div class="gallery-inner container py-md-5 pb-3 text-center">
    <div class="row">
      <div id="about">
        <div class="row m-5">
          <div class="col-md" data-aos="fade-right">

            <img src="{{ asset('/').$about->photo }}" alt="Zuyel Image" class="img-fluid" />
          </div>

          <div class="col-md" data-aos="fade-left">
            <h4 class="sub-tittle-w3 text-center">About Me</h4>
            <h3 data-aos="fade-left" class="tittle-w3 text-uppercase mb-lg-5 text-center mytext3"> <span class="text-warning">Welcome</span> to My <span class="text-danger">website</span>
            </h3>
            <p class="text-dark">{{ Str::limit($about->description, 100, '...') }}.</p>
            <a class="btn work" href="{{ route('about') }}">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- //gallery container -->
  </div>
</section>
