@extends('layouts.front')

@section('content')
<div class="container my-5">
  <div class="row justify-content-center">
    <h1>{{ $feast->title }}, <small>заявка на участие</small></h1>
  </div>
</div>

@include('front._sub_views.'.$feast->sub_view)

<section>
  <div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                  <form id="form_1" role="form">
                      {{ csrf_field() }}
                      <input type="hidden" name="ip" value="{{ request()->ip() }}">
                      <input type="hidden" name="utm" value="{{ request()->getQueryString() }}">

                      <div class="form-group row">
                        <label for="inputFirstName" class="col-lg-2 col-form-label text-lg-right">
                          Имя
                        </label>

                        <div class="col-lg-10">
                          <input id="inputFirstName" type="text" class="form-control" name="first_name" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputLastName" class="col-lg-2 col-form-label text-lg-right">Фамилия</label>

                        <div class="col-lg-10">
                          <input id="inputLastName" type="text" class="form-control" name="last_name" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPhone" class="col-lg-2 col-form-label text-lg-right">
                          Телефон
                        </label>

                        <div class="col-lg-10">
                          <input id="inputPhone" type="tel" class="form-control" name="phone" pattern="[0-9]{1}[\(]{1}[0-9]{3}[\)]{1}-[0-9]{3}-[0-9]{2}-[0-9]{2}" required>
                          <small id="phoneHelp" class="form-text text-muted">Формат: 1(234)-567-89-10</small>
                        </div>
                      </div>

                      <div class="form-group row">
                          <label for="inputEmail" class="col-lg-2 col-form-label text-lg-right">Email</label>

                          <div class="col-lg-10">
                              <input id="inputEmail" type="email" class="form-control" name="email" required>
                          </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEdu" class="col-lg-2 col-form-label text-lg-right">
                          Уровень образования
                        </label>

                        <div class="col-lg-10">
                          <select id="inputEdu" class="custom-select" name="education_level_id" required>
                            <option selected disabled value="">выберите</option>
                            @forelse($education_levels as $education_level)
                            <option value="{{ $education_level->id }}">{{ $education_level->title }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-lg-10 offset-lg-2">
                              <button id="but_1" type="submit" class="btn btn-primary">
                                  Сохранить
                              </button>
                          </div>
                      </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
  </div>
</section>
@endsection

@section('page_script')
<script type="text/javascript">
$( document ).ready(function() {

  $('#form_1').submit(function(event){
    event.preventDefault();

    $.ajax({
      type: 'POST',
      url: "{{ route('member.store', $feast) }}",
      data: $('#form_1').serialize(),
      success: function(){
        window.location.replace('{{ route('thanks') }}');
      },
      error: function(){
        window.location.replace('{{ route('send_err') }}');
      },

    });

  });
});
</script>
@endsection
