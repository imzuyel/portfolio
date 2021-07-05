

<!-- /Contact-->
<section class="contact py-lg-5 py-md-5 py-3" id="contact">
    <div class="container">
        <div class="inner-sec-w3ls py-lg-5 py-3">
            <h4 class="sub-tittle-w3 text-uppercase text-center">Find Me</h4>
            <h3 class="title-style text-uppercase mb-3 text-center mytext3">Contact <span class="text-warning mb-2">Me</span> now</h3>

            <div class="contact_grid_right">
                <form  id="myContact">
                    @csrf
                    <div class="row contact_left_grid">
                        <div class="col-md-6 con-left" data-aos="fade-up">
                            <div class="form-group">

                                <input class="form-control" type="text" name="name" id="name" placeholder="Name" required="">
                            </div>
                            <div class="form-group">

                                <input class="form-control" type="email" id="email" name="email" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="col-md-6 con-right" data-aos="fade-up">
                            <div class="form-group">
                                <textarea id="message" rows="4" cols="50" name="message" col id="message" placeholder="Type your message here"  required=""></textarea>
                            </div>
                        </div>

                        <div class="sub-honey mx-auto mt-3">
                            <input class="form-control btn btn-info" type="button" value="Contact" id="contactData"> </div>
                    </div>
                </form>
            </div>
            <div class="address row mt-lg-5">

                <div class="col-md-4 address-grid" data-aos="flip-up">
                    <div class="address-info">
                        <div class="address-left text-center">
                            <i class="far fa-map"></i>
                        </div>
                        <div class="address-right text-center">
                            <h6 class="my-3">Address</h6>
                            <p> {{ $setting->address }}

                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 address-grid" data-aos="flip-up">
                    <div class="address-info">
                        <div class="address-left text-center">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="address-right text-center">
                            <h6 class="my-3">Email</h6>
                            <p>Email :
                                <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>

                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 address-grid" data-aos="flip-up">
                    <div class="address-info">
                        <div class="address-left text-center">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="address-right text-center">
                            <h6 class="my-3">Phone</h6>
                            <a href="tel:{{ $setting->phone }}">+88{{ $setting->phone }}</a>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //Contact -->
