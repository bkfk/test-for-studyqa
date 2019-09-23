@extends('layouts.front')

@section('content')
<div class="container my-5">
  <div class="row justify-content-center">
    <h1>Заявка отправлена</h1>
  </div>
</div>

<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <small>Ваша заявка принята</small>
        <h4>Спасибо</h4>
        <p class="lead">Благодарим Вас за оформление заявки на участие.</p>

        <a href="{{ route('main') }}" class="btn btn-outline-primary">Ок</a>

      </div><!-- end col -->

      <div class="col-md-6">
        <a data-fancybox="gallery" href="{{ asset('img/1000x600.jpeg') }}">
          <img src="{{ asset('img/1000x600.jpeg') }}" alt="" class="img-fluid">
        </a>
      </div><!-- end col -->
    </div><!-- end row -->

    <hr>
  </div><!-- end container -->
</section>
@endsection
