<section style="background-color:#edf7f4 " class="banner-bottom-wthree py-lg-5 py-md-5 py-4">
    <div class="container">
        <div class="inner-sec-w3ls py-lg-5 py-4">
            <div class="info-about text-center">
                <h3 data-aos="fade-up" class="tittle-w3 text-uppercase mb-lg-5 text-center mytext2"> <span class="text-warning">My</span>  Skills </h3>
                <hr>
                <div class="row mt-lg-5 mt-3">
                    @foreach ($skill as $item)
                    <div class="col-lg-4 progress-info-content text-left">
                        <div class="progress-one my-lg-5" data-aos="fade-up">
                            <h4 class="progress-tittle-w3">{{ $item->skill_name }}</h4>
                            <div class="progress">
                                <div  class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ $item->value }}%;background-color: {{ $item->color }}"
                                    aria-valuenow="{{ $item->value }}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

