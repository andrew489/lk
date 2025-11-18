@extends('layouts.app')
@section('title', 'Кабинет клиента — Пользователи')
@section('content')
<h2>Пользователи</h2>
<div class="v-card">
  <div class="v-card__title align-center">Список из БД<div class="spacer"></div><i class="v-icon mdi mdi-account-multiple"></i></div>
  <div class="v-card__text">
    <div class="table-responsive">
      <table class="v-simple-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Создан</th>
          </tr>
        </thead>
        <tbody>
          @forelse($users as $u)
          <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ optional($u->created_at)->format('d.m.Y H:i') }}</td>
          </tr>
          @empty
          <tr>
            <td colspan="4">Пользователи отсутствуют</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
