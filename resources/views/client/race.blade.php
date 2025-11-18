@extends('layouts.app')
@section('title', 'Кабинет клиента — Погрузка')
@section('content')
<div class="d-flex align-center">
  <h2>Погрузка</h2>
  <div class="spacer"></div>
  <i class="v-icon mdi mdi-transfer"></i>
 </div>

<div class="v-card">
  <div class="v-card__title align-center">Рейсы погрузки<div class="spacer"></div><i class="v-icon mdi mdi-table"></i></div>
  <div class="v-card__text">
    <div class="table-responsive">
      <table class="v-simple-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Станция</th>
            <th>Получатель</th>
            <th>Груз</th>
            <th>Вагонов</th>
            <th>Масса, т</th>
            <th>Дата</th>
            <th>Статус</th>
          </tr>
        </thead>
        <tbody>
          @forelse($races as $row)
          <tr>
            <td>{{ $row['id'] }}</td>
            <td>{{ $row['station'] }}</td>
            <td>{{ $row['consignee'] }}</td>
            <td>{{ $row['cargo'] }}</td>
            <td>{{ $row['wagons'] }}</td>
            <td>{{ number_format($row['mass'], 0, '.', ' ') }}</td>
            <td>{{ \Illuminate\Support\Carbon::parse($row['date'])->format('d.m.Y') }}</td>
            <td>{{ $row['status'] }}</td>
          </tr>
          @empty
          <tr>
            <td colspan="8">Данные о погрузке пока отсутствуют</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
 </div>
@endsection
