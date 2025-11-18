@extends('layouts.app')
@section('title', 'Кабинет клиента — Заявления на ЭОД')
@section('content')
<div class="d-flex align-center">
  <h2>Заявления на ЭОД</h2>
  <div class="spacer"></div>
  <a href="/client/electronic-exchange/create" class="primary mx-0 mr-sm-2 v-btn v-btn--is-elevated v-btn--has-bg v-btn--router v-size--default"><span class="v-btn__content">Создать заявление</span></a>
  </div>

<div class="v-card">
  <div class="v-card__title align-center">Заявления<div class="spacer"></div><i class="v-icon mdi mdi-table"></i></div>
  <div class="v-card__text">
    <div class="table-responsive">
      <table class="v-simple-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Тип заявления</th>
            <th>№ договора</th>
            <th>Оператор ЭДО</th>
            <th>Контактное лицо</th>
            <th>Телефон</th>
            <th>Статус</th>
            <th>Создано</th>
          </tr>
        </thead>
        <tbody>
          @forelse($apps as $row)
          <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->claim_type }}</td>
            <td>{{ $row->contract_number }}</td>
            <td>{{ $row->operator_name }}</td>
            <td>{{ $row->contact_fio }}</td>
            <td>{{ $row->contact_tel }}</td>
            <td>{{ $row->status }}</td>
            <td>{{ $row->created_at->format('d.m.Y') }}</td>
          </tr>
          @empty
          <tr>
            <td colspan="8">Заявлений пока нет</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
 </div>
@endsection
