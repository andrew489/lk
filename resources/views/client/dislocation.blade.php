@extends('layouts.app')
@section('title', 'Кабинет клиента — Дислокация')
@section('content')
<div class="d-flex align-center">
  <h2>Дислокация</h2>
  <div class="spacer"></div>
</div>

<div class="v-card">
  <div class="v-card__title align-center">Дислокация вагонов<div class="spacer"></div><i class="v-icon mdi mdi-table"></i></div>
  <div class="v-card__text">
    <div class="table-responsive">
      <table class="v-simple-table">
        <thead>
          <tr>
            <th>№ вагона</th>
            <th>Станция</th>
            <th>Дорога</th>
            <th>Операция</th>
            <th>Дата</th>
            <th>Статус</th>
            <th>Накладная</th>
            <th>Поезд</th>
          </tr>
        </thead>
        <tbody>
          @forelse(($rows ?? []) as $row)
          <tr>
            <td>{{ $row['wagon_number'] }}</td>
            <td>{{ $row['station'] }}</td>
            <td>{{ $row['railway'] }}</td>
            <td>{{ $row['operation'] }}</td>
            <td>{{ $row['date']->format('d.m.Y') }}</td>
            <td>{{ $row['status'] }}</td>
            <td>{{ $row['invoice'] }}</td>
            <td>{{ $row['train'] }}</td>
          </tr>
          @empty
          <tr>
            <td colspan="8">Данные дислокации отсутствуют</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
 </div>
@endsection
