<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'АО «ФГК» — Кабинет клиента')</title>
    <link rel="icon" href="https://lk.railfgk.ru/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@3.6.3/dist/vuetify.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body class="{{ request()->is('client/*') ? 'page--client' : '' }}">
    <svg width="0" height="0">
      <defs>
        <symbol id="base-lines" viewBox="0 0 40 646">
          <rect x="0" y="0" width="6" height="646" fill="#C8102E"/>
          <rect x="12" y="0" width="6" height="646" fill="#C8102E"/>
          <rect x="24" y="0" width="6" height="646" fill="#C8102E"/>
        </symbol>
      </defs>
    </svg>
    <!-- Верхняя плашка бренда -->
    <div class="brand-bar"></div>

    @if(request()->is('login') || request()->is('register'))
    <header class="ie-toolbar v-sheet v-toolbar v-app-bar v-app-bar--fixed shadow-custom theme--light">
      <div class="v-toolbar__content">
        <div class="container py-0">
          <div class="row">
            <div class="d-flex align-center justify-space-between py-0 col col-12">
              <a href="/" class="for-gap" id="fgk-logo">
                <svg height="39" viewBox="0 0 488 62" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_9727_3765)"><path d="M159.985 6.18695V8.27595C159.985 11.4199 157.631 13.8389 153.936 13.9499V15.2019H151.408V13.9499C147.649 13.7719 145.363 11.4869 145.363 8.31895V6.18695C145.363 3.12895 147.89 0.732949 151.408 0.623949V-0.102051H153.936V0.623949C157.542 0.732949 159.985 3.12995 159.985 6.18695ZM151.408 11.6839V2.91095C149.363 2.97695 147.847 4.31795 147.847 6.42995V8.16595C147.847 10.3209 149.408 11.6179 151.408 11.6839ZM153.936 2.91095V11.6839C155.982 11.6189 157.501 10.3209 157.501 8.16495V6.42695C157.5 4.31795 156.048 2.97695 153.936 2.91095Z" fill="var(--logo-text-color)"></path><path d="M164.599 11.0689C164.599 12.5859 165.72 13.2009 166.951 13.2009C167.633 13.2009 168.644 13.0709 169.592 12.2119C170.052 12.7629 170.512 13.2689 170.955 13.8159C169.722 15.0259 168.336 15.3129 166.951 15.3129C164.423 15.3129 162.268 14.0369 162.268 11.3319V8.47391C162.268 5.83391 164.225 4.20691 166.776 4.20691C169.436 4.20691 171.306 5.76791 171.306 8.38491V10.5189H164.599V11.0689ZM166.797 6.34091C165.632 6.34091 164.62 7.06691 164.62 8.49491V8.84791H168.953V8.51791C168.952 6.99991 167.962 6.34091 166.797 6.34091Z" fill="var(--logo-text-color)"></path><path d="M173.193 13.2009C174.228 12.4749 174.579 11.2439 174.733 8.89089L175.021 4.31689H183.157V13.1789C183.485 13.1789 183.794 13.1999 184.122 13.1999V18.0149H181.99V15.2009H174.536V18.0149H172.402V13.2219C172.667 13.2229 172.952 13.2229 173.193 13.2009ZM176.909 8.82589C176.801 10.7379 176.645 12.1459 176.03 13.1799H180.845V6.31889H177.041L176.909 8.82589Z" fill="var(--logo-text-color)"></path></g><defs><clipPath id="clip0_9727_3765"><rect width="487.189" height="61.404" fill="white"></rect></clipPath></defs></svg>
              </a>
              <div class="spacer"></div>
              <div role="list" class="v-list toolbar__user-content justify-end v-sheet transparent">
                <div role="listitem" class="px-0 toolbar__user-content__phone v-list-item theme--light">
                  <a href="tel:88002504777" class="v-btn v-btn--icon v-btn--round v-size--default" rel="noopener noreferrer"><span class="v-btn__content"><i class="v-icon mdi mdi-phone-in-talk-outline theme--light" aria-hidden="true"></i></span></a>
                  <div class="v-list-item__content py-0"><div class="v-list-item__title mr-4 d-none d-sm-block">8 800 250 4 777</div></div>
                  <div class="header-auth-block">
                    <a href="/login" class="mr-0 v-btn v-btn--icon v-btn--round v-size--default"><span class="v-btn__content"><i class="v-icon mdi mdi-login-variant theme--light" aria-hidden="true"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    @endif



    @if(!(request()->is('login') || request()->is('register')))
    <header class="site-header">
      <div class="header-inner">
        @guest
          <a class="brand" href="https://railfgk.ru" target="_blank" rel="noopener">
            <span class="brand-logo">ФГК</span>
            <span class="brand-title">АО «ФГК» — Кабинет клиента</span>
          </a>
        @endguest
        @if(request()->is('client/*'))
          <button type="button" id="sidebarToggle" class="v-btn v-btn--icon v-btn--round v-size--default" aria-label="Меню"><span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-menu theme--light"></i></span></button>
          <div class="spacer"></div>
          <form method="post" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="v-btn v-btn--icon v-btn--round theme--light v-size--default" aria-label="Выход"><span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-logout-variant theme--light"></i></span></button>
          </form>
        @endif
        @if(!request()->is('client/*') && (request()->is('client/main') || request()->is('/')))
          <nav class="nav">
            <a href="/login" class="nav-link">Вход</a>
            <a href="#" class="nav-link">Помощь</a>
            <a href="#" class="nav-link">Контакты</a>
          </nav>
          <div role="list" class="v-list toolbar__user-content justify-end transparent">
            @guest
              <div role="listitem" class="toolbar__user-content__phone v-list-item">
                <a href="tel:88002504777" class="v-btn v-btn--icon v-btn--round theme--light v-size--default" aria-label="Позвонить" rel="noopener noreferrer"><span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-phone-in-talk-outline theme--light"></i></span></a>
                <div class="v-list-item__content"><div class="v-list-item__title d-none d-sm-block">8 800 250 4 777</div></div>
              </div>
            @endguest
            <div role="listitem" class="ie-toolbar__user-content__profile v-list-item">
              @guest
                <a href="/login" class="v-btn v-btn--icon v-btn--round theme--light v-size--default" aria-label="Войти"><span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-login-variant theme--light"></i></span></a>
              @else
                <a href="/client/main" class="v-btn v-btn--icon v-btn--round theme--light v-size--default" aria-label="Профиль"><span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-account-circle theme--light"></i></span></a>
              @endguest
            </div>
          </div>
        @endif
      </div>
    </header>
    @endif


    <!-- Основной контент -->
    <main class="site-main {{ (request()->is('login') || request()->is('register')) ? 'auth-main' : '' }}">
      @if(!request()->is('client/*'))
        <div class="fill-height spotlight-gradient"></div>
      @endif
      @if(request()->is('client/*'))
        <div class="layout">
          <div class="container layout-inner">
            @include('client.partials.sidebar')
            <section class="main-content">
              @yield('content')
            </section>
          </div>
        </div>
      @else
        @yield('content')
      @endif
    </main>

    <!-- Футер -->
    <footer class="site-footer">
      <div class="container">
        <p>© {{ date('Y') }} АО «ФГК». Все права защищены.</p>
      </div>
    </footer>

    @stack('scripts')
    @if(request()->is('client/*'))
    <script>
      (function(){
       var btn = document.getElementById('sidebarToggle');
       if(btn){
         btn.addEventListener('click', function(){
           document.body.classList.toggle('sidebar-open');
         });
       }
       document.addEventListener('keyup', function(e){
          if(e.key === 'Escape') document.body.classList.remove('sidebar-open');
        });
        document.addEventListener('click', function(e){
          var wrapper = e.target.closest('.v-text-field.v-text-field--outlined, .v-select.v-text-field--outlined');
          if(wrapper){
            var sel = wrapper.querySelector('select');
            if(sel && !sel.disabled){
              sel.focus();
              try { sel.click(); } catch(_) {}
              return;
            }
            var el = wrapper.querySelector('input, textarea');
            if(el && !el.disabled){ el.focus(); }
          }
        });
      })();
    </script>
    <style>
      body.page--client .sidebar { background-color: #fff; }
      body.page--client .sidebar a.v-list-item,
      body.page--client .sidebar .v-list-item,
      body.page--client .sidebar .v-list-item__content,
      body.page--client .sidebar .v-list-item__title { color: #1f2937 !important; opacity: 1 !important; }
      body.page--client .sidebar .v-list-item__icon .v-icon { color: #4b5563 !important; }
      body.page--client .sidebar .v-subheader { color: #374151 !important; }
    </style>
    @endif
  </body>
</html>
