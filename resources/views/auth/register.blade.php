@extends('layouts.app')

@section('title', 'АО «ФГК» — Регистрация')

@section('content')
  <section class="hero hero--dark" style="background-image: url('https://lk.railfgk.ru/img/home-page/screen_wagons.jpg'); background-position: right center;">
    <div class="hero-overlay"></div>
    <div class="container hero-inner hero-inner--split">
      <div class="hero-copy text-uppercase white--text text-center text-md-left">
        <div class="mb-3 text-h4 text-md-h3 text-lg-h1 font-weight-black">
          <span>Регистрация</span>
          <div class="text-no-wrap d-inline-block d-md-block">Личный кабинет АО «ФГК»</div>
        </div>
        <div class="text-h6 text-md-h5 font-weight-light">
          <span>Создайте доступ</span>
          <span class="font-weight-black">для работы в системе</span>
        </div>
      </div>
      <div class="hero-auth">
        <div class="auth-card auth-card--dark">
          <form action="/register" method="post" class="auth-form">
            @csrf
            <div class="form-group">
              <label for="name">Имя</label>
              <input id="name" name="name" type="text" placeholder="Имя">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" name="email" type="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <label for="password">Пароль</label>
              <div class="password-wrap">
                <input id="password" name="password" type="password" placeholder="Пароль" required>
              </div>
            </div>
            <div class="form-actions gap">
              <a href="/login" class="btn btn-secondary" style="display:inline-flex; align-items:center; justify-content:center; height:42px; border-radius:8px; padding:0 18px; text-decoration:none;">Вход</a>
              <button class="btn btn-danger" type="submit">Зарегистрироваться</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
