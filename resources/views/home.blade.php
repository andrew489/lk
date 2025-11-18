@extends('layouts.app')

@section('title', 'Кабинет клиента АО «ФГК» — Вход')

@section('content')
  <section class="hero">
    <div class="container hero-inner">
      <div class="hero-text">
        <h1>Кабинет клиента АО «ФГК»</h1>
        <p>Единое пространство взаимодействия клиентов с АО «ФГК».</p>
      </div>
    </div>
  </section>

  <section class="auth">
    <div class="container auth-inner">
      <div class="auth-card">
        <h2>Вход в систему</h2>
        <form action="#" method="post" class="auth-form" onsubmit="return false;">
          <div class="form-group">
            <label for="login">Логин</label>
            <input id="login" type="text" placeholder="Введите логин">
          </div>
          <div class="form-group">
            <label for="password">Пароль</label>
            <input id="password" type="password" placeholder="Введите пароль">
          </div>
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Войти</button>
            <a class="link" href="#">Забыли пароль?</a>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection