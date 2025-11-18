@extends('layouts.app')
@section('title', 'Кабинет клиента — Договоры')
@section('content')
<div class="d-flex align-center">
  <h2>Договоры — заявления</h2>
  <div class="spacer"></div>
  <a href="/client/contracts/create" class="v-btn v-btn--is-elevated v-btn--has-bg primary"><span class="v-btn__content">Новый договор</span></a>
  </div>

<div class="row">
  <div class="col-md-6 col-12">
    <div class="v-card">
      <div class="v-card__title align-center">Открытые заявления<div class="spacer"></div><i class="v-icon mdi mdi-file-document-edit-outline"></i></div>
      <div class="v-list v-list--dense v-list--nav">
        @forelse($open as $a)
        <div class="v-list-item">
          <div class="v-list-item__content py-0">
            <div class="d-flex align-center fill-width">
              <div class="grow">{{ $a->title }}</div>
              <div class="ml-2 text--secondary">{{ optional($a->start_date)->format('d.m.Y') }} — {{ optional($a->end_date)->format('d.m.Y') }}</div>
            </div>
          </div>
        </div>
        @empty
        <div class="v-list-item"><div class="v-list-item__content">Нет открытых заявлений</div></div>
        @endforelse
      </div>
    </div>
  </div>

  <div class="col-md-6 col-12">
    <div class="v-card">
      <div class="v-card__title align-center">Закрытые заявления<div class="spacer"></div><i class="v-icon mdi mdi-file-document-outline"></i></div>
      <div class="v-list v-list--dense v-list--nav">
        @forelse($closed as $a)
        <div class="v-list-item">
          <div class="v-list-item__content py-0">
            <div class="d-flex align-center fill-width">
              <div class="grow">{{ $a->title }}</div>
              <div class="ml-2 text--secondary">{{ optional($a->start_date)->format('d.m.Y') }} — {{ optional($a->end_date)->format('d.m.Y') }}</div>
            </div>
          </div>
        </div>
        @empty
        <div class="v-list-item"><div class="v-list-item__content">Нет закрытых заявлений</div></div>
        @endforelse
      </div>
    </div>
  </div>
 </div>
@endsection
