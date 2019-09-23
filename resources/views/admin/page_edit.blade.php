@extends('layouts.admin')

@section('content')

@foreach($sections as $section)
<div class="container">
  <div class="card my-5">
  <nav class="nav nav-pills nav-justified mb-5">
    <a class="nav-item nav-link active" data-toggle="tab" href="#preview-{{ $section->id }}">Смотреть</a>
    @if($section->content)
    <a class="nav-item nav-link" data-toggle="tab" href="#content-{{ $section->id }}">Редактировать</a>
    @endif
    @if($section->images && $section->images->count())
    <a class="nav-item nav-link" data-toggle="tab" href="#images-{{ $section->id }}">Изображения</a>
    @endif
  </nav>

  <div class="tab-content">
    <div id="preview-{{ $section->id }}" class="tab-pane fade show active">
      @include('front.section.'.$section->view_name)
    </div>
    @if($section->content)
    <div id="content-{{ $section->id }}" class="tab-pane fade">
      @include('admin.section.'.$section->view_name)
    </div>
    @endif
    @if($section->images && $section->images->count())
    <div id="images-{{ $section->id }}" class="tab-pane fade">
      @include('admin._sub_view._images', $section)
    </div>
    @endif
  </div>
</div>
</div>
@endforeach

@endsection
