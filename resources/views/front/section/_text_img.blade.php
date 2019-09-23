<section>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        {!! $section->content !!}

      </div><!-- end col -->

      <div class="col-md-6">
        <a data-fancybox="gallery" href="{{ $section->images[0]['src'] }}">
          <img src="{{ $section->images[0]['src'] }}" alt="{{ $section->images[0]['alt'] }}" class="img-fluid">
        </a>
      </div><!-- end col -->
    </div><!-- end row -->

    <hr>
  </div><!-- end container -->
</section>
