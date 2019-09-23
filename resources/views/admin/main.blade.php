@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <h1>Админка</h1>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">

        @if(Gate::allows('super-admin'))
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="col-auto">Имя</th>
              <th class="col-auto">Email</th>
              <th class="col-auto">Видит мероприятия</th>
            </tr>
          </thead>
          <tbody>
            @foreach(App\User::all() as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>
                {{ $user->email }}
                <button class="btn btn-outline-warning btn-sm" type="button" data-toggle="collapse" data-target="#edit-email-{{ $user->id }}">
                  Редактировать
                </button>
                <form class="collapse" id="edit-email-{{ $user->id }}" action="{{ route('update_email', $user) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}

                  <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    <div class="input-group-append">
                      <button class="btn btn-outline-success" type="submit">Ok</button>
                    </div>
                  </div>
                </form>
              </td>
              <td>
                <ul class="list-unstyled">
                  @forelse($user->feasts as $feast)
                  <li>
                    <a href="{{ route('member.index', $feast) }}">
                      {{ $feast->title }}
                    </a>
                  </li>
                  @endforeach
                </ul>
                <h6>
                  {{ $user->is_super_admin ? 'СуперАдмин!' : '' }}
                </h6>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @endif

    </div>
</div>
@endsection
