@extends('layouts.app')
@section('title', 'Кабинет клиента — Создание договора')
@section('content')
<h2>Создание договора (заявление)</h2>
<p>Заполните форму. После отправки будет создано заявление с сроком действия до конца текущего года.</p>

      <form action="{{ route('contracts.create') }}" method="post" enctype="multipart/form-data" class="v-form">
        @csrf
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="v-card">
              <div class="v-card__title align-center">Услуга<div class="spacer"></div><i class="v-icon mdi mdi-briefcase"></i></div>
              <div class="v-card__text">
                <div class="v-select v-text-field--outlined">
                  <label class="v-label">Наименование услуги</label>
                  <select name="service_name" required>
                    @php($current = old('service_name', $prefill['service_name']))
                    <option value="Услуги по предоставлению подвижного состава для перевозок грузов" {{ $current==='Услуги по предоставлению подвижного состава для перевозок грузов' ? 'selected' : '' }}>Услуги по предоставлению подвижного состава для перевозок грузов</option>
                    <option value="Услуги транспортной экспедиции (услуги по организации перевозки грузов, включающие предоставление вагонов) " {{ $current==='Услуги транспортной экспедиции (услуги по организации перевозки грузов, включающие предоставление вагонов) ' ? 'selected' : '' }}>Услуги транспортной экспедиции (услуги по организации перевозки грузов, включающие предоставление вагонов) </option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-12">
            <div class="v-card">
              <div class="v-card__title align-center">Способ подачи заявления<div class="spacer"></div><i class="v-icon mdi mdi-file-sign"></i></div>
              <div class="v-card__text">
                <div class="v-select v-text-field--outlined">
                  <label class="v-label">Способ подачи</label>
                  <select name="submission_method">
                    <option value="paper" {{ old('submission_method')==='paper' ? 'selected' : '' }}>Заявление на бумажном носителе</option>
                    <option value="payment" {{ old('submission_method')==='payment' ? 'selected' : '' }}>Заявление с идентификационным платежом</option>
                    <option value="qes" {{ old('submission_method')==='qes' ? 'selected' : '' }}>Заявление с квалифицированной электронной подписью</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-12">
            <div class="v-card">
              <div class="v-card__title align-center">Сведения о компании<div class="spacer"></div><i class="v-icon mdi mdi-office-building"></i></div>
              <div class="v-card__text">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="v-text-field v-text-field--outlined">
                      <label class="v-label">Полное наименование</label>
                      <input type="text" name="company_full_name" value="{{ old('company_full_name', $prefill['company_full_name']) }}">
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="v-text-field v-text-field--outlined">
                      <label class="v-label">Сокращенное наименование</label>
                      <input type="text" name="company_short_name" value="{{ old('company_short_name', $prefill['company_short_name']) }}">
                    </div>
                  </div>
                  <div class="col-md-3 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">ИНН</label><input type="text" name="inn" value="{{ old('inn', $prefill['inn']) }}"></div></div>
                  <div class="col-md-3 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">КПП</label><input type="text" name="kpp" value="{{ old('kpp', $prefill['kpp']) }}"></div></div>
                  <div class="col-md-3 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">ОГРН</label><input type="text" name="ogrn" value="{{ old('ogrn', $prefill['ogrn']) }}"></div></div>
                  <div class="col-md-3 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">ОКПО</label><input type="text" name="okpo" value="{{ old('okpo', $prefill['okpo']) }}"></div></div>
                  <div class="col-md-12 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">Адрес места нахождения (юридический адрес)</label><input type="text" name="legal_address" value="{{ old('legal_address', $prefill['legal_address']) }}"></div></div>
                  <div class="col-md-6 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">ФИО уполномоченного представителя</label><input type="text" name="rep_fio" value="{{ old('rep_fio', $prefill['rep_fio']) }}"></div></div>
                  <div class="col-md-6 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">Должность</label><input type="text" name="rep_position" value="{{ old('rep_position', $prefill['rep_position']) }}"></div></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-12">
            <div class="v-card">
              <div class="v-card__title align-center">Банковские реквизиты<div class="spacer"></div><i class="v-icon mdi mdi-bank"></i></div>
              <div class="v-card__text">
                <div class="row">
                  <div class="col-md-3 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">БИК</label><input type="text" name="bik" value="{{ old('bik', $prefill['bik']) }}"></div></div>
                  <div class="col-md-3 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">Наименование банка</label><input type="text" name="bank_name" value="{{ old('bank_name', $prefill['bank_name']) }}"></div></div>
                  <div class="col-md-3 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">Номер кор. счета</label><input type="text" name="corr_account" value="{{ old('corr_account', $prefill['corr_account']) }}"></div></div>
                  <div class="col-md-3 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">Номер расчетного счета</label><input type="text" name="settlement_account" value="{{ old('settlement_account', $prefill['settlement_account']) }}"></div></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-12">
            <div class="v-card">
              <div class="v-card__title align-center">Контакты<div class="spacer"></div><i class="v-icon mdi mdi-card-account-mail"></i></div>
              <div class="v-card__text">
                <div class="row">
                  <div class="col-md-6 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">Почтовый адрес</label><input type="text" name="postal_address" value="{{ old('postal_address', $prefill['postal_address']) }}"></div></div>
                  <div class="col-md-3 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">Номер телефона</label><input type="text" name="phone" value="{{ old('phone', $prefill['phone']) }}"></div></div>
                  <div class="col-md-3 col-12"><div class="v-text-field v-text-field--outlined"><label class="v-label">Адрес электронной почты</label><input type="email" name="email" value="{{ old('email', $prefill['email']) }}"></div></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-12">
            <div class="v-card">
              <div class="v-card__title align-center">Файлы<div class="spacer"></div><i class="v-icon mdi mdi-file-multiple"></i></div>
              <div class="v-card__text">
                <div class="row">
                  <div class="col-md-6 col-12"><label>Документ, подтверждающий гос. регистрацию ЮЛ/ИП</label><input type="file" name="reg_doc"></div>
                  <div class="col-md-6 col-12"><label>Устав (все страницы)</label><input type="file" name="charter"></div>
                  <div class="col-md-6 col-12">
                    <div class="v-select v-text-field--outlined">
                      <label class="v-label">Тип документа о полномочиях</label>
                      <select name="authority_doc_type">
                        <option value="leader">Решение о назначении руководителя</option>
                        <option value="management">Договор с управляющей организацией</option>
                        <option value="proxy">Доверенность</option>
                      </select>
                    </div>
                    <label>Документ, подтверждающий полномочия</label><input type="file" name="authority_doc">
                  </div>
                  <div class="col-md-6 col-12"><label>Справка о бенефициарах</label><input type="file" name="beneficiary_doc"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-12">
            <div class="v-card">
              <div class="v-card__title align-center">Откуда вы узнали об АО «ФГК»?<div class="spacer"></div><i class="v-icon mdi mdi-help-circle"></i></div>
              <div class="v-card__text">
                <div class="v-select v-text-field--outlined">
                  <select name="source">
                    <option value="market">От других участников рынка</option>
                    <option value="rzd">С сайта ОАО "РЖД"</option>
                    <option value="social">Из социальных сетей</option>
                    <option value="search">Из поисковых систем</option>
                    <option value="media">Из СМИ</option>
                    <option value="ads">Из рекламы</option>
                    <option value="recontract">Перезаключаю/заключаю дополнительный договор</option>
                    <option value="other">Прочие источники</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12">
            <button type="submit" class="v-btn primary"><span class="v-btn__content">Отправить заявление</span></button>
            <a href="/client/contracts/applications" class="v-btn v-btn--outlined"><span class="v-btn__content">Отмена</span></a>
          </div>
        </div>
      </form>
@endsection
