<section class="" id="projects">

  <div class=" container py-md-5 pb-5 text-center" id="testimonial">


  <h3> <span class="text-success">Testimonial</span></h3>

    <div >

      <div class="container">
        <div class="testimonial__inner">
          <div class="testimonial-slider">
            @foreach ($testimonials as $item)
            <div class="testimonial-slide">
              <div class="testimonial_box">
                <div class="testimonial_box-inner text-light">
                  <div class="testimonial_box-top">
                    <div class="testimonial_box-icon">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="testimonial_box-text">
                      <p>{{ $item->description }}</p>
                    </div>
                    <div class="testimonial_box-name">
                      <h4>{{ $item->name }}</h4>
                    </div>
                    <div class="testimonial_box-job">
                      <p>{{ $item->title }}</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>


  </div>

</section>
