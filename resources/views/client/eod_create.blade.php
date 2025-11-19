@extends('layouts.app')
@section('title', 'Кабинет клиента — Заявление на ЭОД')
@section('content')
<div class="v-card v-card--flat v-sheet theme--light transparent pt-2">
  <div role="alert" class="v-alert v-sheet theme--dark v-alert--border v-alert--text v-alert--border-left warning--text"><div class="v-alert__wrapper"><div class="v-alert__content">
          Оператором ЭДО АО "ФГК" является АО «ПФ «СКБ-Контур» (ДИАДОК). Если
          Ваша организация работает с другим оператором ЭДО, перед оформлением
          данного заявления, пожалуйста, убедитесь, что у вас настроен роуминг
          с АО «ПФ «СКБ-Контур», иначе заявление не будет принято системой.
        </div><div class="v-alert__border v-alert__border--left"></div></div></div>
  <div class="v-card__title pt-0 pb-2">Заявление клиента на ЭДО</div>

  <form class="v-form" method="POST" action="/client/electronic-exchange/create">
    @csrf

    <div class="app-flat mb-2 v-card v-card--flat v-sheet theme--light transparent claim__stepper">
      <div class="app-flat__module">
        <div class="v-card v-card--flat v-sheet theme--light transparent">
          <div class="v-card__title text-subtitle-2 py-2">Сведения о заявителе</div>
          <div class="row ma-0 pt-1 claim__stepper">
            <div class="py-0 col col-12">
              <div class="v-input v-input--dense theme--light v-text-field ">
                <div class="v-input__control">
                  <div class="v-input__slot">
                    <div class="v-text-field__slot">
                      <label class="v-label theme--light">Сокращенное наименование организации заявителя</label>
                      <input name="org_short_name" value="{{ old('org_short_name', $prefill['org_short_name']) }}" type="text" disabled>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-0 col-md-6 col-12">
              <div class="v-input v-input--dense theme--light v-text-field ">
                <div class="v-input__control">
                  <div class="v-input__slot">
                    <div class="v-text-field__slot">
                      <label class="v-label theme--light">ИНН</label>
                      <input name="org_inn" value="{{ old('org_inn', $prefill['org_inn']) }}" type="text" disabled>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-0 col-md-6 col-12">
              <div class="v-input v-input--dense theme--light v-text-field ">
                <div class="v-input__control">
                  <div class="v-input__slot">
                    <div class="v-text-field__slot">
                      <label class="v-label theme--light">КПП в ящике оператора ЭДО</label>
                      <input name="org_kpp" value="{{ old('org_kpp', $prefill['org_kpp']) }}" type="text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-0 col col-12">
              <div class="text-grey caption mt-n3 mb-5">
                Обращаем Ваше внимание, что Идентификатор участника ЭДО определяется автоматически по ИНН и КПП, указанным в заявлении.
              </div>
            </div>
            <div class="py-0 col col-12">
              <div class="v-input v-input--dense theme--light v-text-field ">
                <div class="v-input__control">
                  <div class="v-input__slot">
                    <div class="v-text-field__slot">
                      <label class="v-label theme--light">Идентификатор участника ЭДО</label>
                      <input name="edo_participant_id" value="{{ old('edo_participant_id', $prefill['edo_participant_id']) }}" type="text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-0 col col-12">
              <div class="v-input v-input--dense theme--light v-text-field ">
                <div class="v-input__control">
                  <div class="v-input__slot">
                    <div class="v-text-field__slot">
                      <label class="v-label theme--light">Идентификатор ящика у оператора ЭДО</label>
                      <input name="edo_box_id" value="{{ old('edo_box_id', $prefill['edo_box_id']) }}" type="text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-0 col col-12">
              <div class="v-input v-input--dense theme--light v-text-field ">
                <div class="v-input__control">
                  <div class="v-input__slot">
                    <div class="v-text-field__slot">
                      <label class="v-label theme--light">ФИО уполномоченного представителя</label>
                      <input name="rep_fio" value="{{ old('rep_fio', $prefill['rep_fio']) }}" type="text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-0 col col-12">
              <div class="v-input v-input--dense theme--light v-text-field ">
                <div class="v-input__control">
                  <div class="v-input__slot">
                    <div class="v-text-field__slot">
                      <label class="v-label theme--light">Должность уполномоченного представителя</label>
                      <input name="rep_position" value="{{ old('rep_position', $prefill['rep_position']) }}" type="text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="app-flat mb-2 v-card v-card--flat v-sheet theme--light transparent claim__stepper">
      <div class="app-flat__module">
        <div class="v-card v-card--flat v-sheet theme--light transparent">
          <div class="v-card__title text-subtitle-2 py-2">Параметры заявления</div>
          <div class="row ma-0 pt-1 claim__stepper">
            <div class="py-0 col col-12">
              <div class="v-input v-input--dense theme--light v-text-field ">
                <div class="v-input__control">
                  <div class="v-input__slot">
                    <div class="v-text-field__slot">
                      <label class="v-label theme--light">Тип заявления</label>
                      <input name="claim_type" value="{{ old('claim_type', $prefill['claim_type']) }}" type="text" readonly>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-0 col col-12">
              <div class="v-select v-input--dense theme--light">
                <div class="v-select__slot">
                  <label class="v-label theme--light">№ договора оперирования</label>
                  <select name="contract_number">
                    <option value="">— Выберите договор —</option>
                    @foreach($contracts as $c)
                      <option value="{{ $c->id }}">{{ $c->id }} — {{ $c->title }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="py-0 col col-12">
              <div class="v-input v-input--dense theme--light v-text-field ">
                <div class="v-input__control">
                  <div class="v-input__slot">
                    <div class="v-text-field__slot">
                      <label class="v-label theme--light">Наименование оператора ЭДО</label>
                      <input name="operator_name" value="{{ old('operator_name', $prefill['operator_name']) }}" type="text" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-0 col col-12">
              <div class="v-input v-input--dense theme--light v-text-field ">
                <div class="v-input__control">
                  <div class="v-input__slot">
                    <div class="v-text-field__slot">
                      <label class="v-label theme--light">ФИО контактного лица по вопросам организации ЭДО</label>
                      <input name="contact_fio" value="{{ old('contact_fio', $prefill['contact_fio']) }}" type="text" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-0 col col-12">
              <div class="v-input v-input--dense theme--light v-text-field ">
                <div class="v-input__control">
                  <div class="v-input__slot">
                    <div class="v-text-field__slot">
                      <label class="v-label theme--light">Тел. контактного лица по вопросам организации ЭДО</label>
                      <input name="contact_tel" value="{{ old('contact_tel', $prefill['contact_tel']) }}" type="text" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-0 col col-12">
              <div class="v-input v-input--dense theme--light v-text-field ">
                <div class="v-input__control">
                  <div class="v-input__slot">
                    <div class="v-text-field__slot">
                      <label class="v-label theme--light">Способ подачи заявления</label>
                      <input name="submission_method" value="{{ old('submission_method', $prefill['submission_method']) }}" type="text" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row flex-wrap px-3">
      <div class="spacer d-none d-sm-block"></div>
      <div>
        <button type="submit" class="mx-auto ml-sm-2 mb-3 primary v-btn v-btn--is-elevated v-btn--has-bg v-size--default"><span class="v-btn__content">Отправить на согласование</span></button>
      </div>
    </div>
  </form>
</div>
@endsection

<style>.v-application .warning--text {
    color: #ff8f00 !important;
    caret-color: #ff8f00 !important;
}</style>