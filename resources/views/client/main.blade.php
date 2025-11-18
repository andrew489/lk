@extends('layouts.app')

@section('title', 'Кабинет клиента — Главная')

@section('content')
<div class="container">
    <section>
      
      <div class="content-grid">
        <div class="col-span-6">
          <div class="v-card">
            <div class="v-card__title align-center">
              Заказ вагонов
              <div class="spacer"></div>
              <div class="card-actions"><i class="v-icon mdi mdi-dots-vertical"></i></div>
            </div>
            <div class="chips">
              <span class="chip">Август</span>
              <span class="chip">Сентябрь</span>
              <span class="chip">Октябрь</span>
              <span class="chip chip--active">Ноябрь</span>
              <span class="chip">Декабрь</span>
            </div>
            <div class="v-list v-list--dense v-list--nav">
              <div class="v-list-item"><div class="v-list-item__content">Подписан</div><div class="v-list-item__content"><div class="progress"><div class="bar" style="width:60%"></div></div></div></div>
              <div class="v-list-item"><div class="v-list-item__content">На согласовании</div><div class="v-list-item__content"><div class="progress progress--red"><div class="bar" style="width:30%"></div></div></div></div>
            </div>
          </div>
        </div>
        <div class="col-span-6">
          <div class="v-card">
            <div class="v-card__title align-center">
              Вагоны в пути
              <div class="spacer"></div>
              <div class="card-actions"><i class="v-icon mdi mdi-dots-vertical"></i></div>
            </div>
            <div class="v-list v-list--dense v-list--nav">
              <div class="v-list-item"><div class="v-list-item__content">От меня</div><div class="v-list-item__content"><div class="progress progress--red"><div class="bar" style="width:20%"></div></div></div></div>
              <div class="v-list-item"><div class="v-list-item__content">Ко мне</div><div class="v-list-item__content"><div class="progress"><div class="bar" style="width:40%"></div></div></div></div>
            </div>
          </div>
        </div>
      </div>
      <hr class="v-divider">

      <div class="row">
        @foreach($contracts as $c)
        <div class="col-md-6 col-12">
          <div class="v-card">
            <div class="v-card__title align-center">
              <span class="status-dot ok"></span> {{ $c['title'] }}
              <div class="spacer"></div>
              <i class="v-icon mdi mdi-scale-unbalanced" style="font-size:16px;"></i>
            </div>
            <div role="list" class="v-list v-list--dense v-list--nav font-weight-light">
              <div role="listitem" class="v-list-item" style="min-height:32px;">
                <div class="v-list-item__content py-0">Срок действия:</div>
                <div class="v-list-item__content py-0">
                  <div class="d-flex align-center fill-width">
                    <div class="grow">{{ $c['period'] }}</div>
                  </div>
                </div>
              </div>
              <div role="listitem" class="v-list-item" style="min-height:32px;">
                <div class="v-list-item__content py-0">Тип договора:</div>
                <div class="v-list-item__content py-0"><div class="d-flex align-center fill-width"><div class="grow">{{ $c['type'] }}</div></div></div>
              </div>
              <div role="listitem" class="v-list-item" style="min-height:32px;">
                <div class="v-list-item__content py-0">Состояние:</div>
                <div class="v-list-item__content py-0"><div class="d-flex align-center fill-width"><div class="grow">{{ $c['status'] }}</div></div></div>
              </div>
              <div role="listitem" class="v-list-item" style="min-height:32px;">
                <div class="v-list-item__content py-0">Сальдо взаиморасчетов:</div>
                <div class="v-list-item__content py-0"><div class="d-flex align-center fill-width"><div class="grow">{{ $c['balance'] }}</div><button type="button" class="v-btn v-btn--icon v-btn--round v-size--default" aria-label="Подробнее"><span class="v-btn__content"><i class="v-icon mdi mdi-page-next-outline"></i></span></button></div></div>
              </div>
              <div role="listitem" class="v-list-item" style="min-height:32px;">
                <div class="v-list-item__content py-0">Оперативное сальдо:</div>
                <div class="v-list-item__content py-0"><div class="d-flex align-center fill-width"><div class="grow">{{ $c['oper_balance'] }}</div><button type="button" class="v-btn v-btn--icon v-btn--round v-size--default" aria-label="Подробнее"><span class="v-btn__content"><i class="v-icon mdi mdi-page-next-outline"></i></span></button></div></div>
              </div>
              <div role="listitem" class="v-list-item" style="min-height:32px;">
                <div class="v-list-item__content py-0">Прогнозное сальдо:</div>
                <div class="v-list-item__content py-0"><div class="d-flex align-center fill-width"><div class="grow">{{ $c['forecast_balance'] }}</div><button type="button" class="v-btn v-btn--icon v-btn--round v-size--default" aria-label="Подробнее"><span class="v-btn__content"><i class="v-icon mdi mdi-page-next-outline"></i></span></button></div></div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
  </div>
@endsection
