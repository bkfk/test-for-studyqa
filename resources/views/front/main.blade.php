@extends('layouts.front')

@section('content')
  @forelse($sections as $section)
    @include('front.section.'.$section->view_name)
  @endforeach
@endsection
