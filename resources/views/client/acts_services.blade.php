@extends('layouts.app')
@section('title', 'Кабинет клиента — Акты и услуги')
@section('content')
<div class="d-flex align-center">
  <h2>Акты и услуги</h2>
  <div class="spacer"></div>
  <i class="v-icon mdi mdi-handshake-outline"></i>
 </div>

<div class="v-card">
  <div class="v-card__title align-center">Документы по актам и услугам<div class="spacer"></div><i class="v-icon mdi mdi-table"></i></div>
  <div class="v-card__text">
    <div class="table-responsive">
      <table class="v-simple-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Тип документа</th>
            <th>№ документа</th>
            <th>Дата</th>
            <th>Договор</th>
            <th>Услуга</th>
            <th>Сумма, руб.</th>
            <th>Статус</th>
          </tr>
        </thead>
        <tbody>
          @forelse($items as $row)
          <tr>
            <td>{{ $row['id'] }}</td>
            <td>{{ $row['doc_type'] }}</td>
            <td>{{ $row['doc_number'] }}</td>
            <td>{{ \Illuminate\Support\Carbon::parse($row['date'])->format('d.m.Y') }}</td>
            <td>{{ $row['contract'] }}</td>
            <td>{{ $row['service_name'] }}</td>
            <td>{{ number_format($row['sum'], 2, ',', ' ') }}</td>
            <td>{{ $row['status'] }}</td>
          </tr>
          @empty
          <tr>
            <td colspan="8">Документы пока отсутствуют</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
 </div>
@endsection
