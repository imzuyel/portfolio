<section id="Certificate">
    <div class="certificate-style">
        <h3 class="title-style mb-3">My Certificate</h3>
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
