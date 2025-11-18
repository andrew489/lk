@extends('layouts.app')
@section('title', 'Кабинет клиента — Создать заявление возврата/переноса')
@section('content')
<h2>Заявление на возврат или перенос денежных средств</h2>
<form action="{{ route('transferMoney.create') }}" method="post" class="v-form">
  @csrf
  <div class="v-card">
    <div class="v-card__title text-subtitle-2 py-2">Основные параметры</div>
    <div class="row ma-0 pt-1">
      <div class="py-0 col-md-12 col-12">
        <div class="v-text-field v-text-field--outlined">
          <label class="v-label">Наименование клиента</label>
          <input type="text" value="{{ $prefill['org_name'] }}" disabled>
        </div>
      </div>
      <div class="py-0 col-md-6 col-12">
        <div class="v-text-field v-text-field--outlined">
          <label class="v-label">ИНН клиента</label>
          <input type="text" value="{{ $prefill['org_inn'] }}" disabled>
        </div>
      </div>
      <div class="py-0 col-md-6 col-12">
        <div class="v-text-field v-text-field--outlined">
          <label class="v-label">ОКПО клиента</label>
          <input type="text" value="{{ $prefill['org_okpo'] }}" disabled>
        </div>
      </div>
      <div class="py-0 col-md-12 col-12">
        <div class="v-select v-text-field--outlined">
          <label class="v-label">Тип заявления</label>
          <select name="app_type" required>
            <option value="Возврат">Возврат денежных средств</option>
            <option value="Перенос">Перенос денежных средств</option>
          </select>
        </div>
      </div>
      <div class="py-0 col-md-6 col-12">
        <div class="v-select v-text-field--outlined">
          <label class="v-label">№ договора</label>
          <select name="contract_number">
            <option value="">— Выберите договор —</option>
            @foreach($contracts as $c)
              <option value="{{ $c->id }}">{{ $c->id }} — {{ $c->title }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="py-0 col-md-3 col-12">
        <div class="v-select v-text-field--outlined">
          <label class="v-label">Тип НДС</label>
          <select name="vat_type">
            <option value="Без НДС">Без НДС</option>
            <option value="С НДС">С НДС</option>
          </select>
        </div>
      </div>
      <div class="py-0 col-md-3 col-12">
        <div class="v-select v-text-field--outlined">
          <label class="v-label">Договор расторгнуть?</label>
          <select name="contract_stop">
            <option value="0">Нет</option>
            <option value="1">Да</option>
          </select>
        </div>
      </div>
      <div class="py-0 col-md-6 col-12">
        <div class="v-text-field v-text-field--outlined">
          <label class="v-label">Сумма денежных средств с НДС, руб.</label>
          <input name="sum_with_vat" type="number" step="0.01">
        </div>
      </div>
      <div class="py-0 col-md-6 col-12">
        <div class="v-text-field v-text-field--outlined">
          <label class="v-label">Сумма НДС, руб.</label>
          <input name="vat_sum" type="number" step="0.01">
        </div>
      </div>
      <div class="py-0 col-md-12 col-12">
        <div class="v-select v-text-field--outlined">
          <label class="v-label">ФИО подписанта заявления</label>
          <input name="signer" type="text" value="{{ $prefill['signer'] }}">
        </div>
      </div>
    </div>
  </div>

  <div class="v-card mt-4">
    <div class="v-card__title text-subtitle-2 py-2">Реквизиты для перечисления денежных средств</div>
    <div class="row ma-0 pt-1">
      <div class="py-0 col-md-6 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">БИК банка</label><input name="bank_bik" type="text"></div></div>
      <div class="py-0 col-md-6 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">Расчетный счет</label><input name="bank_account" type="text"></div></div>
      <div class="py-0 col-md-6 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">Наименование банка</label><input name="bank_name" type="text"></div></div>
      <div class="py-0 col-md-6 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">Корреспондентский счет</label><input name="bank_corr_account" type="text"></div></div>
    </div>
  </div>

  <div class="v-card__actions px-0 mt-4">
    <button type="submit" class="mx-auto primary v-btn v-btn--is-elevated v-btn--has-bg v-size--default"><span class="v-btn__content">Отправить на согласование</span></button>
    <a href="/client/contracts/transfer-money" class="v-btn v-btn--outlined"><span class="v-btn__content">Отмена</span></a>
  </div>
</form>
@endsection
