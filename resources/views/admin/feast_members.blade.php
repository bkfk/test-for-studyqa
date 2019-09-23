<!-- Сюда "просятся" дата/время получения заявки, сортировка по столбцам, список администраторов мероприятия, ссылка на редактирование этого списка -->

@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <h2>{{ $feast->title }}, <small>список заявок на участие</small></h2>
    </div>
</div>

<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th class="col-auto">Дата/Время</th>
        <th class="col-auto">Имя</th>
        <th class="col-auto">Фамилия</th>
        <th class="col-auto">Телефон</th>
        <th class="col-auto">Email</th>
        <th class="col-auto">Уровень образования</th>
        @if(Gate::allows('super-admin'))
        <th class="col-auto">Удалить</th>
        <th class="col-auto">IP</th>
        <th class="col-auto">хвост get-запроса</th>
        @endif
      </tr>
    </thead>
    <tbody>
      @forelse($feast->members as $member)
      <tr>
        <td>{{ $member->created_at->format('d.m.y / H:i') }}</td>
        <td>{{ $member->first_name }}</td>
        <td>{{ $member->last_name }}</td>
        <td>{{ $member->phone }}</td>
        <td>{{ $member->email }}</td>
        <td>{{ $member->education_level->title }}</td>
        @if(Gate::allows('super-admin'))
        <td>
          <form class="" action="{{ route('member.destroy', [$feast, $member]) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button type="submit" class="btn btn-outline-danger">X</button>
          </form>
        </td>
        <td>{{ $member->ip }}</td>
        <td>{{ $member->utm ?? '' }}</td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection
