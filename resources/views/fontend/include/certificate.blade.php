{{-- <section id="Certificate" class="bg-danger">
  <div class="certificate-style">
    <h3 class="title-style mb-3 mytext3 text-uppercase">My<span class="text-warning mb-2"> Certificates</span></h3>
    <hr>
  </div>
  <section class="regular slider" style="direction:ltr">
    @foreach ($certificate as $item)
    <div>
      <a target="blank" href="{{ $item->source }}"> <img src="{{ asset('/').$item->photo }}"></a>
    </div>
    @endforeach

  </section>
</section>
 --}}


  <section class="certificate gallery py-md-5 py-3" id="Certificate">


    <div class="gallery-inner container py-md-5 pb-3 text-center">
 <h3 class="title-style  mytext3 text-uppercase">My<span class="text-success mb-2"> Certificates</span></h3>

<hr>

      <div class="row">
       <section class="regular slider" style="direction:ltr">
         @foreach ($certificate as $item)
         <div>
           <a target="blank" href="{{ $item->source }}"> <img style="border-radius: 50%" src="{{ asset('/').$item->photo }}"></a>
         </div>
         @endforeach

       </section>


      </div>
      <!-- //gallery container -->
    </div>
  </section>
