<section>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <a data-fancybox="gallery" href="{{ $section->images[0]['src'] }}">
          <img src="{{ $section->images[0]['src'] }}" alt="{{ $section->images[0]['alt'] }}" class="img-fluid">
        </a>
      </div><!-- end col -->

      <div class="col-md-4">
        <a data-fancybox="gallery" href="{{ $section->images[1]['src'] }}">
          <img src="{{ $section->images[1]['src'] }}" alt="{{ $section->images[1]['alt'] }}" class="img-fluid">
        </a>
      </div><!-- end col -->

      <div class="col-md-4">
        <a data-fancybox="gallery" href="{{ $section->images[2]['src'] }}">
          <img src="{{ $section->images[2]['src'] }}" alt="{{ $section->images[2]['alt'] }}" class="img-fluid">
        </a>
      </div><!-- end col -->
    </div><!-- end row -->

  </div><!-- end container -->
</section>
