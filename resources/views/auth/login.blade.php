@extends('layouts.app')

@section('title', 'АО «ФГК» — Вход в кабинет клиента')

@section('content')
<div class="login-page client-login-24">
    <div class="v-responsive">
        <div class="v-responsive__content">
            <div class="v-lazy">
                <section id="masthead" class="py-8 py-sm-16 section-base position-relative">
                    <div class="position-absolute z-index-0 fill-width t-0 r-0 b-0 l-0 d-grid place-items-center">
                        <div class="v-image v-responsive theme--light" cover="" style="height: 100%; width: 100vw;">
                            <div class="v-responsive__sizer" style="padding-bottom: 66.6667%;"></div>
                            <div class="v-image__image v-image__image--cover"
                                 style="background-image: url(&quot;https://lk.railfgk.ru/img/home-page/screen_wagons.jpg&quot;); background-position: right center;"></div>
                            <div class="v-responsive__content" style="width: 1920px;">
                                <div class="fill-height spotlight-gradient"></div>
                            </div>
                        </div>
                    </div>
                    <div class="container py-8 py-sm-16 position-relative z-index-2">
                        <div class="row align-center">
                            <div
                                class="text-uppercase white--text text-center text-md-left col-sm-10 col-md-7 offset-sm-1 offset-md-0 col-12">
                                <div class="mb-3 text-h4 text-md-h3 text-lg-h1 font-weight-black"><span>
                  Личный кабинет
                </span> <span>
                  клиента
                </span>
                                    <div class="text-no-wrap d-inline-block d-md-block">
                                        АО «ФГК»
                                    </div>
                                </div>
                                <div class="text-h6 text-md-h5 font-weight-light"><span>С каждым кликом</span> <span
                                        class="font-weight-black">
                  ближе к цели
                </span></div>
                            </div>
                            <div class="col-sm-10 col-md-4 offset-sm-1 offset-md-0 col-12">
                                <div class="fill-width">
                                    <form novalidate="novalidate" id="login-id-main" method="post" action="/login"
                                          class="v-form auth-form mx-auto" style="max-width: 540px;">@csrf
                                        <div class="field-wrap">
                                            <div
                                                class="v-input mb-3 theme--dark v-text-field v-text-field--filled v-text-field--is-booted v-text-field--enclosed v-text-field--placeholder">
                                                <div class="v-input__control">
                                                    <div class="v-input__slot">
                                                        <div class="v-text-field__slot"><label for="input-87"
                                                                                               class="v-label theme--dark"
                                                                                               style="left: 0px; right: auto; position: absolute;">Email</label><input
                                                                name="email" id="input-87" type="email" required></div>
                                                    </div>
                                                    <div class="v-text-field__details">
                                                        <div class="v-messages theme--dark">
                                                            <div class="v-messages__wrapper"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field-wrap">
                                            <div
                                                class="v-input theme--dark v-text-field v-text-field--filled v-text-field--is-booted v-text-field--enclosed v-text-field--placeholder">
                                                <div class="v-input__control">
                                                    <div class="v-input__slot">
                                                        <div class="v-text-field__slot"><label for="input-90"
                                                                                               class="v-label theme--dark"
                                                                                               style="left: 0px; right: auto; position: absolute;">Пароль</label><input
                                                                name="password" autocomplete="new-password"
                                                                id="input-90" type="password" required></div>
                                                        <div class="v-input__append-inner"><i aria-hidden="true"
                                                                                              class="v-icon notranslate cursor-pointer mdi mdi-eye-off-outline theme--dark"></i>
                                                        </div>
                                                    </div>
                                                    <div class="v-text-field__details">
                                                        <div class="v-messages theme--dark">
                                                            <div class="v-messages__wrapper"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-end"><a href="#" title="Восстановление пароля"
                                                                           class="d-inline-block mb-4 mt-n2 text-body-2 white--text">
                                                Забыли пароль?
                                            </a></div>
                                        <div class="d-flex align-center justify-space-between mt-3">
                                            <button type="submit"
                                                    class="mx-0 order-1 btn-login v-btn v-btn--is-elevated v-btn--has-bg theme--light v-size--large primary"><span
                                                    class="v-btn__content">
      Вход
    </span></button>
                                            <button type="button"
                                                    class="mx-0 order-0 btn-register v-btn v-btn--outlined theme--light v-size--large white--text"><span
                                                    class="v-btn__content">
      Регистрация
    </span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <svg viewBox="0 0 1920 168" class="position-absolute r-0 b-0 l-0 z-index-1">
                        <use xlink:href="#masthead-svg"></use>
                    </svg>
                </section>
            </div>
            <div class="v-lazy">
                <section id="work-steps" class="pt-16 pb-8 pb-md-0 section-base position-relative">
                    <svg viewBox="0 0 1920 168" class="position-absolute t-0 r-0 l-0"
                         style="scale: -1; margin-top: -1px;">
                        <use xlink:href="#masthead-svg"></use>
                    </svg>
                    <div class="container py-8 mt-16">
                        <div class="row align-center">
                            <div class="d-none d-md-block col-md-1 col-12">
                                <svg width="40" height="646" viewBox="0 0 40 646">
                                    <use xlink:href="#base-lines"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    function togglePassword(e) {
        var input = document.getElementById('input-90');
        var btn = e && e.currentTarget ? e.currentTarget : null;
        var isText = input && input.type === 'text';
        if (input) {
            input.type = isText ? 'password' : 'text';
        }
        if (btn) {
            btn.classList.toggle('mdi-eye-outline');
            btn.classList.toggle('mdi-eye-off-outline');
        }
    }
</script>
@endpush
@endsection


<style type="text/css">
    .login-page .auth-form {
        -webkit-backdrop-filter: blur(.5rem);
        backdrop-filter: blur(.5rem);
        background: hsla(0, 0%, 100%, .2);
        background: var(--auth-form-bg, hsla(0, 0%, 100%, .2));
        border: thin solid hsla(0, 0%, 100%, .302);
        border: thin solid var(--auth-form-border, hsla(0, 0%, 100%, .302));
        border-radius: .25rem;
        box-shadow: 0 1.25rem 2.5rem -.35rem rgba(0, 0, 0, .2);
        padding: 1.75rem 1rem .75rem;
    }

    .login-page.client-login-24 {
        position: relative;
        z-index: 2;
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
        pointer-events: auto;
    }

    .login-page.client-login-24.d-none {
        display: block !important;
    }
</style>
<style type="text/css">
    .v-responsive {
        height: 100vh;
        overflow: auto;
    }

    .line-clamp-1 {
        -webkit-line-clamp: 1
    }

    .line-clamp-1, .line-clamp-2 {
        display: -webkit-box;
        overflow: hidden;
        -webkit-box-orient: vertical
    }

    .line-clamp-2 {
        -webkit-line-clamp: 2
    }

    .line-clamp-3 {
        -webkit-line-clamp: 3
    }

    .line-clamp-3, .line-clamp-4 {
        display: -webkit-box;
        overflow: hidden;
        -webkit-box-orient: vertical
    }

    .line-clamp-4 {
        -webkit-line-clamp: 4
    }

    .line-clamp-5 {
        -webkit-line-clamp: 5
    }

    .line-clamp-5, .line-clamp-6 {
        display: -webkit-box;
        overflow: hidden;
        -webkit-box-orient: vertical
    }

    .line-clamp-6 {
        -webkit-line-clamp: 6
    }

    .z-index-0 {
        z-index: 0
    }

    .z-index-1 {
        z-index: 1
    }

    .z-index-2 {
        z-index: 2
    }

    .z-index-3 {
        z-index: 3
    }

    .z-index-4 {
        z-index: 4
    }

    .z-index-5 {
        z-index: 5
    }

    .z-index-6 {
        z-index: 6
    }

    .z-index-7 {
        z-index: 7
    }

    .z-index-8 {
        z-index: 8
    }

    .z-index-9 {
        z-index: 9
    }

    .z-index-10 {
        z-index: 10
    }

    .z-index-20 {
        z-index: 20
    }

    .z-index-30 {
        z-index: 30
    }

    .z-index-40 {
        z-index: 40
    }

    .z-index-50 {
        z-index: 50
    }

    .opacity-0 {
        opacity: 0
    }

    .opacity-10 {
        opacity: .1
    }

    .opacity-20 {
        opacity: .2
    }

    .opacity-25 {
        opacity: .25
    }

    .opacity-30 {
        opacity: .3
    }

    .opacity-40 {
        opacity: .4
    }

    .opacity-50 {
        opacity: .5
    }

    .opacity-60 {
        opacity: .6
    }

    .opacity-70 {
        opacity: .7
    }

    .opacity-80 {
        opacity: .8
    }

    .opacity-90 {
        opacity: .9
    }

    .opacity-100 {
        opacity: 1
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: normal;
        font-weight: 100;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-ExtraThin.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-ExtraThin.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-ExtraThin.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-ExtraThin.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: italic;
        font-weight: 100;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-ExtraThinItalic.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-ExtraThinItalic.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-ExtraThinItalic.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-ExtraThinItalic.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: normal;
        font-weight: 200;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Thin.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Thin.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Thin.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Thin.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: italic;
        font-weight: 200;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-ThinItalic.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-ThinItalic.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-ThinItalic.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-ThinItalic.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: normal;
        font-weight: 300;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Light.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Light.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Light.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Light.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: italic;
        font-weight: 300;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-LightItalic.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-LightItalic.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-LightItalic.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-LightItalic.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: normal;
        font-weight: 400;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Regular.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Regular.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Regular.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Regular.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: italic;
        font-weight: 400;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Italic.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Italic.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Italic.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Italic.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: normal;
        font-weight: 500;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Medium.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Medium.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Medium.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Medium.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: italic;
        font-weight: 500;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-MediumItalic.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-MediumItalic.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-MediumItalic.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-MediumItalic.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: normal;
        font-weight: 600;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Medium.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Medium.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Medium.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Medium.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: italic;
        font-weight: 600;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-MediumItalic.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-MediumItalic.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-MediumItalic.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-MediumItalic.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: normal;
        font-weight: 700;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Bold.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Bold.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Bold.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Bold.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: italic;
        font-weight: 700;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-BoldItalic.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-BoldItalic.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-BoldItalic.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-BoldItalic.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: normal;
        font-weight: 800;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Bold.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Bold.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Bold.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Bold.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: italic;
        font-weight: 800;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-BoldItalic.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-BoldItalic.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-BoldItalic.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-BoldItalic.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: normal;
        font-weight: 900;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Black.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Black.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Black.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-Black.ttf) format("truetype")
    }

    @font-face {
        font-family: "PFDinDisplayPro";
        font-style: italic;
        font-weight: 900;
        src: url(/fonts/PFDinDisplayPro/PFDinDisplayPro-BlackItalic.eot?) format("eot"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-BlackItalic.woff) format("woff"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-BlackItalic.woff2) format("woff2"), url(/fonts/PFDinDisplayPro/PFDinDisplayPro-BlackItalic.ttf) format("truetype")
    }

    .d-grid, .grid {
        display: grid
    }

    .d-inline-grid, .inline-grid {
        display: inline-grid
    }

    .place-items-center {
        align-items: center;
        justify-items: center;
        place-items: center
    }

    .grid-cols-0 {
        grid-template-columns:none
    }

    .grid-cols-1 {
        grid-template-columns:repeat(1, minmax(0, 1fr))
    }

    .grid-cols-2 {
        grid-template-columns:repeat(2, minmax(0, 1fr))
    }

    .grid-cols-3 {
        grid-template-columns:repeat(3, minmax(0, 1fr))
    }

    .grid-cols-4 {
        grid-template-columns:repeat(4, minmax(0, 1fr))
    }

    .grid-cols-5 {
        grid-template-columns:repeat(5, minmax(0, 1fr))
    }

    .grid-cols-6 {
        grid-template-columns:repeat(6, minmax(0, 1fr))
    }

    .grid-cols-7 {
        grid-template-columns:repeat(7, minmax(0, 1fr))
    }

    .grid-cols-8 {
        grid-template-columns:repeat(8, minmax(0, 1fr))
    }

    .grid-cols-9 {
        grid-template-columns:repeat(9, minmax(0, 1fr))
    }

    .grid-cols-10 {
        grid-template-columns:repeat(10, minmax(0, 1fr))
    }

    .grid-cols-11 {
        grid-template-columns:repeat(11, minmax(0, 1fr))
    }

    .grid-cols-12 {
        grid-template-columns:repeat(12, minmax(0, 1fr))
    }

    .col-auto {
        grid-column: auto
    }

    .col-span-1 {
        grid-column: span 1/span 1
    }

    .col-span-2 {
        grid-column: span 2/span 2
    }

    .col-span-3 {
        grid-column: span 3/span 3
    }

    .col-span-4 {
        grid-column: span 4/span 4
    }

    .col-span-5 {
        grid-column: span 5/span 5
    }

    .col-span-6 {
        grid-column: span 6/span 6
    }

    .col-span-7 {
        grid-column: span 7/span 7
    }

    .col-span-8 {
        grid-column: span 8/span 8
    }

    .col-span-9 {
        grid-column: span 9/span 9
    }

    .col-span-10 {
        grid-column: span 10/span 10
    }

    .col-span-11 {
        grid-column: span 11/span 11
    }

    .col-span-12 {
        grid-column: span 12/span 12
    }

    .col-start-auto {
        grid-column-start: auto
    }

    .col-start-1 {
        grid-column-start: 1
    }

    .col-start-2 {
        grid-column-start: 2
    }

    .col-start-3 {
        grid-column-start: 3
    }

    .col-start-4 {
        grid-column-start: 4
    }

    .col-start-5 {
        grid-column-start: 5
    }

    .col-start-6 {
        grid-column-start: 6
    }

    .col-start-7 {
        grid-column-start: 7
    }

    .col-start-8 {
        grid-column-start: 8
    }

    .col-start-9 {
        grid-column-start: 9
    }

    .col-start-10 {
        grid-column-start: 10
    }

    .col-start-11 {
        grid-column-start: 11
    }

    .col-start-12 {
        grid-column-start: 12
    }

    .col-start-13 {
        grid-column-start: 13
    }

    .col-end-auto {
        grid-column-end: auto
    }

    .col-end-1 {
        grid-column-end: 1
    }

    .col-end-2 {
        grid-column-end: 2
    }

    .col-end-3 {
        grid-column-end: 3
    }

    .col-end-4 {
        grid-column-end: 4
    }

    .col-end-5 {
        grid-column-end: 5
    }

    .col-end-6 {
        grid-column-end: 6
    }

    .col-end-7 {
        grid-column-end: 7
    }

    .col-end-8 {
        grid-column-end: 8
    }

    .col-end-9 {
        grid-column-end: 9
    }

    .col-end-10 {
        grid-column-end: 10
    }

    .col-end-11 {
        grid-column-end: 11
    }

    .col-end-12 {
        grid-column-end: 12
    }

    .col-end-13 {
        grid-column-end: 13
    }

    .grid-rows-0 {
        grid-template-rows:none
    }

    .grid-rows-1 {
        grid-template-rows:repeat(1, minmax(0, 1fr))
    }

    .grid-rows-2 {
        grid-template-rows:repeat(2, minmax(0, 1fr))
    }

    .grid-rows-3 {
        grid-template-rows:repeat(3, minmax(0, 1fr))
    }

    .grid-rows-4 {
        grid-template-rows:repeat(4, minmax(0, 1fr))
    }

    .grid-rows-5 {
        grid-template-rows:repeat(5, minmax(0, 1fr))
    }

    .grid-rows-6 {
        grid-template-rows:repeat(6, minmax(0, 1fr))
    }

    .row-auto {
        grid-row: auto
    }

    .row-span-1 {
        grid-row: span 1/span 1
    }

    .row-span-2 {
        grid-row: span 2/span 2
    }

    .row-span-3 {
        grid-row: span 3/span 3
    }

    .row-span-4 {
        grid-row: span 4/span 4
    }

    .row-span-5 {
        grid-row: span 5/span 5
    }

    .row-span-6 {
        grid-row: span 6/span 6
    }

    .row-start-auto {
        grid-row-start: auto
    }

    .row-start-1 {
        grid-row-start: 1
    }

    .row-start-2 {
        grid-row-start: 2
    }

    .row-start-3 {
        grid-row-start: 3
    }

    .row-start-4 {
        grid-row-start: 4
    }

    .row-start-5 {
        grid-row-start: 5
    }

    .row-start-6 {
        grid-row-start: 6
    }

    .row-start-7 {
        grid-row-start: 7
    }

    .row-end-auto {
        grid-row-end: auto
    }

    .row-end-1 {
        grid-row-end: 1
    }

    .row-end-2 {
        grid-row-end: 2
    }

    .row-end-3 {
        grid-row-end: 3
    }

    .row-end-4 {
        grid-row-end: 4
    }

    .row-end-5 {
        grid-row-end: 5
    }

    .row-end-6 {
        grid-row-end: 6
    }

    .row-end-7 {
        grid-row-end: 7
    }

    .auto-cols-auto {
        grid-auto-columns: auto
    }

    .auto-cols-min {
        grid-auto-columns: min-content
    }

    .auto-cols-max {
        grid-auto-columns: max-content
    }

    .auto-cols-fr {
        grid-auto-columns: minmax(0, 1fr)
    }

    .auto-rows-auto {
        grid-auto-rows: auto
    }

    .auto-rows-min {
        grid-auto-rows: min-content
    }

    .auto-rows-max {
        grid-auto-rows: max-content
    }

    .auto-rows-fr {
        grid-auto-rows: minmax(0, 1fr)
    }

    .grid-flow-col {
        grid-auto-flow: column
    }

    .grid-flow-col-dense {
        grid-auto-flow: column dense
    }

    .grid-flow-row {
        grid-auto-flow: row
    }

    .grid-flow-row-dense {
        grid-auto-flow: row dense
    }

    .gap-0 {
        gap: 0
    }

    .gap-x-0 {
        -moz-column-gap: 0;
        column-gap: 0
    }

    .gap-y-0 {
        row-gap: 0
    }

    .gap-1 {
        gap: .25rem
    }

    .gap-2 {
        gap: .5rem
    }

    .gap-3 {
        gap: .75rem
    }

    .gap-4 {
        gap: 1rem
    }

    .gap-5 {
        gap: 1.25rem
    }

    .gap-6 {
        gap: 1.5rem
    }

    .gap-7 {
        gap: 1.75rem
    }

    .gap-8 {
        gap: 2rem
    }

    .gap-9 {
        gap: 2.25rem
    }

    .gap-10 {
        gap: 2.5rem
    }

    .gap-12 {
        gap: 3rem
    }

    .gap-14 {
        gap: 3.5rem
    }

    .gap-16 {
        gap: 4rem
    }

    .gap-18 {
        gap: 4.5rem
    }

    .gap-20 {
        gap: 5rem
    }

    .gap-24 {
        gap: 6rem
    }

    .gap-28 {
        gap: 7rem
    }

    .gap-32 {
        gap: 8rem
    }

    .gap-36 {
        gap: 9rem
    }

    .gap-40 {
        gap: 10rem
    }

    .gap-44 {
        gap: 11rem
    }

    .gap-48 {
        gap: 12rem
    }

    .gap-52 {
        gap: 13rem
    }

    .gap-56 {
        gap: 14rem
    }

    .gap-60 {
        gap: 15rem
    }

    .gap-64 {
        gap: 16rem
    }

    .gap-72 {
        gap: 18rem
    }

    .gap-80 {
        gap: 20rem
    }

    .gap-96 {
        gap: 24rem
    }

    .gap-x-1 {
        -moz-column-gap: .25rem;
        column-gap: .25rem
    }

    .gap-x-2 {
        -moz-column-gap: .5rem;
        column-gap: .5rem
    }

    .gap-x-3 {
        -moz-column-gap: .75rem;
        column-gap: .75rem
    }

    .gap-x-4 {
        -moz-column-gap: 1rem;
        column-gap: 1rem
    }

    .gap-x-5 {
        -moz-column-gap: 1.25rem;
        column-gap: 1.25rem
    }

    .gap-x-6 {
        -moz-column-gap: 1.5rem;
        column-gap: 1.5rem
    }

    .gap-x-7 {
        -moz-column-gap: 1.75rem;
        column-gap: 1.75rem
    }

    .gap-x-8 {
        -moz-column-gap: 2rem;
        column-gap: 2rem
    }

    .gap-x-9 {
        -moz-column-gap: 2.25rem;
        column-gap: 2.25rem
    }

    .gap-x-10 {
        -moz-column-gap: 2.5rem;
        column-gap: 2.5rem
    }

    .gap-x-12 {
        -moz-column-gap: 3rem;
        column-gap: 3rem
    }

    .gap-x-14 {
        -moz-column-gap: 3.5rem;
        column-gap: 3.5rem
    }

    .gap-x-16 {
        -moz-column-gap: 4rem;
        column-gap: 4rem
    }

    .gap-x-18 {
        -moz-column-gap: 4.5rem;
        column-gap: 4.5rem
    }

    .gap-x-20 {
        -moz-column-gap: 5rem;
        column-gap: 5rem
    }

    .gap-x-24 {
        -moz-column-gap: 6rem;
        column-gap: 6rem
    }

    .gap-x-28 {
        -moz-column-gap: 7rem;
        column-gap: 7rem
    }

    .gap-x-32 {
        -moz-column-gap: 8rem;
        column-gap: 8rem
    }

    .gap-x-36 {
        -moz-column-gap: 9rem;
        column-gap: 9rem
    }

    .gap-x-40 {
        -moz-column-gap: 10rem;
        column-gap: 10rem
    }

    .gap-x-44 {
        -moz-column-gap: 11rem;
        column-gap: 11rem
    }

    .gap-x-48 {
        -moz-column-gap: 12rem;
        column-gap: 12rem
    }

    .gap-x-52 {
        -moz-column-gap: 13rem;
        column-gap: 13rem
    }

    .gap-x-56 {
        -moz-column-gap: 14rem;
        column-gap: 14rem
    }

    .gap-x-60 {
        -moz-column-gap: 15rem;
        column-gap: 15rem
    }

    .gap-x-64 {
        -moz-column-gap: 16rem;
        column-gap: 16rem
    }

    .gap-x-72 {
        -moz-column-gap: 18rem;
        column-gap: 18rem
    }

    .gap-x-80 {
        -moz-column-gap: 20rem;
        column-gap: 20rem
    }

    .gap-x-96 {
        -moz-column-gap: 24rem;
        column-gap: 24rem
    }

    .gap-y-1 {
        row-gap: .25rem
    }

    .gap-y-2 {
        row-gap: .5rem
    }

    .gap-y-3 {
        row-gap: .75rem
    }

    .gap-y-4 {
        row-gap: 1rem
    }

    .gap-y-5 {
        row-gap: 1.25rem
    }

    .gap-y-6 {
        row-gap: 1.5rem
    }

    .gap-y-7 {
        row-gap: 1.75rem
    }

    .gap-y-8 {
        row-gap: 2rem
    }

    .gap-y-9 {
        row-gap: 2.25rem
    }

    .gap-y-10 {
        row-gap: 2.5rem
    }

    .gap-y-12 {
        row-gap: 3rem
    }

    .gap-y-14 {
        row-gap: 3.5rem
    }

    .gap-y-16 {
        row-gap: 4rem
    }

    .gap-y-18 {
        row-gap: 4.5rem
    }

    .gap-y-20 {
        row-gap: 5rem
    }

    .gap-y-24 {
        row-gap: 6rem
    }

    .gap-y-28 {
        row-gap: 7rem
    }

    .gap-y-32 {
        row-gap: 8rem
    }

    .gap-y-36 {
        row-gap: 9rem
    }

    .gap-y-40 {
        row-gap: 10rem
    }

    .gap-y-44 {
        row-gap: 11rem
    }

    .gap-y-48 {
        row-gap: 12rem
    }

    .gap-y-52 {
        row-gap: 13rem
    }

    .gap-y-56 {
        row-gap: 14rem
    }

    .gap-y-60 {
        row-gap: 15rem
    }

    .gap-y-64 {
        row-gap: 16rem
    }

    .gap-y-72 {
        row-gap: 18rem
    }

    .gap-y-80 {
        row-gap: 20rem
    }

    .gap-y-96 {
        row-gap: 24rem
    }

    @media (min-width: 600px) {
        .v-application .d-sm-grid {
            display: grid !important
        }

        .v-application .d-sm-inline-grid {
            display: inline-grid !important
        }

        .v-application .grid-cols-sm-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        .v-application .grid-cols-sm-2 {
            grid-template-columns:repeat(2, minmax(0, 1fr))
        }

        .v-application .grid-cols-sm-3 {
            grid-template-columns:repeat(3, minmax(0, 1fr))
        }

        .v-application .grid-cols-sm-4 {
            grid-template-columns:repeat(4, minmax(0, 1fr))
        }

        .v-application .grid-cols-sm-5 {
            grid-template-columns:repeat(5, minmax(0, 1fr))
        }

        .v-application .grid-cols-sm-6 {
            grid-template-columns:repeat(6, minmax(0, 1fr))
        }

        .v-application .grid-cols-sm-7 {
            grid-template-columns:repeat(7, minmax(0, 1fr))
        }

        .v-application .grid-cols-sm-8 {
            grid-template-columns:repeat(8, minmax(0, 1fr))
        }

        .v-application .grid-cols-sm-9 {
            grid-template-columns:repeat(9, minmax(0, 1fr))
        }

        .v-application .grid-cols-sm-10 {
            grid-template-columns:repeat(10, minmax(0, 1fr))
        }

        .v-application .grid-cols-sm-11 {
            grid-template-columns:repeat(11, minmax(0, 1fr))
        }

        .v-application .grid-cols-sm-12 {
            grid-template-columns:repeat(12, minmax(0, 1fr))
        }

        .v-application .col-span-sm-1 {
            grid-column: span 1/span 1
        }

        .v-application .col-span-sm-2 {
            grid-column: span 2/span 2
        }

        .v-application .col-span-sm-3 {
            grid-column: span 3/span 3
        }

        .v-application .col-span-sm-4 {
            grid-column: span 4/span 4
        }

        .v-application .col-span-sm-5 {
            grid-column: span 5/span 5
        }

        .v-application .col-span-sm-6 {
            grid-column: span 6/span 6
        }

        .v-application .col-span-sm-7 {
            grid-column: span 7/span 7
        }

        .v-application .col-span-sm-8 {
            grid-column: span 8/span 8
        }

        .v-application .col-span-sm-9 {
            grid-column: span 9/span 9
        }

        .v-application .col-span-sm-10 {
            grid-column: span 10/span 10
        }

        .v-application .col-span-sm-11 {
            grid-column: span 11/span 11
        }

        .v-application .col-span-sm-12 {
            grid-column: span 12/span 12
        }

        .v-application .col-start-sm-1 {
            grid-column-start: 1
        }

        .v-application .col-start-sm-2 {
            grid-column-start: 2
        }

        .v-application .col-start-sm-3 {
            grid-column-start: 3
        }

        .v-application .col-start-sm-4 {
            grid-column-start: 4
        }

        .v-application .col-start-sm-5 {
            grid-column-start: 5
        }

        .v-application .col-start-sm-6 {
            grid-column-start: 6
        }

        .v-application .col-start-sm-7 {
            grid-column-start: 7
        }

        .v-application .col-start-sm-8 {
            grid-column-start: 8
        }

        .v-application .col-start-sm-9 {
            grid-column-start: 9
        }

        .v-application .col-start-sm-10 {
            grid-column-start: 10
        }

        .v-application .col-start-sm-11 {
            grid-column-start: 11
        }

        .v-application .col-start-sm-12 {
            grid-column-start: 12
        }

        .v-application .col-start-sm-13 {
            grid-column-start: 13
        }

        .v-application .col-end-sm-1 {
            grid-column-end: 1
        }

        .v-application .col-end-sm-2 {
            grid-column-end: 2
        }

        .v-application .col-end-sm-3 {
            grid-column-end: 3
        }

        .v-application .col-end-sm-4 {
            grid-column-end: 4
        }

        .v-application .col-end-sm-5 {
            grid-column-end: 5
        }

        .v-application .col-end-sm-6 {
            grid-column-end: 6
        }

        .v-application .col-end-sm-7 {
            grid-column-end: 7
        }

        .v-application .col-end-sm-8 {
            grid-column-end: 8
        }

        .v-application .col-end-sm-9 {
            grid-column-end: 9
        }

        .v-application .col-end-sm-10 {
            grid-column-end: 10
        }

        .v-application .col-end-sm-11 {
            grid-column-end: 11
        }

        .v-application .col-end-sm-12 {
            grid-column-end: 12
        }

        .v-application .col-end-sm-13 {
            grid-column-end: 13
        }

        .v-application .grid-rows-sm-1 {
            grid-template-rows:repeat(1, minmax(0, 1fr))
        }

        .v-application .grid-rows-sm-2 {
            grid-template-rows:repeat(2, minmax(0, 1fr))
        }

        .v-application .grid-rows-sm-3 {
            grid-template-rows:repeat(3, minmax(0, 1fr))
        }

        .v-application .grid-rows-sm-4 {
            grid-template-rows:repeat(4, minmax(0, 1fr))
        }

        .v-application .grid-rows-sm-5 {
            grid-template-rows:repeat(5, minmax(0, 1fr))
        }

        .v-application .grid-rows-sm-6 {
            grid-template-rows:repeat(6, minmax(0, 1fr))
        }

        .v-application .row-span-sm-1 {
            grid-row: span 1/span 1
        }

        .v-application .row-span-sm-2 {
            grid-row: span 2/span 2
        }

        .v-application .row-span-sm-3 {
            grid-row: span 3/span 3
        }

        .v-application .row-span-sm-4 {
            grid-row: span 4/span 4
        }

        .v-application .row-span-sm-5 {
            grid-row: span 5/span 5
        }

        .v-application .row-span-sm-6 {
            grid-row: span 6/span 6
        }

        .v-application .row-start-sm-1 {
            grid-row-start: 1
        }

        .v-application .row-start-sm-2 {
            grid-row-start: 2
        }

        .v-application .row-start-sm-3 {
            grid-row-start: 3
        }

        .v-application .row-start-sm-4 {
            grid-row-start: 4
        }

        .v-application .row-start-sm-5 {
            grid-row-start: 5
        }

        .v-application .row-start-sm-6 {
            grid-row-start: 6
        }

        .v-application .row-start-sm-7 {
            grid-row-start: 7
        }

        .v-application .row-end-sm-1 {
            grid-row-end: 1
        }

        .v-application .row-end-sm-2 {
            grid-row-end: 2
        }

        .v-application .row-end-sm-3 {
            grid-row-end: 3
        }

        .v-application .row-end-sm-4 {
            grid-row-end: 4
        }

        .v-application .row-end-sm-5 {
            grid-row-end: 5
        }

        .v-application .row-end-sm-6 {
            grid-row-end: 6
        }

        .v-application .row-end-sm-7 {
            grid-row-end: 7
        }

        .v-application .gap-sm-1 {
            gap: .25rem
        }

        .v-application .gap-sm-2 {
            gap: .5rem
        }

        .v-application .gap-sm-3 {
            gap: .75rem
        }

        .v-application .gap-sm-4 {
            gap: 1rem
        }

        .v-application .gap-sm-5 {
            gap: 1.25rem
        }

        .v-application .gap-sm-6 {
            gap: 1.5rem
        }

        .v-application .gap-sm-7 {
            gap: 1.75rem
        }

        .v-application .gap-sm-8 {
            gap: 2rem
        }

        .v-application .gap-sm-9 {
            gap: 2.25rem
        }

        .v-application .gap-sm-10 {
            gap: 2.5rem
        }

        .v-application .gap-sm-12 {
            gap: 3rem
        }

        .v-application .gap-sm-14 {
            gap: 3.5rem
        }

        .v-application .gap-sm-16 {
            gap: 4rem
        }

        .v-application .gap-sm-18 {
            gap: 4.5rem
        }

        .v-application .gap-sm-20 {
            gap: 5rem
        }

        .v-application .gap-sm-24 {
            gap: 6rem
        }

        .v-application .gap-sm-28 {
            gap: 7rem
        }

        .v-application .gap-sm-32 {
            gap: 8rem
        }

        .v-application .gap-sm-36 {
            gap: 9rem
        }

        .v-application .gap-sm-40 {
            gap: 10rem
        }

        .v-application .gap-sm-44 {
            gap: 11rem
        }

        .v-application .gap-sm-48 {
            gap: 12rem
        }

        .v-application .gap-sm-52 {
            gap: 13rem
        }

        .v-application .gap-sm-56 {
            gap: 14rem
        }

        .v-application .gap-sm-60 {
            gap: 15rem
        }

        .v-application .gap-sm-64 {
            gap: 16rem
        }

        .v-application .gap-sm-72 {
            gap: 18rem
        }

        .v-application .gap-sm-80 {
            gap: 20rem
        }

        .v-application .gap-sm-96 {
            gap: 24rem
        }

        .v-application .gap-x-sm-1 {
            -moz-column-gap: .25rem;
            column-gap: .25rem
        }

        .v-application .gap-x-sm-2 {
            -moz-column-gap: .5rem;
            column-gap: .5rem
        }

        .v-application .gap-x-sm-3 {
            -moz-column-gap: .75rem;
            column-gap: .75rem
        }

        .v-application .gap-x-sm-4 {
            -moz-column-gap: 1rem;
            column-gap: 1rem
        }

        .v-application .gap-x-sm-5 {
            -moz-column-gap: 1.25rem;
            column-gap: 1.25rem
        }

        .v-application .gap-x-sm-6 {
            -moz-column-gap: 1.5rem;
            column-gap: 1.5rem
        }

        .v-application .gap-x-sm-7 {
            -moz-column-gap: 1.75rem;
            column-gap: 1.75rem
        }

        .v-application .gap-x-sm-8 {
            -moz-column-gap: 2rem;
            column-gap: 2rem
        }

        .v-application .gap-x-sm-9 {
            -moz-column-gap: 2.25rem;
            column-gap: 2.25rem
        }

        .v-application .gap-x-sm-10 {
            -moz-column-gap: 2.5rem;
            column-gap: 2.5rem
        }

        .v-application .gap-x-sm-12 {
            -moz-column-gap: 3rem;
            column-gap: 3rem
        }

        .v-application .gap-x-sm-14 {
            -moz-column-gap: 3.5rem;
            column-gap: 3.5rem
        }

        .v-application .gap-x-sm-16 {
            -moz-column-gap: 4rem;
            column-gap: 4rem
        }

        .v-application .gap-x-sm-18 {
            -moz-column-gap: 4.5rem;
            column-gap: 4.5rem
        }

        .v-application .gap-x-sm-20 {
            -moz-column-gap: 5rem;
            column-gap: 5rem
        }

        .v-application .gap-x-sm-24 {
            -moz-column-gap: 6rem;
            column-gap: 6rem
        }

        .v-application .gap-x-sm-28 {
            -moz-column-gap: 7rem;
            column-gap: 7rem
        }

        .v-application .gap-x-sm-32 {
            -moz-column-gap: 8rem;
            column-gap: 8rem
        }

        .v-application .gap-x-sm-36 {
            -moz-column-gap: 9rem;
            column-gap: 9rem
        }

        .v-application .gap-x-sm-40 {
            -moz-column-gap: 10rem;
            column-gap: 10rem
        }

        .v-application .gap-x-sm-44 {
            -moz-column-gap: 11rem;
            column-gap: 11rem
        }

        .v-application .gap-x-sm-48 {
            -moz-column-gap: 12rem;
            column-gap: 12rem
        }

        .v-application .gap-x-sm-52 {
            -moz-column-gap: 13rem;
            column-gap: 13rem
        }

        .v-application .gap-x-sm-56 {
            -moz-column-gap: 14rem;
            column-gap: 14rem
        }

        .v-application .gap-x-sm-60 {
            -moz-column-gap: 15rem;
            column-gap: 15rem
        }

        .v-application .gap-x-sm-64 {
            -moz-column-gap: 16rem;
            column-gap: 16rem
        }

        .v-application .gap-x-sm-72 {
            -moz-column-gap: 18rem;
            column-gap: 18rem
        }

        .v-application .gap-x-sm-80 {
            -moz-column-gap: 20rem;
            column-gap: 20rem
        }

        .v-application .gap-x-sm-96 {
            -moz-column-gap: 24rem;
            column-gap: 24rem
        }

        .v-application .gap-y-sm-1 {
            row-gap: .25rem
        }

        .v-application .gap-y-sm-2 {
            row-gap: .5rem
        }

        .v-application .gap-y-sm-3 {
            row-gap: .75rem
        }

        .v-application .gap-y-sm-4 {
            row-gap: 1rem
        }

        .v-application .gap-y-sm-5 {
            row-gap: 1.25rem
        }

        .v-application .gap-y-sm-6 {
            row-gap: 1.5rem
        }

        .v-application .gap-y-sm-7 {
            row-gap: 1.75rem
        }

        .v-application .gap-y-sm-8 {
            row-gap: 2rem
        }

        .v-application .gap-y-sm-9 {
            row-gap: 2.25rem
        }

        .v-application .gap-y-sm-10 {
            row-gap: 2.5rem
        }

        .v-application .gap-y-sm-12 {
            row-gap: 3rem
        }

        .v-application .gap-y-sm-14 {
            row-gap: 3.5rem
        }

        .v-application .gap-y-sm-16 {
            row-gap: 4rem
        }

        .v-application .gap-y-sm-18 {
            row-gap: 4.5rem
        }

        .v-application .gap-y-sm-20 {
            row-gap: 5rem
        }

        .v-application .gap-y-sm-24 {
            row-gap: 6rem
        }

        .v-application .gap-y-sm-28 {
            row-gap: 7rem
        }

        .v-application .gap-y-sm-32 {
            row-gap: 8rem
        }

        .v-application .gap-y-sm-36 {
            row-gap: 9rem
        }

        .v-application .gap-y-sm-40 {
            row-gap: 10rem
        }

        .v-application .gap-y-sm-44 {
            row-gap: 11rem
        }

        .v-application .gap-y-sm-48 {
            row-gap: 12rem
        }

        .v-application .gap-y-sm-52 {
            row-gap: 13rem
        }

        .v-application .gap-y-sm-56 {
            row-gap: 14rem
        }

        .v-application .gap-y-sm-60 {
            row-gap: 15rem
        }

        .v-application .gap-y-sm-64 {
            row-gap: 16rem
        }

        .v-application .gap-y-sm-72 {
            row-gap: 18rem
        }

        .v-application .gap-y-sm-80 {
            row-gap: 20rem
        }

        .v-application .gap-y-sm-96 {
            row-gap: 24rem
        }
    }

    @media (min-width: 960px) {
        .v-application .d-md-grid {
            display: grid !important
        }

        .v-application .d-md-inline-grid {
            display: inline-grid !important
        }

        .v-application .grid-cols-md-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        .v-application .grid-cols-md-2 {
            grid-template-columns:repeat(2, minmax(0, 1fr))
        }

        .v-application .grid-cols-md-3 {
            grid-template-columns:repeat(3, minmax(0, 1fr))
        }

        .v-application .grid-cols-md-4 {
            grid-template-columns:repeat(4, minmax(0, 1fr))
        }

        .v-application .grid-cols-md-5 {
            grid-template-columns:repeat(5, minmax(0, 1fr))
        }

        .v-application .grid-cols-md-6 {
            grid-template-columns:repeat(6, minmax(0, 1fr))
        }

        .v-application .grid-cols-md-7 {
            grid-template-columns:repeat(7, minmax(0, 1fr))
        }

        .v-application .grid-cols-md-8 {
            grid-template-columns:repeat(8, minmax(0, 1fr))
        }

        .v-application .grid-cols-md-9 {
            grid-template-columns:repeat(9, minmax(0, 1fr))
        }

        .v-application .grid-cols-md-10 {
            grid-template-columns:repeat(10, minmax(0, 1fr))
        }

        .v-application .grid-cols-md-11 {
            grid-template-columns:repeat(11, minmax(0, 1fr))
        }

        .v-application .grid-cols-md-12 {
            grid-template-columns:repeat(12, minmax(0, 1fr))
        }

        .v-application .col-span-md-1 {
            grid-column: span 1/span 1
        }

        .v-application .col-span-md-2 {
            grid-column: span 2/span 2
        }

        .v-application .col-span-md-3 {
            grid-column: span 3/span 3
        }

        .v-application .col-span-md-4 {
            grid-column: span 4/span 4
        }

        .v-application .col-span-md-5 {
            grid-column: span 5/span 5
        }

        .v-application .col-span-md-6 {
            grid-column: span 6/span 6
        }

        .v-application .col-span-md-7 {
            grid-column: span 7/span 7
        }

        .v-application .col-span-md-8 {
            grid-column: span 8/span 8
        }

        .v-application .col-span-md-9 {
            grid-column: span 9/span 9
        }

        .v-application .col-span-md-10 {
            grid-column: span 10/span 10
        }

        .v-application .col-span-md-11 {
            grid-column: span 11/span 11
        }

        .v-application .col-span-md-12 {
            grid-column: span 12/span 12
        }

        .v-application .col-start-md-1 {
            grid-column-start: 1
        }

        .v-application .col-start-md-2 {
            grid-column-start: 2
        }

        .v-application .col-start-md-3 {
            grid-column-start: 3
        }

        .v-application .col-start-md-4 {
            grid-column-start: 4
        }

        .v-application .col-start-md-5 {
            grid-column-start: 5
        }

        .v-application .col-start-md-6 {
            grid-column-start: 6
        }

        .v-application .col-start-md-7 {
            grid-column-start: 7
        }

        .v-application .col-start-md-8 {
            grid-column-start: 8
        }

        .v-application .col-start-md-9 {
            grid-column-start: 9
        }

        .v-application .col-start-md-10 {
            grid-column-start: 10
        }

        .v-application .col-start-md-11 {
            grid-column-start: 11
        }

        .v-application .col-start-md-12 {
            grid-column-start: 12
        }

        .v-application .col-start-md-13 {
            grid-column-start: 13
        }

        .v-application .col-end-md-1 {
            grid-column-end: 1
        }

        .v-application .col-end-md-2 {
            grid-column-end: 2
        }

        .v-application .col-end-md-3 {
            grid-column-end: 3
        }

        .v-application .col-end-md-4 {
            grid-column-end: 4
        }

        .v-application .col-end-md-5 {
            grid-column-end: 5
        }

        .v-application .col-end-md-6 {
            grid-column-end: 6
        }

        .v-application .col-end-md-7 {
            grid-column-end: 7
        }

        .v-application .col-end-md-8 {
            grid-column-end: 8
        }

        .v-application .col-end-md-9 {
            grid-column-end: 9
        }

        .v-application .col-end-md-10 {
            grid-column-end: 10
        }

        .v-application .col-end-md-11 {
            grid-column-end: 11
        }

        .v-application .col-end-md-12 {
            grid-column-end: 12
        }

        .v-application .col-end-md-13 {
            grid-column-end: 13
        }

        .v-application .grid-rows-md-1 {
            grid-template-rows:repeat(1, minmax(0, 1fr))
        }

        .v-application .grid-rows-md-2 {
            grid-template-rows:repeat(2, minmax(0, 1fr))
        }

        .v-application .grid-rows-md-3 {
            grid-template-rows:repeat(3, minmax(0, 1fr))
        }

        .v-application .grid-rows-md-4 {
            grid-template-rows:repeat(4, minmax(0, 1fr))
        }

        .v-application .grid-rows-md-5 {
            grid-template-rows:repeat(5, minmax(0, 1fr))
        }

        .v-application .grid-rows-md-6 {
            grid-template-rows:repeat(6, minmax(0, 1fr))
        }

        .v-application .row-span-md-1 {
            grid-row: span 1/span 1
        }

        .v-application .row-span-md-2 {
            grid-row: span 2/span 2
        }

        .v-application .row-span-md-3 {
            grid-row: span 3/span 3
        }

        .v-application .row-span-md-4 {
            grid-row: span 4/span 4
        }

        .v-application .row-span-md-5 {
            grid-row: span 5/span 5
        }

        .v-application .row-span-md-6 {
            grid-row: span 6/span 6
        }

        .v-application .row-start-md-1 {
            grid-row-start: 1
        }

        .v-application .row-start-md-2 {
            grid-row-start: 2
        }

        .v-application .row-start-md-3 {
            grid-row-start: 3
        }

        .v-application .row-start-md-4 {
            grid-row-start: 4
        }

        .v-application .row-start-md-5 {
            grid-row-start: 5
        }

        .v-application .row-start-md-6 {
            grid-row-start: 6
        }

        .v-application .row-start-md-7 {
            grid-row-start: 7
        }

        .v-application .row-end-md-1 {
            grid-row-end: 1
        }

        .v-application .row-end-md-2 {
            grid-row-end: 2
        }

        .v-application .row-end-md-3 {
            grid-row-end: 3
        }

        .v-application .row-end-md-4 {
            grid-row-end: 4
        }

        .v-application .row-end-md-5 {
            grid-row-end: 5
        }

        .v-application .row-end-md-6 {
            grid-row-end: 6
        }

        .v-application .row-end-md-7 {
            grid-row-end: 7
        }

        .v-application .gap-md-1 {
            gap: .25rem
        }

        .v-application .gap-md-2 {
            gap: .5rem
        }

        .v-application .gap-md-3 {
            gap: .75rem
        }

        .v-application .gap-md-4 {
            gap: 1rem
        }

        .v-application .gap-md-5 {
            gap: 1.25rem
        }

        .v-application .gap-md-6 {
            gap: 1.5rem
        }

        .v-application .gap-md-7 {
            gap: 1.75rem
        }

        .v-application .gap-md-8 {
            gap: 2rem
        }

        .v-application .gap-md-9 {
            gap: 2.25rem
        }

        .v-application .gap-md-10 {
            gap: 2.5rem
        }

        .v-application .gap-md-12 {
            gap: 3rem
        }

        .v-application .gap-md-14 {
            gap: 3.5rem
        }

        .v-application .gap-md-16 {
            gap: 4rem
        }

        .v-application .gap-md-18 {
            gap: 4.5rem
        }

        .v-application .gap-md-20 {
            gap: 5rem
        }

        .v-application .gap-md-24 {
            gap: 6rem
        }

        .v-application .gap-md-28 {
            gap: 7rem
        }

        .v-application .gap-md-32 {
            gap: 8rem
        }

        .v-application .gap-md-36 {
            gap: 9rem
        }

        .v-application .gap-md-40 {
            gap: 10rem
        }

        .v-application .gap-md-44 {
            gap: 11rem
        }

        .v-application .gap-md-48 {
            gap: 12rem
        }

        .v-application .gap-md-52 {
            gap: 13rem
        }

        .v-application .gap-md-56 {
            gap: 14rem
        }

        .v-application .gap-md-60 {
            gap: 15rem
        }

        .v-application .gap-md-64 {
            gap: 16rem
        }

        .v-application .gap-md-72 {
            gap: 18rem
        }

        .v-application .gap-md-80 {
            gap: 20rem
        }

        .v-application .gap-md-96 {
            gap: 24rem
        }

        .v-application .gap-x-md-1 {
            -moz-column-gap: .25rem;
            column-gap: .25rem
        }

        .v-application .gap-x-md-2 {
            -moz-column-gap: .5rem;
            column-gap: .5rem
        }

        .v-application .gap-x-md-3 {
            -moz-column-gap: .75rem;
            column-gap: .75rem
        }

        .v-application .gap-x-md-4 {
            -moz-column-gap: 1rem;
            column-gap: 1rem
        }

        .v-application .gap-x-md-5 {
            -moz-column-gap: 1.25rem;
            column-gap: 1.25rem
        }

        .v-application .gap-x-md-6 {
            -moz-column-gap: 1.5rem;
            column-gap: 1.5rem
        }

        .v-application .gap-x-md-7 {
            -moz-column-gap: 1.75rem;
            column-gap: 1.75rem
        }

        .v-application .gap-x-md-8 {
            -moz-column-gap: 2rem;
            column-gap: 2rem
        }

        .v-application .gap-x-md-9 {
            -moz-column-gap: 2.25rem;
            column-gap: 2.25rem
        }

        .v-application .gap-x-md-10 {
            -moz-column-gap: 2.5rem;
            column-gap: 2.5rem
        }

        .v-application .gap-x-md-12 {
            -moz-column-gap: 3rem;
            column-gap: 3rem
        }

        .v-application .gap-x-md-14 {
            -moz-column-gap: 3.5rem;
            column-gap: 3.5rem
        }

        .v-application .gap-x-md-16 {
            -moz-column-gap: 4rem;
            column-gap: 4rem
        }

        .v-application .gap-x-md-18 {
            -moz-column-gap: 4.5rem;
            column-gap: 4.5rem
        }

        .v-application .gap-x-md-20 {
            -moz-column-gap: 5rem;
            column-gap: 5rem
        }

        .v-application .gap-x-md-24 {
            -moz-column-gap: 6rem;
            column-gap: 6rem
        }

        .v-application .gap-x-md-28 {
            -moz-column-gap: 7rem;
            column-gap: 7rem
        }

        .v-application .gap-x-md-32 {
            -moz-column-gap: 8rem;
            column-gap: 8rem
        }

        .v-application .gap-x-md-36 {
            -moz-column-gap: 9rem;
            column-gap: 9rem
        }

        .v-application .gap-x-md-40 {
            -moz-column-gap: 10rem;
            column-gap: 10rem
        }

        .v-application .gap-x-md-44 {
            -moz-column-gap: 11rem;
            column-gap: 11rem
        }

        .v-application .gap-x-md-48 {
            -moz-column-gap: 12rem;
            column-gap: 12rem
        }

        .v-application .gap-x-md-52 {
            -moz-column-gap: 13rem;
            column-gap: 13rem
        }

        .v-application .gap-x-md-56 {
            -moz-column-gap: 14rem;
            column-gap: 14rem
        }

        .v-application .gap-x-md-60 {
            -moz-column-gap: 15rem;
            column-gap: 15rem
        }

        .v-application .gap-x-md-64 {
            -moz-column-gap: 16rem;
            column-gap: 16rem
        }

        .v-application .gap-x-md-72 {
            -moz-column-gap: 18rem;
            column-gap: 18rem
        }

        .v-application .gap-x-md-80 {
            -moz-column-gap: 20rem;
            column-gap: 20rem
        }

        .v-application .gap-x-md-96 {
            -moz-column-gap: 24rem;
            column-gap: 24rem
        }

        .v-application .gap-y-md-1 {
            row-gap: .25rem
        }

        .v-application .gap-y-md-2 {
            row-gap: .5rem
        }

        .v-application .gap-y-md-3 {
            row-gap: .75rem
        }

        .v-application .gap-y-md-4 {
            row-gap: 1rem
        }

        .v-application .gap-y-md-5 {
            row-gap: 1.25rem
        }

        .v-application .gap-y-md-6 {
            row-gap: 1.5rem
        }

        .v-application .gap-y-md-7 {
            row-gap: 1.75rem
        }

        .v-application .gap-y-md-8 {
            row-gap: 2rem
        }

        .v-application .gap-y-md-9 {
            row-gap: 2.25rem
        }

        .v-application .gap-y-md-10 {
            row-gap: 2.5rem
        }

        .v-application .gap-y-md-12 {
            row-gap: 3rem
        }

        .v-application .gap-y-md-14 {
            row-gap: 3.5rem
        }

        .v-application .gap-y-md-16 {
            row-gap: 4rem
        }

        .v-application .gap-y-md-18 {
            row-gap: 4.5rem
        }

        .v-application .gap-y-md-20 {
            row-gap: 5rem
        }

        .v-application .gap-y-md-24 {
            row-gap: 6rem
        }

        .v-application .gap-y-md-28 {
            row-gap: 7rem
        }

        .v-application .gap-y-md-32 {
            row-gap: 8rem
        }

        .v-application .gap-y-md-36 {
            row-gap: 9rem
        }

        .v-application .gap-y-md-40 {
            row-gap: 10rem
        }

        .v-application .gap-y-md-44 {
            row-gap: 11rem
        }

        .v-application .gap-y-md-48 {
            row-gap: 12rem
        }

        .v-application .gap-y-md-52 {
            row-gap: 13rem
        }

        .v-application .gap-y-md-56 {
            row-gap: 14rem
        }

        .v-application .gap-y-md-60 {
            row-gap: 15rem
        }

        .v-application .gap-y-md-64 {
            row-gap: 16rem
        }

        .v-application .gap-y-md-72 {
            row-gap: 18rem
        }

        .v-application .gap-y-md-80 {
            row-gap: 20rem
        }

        .v-application .gap-y-md-96 {
            row-gap: 24rem
        }
    }

    @media (min-width: 1264px) {
        .v-application .d-lg-grid {
            display: grid !important
        }

        .v-application .d-lg-inline-grid {
            display: inline-grid !important
        }

        .v-application .grid-cols-lg-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        .v-application .grid-cols-lg-2 {
            grid-template-columns:repeat(2, minmax(0, 1fr))
        }

        .v-application .grid-cols-lg-3 {
            grid-template-columns:repeat(3, minmax(0, 1fr))
        }

        .v-application .grid-cols-lg-4 {
            grid-template-columns:repeat(4, minmax(0, 1fr))
        }

        .v-application .grid-cols-lg-5 {
            grid-template-columns:repeat(5, minmax(0, 1fr))
        }

        .v-application .grid-cols-lg-6 {
            grid-template-columns:repeat(6, minmax(0, 1fr))
        }

        .v-application .grid-cols-lg-7 {
            grid-template-columns:repeat(7, minmax(0, 1fr))
        }

        .v-application .grid-cols-lg-8 {
            grid-template-columns:repeat(8, minmax(0, 1fr))
        }

        .v-application .grid-cols-lg-9 {
            grid-template-columns:repeat(9, minmax(0, 1fr))
        }

        .v-application .grid-cols-lg-10 {
            grid-template-columns:repeat(10, minmax(0, 1fr))
        }

        .v-application .grid-cols-lg-11 {
            grid-template-columns:repeat(11, minmax(0, 1fr))
        }

        .v-application .grid-cols-lg-12 {
            grid-template-columns:repeat(12, minmax(0, 1fr))
        }

        .v-application .col-span-lg-1 {
            grid-column: span 1/span 1
        }

        .v-application .col-span-lg-2 {
            grid-column: span 2/span 2
        }

        .v-application .col-span-lg-3 {
            grid-column: span 3/span 3
        }

        .v-application .col-span-lg-4 {
            grid-column: span 4/span 4
        }

        .v-application .col-span-lg-5 {
            grid-column: span 5/span 5
        }

        .v-application .col-span-lg-6 {
            grid-column: span 6/span 6
        }

        .v-application .col-span-lg-7 {
            grid-column: span 7/span 7
        }

        .v-application .col-span-lg-8 {
            grid-column: span 8/span 8
        }

        .v-application .col-span-lg-9 {
            grid-column: span 9/span 9
        }

        .v-application .col-span-lg-10 {
            grid-column: span 10/span 10
        }

        .v-application .col-span-lg-11 {
            grid-column: span 11/span 11
        }

        .v-application .col-span-lg-12 {
            grid-column: span 12/span 12
        }

        .v-application .col-start-lg-1 {
            grid-column-start: 1
        }

        .v-application .col-start-lg-2 {
            grid-column-start: 2
        }

        .v-application .col-start-lg-3 {
            grid-column-start: 3
        }

        .v-application .col-start-lg-4 {
            grid-column-start: 4
        }

        .v-application .col-start-lg-5 {
            grid-column-start: 5
        }

        .v-application .col-start-lg-6 {
            grid-column-start: 6
        }

        .v-application .col-start-lg-7 {
            grid-column-start: 7
        }

        .v-application .col-start-lg-8 {
            grid-column-start: 8
        }

        .v-application .col-start-lg-9 {
            grid-column-start: 9
        }

        .v-application .col-start-lg-10 {
            grid-column-start: 10
        }

        .v-application .col-start-lg-11 {
            grid-column-start: 11
        }

        .v-application .col-start-lg-12 {
            grid-column-start: 12
        }

        .v-application .col-start-lg-13 {
            grid-column-start: 13
        }

        .v-application .col-end-lg-1 {
            grid-column-end: 1
        }

        .v-application .col-end-lg-2 {
            grid-column-end: 2
        }

        .v-application .col-end-lg-3 {
            grid-column-end: 3
        }

        .v-application .col-end-lg-4 {
            grid-column-end: 4
        }

        .v-application .col-end-lg-5 {
            grid-column-end: 5
        }

        .v-application .col-end-lg-6 {
            grid-column-end: 6
        }

        .v-application .col-end-lg-7 {
            grid-column-end: 7
        }

        .v-application .col-end-lg-8 {
            grid-column-end: 8
        }

        .v-application .col-end-lg-9 {
            grid-column-end: 9
        }

        .v-application .col-end-lg-10 {
            grid-column-end: 10
        }

        .v-application .col-end-lg-11 {
            grid-column-end: 11
        }

        .v-application .col-end-lg-12 {
            grid-column-end: 12
        }

        .v-application .col-end-lg-13 {
            grid-column-end: 13
        }

        .v-application .grid-rows-lg-1 {
            grid-template-rows:repeat(1, minmax(0, 1fr))
        }

        .v-application .grid-rows-lg-2 {
            grid-template-rows:repeat(2, minmax(0, 1fr))
        }

        .v-application .grid-rows-lg-3 {
            grid-template-rows:repeat(3, minmax(0, 1fr))
        }

        .v-application .grid-rows-lg-4 {
            grid-template-rows:repeat(4, minmax(0, 1fr))
        }

        .v-application .grid-rows-lg-5 {
            grid-template-rows:repeat(5, minmax(0, 1fr))
        }

        .v-application .grid-rows-lg-6 {
            grid-template-rows:repeat(6, minmax(0, 1fr))
        }

        .v-application .row-span-lg-1 {
            grid-row: span 1/span 1
        }

        .v-application .row-span-lg-2 {
            grid-row: span 2/span 2
        }

        .v-application .row-span-lg-3 {
            grid-row: span 3/span 3
        }

        .v-application .row-span-lg-4 {
            grid-row: span 4/span 4
        }

        .v-application .row-span-lg-5 {
            grid-row: span 5/span 5
        }

        .v-application .row-span-lg-6 {
            grid-row: span 6/span 6
        }

        .v-application .row-start-lg-1 {
            grid-row-start: 1
        }

        .v-application .row-start-lg-2 {
            grid-row-start: 2
        }

        .v-application .row-start-lg-3 {
            grid-row-start: 3
        }

        .v-application .row-start-lg-4 {
            grid-row-start: 4
        }

        .v-application .row-start-lg-5 {
            grid-row-start: 5
        }

        .v-application .row-start-lg-6 {
            grid-row-start: 6
        }

        .v-application .row-start-lg-7 {
            grid-row-start: 7
        }

        .v-application .row-end-lg-1 {
            grid-row-end: 1
        }

        .v-application .row-end-lg-2 {
            grid-row-end: 2
        }

        .v-application .row-end-lg-3 {
            grid-row-end: 3
        }

        .v-application .row-end-lg-4 {
            grid-row-end: 4
        }

        .v-application .row-end-lg-5 {
            grid-row-end: 5
        }

        .v-application .row-end-lg-6 {
            grid-row-end: 6
        }

        .v-application .row-end-lg-7 {
            grid-row-end: 7
        }

        .v-application .gap-lg-1 {
            gap: .25rem
        }

        .v-application .gap-lg-2 {
            gap: .5rem
        }

        .v-application .gap-lg-3 {
            gap: .75rem
        }

        .v-application .gap-lg-4 {
            gap: 1rem
        }

        .v-application .gap-lg-5 {
            gap: 1.25rem
        }

        .v-application .gap-lg-6 {
            gap: 1.5rem
        }

        .v-application .gap-lg-7 {
            gap: 1.75rem
        }

        .v-application .gap-lg-8 {
            gap: 2rem
        }

        .v-application .gap-lg-9 {
            gap: 2.25rem
        }

        .v-application .gap-lg-10 {
            gap: 2.5rem
        }

        .v-application .gap-lg-12 {
            gap: 3rem
        }

        .v-application .gap-lg-14 {
            gap: 3.5rem
        }

        .v-application .gap-lg-16 {
            gap: 4rem
        }

        .v-application .gap-lg-18 {
            gap: 4.5rem
        }

        .v-application .gap-lg-20 {
            gap: 5rem
        }

        .v-application .gap-lg-24 {
            gap: 6rem
        }

        .v-application .gap-lg-28 {
            gap: 7rem
        }

        .v-application .gap-lg-32 {
            gap: 8rem
        }

        .v-application .gap-lg-36 {
            gap: 9rem
        }

        .v-application .gap-lg-40 {
            gap: 10rem
        }

        .v-application .gap-lg-44 {
            gap: 11rem
        }

        .v-application .gap-lg-48 {
            gap: 12rem
        }

        .v-application .gap-lg-52 {
            gap: 13rem
        }

        .v-application .gap-lg-56 {
            gap: 14rem
        }

        .v-application .gap-lg-60 {
            gap: 15rem
        }

        .v-application .gap-lg-64 {
            gap: 16rem
        }

        .v-application .gap-lg-72 {
            gap: 18rem
        }

        .v-application .gap-lg-80 {
            gap: 20rem
        }

        .v-application .gap-lg-96 {
            gap: 24rem
        }

        .v-application .gap-x-lg-1 {
            -moz-column-gap: .25rem;
            column-gap: .25rem
        }

        .v-application .gap-x-lg-2 {
            -moz-column-gap: .5rem;
            column-gap: .5rem
        }

        .v-application .gap-x-lg-3 {
            -moz-column-gap: .75rem;
            column-gap: .75rem
        }

        .v-application .gap-x-lg-4 {
            -moz-column-gap: 1rem;
            column-gap: 1rem
        }

        .v-application .gap-x-lg-5 {
            -moz-column-gap: 1.25rem;
            column-gap: 1.25rem
        }

        .v-application .gap-x-lg-6 {
            -moz-column-gap: 1.5rem;
            column-gap: 1.5rem
        }

        .v-application .gap-x-lg-7 {
            -moz-column-gap: 1.75rem;
            column-gap: 1.75rem
        }

        .v-application .gap-x-lg-8 {
            -moz-column-gap: 2rem;
            column-gap: 2rem
        }

        .v-application .gap-x-lg-9 {
            -moz-column-gap: 2.25rem;
            column-gap: 2.25rem
        }

        .v-application .gap-x-lg-10 {
            -moz-column-gap: 2.5rem;
            column-gap: 2.5rem
        }

        .v-application .gap-x-lg-12 {
            -moz-column-gap: 3rem;
            column-gap: 3rem
        }

        .v-application .gap-x-lg-14 {
            -moz-column-gap: 3.5rem;
            column-gap: 3.5rem
        }

        .v-application .gap-x-lg-16 {
            -moz-column-gap: 4rem;
            column-gap: 4rem
        }

        .v-application .gap-x-lg-18 {
            -moz-column-gap: 4.5rem;
            column-gap: 4.5rem
        }

        .v-application .gap-x-lg-20 {
            -moz-column-gap: 5rem;
            column-gap: 5rem
        }

        .v-application .gap-x-lg-24 {
            -moz-column-gap: 6rem;
            column-gap: 6rem
        }

        .v-application .gap-x-lg-28 {
            -moz-column-gap: 7rem;
            column-gap: 7rem
        }

        .v-application .gap-x-lg-32 {
            -moz-column-gap: 8rem;
            column-gap: 8rem
        }

        .v-application .gap-x-lg-36 {
            -moz-column-gap: 9rem;
            column-gap: 9rem
        }

        .v-application .gap-x-lg-40 {
            -moz-column-gap: 10rem;
            column-gap: 10rem
        }

        .v-application .gap-x-lg-44 {
            -moz-column-gap: 11rem;
            column-gap: 11rem
        }

        .v-application .gap-x-lg-48 {
            -moz-column-gap: 12rem;
            column-gap: 12rem
        }

        .v-application .gap-x-lg-52 {
            -moz-column-gap: 13rem;
            column-gap: 13rem
        }

        .v-application .gap-x-lg-56 {
            -moz-column-gap: 14rem;
            column-gap: 14rem
        }

        .v-application .gap-x-lg-60 {
            -moz-column-gap: 15rem;
            column-gap: 15rem
        }

        .v-application .gap-x-lg-64 {
            -moz-column-gap: 16rem;
            column-gap: 16rem
        }

        .v-application .gap-x-lg-72 {
            -moz-column-gap: 18rem;
            column-gap: 18rem
        }

        .v-application .gap-x-lg-80 {
            -moz-column-gap: 20rem;
            column-gap: 20rem
        }

        .v-application .gap-x-lg-96 {
            -moz-column-gap: 24rem;
            column-gap: 24rem
        }

        .v-application .gap-y-lg-1 {
            row-gap: .25rem
        }

        .v-application .gap-y-lg-2 {
            row-gap: .5rem
        }

        .v-application .gap-y-lg-3 {
            row-gap: .75rem
        }

        .v-application .gap-y-lg-4 {
            row-gap: 1rem
        }

        .v-application .gap-y-lg-5 {
            row-gap: 1.25rem
        }

        .v-application .gap-y-lg-6 {
            row-gap: 1.5rem
        }

        .v-application .gap-y-lg-7 {
            row-gap: 1.75rem
        }

        .v-application .gap-y-lg-8 {
            row-gap: 2rem
        }

        .v-application .gap-y-lg-9 {
            row-gap: 2.25rem
        }

        .v-application .gap-y-lg-10 {
            row-gap: 2.5rem
        }

        .v-application .gap-y-lg-12 {
            row-gap: 3rem
        }

        .v-application .gap-y-lg-14 {
            row-gap: 3.5rem
        }

        .v-application .gap-y-lg-16 {
            row-gap: 4rem
        }

        .v-application .gap-y-lg-18 {
            row-gap: 4.5rem
        }

        .v-application .gap-y-lg-20 {
            row-gap: 5rem
        }

        .v-application .gap-y-lg-24 {
            row-gap: 6rem
        }

        .v-application .gap-y-lg-28 {
            row-gap: 7rem
        }

        .v-application .gap-y-lg-32 {
            row-gap: 8rem
        }

        .v-application .gap-y-lg-36 {
            row-gap: 9rem
        }

        .v-application .gap-y-lg-40 {
            row-gap: 10rem
        }

        .v-application .gap-y-lg-44 {
            row-gap: 11rem
        }

        .v-application .gap-y-lg-48 {
            row-gap: 12rem
        }

        .v-application .gap-y-lg-52 {
            row-gap: 13rem
        }

        .v-application .gap-y-lg-56 {
            row-gap: 14rem
        }

        .v-application .gap-y-lg-60 {
            row-gap: 15rem
        }

        .v-application .gap-y-lg-64 {
            row-gap: 16rem
        }

        .v-application .gap-y-lg-72 {
            row-gap: 18rem
        }

        .v-application .gap-y-lg-80 {
            row-gap: 20rem
        }

        .v-application .gap-y-lg-96 {
            row-gap: 24rem
        }
    }

    @media (min-width: 1904px) {
        .v-application .d-xl-grid {
            display: grid !important
        }

        .v-application .d-xl-inline-grid {
            display: inline-grid !important
        }

        .v-application .grid-cols-xl-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        .v-application .grid-cols-xl-2 {
            grid-template-columns:repeat(2, minmax(0, 1fr))
        }

        .v-application .grid-cols-xl-3 {
            grid-template-columns:repeat(3, minmax(0, 1fr))
        }

        .v-application .grid-cols-xl-4 {
            grid-template-columns:repeat(4, minmax(0, 1fr))
        }

        .v-application .grid-cols-xl-5 {
            grid-template-columns:repeat(5, minmax(0, 1fr))
        }

        .v-application .grid-cols-xl-6 {
            grid-template-columns:repeat(6, minmax(0, 1fr))
        }

        .v-application .grid-cols-xl-7 {
            grid-template-columns:repeat(7, minmax(0, 1fr))
        }

        .v-application .grid-cols-xl-8 {
            grid-template-columns:repeat(8, minmax(0, 1fr))
        }

        .v-application .grid-cols-xl-9 {
            grid-template-columns:repeat(9, minmax(0, 1fr))
        }

        .v-application .grid-cols-xl-10 {
            grid-template-columns:repeat(10, minmax(0, 1fr))
        }

        .v-application .grid-cols-xl-11 {
            grid-template-columns:repeat(11, minmax(0, 1fr))
        }

        .v-application .grid-cols-xl-12 {
            grid-template-columns:repeat(12, minmax(0, 1fr))
        }

        .v-application .col-span-xl-1 {
            grid-column: span 1/span 1
        }

        .v-application .col-span-xl-2 {
            grid-column: span 2/span 2
        }

        .v-application .col-span-xl-3 {
            grid-column: span 3/span 3
        }

        .v-application .col-span-xl-4 {
            grid-column: span 4/span 4
        }

        .v-application .col-span-xl-5 {
            grid-column: span 5/span 5
        }

        .v-application .col-span-xl-6 {
            grid-column: span 6/span 6
        }

        .v-application .col-span-xl-7 {
            grid-column: span 7/span 7
        }

        .v-application .col-span-xl-8 {
            grid-column: span 8/span 8
        }

        .v-application .col-span-xl-9 {
            grid-column: span 9/span 9
        }

        .v-application .col-span-xl-10 {
            grid-column: span 10/span 10
        }

        .v-application .col-span-xl-11 {
            grid-column: span 11/span 11
        }

        .v-application .col-span-xl-12 {
            grid-column: span 12/span 12
        }

        .v-application .col-start-xl-1 {
            grid-column-start: 1
        }

        .v-application .col-start-xl-2 {
            grid-column-start: 2
        }

        .v-application .col-start-xl-3 {
            grid-column-start: 3
        }

        .v-application .col-start-xl-4 {
            grid-column-start: 4
        }

        .v-application .col-start-xl-5 {
            grid-column-start: 5
        }

        .v-application .col-start-xl-6 {
            grid-column-start: 6
        }

        .v-application .col-start-xl-7 {
            grid-column-start: 7
        }

        .v-application .col-start-xl-8 {
            grid-column-start: 8
        }

        .v-application .col-start-xl-9 {
            grid-column-start: 9
        }

        .v-application .col-start-xl-10 {
            grid-column-start: 10
        }

        .v-application .col-start-xl-11 {
            grid-column-start: 11
        }

        .v-application .col-start-xl-12 {
            grid-column-start: 12
        }

        .v-application .col-start-xl-13 {
            grid-column-start: 13
        }

        .v-application .col-end-xl-1 {
            grid-column-end: 1
        }

        .v-application .col-end-xl-2 {
            grid-column-end: 2
        }

        .v-application .col-end-xl-3 {
            grid-column-end: 3
        }

        .v-application .col-end-xl-4 {
            grid-column-end: 4
        }

        .v-application .col-end-xl-5 {
            grid-column-end: 5
        }

        .v-application .col-end-xl-6 {
            grid-column-end: 6
        }

        .v-application .col-end-xl-7 {
            grid-column-end: 7
        }

        .v-application .col-end-xl-8 {
            grid-column-end: 8
        }

        .v-application .col-end-xl-9 {
            grid-column-end: 9
        }

        .v-application .col-end-xl-10 {
            grid-column-end: 10
        }

        .v-application .col-end-xl-11 {
            grid-column-end: 11
        }

        .v-application .col-end-xl-12 {
            grid-column-end: 12
        }

        .v-application .col-end-xl-13 {
            grid-column-end: 13
        }

        .v-application .grid-rows-xl-1 {
            grid-template-rows:repeat(1, minmax(0, 1fr))
        }

        .v-application .grid-rows-xl-2 {
            grid-template-rows:repeat(2, minmax(0, 1fr))
        }

        .v-application .grid-rows-xl-3 {
            grid-template-rows:repeat(3, minmax(0, 1fr))
        }

        .v-application .grid-rows-xl-4 {
            grid-template-rows:repeat(4, minmax(0, 1fr))
        }

        .v-application .grid-rows-xl-5 {
            grid-template-rows:repeat(5, minmax(0, 1fr))
        }

        .v-application .grid-rows-xl-6 {
            grid-template-rows:repeat(6, minmax(0, 1fr))
        }

        .v-application .row-span-xl-1 {
            grid-row: span 1/span 1
        }

        .v-application .row-span-xl-2 {
            grid-row: span 2/span 2
        }

        .v-application .row-span-xl-3 {
            grid-row: span 3/span 3
        }

        .v-application .row-span-xl-4 {
            grid-row: span 4/span 4
        }

        .v-application .row-span-xl-5 {
            grid-row: span 5/span 5
        }

        .v-application .row-span-xl-6 {
            grid-row: span 6/span 6
        }

        .v-application .row-start-xl-1 {
            grid-row-start: 1
        }

        .v-application .row-start-xl-2 {
            grid-row-start: 2
        }

        .v-application .row-start-xl-3 {
            grid-row-start: 3
        }

        .v-application .row-start-xl-4 {
            grid-row-start: 4
        }

        .v-application .row-start-xl-5 {
            grid-row-start: 5
        }

        .v-application .row-start-xl-6 {
            grid-row-start: 6
        }

        .v-application .row-start-xl-7 {
            grid-row-start: 7
        }

        .v-application .row-end-xl-1 {
            grid-row-end: 1
        }

        .v-application .row-end-xl-2 {
            grid-row-end: 2
        }

        .v-application .row-end-xl-3 {
            grid-row-end: 3
        }

        .v-application .row-end-xl-4 {
            grid-row-end: 4
        }

        .v-application .row-end-xl-5 {
            grid-row-end: 5
        }

        .v-application .row-end-xl-6 {
            grid-row-end: 6
        }

        .v-application .row-end-xl-7 {
            grid-row-end: 7
        }

        .v-application .gap-xl-1 {
            gap: .25rem
        }

        .v-application .gap-xl-2 {
            gap: .5rem
        }

        .v-application .gap-xl-3 {
            gap: .75rem
        }

        .v-application .gap-xl-4 {
            gap: 1rem
        }

        .v-application .gap-xl-5 {
            gap: 1.25rem
        }

        .v-application .gap-xl-6 {
            gap: 1.5rem
        }

        .v-application .gap-xl-7 {
            gap: 1.75rem
        }

        .v-application .gap-xl-8 {
            gap: 2rem
        }

        .v-application .gap-xl-9 {
            gap: 2.25rem
        }

        .v-application .gap-xl-10 {
            gap: 2.5rem
        }

        .v-application .gap-xl-12 {
            gap: 3rem
        }

        .v-application .gap-xl-14 {
            gap: 3.5rem
        }

        .v-application .gap-xl-16 {
            gap: 4rem
        }

        .v-application .gap-xl-18 {
            gap: 4.5rem
        }

        .v-application .gap-xl-20 {
            gap: 5rem
        }

        .v-application .gap-xl-24 {
            gap: 6rem
        }

        .v-application .gap-xl-28 {
            gap: 7rem
        }

        .v-application .gap-xl-32 {
            gap: 8rem
        }

        .v-application .gap-xl-36 {
            gap: 9rem
        }

        .v-application .gap-xl-40 {
            gap: 10rem
        }

        .v-application .gap-xl-44 {
            gap: 11rem
        }

        .v-application .gap-xl-48 {
            gap: 12rem
        }

        .v-application .gap-xl-52 {
            gap: 13rem
        }

        .v-application .gap-xl-56 {
            gap: 14rem
        }

        .v-application .gap-xl-60 {
            gap: 15rem
        }

        .v-application .gap-xl-64 {
            gap: 16rem
        }

        .v-application .gap-xl-72 {
            gap: 18rem
        }

        .v-application .gap-xl-80 {
            gap: 20rem
        }

        .v-application .gap-xl-96 {
            gap: 24rem
        }

        .v-application .gap-x-xl-1 {
            -moz-column-gap: .25rem;
            column-gap: .25rem
        }

        .v-application .gap-x-xl-2 {
            -moz-column-gap: .5rem;
            column-gap: .5rem
        }

        .v-application .gap-x-xl-3 {
            -moz-column-gap: .75rem;
            column-gap: .75rem
        }

        .v-application .gap-x-xl-4 {
            -moz-column-gap: 1rem;
            column-gap: 1rem
        }

        .v-application .gap-x-xl-5 {
            -moz-column-gap: 1.25rem;
            column-gap: 1.25rem
        }

        .v-application .gap-x-xl-6 {
            -moz-column-gap: 1.5rem;
            column-gap: 1.5rem
        }

        .v-application .gap-x-xl-7 {
            -moz-column-gap: 1.75rem;
            column-gap: 1.75rem
        }

        .v-application .gap-x-xl-8 {
            -moz-column-gap: 2rem;
            column-gap: 2rem
        }

        .v-application .gap-x-xl-9 {
            -moz-column-gap: 2.25rem;
            column-gap: 2.25rem
        }

        .v-application .gap-x-xl-10 {
            -moz-column-gap: 2.5rem;
            column-gap: 2.5rem
        }

        .v-application .gap-x-xl-12 {
            -moz-column-gap: 3rem;
            column-gap: 3rem
        }

        .v-application .gap-x-xl-14 {
            -moz-column-gap: 3.5rem;
            column-gap: 3.5rem
        }

        .v-application .gap-x-xl-16 {
            -moz-column-gap: 4rem;
            column-gap: 4rem
        }

        .v-application .gap-x-xl-18 {
            -moz-column-gap: 4.5rem;
            column-gap: 4.5rem
        }

        .v-application .gap-x-xl-20 {
            -moz-column-gap: 5rem;
            column-gap: 5rem
        }

        .v-application .gap-x-xl-24 {
            -moz-column-gap: 6rem;
            column-gap: 6rem
        }

        .v-application .gap-x-xl-28 {
            -moz-column-gap: 7rem;
            column-gap: 7rem
        }

        .v-application .gap-x-xl-32 {
            -moz-column-gap: 8rem;
            column-gap: 8rem
        }

        .v-application .gap-x-xl-36 {
            -moz-column-gap: 9rem;
            column-gap: 9rem
        }

        .v-application .gap-x-xl-40 {
            -moz-column-gap: 10rem;
            column-gap: 10rem
        }

        .v-application .gap-x-xl-44 {
            -moz-column-gap: 11rem;
            column-gap: 11rem
        }

        .v-application .gap-x-xl-48 {
            -moz-column-gap: 12rem;
            column-gap: 12rem
        }

        .v-application .gap-x-xl-52 {
            -moz-column-gap: 13rem;
            column-gap: 13rem
        }

        .v-application .gap-x-xl-56 {
            -moz-column-gap: 14rem;
            column-gap: 14rem
        }

        .v-application .gap-x-xl-60 {
            -moz-column-gap: 15rem;
            column-gap: 15rem
        }

        .v-application .gap-x-xl-64 {
            -moz-column-gap: 16rem;
            column-gap: 16rem
        }

        .v-application .gap-x-xl-72 {
            -moz-column-gap: 18rem;
            column-gap: 18rem
        }

        .v-application .gap-x-xl-80 {
            -moz-column-gap: 20rem;
            column-gap: 20rem
        }

        .v-application .gap-x-xl-96 {
            -moz-column-gap: 24rem;
            column-gap: 24rem
        }

        .v-application .gap-y-xl-1 {
            row-gap: .25rem
        }

        .v-application .gap-y-xl-2 {
            row-gap: .5rem
        }

        .v-application .gap-y-xl-3 {
            row-gap: .75rem
        }

        .v-application .gap-y-xl-4 {
            row-gap: 1rem
        }

        .v-application .gap-y-xl-5 {
            row-gap: 1.25rem
        }

        .v-application .gap-y-xl-6 {
            row-gap: 1.5rem
        }

        .v-application .gap-y-xl-7 {
            row-gap: 1.75rem
        }

        .v-application .gap-y-xl-8 {
            row-gap: 2rem
        }

        .v-application .gap-y-xl-9 {
            row-gap: 2.25rem
        }

        .v-application .gap-y-xl-10 {
            row-gap: 2.5rem
        }

        .v-application .gap-y-xl-12 {
            row-gap: 3rem
        }

        .v-application .gap-y-xl-14 {
            row-gap: 3.5rem
        }

        .v-application .gap-y-xl-16 {
            row-gap: 4rem
        }

        .v-application .gap-y-xl-18 {
            row-gap: 4.5rem
        }

        .v-application .gap-y-xl-20 {
            row-gap: 5rem
        }

        .v-application .gap-y-xl-24 {
            row-gap: 6rem
        }

        .v-application .gap-y-xl-28 {
            row-gap: 7rem
        }

        .v-application .gap-y-xl-32 {
            row-gap: 8rem
        }

        .v-application .gap-y-xl-36 {
            row-gap: 9rem
        }

        .v-application .gap-y-xl-40 {
            row-gap: 10rem
        }

        .v-application .gap-y-xl-44 {
            row-gap: 11rem
        }

        .v-application .gap-y-xl-48 {
            row-gap: 12rem
        }

        .v-application .gap-y-xl-52 {
            row-gap: 13rem
        }

        .v-application .gap-y-xl-56 {
            row-gap: 14rem
        }

        .v-application .gap-y-xl-60 {
            row-gap: 15rem
        }

        .v-application .gap-y-xl-64 {
            row-gap: 16rem
        }

        .v-application .gap-y-xl-72 {
            row-gap: 18rem
        }

        .v-application .gap-y-xl-80 {
            row-gap: 20rem
        }

        .v-application .gap-y-xl-96 {
            row-gap: 24rem
        }
    }

    @font-face {
        font-display: "auto";
        font-family: "element-icons";
        font-style: normal;
        font-weight: 400;
        src: url(/_nuxt/fonts/element-icons.535877f.woff) format("woff"), url(/_nuxt/fonts/element-icons.732389d.ttf) format("truetype")
    }

    [class*=" el-icon-"], [class^=el-icon-] {
        font-family: "element-icons" !important;
        speak: none;
        display: inline-block;
        font-feature-settings: normal;
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        line-height: 1;
        text-transform: none;
        vertical-align: baseline;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .el-icon-ice-cream-round:before {
        content: ""
    }

    .el-icon-ice-cream-square:before {
        content: ""
    }

    .el-icon-lollipop:before {
        content: ""
    }

    .el-icon-potato-strips:before {
        content: ""
    }

    .el-icon-milk-tea:before {
        content: ""
    }

    .el-icon-ice-drink:before {
        content: ""
    }

    .el-icon-ice-tea:before {
        content: ""
    }

    .el-icon-coffee:before {
        content: ""
    }

    .el-icon-orange:before {
        content: ""
    }

    .el-icon-pear:before {
        content: ""
    }

    .el-icon-apple:before {
        content: ""
    }

    .el-icon-cherry:before {
        content: ""
    }

    .el-icon-watermelon:before {
        content: ""
    }

    .el-icon-grape:before {
        content: ""
    }

    .el-icon-refrigerator:before {
        content: ""
    }

    .el-icon-goblet-square-full:before {
        content: ""
    }

    .el-icon-goblet-square:before {
        content: ""
    }

    .el-icon-goblet-full:before {
        content: ""
    }

    .el-icon-goblet:before {
        content: ""
    }

    .el-icon-cold-drink:before {
        content: ""
    }

    .el-icon-coffee-cup:before {
        content: ""
    }

    .el-icon-water-cup:before {
        content: ""
    }

    .el-icon-hot-water:before {
        content: ""
    }

    .el-icon-ice-cream:before {
        content: ""
    }

    .el-icon-dessert:before {
        content: ""
    }

    .el-icon-sugar:before {
        content: ""
    }

    .el-icon-tableware:before {
        content: ""
    }

    .el-icon-burger:before {
        content: ""
    }

    .el-icon-knife-fork:before {
        content: ""
    }

    .el-icon-fork-spoon:before {
        content: ""
    }

    .el-icon-chicken:before {
        content: ""
    }

    .el-icon-food:before {
        content: ""
    }

    .el-icon-dish-1:before {
        content: ""
    }

    .el-icon-dish:before {
        content: ""
    }

    .el-icon-moon-night:before {
        content: ""
    }

    .el-icon-moon:before {
        content: ""
    }

    .el-icon-cloudy-and-sunny:before {
        content: ""
    }

    .el-icon-partly-cloudy:before {
        content: ""
    }

    .el-icon-cloudy:before {
        content: ""
    }

    .el-icon-sunny:before {
        content: ""
    }

    .el-icon-sunset:before {
        content: ""
    }

    .el-icon-sunrise-1:before {
        content: ""
    }

    .el-icon-sunrise:before {
        content: ""
    }

    .el-icon-heavy-rain:before {
        content: ""
    }

    .el-icon-lightning:before {
        content: ""
    }

    .el-icon-light-rain:before {
        content: ""
    }

    .el-icon-wind-power:before {
        content: ""
    }

    .el-icon-baseball:before {
        content: ""
    }

    .el-icon-soccer:before {
        content: ""
    }

    .el-icon-football:before {
        content: ""
    }

    .el-icon-basketball:before {
        content: ""
    }

    .el-icon-ship:before {
        content: ""
    }

    .el-icon-truck:before {
        content: ""
    }

    .el-icon-bicycle:before {
        content: ""
    }

    .el-icon-mobile-phone:before {
        content: ""
    }

    .el-icon-service:before {
        content: ""
    }

    .el-icon-key:before {
        content: ""
    }

    .el-icon-unlock:before {
        content: ""
    }

    .el-icon-lock:before {
        content: ""
    }

    .el-icon-watch:before {
        content: ""
    }

    .el-icon-watch-1:before {
        content: ""
    }

    .el-icon-timer:before {
        content: ""
    }

    .el-icon-alarm-clock:before {
        content: ""
    }

    .el-icon-map-location:before {
        content: ""
    }

    .el-icon-delete-location:before {
        content: ""
    }

    .el-icon-add-location:before {
        content: ""
    }

    .el-icon-location-information:before {
        content: ""
    }

    .el-icon-location-outline:before {
        content: ""
    }

    .el-icon-location:before {
        content: ""
    }

    .el-icon-place:before {
        content: ""
    }

    .el-icon-discover:before {
        content: ""
    }

    .el-icon-first-aid-kit:before {
        content: ""
    }

    .el-icon-trophy-1:before {
        content: ""
    }

    .el-icon-trophy:before {
        content: ""
    }

    .el-icon-medal:before {
        content: ""
    }

    .el-icon-medal-1:before {
        content: ""
    }

    .el-icon-stopwatch:before {
        content: ""
    }

    .el-icon-mic:before {
        content: ""
    }

    .el-icon-copy-document:before {
        content: ""
    }

    .el-icon-full-screen:before {
        content: ""
    }

    .el-icon-switch-button:before {
        content: ""
    }

    .el-icon-aim:before {
        content: ""
    }

    .el-icon-crop:before {
        content: ""
    }

    .el-icon-odometer:before {
        content: ""
    }

    .el-icon-time:before {
        content: ""
    }

    .el-icon-bangzhu:before {
        content: ""
    }

    .el-icon-close-notification:before {
        content: ""
    }

    .el-icon-microphone:before {
        content: ""
    }

    .el-icon-turn-off-microphone:before {
        content: ""
    }

    .el-icon-position:before {
        content: ""
    }

    .el-icon-postcard:before {
        content: ""
    }

    .el-icon-message:before {
        content: ""
    }

    .el-icon-chat-line-square:before {
        content: ""
    }

    .el-icon-chat-dot-square:before {
        content: ""
    }

    .el-icon-chat-dot-round:before {
        content: ""
    }

    .el-icon-chat-square:before {
        content: ""
    }

    .el-icon-chat-line-round:before {
        content: ""
    }

    .el-icon-chat-round:before {
        content: ""
    }

    .el-icon-set-up:before {
        content: ""
    }

    .el-icon-turn-off:before {
        content: ""
    }

    .el-icon-open:before {
        content: ""
    }

    .el-icon-connection:before {
        content: ""
    }

    .el-icon-link:before {
        content: ""
    }

    .el-icon-cpu:before {
        content: ""
    }

    .el-icon-thumb:before {
        content: ""
    }

    .el-icon-female:before {
        content: ""
    }

    .el-icon-male:before {
        content: ""
    }

    .el-icon-guide:before {
        content: ""
    }

    .el-icon-news:before {
        content: ""
    }

    .el-icon-price-tag:before {
        content: ""
    }

    .el-icon-discount:before {
        content: ""
    }

    .el-icon-wallet:before {
        content: ""
    }

    .el-icon-coin:before {
        content: ""
    }

    .el-icon-money:before {
        content: ""
    }

    .el-icon-bank-card:before {
        content: ""
    }

    .el-icon-box:before {
        content: ""
    }

    .el-icon-present:before {
        content: ""
    }

    .el-icon-sell:before {
        content: ""
    }

    .el-icon-sold-out:before {
        content: ""
    }

    .el-icon-shopping-bag-2:before {
        content: ""
    }

    .el-icon-shopping-bag-1:before {
        content: ""
    }

    .el-icon-shopping-cart-2:before {
        content: ""
    }

    .el-icon-shopping-cart-1:before {
        content: ""
    }

    .el-icon-shopping-cart-full:before {
        content: ""
    }

    .el-icon-smoking:before {
        content: ""
    }

    .el-icon-no-smoking:before {
        content: ""
    }

    .el-icon-house:before {
        content: ""
    }

    .el-icon-table-lamp:before {
        content: ""
    }

    .el-icon-school:before {
        content: ""
    }

    .el-icon-office-building:before {
        content: ""
    }

    .el-icon-toilet-paper:before {
        content: ""
    }

    .el-icon-notebook-2:before {
        content: ""
    }

    .el-icon-notebook-1:before {
        content: ""
    }

    .el-icon-files:before {
        content: ""
    }

    .el-icon-collection:before {
        content: ""
    }

    .el-icon-receiving:before {
        content: ""
    }

    .el-icon-suitcase-1:before {
        content: ""
    }

    .el-icon-suitcase:before {
        content: ""
    }

    .el-icon-film:before {
        content: ""
    }

    .el-icon-collection-tag:before {
        content: ""
    }

    .el-icon-data-analysis:before {
        content: ""
    }

    .el-icon-pie-chart:before {
        content: ""
    }

    .el-icon-data-board:before {
        content: ""
    }

    .el-icon-data-line:before {
        content: ""
    }

    .el-icon-reading:before {
        content: ""
    }

    .el-icon-magic-stick:before {
        content: ""
    }

    .el-icon-coordinate:before {
        content: ""
    }

    .el-icon-mouse:before {
        content: ""
    }

    .el-icon-brush:before {
        content: ""
    }

    .el-icon-headset:before {
        content: ""
    }

    .el-icon-umbrella:before {
        content: ""
    }

    .el-icon-scissors:before {
        content: ""
    }

    .el-icon-mobile:before {
        content: ""
    }

    .el-icon-attract:before {
        content: ""
    }

    .el-icon-monitor:before {
        content: ""
    }

    .el-icon-search:before {
        content: ""
    }

    .el-icon-takeaway-box:before {
        content: ""
    }

    .el-icon-paperclip:before {
        content: ""
    }

    .el-icon-printer:before {
        content: ""
    }

    .el-icon-document-add:before {
        content: ""
    }

    .el-icon-document:before {
        content: ""
    }

    .el-icon-document-checked:before {
        content: ""
    }

    .el-icon-document-copy:before {
        content: ""
    }

    .el-icon-document-delete:before {
        content: ""
    }

    .el-icon-document-remove:before {
        content: ""
    }

    .el-icon-tickets:before {
        content: ""
    }

    .el-icon-folder-checked:before {
        content: ""
    }

    .el-icon-folder-delete:before {
        content: ""
    }

    .el-icon-folder-remove:before {
        content: ""
    }

    .el-icon-folder-add:before {
        content: ""
    }

    .el-icon-folder-opened:before {
        content: ""
    }

    .el-icon-folder:before {
        content: ""
    }

    .el-icon-edit-outline:before {
        content: ""
    }

    .el-icon-edit:before {
        content: ""
    }

    .el-icon-date:before {
        content: ""
    }

    .el-icon-c-scale-to-original:before {
        content: ""
    }

    .el-icon-view:before {
        content: ""
    }

    .el-icon-loading:before {
        content: ""
    }

    .el-icon-rank:before {
        content: ""
    }

    .el-icon-sort-down:before {
        content: ""
    }

    .el-icon-sort-up:before {
        content: ""
    }

    .el-icon-sort:before {
        content: ""
    }

    .el-icon-finished:before {
        content: ""
    }

    .el-icon-refresh-left:before {
        content: ""
    }

    .el-icon-refresh-right:before {
        content: ""
    }

    .el-icon-refresh:before {
        content: ""
    }

    .el-icon-video-play:before {
        content: ""
    }

    .el-icon-video-pause:before {
        content: ""
    }

    .el-icon-d-arrow-right:before {
        content: ""
    }

    .el-icon-d-arrow-left:before {
        content: ""
    }

    .el-icon-arrow-up:before {
        content: ""
    }

    .el-icon-arrow-down:before {
        content: ""
    }

    .el-icon-arrow-right:before {
        content: ""
    }

    .el-icon-arrow-left:before {
        content: ""
    }

    .el-icon-top-right:before {
        content: ""
    }

    .el-icon-top-left:before {
        content: ""
    }

    .el-icon-top:before {
        content: ""
    }

    .el-icon-bottom:before {
        content: ""
    }

    .el-icon-right:before {
        content: ""
    }

    .el-icon-back:before {
        content: ""
    }

    .el-icon-bottom-right:before {
        content: ""
    }

    .el-icon-bottom-left:before {
        content: ""
    }

    .el-icon-caret-top:before {
        content: ""
    }

    .el-icon-caret-bottom:before {
        content: ""
    }

    .el-icon-caret-right:before {
        content: ""
    }

    .el-icon-caret-left:before {
        content: ""
    }

    .el-icon-d-caret:before {
        content: ""
    }

    .el-icon-share:before {
        content: ""
    }

    .el-icon-menu:before {
        content: ""
    }

    .el-icon-s-grid:before {
        content: ""
    }

    .el-icon-s-check:before {
        content: ""
    }

    .el-icon-s-data:before {
        content: ""
    }

    .el-icon-s-opportunity:before {
        content: ""
    }

    .el-icon-s-custom:before {
        content: ""
    }

    .el-icon-s-claim:before {
        content: ""
    }

    .el-icon-s-finance:before {
        content: ""
    }

    .el-icon-s-comment:before {
        content: ""
    }

    .el-icon-s-flag:before {
        content: ""
    }

    .el-icon-s-marketing:before {
        content: ""
    }

    .el-icon-s-shop:before {
        content: ""
    }

    .el-icon-s-open:before {
        content: ""
    }

    .el-icon-s-management:before {
        content: ""
    }

    .el-icon-s-ticket:before {
        content: ""
    }

    .el-icon-s-release:before {
        content: ""
    }

    .el-icon-s-home:before {
        content: ""
    }

    .el-icon-s-promotion:before {
        content: ""
    }

    .el-icon-s-operation:before {
        content: ""
    }

    .el-icon-s-unfold:before {
        content: ""
    }

    .el-icon-s-fold:before {
        content: ""
    }

    .el-icon-s-platform:before {
        content: ""
    }

    .el-icon-s-order:before {
        content: ""
    }

    .el-icon-s-cooperation:before {
        content: ""
    }

    .el-icon-bell:before {
        content: ""
    }

    .el-icon-message-solid:before {
        content: ""
    }

    .el-icon-video-camera:before {
        content: ""
    }

    .el-icon-video-camera-solid:before {
        content: ""
    }

    .el-icon-camera:before {
        content: ""
    }

    .el-icon-camera-solid:before {
        content: ""
    }

    .el-icon-download:before {
        content: ""
    }

    .el-icon-upload2:before {
        content: ""
    }

    .el-icon-upload:before {
        content: ""
    }

    .el-icon-picture-outline-round:before {
        content: ""
    }

    .el-icon-picture-outline:before {
        content: ""
    }

    .el-icon-picture:before {
        content: ""
    }

    .el-icon-close:before {
        content: ""
    }

    .el-icon-check:before {
        content: ""
    }

    .el-icon-plus:before {
        content: ""
    }

    .el-icon-minus:before {
        content: ""
    }

    .el-icon-help:before {
        content: ""
    }

    .el-icon-s-help:before {
        content: ""
    }

    .el-icon-circle-close:before {
        content: ""
    }

    .el-icon-circle-check:before {
        content: ""
    }

    .el-icon-circle-plus-outline:before {
        content: ""
    }

    .el-icon-remove-outline:before {
        content: ""
    }

    .el-icon-zoom-out:before {
        content: ""
    }

    .el-icon-zoom-in:before {
        content: ""
    }

    .el-icon-error:before {
        content: ""
    }

    .el-icon-success:before {
        content: ""
    }

    .el-icon-circle-plus:before {
        content: ""
    }

    .el-icon-remove:before {
        content: ""
    }

    .el-icon-info:before {
        content: ""
    }

    .el-icon-question:before {
        content: ""
    }

    .el-icon-warning-outline:before {
        content: ""
    }

    .el-icon-warning:before {
        content: ""
    }

    .el-icon-goods:before {
        content: ""
    }

    .el-icon-s-goods:before {
        content: ""
    }

    .el-icon-star-off:before {
        content: ""
    }

    .el-icon-star-on:before {
        content: ""
    }

    .el-icon-more-outline:before {
        content: ""
    }

    .el-icon-more:before {
        content: ""
    }

    .el-icon-phone-outline:before {
        content: ""
    }

    .el-icon-phone:before {
        content: ""
    }

    .el-icon-user:before {
        content: ""
    }

    .el-icon-user-solid:before {
        content: ""
    }

    .el-icon-setting:before {
        content: ""
    }

    .el-icon-s-tools:before {
        content: ""
    }

    .el-icon-delete:before {
        content: ""
    }

    .el-icon-delete-solid:before {
        content: ""
    }

    .el-icon-eleme:before {
        content: ""
    }

    .el-icon-platform-eleme:before {
        content: ""
    }

    .el-icon-loading {
        animation: rotating 2s linear infinite
    }

    .el-icon--right {
        margin-left: 5px
    }

    .el-icon--left {
        margin-right: 5px
    }

    @keyframes rotating {
        0% {
            transform: rotate(0deg)
        }
        to {
            transform: rotate(1turn)
        }
    }

    .el-pagination {
        color: #303133;
        font-weight: 700;
        padding: 2px 5px;
        white-space: nowrap
    }

    .el-pagination:after, .el-pagination:before {
        content: "";
        display: table
    }

    .el-pagination:after {
        clear: both
    }

    .el-pagination button, .el-pagination span:not([class*=suffix]) {
        box-sizing: border-box;
        display: inline-block;
        font-size: 13px;
        height: 28px;
        line-height: 28px;
        min-width: 35.5px;
        vertical-align: top
    }

    .el-pagination .el-input__inner {
        -moz-appearance: textfield;
        line-height: normal;
        text-align: center
    }

    .el-pagination .el-input__suffix {
        right: 0;
        transform: scale(.8)
    }

    .el-pagination .el-select .el-input {
        margin: 0 5px;
        width: 100px
    }

    .el-pagination .el-select .el-input .el-input__inner {
        border-radius: 3px;
        padding-right: 25px
    }

    .el-pagination button {
        background: transparent;
        border: none;
        padding: 0 6px
    }

    .el-pagination button:focus {
        outline: none
    }

    .el-pagination button:hover {
        color: #c8102e
    }

    .el-pagination button:disabled {
        background-color: #fff;
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-pagination .btn-next, .el-pagination .btn-prev {
        background: 50% no-repeat;
        background-color: #fff;
        background-size: 16px;
        color: #303133;
        cursor: pointer;
        margin: 0
    }

    .el-pagination .btn-next .el-icon, .el-pagination .btn-prev .el-icon {
        display: block;
        font-size: 12px;
        font-weight: 700
    }

    .el-pagination .btn-prev {
        padding-right: 12px
    }

    .el-pagination .btn-next {
        padding-left: 12px
    }

    .el-pagination .el-pager li.disabled {
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-pagination--small .btn-next, .el-pagination--small .btn-prev, .el-pagination--small .el-pager li, .el-pagination--small .el-pager li.btn-quicknext, .el-pagination--small .el-pager li.btn-quickprev, .el-pagination--small .el-pager li:last-child {
        border-color: transparent;
        font-size: 12px;
        height: 22px;
        line-height: 22px;
        min-width: 22px
    }

    .el-pagination--small .arrow.disabled {
        visibility: hidden
    }

    .el-pagination--small .more:before, .el-pagination--small li.more:before {
        line-height: 24px
    }

    .el-pagination--small button, .el-pagination--small span:not([class*=suffix]) {
        height: 22px;
        line-height: 22px
    }

    .el-pagination--small .el-pagination__editor, .el-pagination--small .el-pagination__editor.el-input .el-input__inner {
        height: 22px
    }

    .el-pagination__sizes {
        color: #606266;
        font-weight: 400;
        margin: 0 10px 0 0
    }

    .el-pagination__sizes .el-input .el-input__inner {
        font-size: 13px;
        padding-left: 8px
    }

    .el-pagination__sizes .el-input .el-input__inner:hover {
        border-color: #c8102e
    }

    .el-pagination__total {
        color: #606266;
        font-weight: 400;
        margin-right: 10px
    }

    .el-pagination__jump {
        color: #606266;
        font-weight: 400;
        margin-left: 24px
    }

    .el-pagination__jump .el-input__inner {
        padding: 0 3px
    }

    .el-pagination__rightwrapper {
        float: right
    }

    .el-pagination__editor {
        border-radius: 3px;
        box-sizing: border-box;
        height: 28px;
        line-height: 18px;
        margin: 0 2px;
        padding: 0 2px;
        text-align: center
    }

    .el-pagination__editor.el-input {
        width: 50px
    }

    .el-pagination__editor.el-input .el-input__inner {
        height: 28px
    }

    .el-pagination__editor .el-input__inner::-webkit-inner-spin-button, .el-pagination__editor .el-input__inner::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0
    }

    .el-pagination.is-background .btn-next, .el-pagination.is-background .btn-prev, .el-pagination.is-background .el-pager li {
        background-color: #f4f4f5;
        border-radius: 2px;
        color: #606266;
        margin: 0 5px;
        min-width: 30px
    }

    .el-pagination.is-background .btn-next.disabled, .el-pagination.is-background .btn-prev.disabled, .el-pagination.is-background .el-pager li.disabled {
        color: #c0c4cc
    }

    .el-pagination.is-background .btn-next, .el-pagination.is-background .btn-prev {
        padding: 0
    }

    .el-pagination.is-background .btn-next:disabled, .el-pagination.is-background .btn-prev:disabled {
        color: #c0c4cc
    }

    .el-pagination.is-background .el-pager li:not(.disabled):hover {
        color: #c8102e
    }

    .el-pagination.is-background .el-pager li:not(.disabled).active {
        background-color: #c8102e;
        color: #fff
    }

    .el-pagination.is-background.el-pagination--small .btn-next, .el-pagination.is-background.el-pagination--small .btn-prev, .el-pagination.is-background.el-pagination--small .el-pager li {
        margin: 0 3px;
        min-width: 22px
    }

    .el-pager {
        display: inline-block;
        font-size: 0;
        list-style: none;
        margin: 0;
        padding: 0;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        vertical-align: top
    }

    .el-pager .more:before {
        line-height: 30px
    }

    .el-pager li {
        background: #fff;
        box-sizing: border-box;
        cursor: pointer;
        display: inline-block;
        font-size: 13px;
        height: 28px;
        line-height: 28px;
        margin: 0;
        min-width: 35.5px;
        padding: 0 4px;
        text-align: center;
        vertical-align: top
    }

    .el-pager li.btn-quicknext, .el-pager li.btn-quickprev {
        color: #303133;
        line-height: 28px
    }

    .el-pager li.btn-quicknext.disabled, .el-pager li.btn-quickprev.disabled {
        color: #c0c4cc
    }

    .el-pager li.btn-quicknext:hover, .el-pager li.btn-quickprev:hover {
        cursor: pointer
    }

    .el-pager li.active + li {
        border-left: 0
    }

    .el-pager li:hover {
        color: #c8102e
    }

    .el-pager li.active {
        color: #c8102e;
        cursor: default
    }

    .el-dialog {
        background: #fff;
        border-radius: 2px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
        box-sizing: border-box;
        margin: 0 auto 50px;
        position: relative;
        width: 50%
    }

    .el-dialog.is-fullscreen {
        height: 100%;
        margin-bottom: 0;
        margin-top: 0;
        overflow: auto;
        width: 100%
    }

    .el-dialog__wrapper {
        bottom: 0;
        left: 0;
        margin: 0;
        overflow: auto;
        position: fixed;
        right: 0;
        top: 0
    }

    .el-dialog__header {
        padding: 20px 20px 10px
    }

    .el-dialog__headerbtn {
        background: transparent;
        border: none;
        cursor: pointer;
        font-size: 16px;
        outline: none;
        padding: 0;
        position: absolute;
        right: 20px;
        top: 20px
    }

    .el-dialog__headerbtn .el-dialog__close {
        color: #909399
    }

    .el-dialog__headerbtn:focus .el-dialog__close, .el-dialog__headerbtn:hover .el-dialog__close {
        color: #c8102e
    }

    .el-dialog__title {
        color: #303133;
        font-size: 18px;
        line-height: 24px
    }

    .el-dialog__body {
        color: #606266;
        font-size: 14px;
        padding: 30px 20px;
        word-break: break-all
    }

    .el-dialog__footer {
        box-sizing: border-box;
        padding: 10px 20px 20px;
        text-align: right
    }

    .el-dialog--center {
        text-align: center
    }

    .el-dialog--center .el-dialog__body {
        padding: 25px 25px 30px;
        text-align: left;
        text-align: initial
    }

    .el-dialog--center .el-dialog__footer {
        text-align: inherit
    }

    .dialog-fade-enter-active {
        animation: dialog-fade-in .3s
    }

    .dialog-fade-leave-active {
        animation: dialog-fade-out .3s
    }

    @keyframes dialog-fade-in {
        0% {
            opacity: 0;
            transform: translate3d(0, -20px, 0)
        }
        to {
            opacity: 1;
            transform: translateZ(0)
        }
    }

    @keyframes dialog-fade-out {
        0% {
            opacity: 1;
            transform: translateZ(0)
        }
        to {
            opacity: 0;
            transform: translate3d(0, -20px, 0)
        }
    }

    .el-autocomplete {
        display: inline-block;
        position: relative
    }

    .el-autocomplete-suggestion {
        background-color: #fff;
        border: 1px solid #e4e7ed;
        border-radius: 4px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        box-sizing: border-box;
        margin: 5px 0
    }

    .el-autocomplete-suggestion__wrap {
        box-sizing: border-box;
        max-height: 280px;
        padding: 10px 0
    }

    .el-autocomplete-suggestion__list {
        margin: 0;
        padding: 0
    }

    .el-autocomplete-suggestion li {
        color: #606266;
        cursor: pointer;
        font-size: 14px;
        line-height: 34px;
        list-style: none;
        margin: 0;
        overflow: hidden;
        padding: 0 20px;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .el-autocomplete-suggestion li.highlighted, .el-autocomplete-suggestion li:hover {
        background-color: #f5f7fa
    }

    .el-autocomplete-suggestion li.divider {
        border-top: 1px solid #000;
        margin-top: 6px
    }

    .el-autocomplete-suggestion li.divider:last-child {
        margin-bottom: -6px
    }

    .el-autocomplete-suggestion.is-loading li {
        color: #999;
        font-size: 20px;
        height: 100px;
        line-height: 100px;
        text-align: center
    }

    .el-autocomplete-suggestion.is-loading li:after {
        content: "";
        display: inline-block;
        height: 100%;
        vertical-align: middle
    }

    .el-autocomplete-suggestion.is-loading li:hover {
        background-color: #fff
    }

    .el-autocomplete-suggestion.is-loading .el-icon-loading {
        vertical-align: middle
    }

    .el-dropdown {
        color: #606266;
        display: inline-block;
        font-size: 14px;
        position: relative
    }

    .el-dropdown .el-button-group {
        display: block
    }

    .el-dropdown .el-button-group .el-button {
        float: none
    }

    .el-dropdown .el-dropdown__caret-button {
        border-left: none;
        padding-left: 5px;
        padding-right: 5px;
        position: relative
    }

    .el-dropdown .el-dropdown__caret-button:before {
        background: hsla(0, 0%, 100%, .5);
        bottom: 5px;
        content: "";
        display: block;
        left: 0;
        position: absolute;
        top: 5px;
        width: 1px
    }

    .el-dropdown .el-dropdown__caret-button.el-button--default:before {
        background: rgba(220, 223, 230, .5)
    }

    .el-dropdown .el-dropdown__caret-button:hover:not(.is-disabled):before {
        bottom: 0;
        top: 0
    }

    .el-dropdown .el-dropdown__caret-button .el-dropdown__icon {
        padding-left: 0
    }

    .el-dropdown__icon {
        font-size: 12px;
        margin: 0 3px
    }

    .el-dropdown .el-dropdown-selfdefine:focus:active, .el-dropdown .el-dropdown-selfdefine:focus:not(.focusing) {
        outline-width: 0
    }

    .el-dropdown [disabled] {
        color: #bbb;
        cursor: not-allowed
    }

    .el-dropdown-menu {
        background-color: #fff;
        border: 1px solid #ebeef5;
        border-radius: 4px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        left: 0;
        margin: 5px 0;
        padding: 10px 0;
        position: absolute;
        top: 0;
        z-index: 10
    }

    .el-dropdown-menu__item {
        color: #606266;
        cursor: pointer;
        font-size: 14px;
        line-height: 36px;
        list-style: none;
        margin: 0;
        outline: none;
        padding: 0 20px
    }

    .el-dropdown-menu__item:focus, .el-dropdown-menu__item:not(.is-disabled):hover {
        background-color: #fae7ea;
        color: #d34058
    }

    .el-dropdown-menu__item i {
        margin-right: 5px
    }

    .el-dropdown-menu__item--divided {
        border-top: 1px solid #ebeef5;
        margin-top: 6px;
        position: relative
    }

    .el-dropdown-menu__item--divided:before {
        background-color: #fff;
        content: "";
        display: block;
        height: 6px;
        margin: 0 -20px
    }

    .el-dropdown-menu__item.is-disabled {
        color: #bbb;
        cursor: default;
        pointer-events: none
    }

    .el-dropdown-menu--medium {
        padding: 6px 0
    }

    .el-dropdown-menu--medium .el-dropdown-menu__item {
        font-size: 14px;
        line-height: 30px;
        padding: 0 17px
    }

    .el-dropdown-menu--medium .el-dropdown-menu__item.el-dropdown-menu__item--divided {
        margin-top: 6px
    }

    .el-dropdown-menu--medium .el-dropdown-menu__item.el-dropdown-menu__item--divided:before {
        height: 6px;
        margin: 0 -17px
    }

    .el-dropdown-menu--small {
        padding: 6px 0
    }

    .el-dropdown-menu--small .el-dropdown-menu__item {
        font-size: 13px;
        line-height: 27px;
        padding: 0 15px
    }

    .el-dropdown-menu--small .el-dropdown-menu__item.el-dropdown-menu__item--divided {
        margin-top: 4px
    }

    .el-dropdown-menu--small .el-dropdown-menu__item.el-dropdown-menu__item--divided:before {
        height: 4px;
        margin: 0 -15px
    }

    .el-dropdown-menu--mini {
        padding: 3px 0
    }

    .el-dropdown-menu--mini .el-dropdown-menu__item {
        font-size: 12px;
        line-height: 24px;
        padding: 0 10px
    }

    .el-dropdown-menu--mini .el-dropdown-menu__item.el-dropdown-menu__item--divided {
        margin-top: 3px
    }

    .el-dropdown-menu--mini .el-dropdown-menu__item.el-dropdown-menu__item--divided:before {
        height: 3px;
        margin: 0 -10px
    }

    .el-menu {
        background-color: #fff;
        border-right: 1px solid #e6e6e6;
        list-style: none;
        margin: 0;
        padding-left: 0;
        position: relative
    }

    .el-menu:after, .el-menu:before {
        content: "";
        display: table
    }

    .el-menu:after {
        clear: both
    }

    .el-menu.el-menu--horizontal {
        border-bottom: 1px solid #e6e6e6
    }

    .el-menu--horizontal {
        border-right: none
    }

    .el-menu--horizontal > .el-menu-item {
        border-bottom: 2px solid transparent;
        color: #909399;
        float: left;
        height: 60px;
        line-height: 60px;
        margin: 0
    }

    .el-menu--horizontal > .el-menu-item a, .el-menu--horizontal > .el-menu-item a:hover {
        color: inherit
    }

    .el-menu--horizontal > .el-menu-item:not(.is-disabled):focus, .el-menu--horizontal > .el-menu-item:not(.is-disabled):hover {
        background-color: #fff
    }

    .el-menu--horizontal > .el-submenu {
        float: left
    }

    .el-menu--horizontal > .el-submenu:focus, .el-menu--horizontal > .el-submenu:hover {
        outline: none
    }

    .el-menu--horizontal > .el-submenu:focus .el-submenu__title, .el-menu--horizontal > .el-submenu:hover .el-submenu__title {
        color: #303133
    }

    .el-menu--horizontal > .el-submenu.is-active .el-submenu__title {
        border-bottom: 2px solid #c8102e;
        color: #303133
    }

    .el-menu--horizontal > .el-submenu .el-submenu__title {
        border-bottom: 2px solid transparent;
        color: #909399;
        height: 60px;
        line-height: 60px
    }

    .el-menu--horizontal > .el-submenu .el-submenu__title:hover {
        background-color: #fff
    }

    .el-menu--horizontal > .el-submenu .el-submenu__icon-arrow {
        margin-left: 8px;
        margin-top: -3px;
        position: static;
        vertical-align: middle
    }

    .el-menu--horizontal .el-menu .el-menu-item, .el-menu--horizontal .el-menu .el-submenu__title {
        background-color: #fff;
        color: #909399;
        float: none;
        height: 36px;
        line-height: 36px;
        padding: 0 10px
    }

    .el-menu--horizontal .el-menu .el-menu-item.is-active, .el-menu--horizontal .el-menu .el-submenu.is-active > .el-submenu__title {
        color: #303133
    }

    .el-menu--horizontal .el-menu-item:not(.is-disabled):focus, .el-menu--horizontal .el-menu-item:not(.is-disabled):hover {
        color: #303133;
        outline: none
    }

    .el-menu--horizontal > .el-menu-item.is-active {
        border-bottom: 2px solid #c8102e;
        color: #303133
    }

    .el-menu--collapse {
        width: 64px
    }

    .el-menu--collapse > .el-menu-item [class^=el-icon-], .el-menu--collapse > .el-submenu > .el-submenu__title [class^=el-icon-] {
        margin: 0;
        text-align: center;
        vertical-align: middle;
        width: 24px
    }

    .el-menu--collapse > .el-menu-item .el-submenu__icon-arrow, .el-menu--collapse > .el-submenu > .el-submenu__title .el-submenu__icon-arrow {
        display: none
    }

    .el-menu--collapse > .el-menu-item span, .el-menu--collapse > .el-submenu > .el-submenu__title span {
        display: inline-block;
        height: 0;
        overflow: hidden;
        visibility: hidden;
        width: 0
    }

    .el-menu--collapse > .el-menu-item.is-active i {
        color: inherit
    }

    .el-menu--collapse .el-menu .el-submenu {
        min-width: 200px
    }

    .el-menu--collapse .el-submenu {
        position: relative
    }

    .el-menu--collapse .el-submenu .el-menu {
        border: 1px solid #e4e7ed;
        border-radius: 2px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        left: 100%;
        margin-left: 5px;
        position: absolute;
        top: 0;
        z-index: 10
    }

    .el-menu--collapse .el-submenu.is-opened > .el-submenu__title .el-submenu__icon-arrow {
        transform: none
    }

    .el-menu--popup {
        border: none;
        border-radius: 2px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        min-width: 200px;
        padding: 5px 0;
        z-index: 100
    }

    .el-menu--popup-bottom-start {
        margin-top: 5px
    }

    .el-menu--popup-right-start {
        margin-left: 5px;
        margin-right: 5px
    }

    .el-menu-item {
        box-sizing: border-box;
        color: #303133;
        cursor: pointer;
        font-size: 14px;
        height: 56px;
        line-height: 56px;
        list-style: none;
        padding: 0 20px;
        position: relative;
        transition: border-color .3s, background-color .3s, color .3s;
        white-space: nowrap
    }

    .el-menu-item * {
        vertical-align: middle
    }

    .el-menu-item i {
        color: #909399
    }

    .el-menu-item:focus, .el-menu-item:hover {
        background-color: #fae7ea;
        outline: none
    }

    .el-menu-item.is-disabled {
        background: none !important;
        cursor: not-allowed;
        opacity: .25
    }

    .el-menu-item [class^=el-icon-] {
        font-size: 18px;
        margin-right: 5px;
        text-align: center;
        vertical-align: middle;
        width: 24px
    }

    .el-menu-item.is-active {
        color: #c8102e
    }

    .el-menu-item.is-active i {
        color: inherit
    }

    .el-submenu {
        list-style: none;
        margin: 0;
        padding-left: 0
    }

    .el-submenu__title {
        box-sizing: border-box;
        color: #303133;
        cursor: pointer;
        font-size: 14px;
        height: 56px;
        line-height: 56px;
        list-style: none;
        padding: 0 20px;
        position: relative;
        transition: border-color .3s, background-color .3s, color .3s;
        white-space: nowrap
    }

    .el-submenu__title * {
        vertical-align: middle
    }

    .el-submenu__title i {
        color: #909399
    }

    .el-submenu__title:focus, .el-submenu__title:hover {
        background-color: #fae7ea;
        outline: none
    }

    .el-submenu__title.is-disabled {
        background: none !important;
        cursor: not-allowed;
        opacity: .25
    }

    .el-submenu__title:hover {
        background-color: #fae7ea
    }

    .el-submenu .el-menu {
        border: none
    }

    .el-submenu .el-menu-item {
        height: 50px;
        line-height: 50px;
        min-width: 200px;
        padding: 0 45px
    }

    .el-submenu__icon-arrow {
        font-size: 12px;
        margin-top: -7px;
        position: absolute;
        right: 20px;
        top: 50%;
        transition: transform .3s
    }

    .el-submenu.is-active .el-submenu__title {
        border-bottom-color: #c8102e
    }

    .el-submenu.is-opened > .el-submenu__title .el-submenu__icon-arrow {
        transform: rotate(180deg)
    }

    .el-submenu.is-disabled .el-menu-item, .el-submenu.is-disabled .el-submenu__title {
        background: none !important;
        cursor: not-allowed;
        opacity: .25
    }

    .el-submenu [class^=el-icon-] {
        font-size: 18px;
        margin-right: 5px;
        text-align: center;
        vertical-align: middle;
        width: 24px
    }

    .el-menu-item-group > ul {
        padding: 0
    }

    .el-menu-item-group__title {
        color: #909399;
        font-size: 12px;
        line-height: normal;
        padding: 7px 0 7px 20px
    }

    .horizontal-collapse-transition .el-submenu__title .el-submenu__icon-arrow {
        opacity: 0;
        transition: .2s
    }

    .el-radio-group {
        display: inline-block;
        font-size: 0;
        line-height: 1;
        vertical-align: middle
    }

    .el-radio-button, .el-radio-button__inner {
        display: inline-block;
        outline: none;
        position: relative
    }

    .el-radio-button__inner {
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #dcdfe6;
        border-left: 0;
        border-radius: 0;
        box-sizing: border-box;
        color: #606266;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        line-height: 1;
        margin: 0;
        padding: 12px 20px;
        text-align: center;
        transition: all .3s cubic-bezier(.645, .045, .355, 1);
        vertical-align: middle;
        white-space: nowrap
    }

    .el-radio-button__inner.is-round {
        padding: 12px 20px
    }

    .el-radio-button__inner:hover {
        color: #c8102e
    }

    .el-radio-button__inner [class*=el-icon-] {
        line-height: .9
    }

    .el-radio-button__inner [class*=el-icon-] + span {
        margin-left: 5px
    }

    .el-radio-button:first-child .el-radio-button__inner {
        border-left: 1px solid #dcdfe6;
        border-radius: 4px 0 0 4px;
        box-shadow: none !important
    }

    .el-radio-button__orig-radio {
        opacity: 0;
        outline: none;
        position: absolute;
        z-index: -1
    }

    .el-radio-button__orig-radio:checked + .el-radio-button__inner {
        background-color: #c8102e;
        border-color: #c8102e;
        box-shadow: -1px 0 0 0 #c8102e;
        color: #fff
    }

    .el-radio-button__orig-radio:disabled + .el-radio-button__inner {
        background-color: #fff;
        background-image: none;
        border-color: #ebeef5;
        box-shadow: none;
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-radio-button__orig-radio:disabled:checked + .el-radio-button__inner {
        background-color: #f2f6fc
    }

    .el-radio-button:last-child .el-radio-button__inner {
        border-radius: 0 4px 4px 0
    }

    .el-radio-button:first-child:last-child .el-radio-button__inner {
        border-radius: 4px
    }

    .el-radio-button--medium .el-radio-button__inner {
        border-radius: 0;
        font-size: 14px;
        padding: 10px 20px
    }

    .el-radio-button--medium .el-radio-button__inner.is-round {
        padding: 10px 20px
    }

    .el-radio-button--small .el-radio-button__inner {
        border-radius: 0;
        font-size: 12px;
        padding: 9px 15px
    }

    .el-radio-button--small .el-radio-button__inner.is-round {
        padding: 9px 15px
    }

    .el-radio-button--mini .el-radio-button__inner {
        border-radius: 0;
        font-size: 12px;
        padding: 7px 15px
    }

    .el-radio-button--mini .el-radio-button__inner.is-round {
        padding: 7px 15px
    }

    .el-radio-button:focus:not(.is-focus):not(:active):not(.is-disabled) {
        box-shadow: 0 0 2px 2px #c8102e
    }

    .el-switch {
        align-items: center;
        display: inline-flex;
        font-size: 14px;
        height: 20px;
        line-height: 20px;
        position: relative;
        vertical-align: middle
    }

    .el-switch.is-disabled .el-switch__core, .el-switch.is-disabled .el-switch__label {
        cursor: not-allowed
    }

    .el-switch__label {
        color: #303133;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: 500;
        height: 20px;
        transition: .2s;
        vertical-align: middle
    }

    .el-switch__label.is-active {
        color: #c8102e
    }

    .el-switch__label--left {
        margin-right: 10px
    }

    .el-switch__label--right {
        margin-left: 10px
    }

    .el-switch__label * {
        display: inline-block;
        font-size: 14px;
        line-height: 1
    }

    .el-switch__input {
        height: 0;
        margin: 0;
        opacity: 0;
        position: absolute;
        width: 0
    }

    .el-switch__core {
        background: #dcdfe6;
        border: 1px solid #dcdfe6;
        border-radius: 10px;
        box-sizing: border-box;
        cursor: pointer;
        display: inline-block;
        height: 20px;
        margin: 0;
        outline: none;
        position: relative;
        transition: border-color .3s, background-color .3s;
        vertical-align: middle;
        width: 40px
    }

    .el-switch__core:after {
        background-color: #fff;
        border-radius: 100%;
        content: "";
        height: 16px;
        left: 1px;
        position: absolute;
        top: 1px;
        transition: all .3s;
        width: 16px
    }

    .el-switch.is-checked .el-switch__core {
        background-color: #c8102e;
        border-color: #c8102e
    }

    .el-switch.is-checked .el-switch__core:after {
        left: 100%;
        margin-left: -17px
    }

    .el-switch.is-disabled {
        opacity: .6
    }

    .el-switch--wide .el-switch__label.el-switch__label--left span {
        left: 10px
    }

    .el-switch--wide .el-switch__label.el-switch__label--right span {
        right: 10px
    }

    .el-switch .label-fade-enter, .el-switch .label-fade-leave-active {
        opacity: 0
    }

    .el-select-dropdown {
        background-color: #fff;
        border: 1px solid #e4e7ed;
        border-radius: 4px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        box-sizing: border-box;
        margin: 5px 0;
        position: absolute;
        z-index: 1001
    }

    .el-select-dropdown.is-multiple .el-select-dropdown__item {
        padding-right: 40px
    }

    .el-select-dropdown.is-multiple .el-select-dropdown__item.selected {
        background-color: #fff;
        color: #c8102e
    }

    .el-select-dropdown.is-multiple .el-select-dropdown__item.selected.hover {
        background-color: #f5f7fa
    }

    .el-select-dropdown.is-multiple .el-select-dropdown__item.selected:after {
        content: "";
        font-family: "element-icons";
        font-size: 12px;
        font-weight: 700;
        position: absolute;
        right: 20px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .el-select-dropdown .el-scrollbar.is-empty .el-select-dropdown__list {
        padding: 0
    }

    .el-select-dropdown__empty {
        color: #999;
        font-size: 14px;
        margin: 0;
        padding: 10px 0;
        text-align: center
    }

    .el-select-dropdown__wrap {
        max-height: 274px
    }

    .el-select-dropdown__list {
        box-sizing: border-box;
        list-style: none;
        margin: 0;
        padding: 6px 0
    }

    .el-select-dropdown__item {
        box-sizing: border-box;
        color: #606266;
        cursor: pointer;
        font-size: 14px;
        height: 34px;
        line-height: 34px;
        overflow: hidden;
        padding: 0 20px;
        position: relative;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .el-select-dropdown__item.is-disabled {
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-select-dropdown__item.is-disabled:hover {
        background-color: #fff
    }

    .el-select-dropdown__item.hover, .el-select-dropdown__item:hover {
        background-color: #f5f7fa
    }

    .el-select-dropdown__item.selected {
        color: #c8102e;
        font-weight: 700
    }

    .el-select-group {
        margin: 0;
        padding: 0
    }

    .el-select-group__wrap {
        list-style: none;
        margin: 0;
        padding: 0;
        position: relative
    }

    .el-select-group__wrap:not(:last-of-type) {
        padding-bottom: 24px
    }

    .el-select-group__wrap:not(:last-of-type):after {
        background: #e4e7ed;
        bottom: 12px;
        content: "";
        display: block;
        height: 1px;
        left: 20px;
        position: absolute;
        right: 20px
    }

    .el-select-group__title {
        color: #909399;
        font-size: 12px;
        line-height: 30px;
        padding-left: 20px
    }

    .el-select-group .el-select-dropdown__item {
        padding-left: 20px
    }

    .el-select {
        display: inline-block;
        position: relative
    }

    .el-select .el-select__tags > span {
        display: contents
    }

    .el-select:hover .el-input__inner {
        border-color: #c0c4cc
    }

    .el-select .el-input__inner {
        cursor: pointer;
        padding-right: 35px
    }

    .el-select .el-input__inner:focus {
        border-color: #c8102e
    }

    .el-select .el-input .el-select__caret {
        color: #c0c4cc;
        cursor: pointer;
        font-size: 14px;
        transform: rotate(180deg);
        transition: transform .3s
    }

    .el-select .el-input .el-select__caret.is-reverse {
        transform: rotate(0deg)
    }

    .el-select .el-input .el-select__caret.is-show-close {
        border-radius: 100%;
        color: #c0c4cc;
        font-size: 14px;
        text-align: center;
        transform: rotate(180deg);
        transition: color .2s cubic-bezier(.645, .045, .355, 1)
    }

    .el-select .el-input .el-select__caret.is-show-close:hover {
        color: #909399
    }

    .el-select .el-input.is-disabled .el-input__inner {
        cursor: not-allowed
    }

    .el-select .el-input.is-disabled .el-input__inner:hover {
        border-color: #e4e7ed
    }

    .el-select .el-input.is-focus .el-input__inner {
        border-color: #c8102e
    }

    .el-select > .el-input {
        display: block
    }

    .el-select__input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: transparent;
        border: none;
        color: #666;
        font-size: 14px;
        height: 28px;
        margin-left: 15px;
        outline: none;
        padding: 0
    }

    .el-select__input.is-mini {
        height: 14px
    }

    .el-select__close {
        color: #c0c4cc;
        cursor: pointer;
        font-size: 14px;
        line-height: 18px;
        position: absolute;
        right: 25px;
        top: 8px;
        z-index: 1000
    }

    .el-select__close:hover {
        color: #909399
    }

    .el-select__tags {
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        line-height: normal;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        white-space: normal;
        z-index: 1
    }

    .el-select__tags-text {
        overflow: hidden;
        text-overflow: ellipsis
    }

    .el-select .el-tag {
        align-items: center;
        background-color: #f0f2f5;
        border-color: transparent;
        box-sizing: border-box;
        display: flex;
        margin: 2px 0 2px 6px;
        max-width: 100%
    }

    .el-select .el-tag__close.el-icon-close {
        background-color: #c0c4cc;
        color: #fff;
        flex-shrink: 0;
        top: 0
    }

    .el-select .el-tag__close.el-icon-close:hover {
        background-color: #909399
    }

    .el-select .el-tag__close.el-icon-close:before {
        display: block;
        transform: translateY(.5px)
    }

    .el-table {
        background-color: #fff;
        box-sizing: border-box;
        color: #606266;
        flex: 1;
        font-size: 14px;
        max-width: 100%;
        overflow: hidden;
        position: relative;
        width: 100%
    }

    .el-table__empty-block {
        align-items: center;
        display: flex;
        justify-content: center;
        min-height: 60px;
        text-align: center;
        width: 100%
    }

    .el-table__empty-text {
        color: #909399;
        line-height: 60px;
        width: 50%
    }

    .el-table__expand-column .cell {
        padding: 0;
        text-align: center
    }

    .el-table__expand-icon {
        color: #666;
        cursor: pointer;
        font-size: 12px;
        height: 20px;
        position: relative;
        transition: transform .2s ease-in-out
    }

    .el-table__expand-icon--expanded {
        transform: rotate(90deg)
    }

    .el-table__expand-icon > .el-icon {
        left: 50%;
        margin-left: -5px;
        margin-top: -5px;
        position: absolute;
        top: 50%
    }

    .el-table__expanded-cell {
        background-color: #fff
    }

    .el-table__expanded-cell[class*=cell] {
        padding: 20px 50px
    }

    .el-table__expanded-cell:hover {
        background-color: transparent !important
    }

    .el-table__placeholder {
        display: inline-block;
        width: 20px
    }

    .el-table__append-wrapper {
        overflow: hidden
    }

    .el-table--fit {
        border-bottom: 0;
        border-right: 0
    }

    .el-table--fit .el-table__cell.gutter {
        border-right-width: 1px
    }

    .el-table--scrollable-x .el-table__body-wrapper {
        overflow-x: auto
    }

    .el-table--scrollable-y .el-table__body-wrapper {
        overflow-y: auto
    }

    .el-table thead {
        color: #909399;
        font-weight: 500
    }

    .el-table thead.is-group th.el-table__cell {
        background: #f5f7fa
    }

    .el-table .el-table__cell {
        box-sizing: border-box;
        min-width: 0;
        padding: 12px 0;
        position: relative;
        text-align: left;
        text-overflow: ellipsis;
        vertical-align: middle
    }

    .el-table .el-table__cell.is-center {
        text-align: center
    }

    .el-table .el-table__cell.is-right {
        text-align: right
    }

    .el-table .el-table__cell.gutter {
        border-bottom-width: 0;
        border-right-width: 0;
        padding: 0;
        width: 15px
    }

    .el-table .el-table__cell.is-hidden > * {
        visibility: hidden
    }

    .el-table--medium .el-table__cell {
        padding: 10px 0
    }

    .el-table--small {
        font-size: 12px
    }

    .el-table--small .el-table__cell {
        padding: 8px 0
    }

    .el-table--mini {
        font-size: 12px
    }

    .el-table--mini .el-table__cell {
        padding: 6px 0
    }

    .el-table tr {
        background-color: #fff
    }

    .el-table tr input[type=checkbox] {
        margin: 0
    }

    .el-table td.el-table__cell, .el-table th.el-table__cell.is-leaf {
        border-bottom: 1px solid #ebeef5
    }

    .el-table th.el-table__cell.is-sortable {
        cursor: pointer
    }

    .el-table th.el-table__cell {
        background-color: #fff;
        overflow: hidden;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .el-table th.el-table__cell > .cell {
        box-sizing: border-box;
        display: inline-block;
        padding-left: 10px;
        padding-right: 10px;
        position: relative;
        vertical-align: middle;
        width: 100%
    }

    .el-table th.el-table__cell > .cell.highlight {
        color: #c8102e
    }

    .el-table th.el-table__cell.required > div:before {
        background: #ff4d51;
        border-radius: 50%;
        content: "";
        display: inline-block;
        height: 8px;
        margin-right: 5px;
        vertical-align: middle;
        width: 8px
    }

    .el-table td.el-table__cell div {
        box-sizing: border-box
    }

    .el-table td.el-table__cell.gutter {
        width: 0
    }

    .el-table .cell {
        box-sizing: border-box;
        line-height: 23px;
        overflow: hidden;
        padding-left: 10px;
        padding-right: 10px;
        text-overflow: ellipsis;
        white-space: normal;
        word-break: break-all
    }

    .el-table .cell.el-tooltip {
        min-width: 50px;
        white-space: nowrap
    }

    .el-table--border, .el-table--group {
        border: 1px solid #ebeef5
    }

    .el-table--border:after, .el-table--group:after, .el-table:before {
        background-color: #ebeef5;
        content: "";
        position: absolute;
        z-index: 1
    }

    .el-table--border:after, .el-table--group:after {
        height: 100%;
        right: 0;
        top: 0;
        width: 1px
    }

    .el-table:before {
        bottom: 0;
        height: 1px;
        left: 0;
        width: 100%
    }

    .el-table--border {
        border-bottom: none;
        border-right: none
    }

    .el-table--border.el-loading-parent--relative {
        border-color: transparent
    }

    .el-table--border .el-table__cell {
        border-right: 1px solid #ebeef5
    }

    .el-table--border .el-table__cell:first-child .cell {
        padding-left: 10px
    }

    .el-table--border th.el-table__cell, .el-table--border th.el-table__cell.gutter:last-of-type {
        border-bottom: 1px solid #ebeef5
    }

    .el-table--hidden {
        visibility: hidden
    }

    .el-table__fixed, .el-table__fixed-right {
        box-shadow: 0 0 10px rgba(0, 0, 0, .12);
        left: 0;
        overflow-x: hidden;
        overflow-y: hidden;
        position: absolute;
        top: 0
    }

    .el-table__fixed-right:before, .el-table__fixed:before {
        background-color: #ebeef5;
        bottom: 0;
        content: "";
        height: 1px;
        left: 0;
        position: absolute;
        width: 100%;
        z-index: 4
    }

    .el-table__fixed-right-patch {
        background-color: #fff;
        border-bottom: 1px solid #ebeef5;
        position: absolute;
        right: 0;
        top: -1px
    }

    .el-table__fixed-right {
        left: auto;
        right: 0;
        top: 0
    }

    .el-table__fixed-right .el-table__fixed-body-wrapper, .el-table__fixed-right .el-table__fixed-footer-wrapper, .el-table__fixed-right .el-table__fixed-header-wrapper {
        left: auto;
        right: 0
    }

    .el-table__fixed-header-wrapper {
        left: 0;
        position: absolute;
        top: 0;
        z-index: 3
    }

    .el-table__fixed-footer-wrapper {
        bottom: 0;
        left: 0;
        position: absolute;
        z-index: 3
    }

    .el-table__fixed-footer-wrapper tbody td.el-table__cell {
        background-color: #f5f7fa;
        border-top: 1px solid #ebeef5;
        color: #606266
    }

    .el-table__fixed-body-wrapper {
        left: 0;
        overflow: hidden;
        position: absolute;
        top: 37px;
        z-index: 3
    }

    .el-table__body-wrapper, .el-table__footer-wrapper, .el-table__header-wrapper {
        width: 100%
    }

    .el-table__footer-wrapper {
        margin-top: -1px
    }

    .el-table__footer-wrapper td.el-table__cell {
        border-top: 1px solid #ebeef5
    }

    .el-table__body, .el-table__footer, .el-table__header {
        border-collapse: separate;
        table-layout: fixed
    }

    .el-table__footer-wrapper, .el-table__header-wrapper {
        overflow: hidden
    }

    .el-table__footer-wrapper tbody td.el-table__cell, .el-table__header-wrapper tbody td.el-table__cell {
        background-color: #f5f7fa;
        color: #606266
    }

    .el-table__body-wrapper {
        overflow: hidden;
        position: relative
    }

    .el-table__body-wrapper.is-scrolling-left ~ .el-table__fixed, .el-table__body-wrapper.is-scrolling-none ~ .el-table__fixed, .el-table__body-wrapper.is-scrolling-none ~ .el-table__fixed-right, .el-table__body-wrapper.is-scrolling-right ~ .el-table__fixed-right {
        box-shadow: none
    }

    .el-table__body-wrapper .el-table--border.is-scrolling-right ~ .el-table__fixed-right {
        border-left: 1px solid #ebeef5
    }

    .el-table__body-wrapper .el-table--border.is-scrolling-left ~ .el-table__fixed {
        border-right: 1px solid #ebeef5
    }

    .el-table .caret-wrapper {
        align-items: center;
        cursor: pointer;
        display: inline-flex;
        flex-direction: column;
        height: 34px;
        overflow: visible;
        overflow: initial;
        position: relative;
        vertical-align: middle;
        width: 24px
    }

    .el-table .sort-caret {
        border: 5px solid transparent;
        height: 0;
        left: 7px;
        position: absolute;
        width: 0
    }

    .el-table .sort-caret.ascending {
        border-bottom-color: #c0c4cc;
        top: 5px
    }

    .el-table .sort-caret.descending {
        border-top-color: #c0c4cc;
        bottom: 7px
    }

    .el-table .ascending .sort-caret.ascending {
        border-bottom-color: #c8102e
    }

    .el-table .descending .sort-caret.descending {
        border-top-color: #c8102e
    }

    .el-table .hidden-columns {
        position: absolute;
        visibility: hidden;
        z-index: -1
    }

    .el-table--striped .el-table__body tr.el-table__row--striped td.el-table__cell {
        background: #fafafa
    }

    .el-table--striped .el-table__body tr.el-table__row--striped.current-row td.el-table__cell, .el-table--striped .el-table__body tr.el-table__row--striped.selection-row td.el-table__cell {
        background-color: #fae7ea
    }

    .el-table__body tr.hover-row.current-row > td.el-table__cell, .el-table__body tr.hover-row.el-table__row--striped.current-row > td.el-table__cell, .el-table__body tr.hover-row.el-table__row--striped.selection-row > td.el-table__cell, .el-table__body tr.hover-row.el-table__row--striped > td.el-table__cell, .el-table__body tr.hover-row.selection-row > td.el-table__cell, .el-table__body tr.hover-row > td.el-table__cell {
        background-color: #f5f7fa
    }

    .el-table__body tr.current-row > td.el-table__cell, .el-table__body tr.selection-row > td.el-table__cell {
        background-color: #fae7ea
    }

    .el-table__column-resize-proxy {
        border-left: 1px solid #ebeef5;
        bottom: 0;
        left: 200px;
        position: absolute;
        top: 0;
        width: 0;
        z-index: 10
    }

    .el-table__column-filter-trigger {
        cursor: pointer;
        display: inline-block;
        line-height: 34px
    }

    .el-table__column-filter-trigger i {
        color: #909399;
        font-size: 12px;
        transform: scale(.75)
    }

    .el-table--enable-row-transition .el-table__body td.el-table__cell {
        transition: background-color .25s ease
    }

    .el-table--enable-row-hover .el-table__body tr:hover > td.el-table__cell {
        background-color: #f5f7fa
    }

    .el-table--fluid-height .el-table__fixed, .el-table--fluid-height .el-table__fixed-right {
        bottom: 0;
        overflow: hidden
    }

    .el-table [class*=el-table__row--level] .el-table__expand-icon {
        display: inline-block;
        height: 20px;
        line-height: 20px;
        margin-right: 3px;
        text-align: center;
        width: 20px
    }

    .el-table-column--selection .cell {
        padding-left: 14px;
        padding-right: 14px
    }

    .el-table-filter {
        background-color: #fff;
        border: 1px solid #ebeef5;
        border-radius: 2px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        box-sizing: border-box;
        margin: 2px 0
    }

    .el-table-filter__list {
        list-style: none;
        margin: 0;
        min-width: 100px;
        padding: 5px 0
    }

    .el-table-filter__list-item {
        cursor: pointer;
        font-size: 14px;
        line-height: 36px;
        padding: 0 10px
    }

    .el-table-filter__list-item:hover {
        background-color: #fae7ea;
        color: #d34058
    }

    .el-table-filter__list-item.is-active {
        background-color: #c8102e;
        color: #fff
    }

    .el-table-filter__content {
        min-width: 100px
    }

    .el-table-filter__bottom {
        border-top: 1px solid #ebeef5;
        padding: 8px
    }

    .el-table-filter__bottom button {
        background: transparent;
        border: none;
        color: #606266;
        cursor: pointer;
        font-size: 13px;
        padding: 0 3px
    }

    .el-table-filter__bottom button:hover {
        color: #c8102e
    }

    .el-table-filter__bottom button:focus {
        outline: none
    }

    .el-table-filter__bottom button.is-disabled {
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-table-filter__wrap {
        max-height: 280px
    }

    .el-table-filter__checkbox-group {
        padding: 10px
    }

    .el-table-filter__checkbox-group label.el-checkbox {
        display: block;
        margin-bottom: 8px;
        margin-left: 5px;
        margin-right: 5px
    }

    .el-table-filter__checkbox-group .el-checkbox:last-child {
        margin-bottom: 0
    }

    .el-date-table {
        font-size: 12px;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .el-date-table.is-week-mode .el-date-table__row:hover div {
        background-color: #f2f6fc
    }

    .el-date-table.is-week-mode .el-date-table__row:hover td.available:hover {
        color: #606266
    }

    .el-date-table.is-week-mode .el-date-table__row:hover td:first-child div {
        border-bottom-left-radius: 15px;
        border-top-left-radius: 15px;
        margin-left: 5px
    }

    .el-date-table.is-week-mode .el-date-table__row:hover td:last-child div {
        border-bottom-right-radius: 15px;
        border-top-right-radius: 15px;
        margin-right: 5px
    }

    .el-date-table.is-week-mode .el-date-table__row.current div {
        background-color: #f2f6fc
    }

    .el-date-table td {
        box-sizing: border-box;
        cursor: pointer;
        height: 30px;
        padding: 4px 0;
        position: relative;
        text-align: center;
        width: 32px
    }

    .el-date-table td div {
        box-sizing: border-box;
        height: 30px;
        padding: 3px 0
    }

    .el-date-table td span {
        border-radius: 50%;
        display: block;
        height: 24px;
        left: 50%;
        line-height: 24px;
        margin: 0 auto;
        position: absolute;
        transform: translateX(-50%);
        width: 24px
    }

    .el-date-table td.next-month, .el-date-table td.prev-month {
        color: #c0c4cc
    }

    .el-date-table td.today {
        position: relative
    }

    .el-date-table td.today span {
        color: #c8102e;
        font-weight: 700
    }

    .el-date-table td.today.end-date span, .el-date-table td.today.start-date span {
        color: #fff
    }

    .el-date-table td.available:hover {
        color: #c8102e
    }

    .el-date-table td.in-range div, .el-date-table td.in-range div:hover {
        background-color: #f2f6fc
    }

    .el-date-table td.current:not(.disabled) span {
        background-color: #c8102e;
        color: #fff
    }

    .el-date-table td.end-date div, .el-date-table td.start-date div {
        color: #fff
    }

    .el-date-table td.end-date span, .el-date-table td.start-date span {
        background-color: #c8102e
    }

    .el-date-table td.start-date div {
        border-bottom-left-radius: 15px;
        border-top-left-radius: 15px;
        margin-left: 5px
    }

    .el-date-table td.end-date div {
        border-bottom-right-radius: 15px;
        border-top-right-radius: 15px;
        margin-right: 5px
    }

    .el-date-table td.disabled div {
        background-color: #f5f7fa;
        color: #c0c4cc;
        cursor: not-allowed;
        opacity: 1
    }

    .el-date-table td.selected div {
        background-color: #f2f6fc;
        border-radius: 15px;
        margin-left: 5px;
        margin-right: 5px
    }

    .el-date-table td.selected div:hover {
        background-color: #f2f6fc
    }

    .el-date-table td.selected span {
        background-color: #c8102e;
        border-radius: 15px;
        color: #fff
    }

    .el-date-table td.week {
        color: #606266;
        font-size: 80%
    }

    .el-date-table th {
        border-bottom: 1px solid #ebeef5;
        color: #606266;
        font-weight: 400;
        padding: 5px
    }

    .el-month-table {
        border-collapse: collapse;
        font-size: 12px;
        margin: -1px
    }

    .el-month-table td {
        cursor: pointer;
        padding: 8px 0;
        text-align: center
    }

    .el-month-table td div {
        box-sizing: border-box;
        height: 48px;
        padding: 6px 0
    }

    .el-month-table td.today .cell {
        color: #c8102e;
        font-weight: 700
    }

    .el-month-table td.today.end-date .cell, .el-month-table td.today.start-date .cell {
        color: #fff
    }

    .el-month-table td.disabled .cell {
        background-color: #f5f7fa;
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-month-table td.disabled .cell:hover {
        color: #c0c4cc
    }

    .el-month-table td .cell {
        border-radius: 18px;
        color: #606266;
        display: block;
        height: 36px;
        line-height: 36px;
        margin: 0 auto;
        width: 60px
    }

    .el-month-table td .cell:hover {
        color: #c8102e
    }

    .el-month-table td.in-range div, .el-month-table td.in-range div:hover {
        background-color: #f2f6fc
    }

    .el-month-table td.end-date div, .el-month-table td.start-date div {
        color: #fff
    }

    .el-month-table td.end-date .cell, .el-month-table td.start-date .cell {
        background-color: #c8102e;
        color: #fff
    }

    .el-month-table td.start-date div {
        border-bottom-left-radius: 24px;
        border-top-left-radius: 24px
    }

    .el-month-table td.end-date div {
        border-bottom-right-radius: 24px;
        border-top-right-radius: 24px
    }

    .el-month-table td.current:not(.disabled) .cell {
        color: #c8102e
    }

    .el-year-table {
        border-collapse: collapse;
        font-size: 12px;
        margin: -1px
    }

    .el-year-table .el-icon {
        color: #303133
    }

    .el-year-table td {
        cursor: pointer;
        padding: 20px 3px;
        text-align: center
    }

    .el-year-table td.today .cell {
        color: #c8102e;
        font-weight: 700
    }

    .el-year-table td.disabled .cell {
        background-color: #f5f7fa;
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-year-table td.disabled .cell:hover {
        color: #c0c4cc
    }

    .el-year-table td .cell {
        color: #606266;
        display: block;
        height: 32px;
        line-height: 32px;
        margin: 0 auto;
        width: 48px
    }

    .el-year-table td .cell:hover, .el-year-table td.current:not(.disabled) .cell {
        color: #c8102e
    }

    .el-date-range-picker {
        width: 646px
    }

    .el-date-range-picker.has-sidebar {
        width: 756px
    }

    .el-date-range-picker table {
        table-layout: fixed;
        width: 100%
    }

    .el-date-range-picker .el-picker-panel__body {
        min-width: 513px
    }

    .el-date-range-picker .el-picker-panel__content {
        margin: 0
    }

    .el-date-range-picker__header {
        height: 28px;
        position: relative;
        text-align: center
    }

    .el-date-range-picker__header [class*=arrow-left] {
        float: left
    }

    .el-date-range-picker__header [class*=arrow-right] {
        float: right
    }

    .el-date-range-picker__header div {
        font-size: 16px;
        font-weight: 500;
        margin-right: 50px
    }

    .el-date-range-picker__content {
        box-sizing: border-box;
        float: left;
        margin: 0;
        padding: 16px;
        width: 50%
    }

    .el-date-range-picker__content.is-left {
        border-right: 1px solid #e4e4e4
    }

    .el-date-range-picker__content .el-date-range-picker__header div {
        margin-left: 50px;
        margin-right: 50px
    }

    .el-date-range-picker__editors-wrap {
        box-sizing: border-box;
        display: table-cell
    }

    .el-date-range-picker__editors-wrap.is-right {
        text-align: right
    }

    .el-date-range-picker__time-header {
        border-bottom: 1px solid #e4e4e4;
        box-sizing: border-box;
        display: table;
        font-size: 12px;
        padding: 8px 5px 5px;
        position: relative;
        width: 100%
    }

    .el-date-range-picker__time-header > .el-icon-arrow-right {
        color: #303133;
        display: table-cell;
        font-size: 20px;
        vertical-align: middle
    }

    .el-date-range-picker__time-picker-wrap {
        display: table-cell;
        padding: 0 5px;
        position: relative
    }

    .el-date-range-picker__time-picker-wrap .el-picker-panel {
        background: #fff;
        position: absolute;
        right: 0;
        top: 13px;
        z-index: 1
    }

    .el-date-picker {
        width: 322px
    }

    .el-date-picker.has-sidebar.has-time {
        width: 434px
    }

    .el-date-picker.has-sidebar {
        width: 438px
    }

    .el-date-picker.has-time .el-picker-panel__body-wrapper {
        position: relative
    }

    .el-date-picker .el-picker-panel__content {
        width: 292px
    }

    .el-date-picker table {
        table-layout: fixed;
        width: 100%
    }

    .el-date-picker__editor-wrap {
        display: table-cell;
        padding: 0 5px;
        position: relative
    }

    .el-date-picker__time-header {
        border-bottom: 1px solid #e4e4e4;
        box-sizing: border-box;
        display: table;
        font-size: 12px;
        padding: 8px 5px 5px;
        position: relative;
        width: 100%
    }

    .el-date-picker__header {
        margin: 12px;
        text-align: center
    }

    .el-date-picker__header--bordered {
        border-bottom: 1px solid #ebeef5;
        margin-bottom: 0;
        padding-bottom: 12px
    }

    .el-date-picker__header--bordered + .el-picker-panel__content {
        margin-top: 0
    }

    .el-date-picker__header-label {
        color: #606266;
        cursor: pointer;
        font-size: 16px;
        font-weight: 500;
        line-height: 22px;
        padding: 0 5px;
        text-align: center
    }

    .el-date-picker__header-label.active, .el-date-picker__header-label:hover {
        color: #c8102e
    }

    .el-date-picker__prev-btn {
        float: left
    }

    .el-date-picker__next-btn {
        float: right
    }

    .el-date-picker__time-wrap {
        padding: 10px;
        text-align: center
    }

    .el-date-picker__time-label {
        cursor: pointer;
        float: left;
        line-height: 30px;
        margin-left: 10px
    }

    .time-select {
        margin: 5px 0;
        min-width: 0
    }

    .time-select .el-picker-panel__content {
        margin: 0;
        max-height: 200px
    }

    .time-select-item {
        font-size: 14px;
        line-height: 20px;
        padding: 8px 10px
    }

    .time-select-item.selected:not(.disabled) {
        color: #c8102e;
        font-weight: 700
    }

    .time-select-item.disabled {
        color: #e4e7ed;
        cursor: not-allowed
    }

    .time-select-item:hover {
        background-color: #f5f7fa;
        cursor: pointer;
        font-weight: 700
    }

    .el-date-editor {
        display: inline-block;
        position: relative;
        text-align: left
    }

    .el-date-editor.el-input, .el-date-editor.el-input__inner {
        width: 220px
    }

    .el-date-editor--monthrange.el-input, .el-date-editor--monthrange.el-input__inner {
        width: 300px
    }

    .el-date-editor--daterange.el-input, .el-date-editor--daterange.el-input__inner, .el-date-editor--timerange.el-input, .el-date-editor--timerange.el-input__inner {
        width: 350px
    }

    .el-date-editor--datetimerange.el-input, .el-date-editor--datetimerange.el-input__inner {
        width: 400px
    }

    .el-date-editor--dates .el-input__inner {
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .el-date-editor .el-icon-circle-close {
        cursor: pointer
    }

    .el-date-editor .el-range__icon {
        color: #c0c4cc;
        float: left;
        font-size: 14px;
        line-height: 32px;
        margin-left: -5px
    }

    .el-date-editor .el-range-input {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: none;
        color: #606266;
        display: inline-block;
        font-size: 14px;
        height: 100%;
        margin: 0;
        outline: none;
        padding: 0;
        text-align: center;
        width: 39%
    }

    .el-date-editor .el-range-input::-moz-placeholder {
        color: #c0c4cc
    }

    .el-date-editor .el-range-input::placeholder {
        color: #c0c4cc
    }

    .el-date-editor .el-range-separator {
        color: #303133;
        display: inline-block;
        font-size: 14px;
        height: 100%;
        line-height: 32px;
        margin: 0;
        padding: 0 5px;
        text-align: center;
        width: 5%
    }

    .el-date-editor .el-range__close-icon {
        color: #c0c4cc;
        display: inline-block;
        float: right;
        font-size: 14px;
        line-height: 32px;
        width: 25px
    }

    .el-range-editor.el-input__inner {
        align-items: center;
        display: inline-flex;
        padding: 3px 10px
    }

    .el-range-editor .el-range-input {
        line-height: 1
    }

    .el-range-editor.is-active, .el-range-editor.is-active:hover {
        border-color: #c8102e
    }

    .el-range-editor--medium.el-input__inner {
        height: 36px
    }

    .el-range-editor--medium .el-range-separator {
        font-size: 14px;
        line-height: 28px
    }

    .el-range-editor--medium .el-range-input {
        font-size: 14px
    }

    .el-range-editor--medium .el-range__close-icon, .el-range-editor--medium .el-range__icon {
        line-height: 28px
    }

    .el-range-editor--small.el-input__inner {
        height: 32px
    }

    .el-range-editor--small .el-range-separator {
        font-size: 13px;
        line-height: 24px
    }

    .el-range-editor--small .el-range-input {
        font-size: 13px
    }

    .el-range-editor--small .el-range__close-icon, .el-range-editor--small .el-range__icon {
        line-height: 24px
    }

    .el-range-editor--mini.el-input__inner {
        height: 28px
    }

    .el-range-editor--mini .el-range-separator {
        font-size: 12px;
        line-height: 20px
    }

    .el-range-editor--mini .el-range-input {
        font-size: 12px
    }

    .el-range-editor--mini .el-range__close-icon, .el-range-editor--mini .el-range__icon {
        line-height: 20px
    }

    .el-range-editor.is-disabled {
        background-color: #f5f7fa;
        border-color: #e4e7ed;
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-range-editor.is-disabled:focus, .el-range-editor.is-disabled:hover {
        border-color: #e4e7ed
    }

    .el-range-editor.is-disabled input {
        background-color: #f5f7fa;
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-range-editor.is-disabled input::-moz-placeholder {
        color: #c0c4cc
    }

    .el-range-editor.is-disabled input::placeholder {
        color: #c0c4cc
    }

    .el-range-editor.is-disabled .el-range-separator {
        color: #c0c4cc
    }

    .el-picker-panel {
        background: #fff;
        border: 1px solid #e4e7ed;
        border-radius: 4px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        color: #606266;
        line-height: 30px;
        margin: 5px 0
    }

    .el-picker-panel__body-wrapper:after, .el-picker-panel__body:after {
        clear: both;
        content: "";
        display: table
    }

    .el-picker-panel__content {
        margin: 15px;
        position: relative
    }

    .el-picker-panel__footer {
        background-color: #fff;
        border-top: 1px solid #e4e4e4;
        font-size: 0;
        padding: 4px;
        position: relative;
        text-align: right
    }

    .el-picker-panel__shortcut {
        background-color: transparent;
        border: 0;
        color: #606266;
        cursor: pointer;
        display: block;
        font-size: 14px;
        line-height: 28px;
        outline: none;
        padding-left: 12px;
        text-align: left;
        width: 100%
    }

    .el-picker-panel__shortcut:hover {
        color: #c8102e
    }

    .el-picker-panel__shortcut.active {
        background-color: #e6f1fe;
        color: #c8102e
    }

    .el-picker-panel__btn {
        background-color: transparent;
        border: 1px solid #dcdcdc;
        border-radius: 2px;
        color: #333;
        cursor: pointer;
        font-size: 12px;
        line-height: 24px;
        outline: none;
        padding: 0 20px
    }

    .el-picker-panel__btn[disabled] {
        color: #ccc;
        cursor: not-allowed
    }

    .el-picker-panel__icon-btn {
        background: transparent;
        border: 0;
        color: #303133;
        cursor: pointer;
        font-size: 12px;
        margin-top: 8px;
        outline: none
    }

    .el-picker-panel__icon-btn:hover {
        color: #c8102e
    }

    .el-picker-panel__icon-btn.is-disabled {
        color: #bbb
    }

    .el-picker-panel__icon-btn.is-disabled:hover {
        cursor: not-allowed
    }

    .el-picker-panel__link-btn {
        vertical-align: middle
    }

    .el-picker-panel [slot=sidebar], .el-picker-panel__sidebar {
        background-color: #fff;
        border-right: 1px solid #e4e4e4;
        bottom: 0;
        box-sizing: border-box;
        overflow: auto;
        padding-top: 6px;
        position: absolute;
        top: 0;
        width: 110px
    }

    .el-picker-panel [slot=sidebar] + .el-picker-panel__body, .el-picker-panel__sidebar + .el-picker-panel__body {
        margin-left: 110px
    }

    .el-time-spinner.has-seconds .el-time-spinner__wrapper {
        width: 33.3%
    }

    .el-time-spinner__wrapper {
        display: inline-block;
        max-height: 190px;
        overflow: auto;
        position: relative;
        vertical-align: top;
        width: 50%
    }

    .el-time-spinner__wrapper .el-scrollbar__wrap:not(.el-scrollbar__wrap--hidden-default) {
        padding-bottom: 15px
    }

    .el-time-spinner__wrapper.is-arrow {
        box-sizing: border-box;
        overflow: hidden;
        text-align: center
    }

    .el-time-spinner__wrapper.is-arrow .el-time-spinner__list {
        transform: translateY(-32px)
    }

    .el-time-spinner__wrapper.is-arrow .el-time-spinner__item:hover:not(.disabled):not(.active) {
        background: #fff;
        cursor: default
    }

    .el-time-spinner__arrow {
        color: #909399;
        cursor: pointer;
        font-size: 12px;
        height: 30px;
        left: 0;
        line-height: 30px;
        position: absolute;
        text-align: center;
        width: 100%;
        z-index: 1
    }

    .el-time-spinner__arrow:hover {
        color: #c8102e
    }

    .el-time-spinner__arrow.el-icon-arrow-up {
        top: 10px
    }

    .el-time-spinner__arrow.el-icon-arrow-down {
        bottom: 10px
    }

    .el-time-spinner__input.el-input {
        width: 70%
    }

    .el-time-spinner__input.el-input .el-input__inner, .el-time-spinner__list {
        padding: 0;
        text-align: center
    }

    .el-time-spinner__list {
        list-style: none;
        margin: 0
    }

    .el-time-spinner__list:after, .el-time-spinner__list:before {
        content: "";
        display: block;
        height: 80px;
        width: 100%
    }

    .el-time-spinner__item {
        color: #606266;
        font-size: 12px;
        height: 32px;
        line-height: 32px
    }

    .el-time-spinner__item:hover:not(.disabled):not(.active) {
        background: #f5f7fa;
        cursor: pointer
    }

    .el-time-spinner__item.active:not(.disabled) {
        color: #303133;
        font-weight: 700
    }

    .el-time-spinner__item.disabled {
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-time-panel {
        background-color: #fff;
        border: 1px solid #e4e7ed;
        border-radius: 2px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        box-sizing: content-box;
        left: 0;
        margin: 5px 0;
        position: absolute;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        width: 180px;
        z-index: 1000
    }

    .el-time-panel__content {
        font-size: 0;
        overflow: hidden;
        position: relative
    }

    .el-time-panel__content:after, .el-time-panel__content:before {
        border-bottom: 1px solid #e4e7ed;
        border-top: 1px solid #e4e7ed;
        box-sizing: border-box;
        content: "";
        height: 32px;
        left: 0;
        margin-top: -15px;
        padding-top: 6px;
        position: absolute;
        right: 0;
        text-align: left;
        top: 50%;
        z-index: -1
    }

    .el-time-panel__content:after {
        left: 50%;
        margin-left: 12%;
        margin-right: 12%
    }

    .el-time-panel__content:before {
        margin-left: 12%;
        margin-right: 12%;
        padding-left: 50%
    }

    .el-time-panel__content.has-seconds:after {
        left: 66.66667%
    }

    .el-time-panel__content.has-seconds:before {
        padding-left: 33.33333%
    }

    .el-time-panel__footer {
        border-top: 1px solid #e4e4e4;
        box-sizing: border-box;
        height: 36px;
        line-height: 25px;
        padding: 4px;
        text-align: right
    }

    .el-time-panel__btn {
        background-color: transparent;
        border: none;
        color: #303133;
        cursor: pointer;
        font-size: 12px;
        line-height: 28px;
        margin: 0 5px;
        outline: none;
        padding: 0 5px
    }

    .el-time-panel__btn.confirm {
        color: #c8102e;
        font-weight: 800
    }

    .el-time-range-picker {
        overflow: visible;
        width: 354px
    }

    .el-time-range-picker__content {
        padding: 10px;
        position: relative;
        text-align: center
    }

    .el-time-range-picker__cell {
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        padding: 4px 7px 7px;
        width: 50%
    }

    .el-time-range-picker__header {
        font-size: 14px;
        margin-bottom: 5px;
        text-align: center
    }

    .el-time-range-picker__body {
        border: 1px solid #e4e7ed;
        border-radius: 2px
    }

    .el-popover {
        background: #fff;
        border: 1px solid #ebeef5;
        border-radius: 4px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        color: #606266;
        font-size: 14px;
        line-height: 1.4;
        min-width: 150px;
        padding: 12px;
        position: absolute;
        text-align: justify;
        word-break: break-all;
        z-index: 2000
    }

    .el-popover--plain {
        padding: 18px 20px
    }

    .el-popover__title {
        color: #303133;
        font-size: 16px;
        line-height: 1;
        margin-bottom: 12px
    }

    .el-popover:focus, .el-popover:focus:active, .el-popover__reference:focus:hover, .el-popover__reference:focus:not(.focusing) {
        outline-width: 0
    }

    .v-modal-enter {
        animation: v-modal-in .2s ease
    }

    .v-modal-leave {
        animation: v-modal-out .2s ease forwards
    }

    @keyframes v-modal-in {
        0% {
            opacity: 0
        }
    }

    @keyframes v-modal-out {
        to {
            opacity: 0
        }
    }

    .v-modal {
        background: #000;
        height: 100%;
        left: 0;
        opacity: .5;
        position: fixed;
        top: 0;
        width: 100%
    }

    .el-popup-parent--hidden {
        overflow: hidden
    }

    .el-message-box {
        backface-visibility: hidden;
        background-color: #fff;
        border: 1px solid #ebeef5;
        border-radius: 4px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        display: inline-block;
        font-size: 18px;
        overflow: hidden;
        padding-bottom: 10px;
        text-align: left;
        vertical-align: middle;
        width: 420px
    }

    .el-message-box__wrapper {
        bottom: 0;
        left: 0;
        position: fixed;
        right: 0;
        text-align: center;
        top: 0
    }

    .el-message-box__wrapper:after {
        content: "";
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        width: 0
    }

    .el-message-box__header {
        padding: 15px 15px 10px;
        position: relative
    }

    .el-message-box__title {
        color: #303133;
        font-size: 18px;
        line-height: 1;
        margin-bottom: 0;
        padding-left: 0
    }

    .el-message-box__headerbtn {
        background: transparent;
        border: none;
        cursor: pointer;
        font-size: 16px;
        outline: none;
        padding: 0;
        position: absolute;
        right: 15px;
        top: 15px
    }

    .el-message-box__headerbtn .el-message-box__close {
        color: #909399
    }

    .el-message-box__headerbtn:focus .el-message-box__close, .el-message-box__headerbtn:hover .el-message-box__close {
        color: #c8102e
    }

    .el-message-box__content {
        color: #606266;
        font-size: 14px;
        padding: 10px 15px
    }

    .el-message-box__container {
        position: relative
    }

    .el-message-box__input {
        padding-top: 15px
    }

    .el-message-box__input input.invalid, .el-message-box__input input.invalid:focus {
        border-color: #f56c6c
    }

    .el-message-box__status {
        font-size: 24px !important;
        position: absolute;
        top: 50%;
        transform: translateY(-50%)
    }

    .el-message-box__status:before {
        padding-left: 1px
    }

    .el-message-box__status + .el-message-box__message {
        padding-left: 36px;
        padding-right: 12px
    }

    .el-message-box__status.el-icon-success {
        color: #67c23a
    }

    .el-message-box__status.el-icon-info {
        color: #909399
    }

    .el-message-box__status.el-icon-warning {
        color: #e6a23c
    }

    .el-message-box__status.el-icon-error {
        color: #f56c6c
    }

    .el-message-box__message {
        margin: 0
    }

    .el-message-box__message p {
        line-height: 24px;
        margin: 0
    }

    .el-message-box__errormsg {
        color: #f56c6c;
        font-size: 12px;
        margin-top: 2px;
        min-height: 18px
    }

    .el-message-box__btns {
        padding: 5px 15px 0;
        text-align: right
    }

    .el-message-box__btns button:nth-child(2) {
        margin-left: 10px
    }

    .el-message-box__btns-reverse {
        flex-direction: row-reverse
    }

    .el-message-box--center {
        padding-bottom: 30px
    }

    .el-message-box--center .el-message-box__header {
        padding-top: 30px
    }

    .el-message-box--center .el-message-box__title {
        align-items: center;
        display: flex;
        justify-content: center;
        position: relative
    }

    .el-message-box--center .el-message-box__status {
        padding-right: 5px;
        position: relative;
        text-align: center;
        top: auto;
        transform: translateY(-1px)
    }

    .el-message-box--center .el-message-box__message {
        margin-left: 0
    }

    .el-message-box--center .el-message-box__btns, .el-message-box--center .el-message-box__content {
        text-align: center
    }

    .el-message-box--center .el-message-box__content {
        padding-left: 27px;
        padding-right: 27px
    }

    .msgbox-fade-enter-active {
        animation: msgbox-fade-in .3s
    }

    .msgbox-fade-leave-active {
        animation: msgbox-fade-out .3s
    }

    @keyframes msgbox-fade-in {
        0% {
            opacity: 0;
            transform: translate3d(0, -20px, 0)
        }
        to {
            opacity: 1;
            transform: translateZ(0)
        }
    }

    @keyframes msgbox-fade-out {
        0% {
            opacity: 1;
            transform: translateZ(0)
        }
        to {
            opacity: 0;
            transform: translate3d(0, -20px, 0)
        }
    }

    .el-breadcrumb {
        font-size: 14px;
        line-height: 1
    }

    .el-breadcrumb:after, .el-breadcrumb:before {
        content: "";
        display: table
    }

    .el-breadcrumb:after {
        clear: both
    }

    .el-breadcrumb__separator {
        color: #c0c4cc;
        font-weight: 700;
        margin: 0 9px
    }

    .el-breadcrumb__separator[class*=icon] {
        font-weight: 400;
        margin: 0 6px
    }

    .el-breadcrumb__item {
        float: left
    }

    .el-breadcrumb__inner {
        color: #606266
    }

    .el-breadcrumb__inner a, .el-breadcrumb__inner.is-link {
        color: #303133;
        font-weight: 700;
        -webkit-text-decoration: none;
        text-decoration: none;
        transition: color .2s cubic-bezier(.645, .045, .355, 1)
    }

    .el-breadcrumb__inner a:hover, .el-breadcrumb__inner.is-link:hover {
        color: #c8102e;
        cursor: pointer
    }

    .el-breadcrumb__item:last-child .el-breadcrumb__inner, .el-breadcrumb__item:last-child .el-breadcrumb__inner a, .el-breadcrumb__item:last-child .el-breadcrumb__inner a:hover, .el-breadcrumb__item:last-child .el-breadcrumb__inner:hover {
        color: #606266;
        cursor: text;
        font-weight: 400
    }

    .el-breadcrumb__item:last-child .el-breadcrumb__separator {
        display: none
    }

    .el-form--label-left .el-form-item__label {
        text-align: left
    }

    .el-form--label-top .el-form-item__label {
        display: inline-block;
        float: none;
        padding: 0 0 10px;
        text-align: left
    }

    .el-form--inline .el-form-item {
        display: inline-block;
        margin-right: 10px;
        vertical-align: top
    }

    .el-form--inline .el-form-item__label {
        display: inline-block;
        float: none
    }

    .el-form--inline .el-form-item__content {
        display: inline-block;
        vertical-align: top
    }

    .el-form--inline.el-form--label-top .el-form-item__content {
        display: block
    }

    .el-form-item {
        margin-bottom: 22px
    }

    .el-form-item:after, .el-form-item:before {
        content: "";
        display: table
    }

    .el-form-item:after {
        clear: both
    }

    .el-form-item .el-form-item {
        margin-bottom: 0
    }

    .el-form-item .el-input__validateIcon {
        display: none
    }

    .el-form-item--medium .el-form-item__content, .el-form-item--medium .el-form-item__label {
        line-height: 36px
    }

    .el-form-item--small .el-form-item__content, .el-form-item--small .el-form-item__label {
        line-height: 32px
    }

    .el-form-item--small.el-form-item {
        margin-bottom: 18px
    }

    .el-form-item--small .el-form-item__error {
        padding-top: 2px
    }

    .el-form-item--mini .el-form-item__content, .el-form-item--mini .el-form-item__label {
        line-height: 28px
    }

    .el-form-item--mini.el-form-item {
        margin-bottom: 18px
    }

    .el-form-item--mini .el-form-item__error {
        padding-top: 1px
    }

    .el-form-item__label-wrap {
        float: left
    }

    .el-form-item__label-wrap .el-form-item__label {
        display: inline-block;
        float: none
    }

    .el-form-item__label {
        box-sizing: border-box;
        color: #606266;
        float: left;
        font-size: 14px;
        line-height: 40px;
        padding: 0 12px 0 0;
        text-align: right;
        vertical-align: middle
    }

    .el-form-item__content {
        font-size: 14px;
        line-height: 40px;
        position: relative
    }

    .el-form-item__content:after, .el-form-item__content:before {
        content: "";
        display: table
    }

    .el-form-item__content:after {
        clear: both
    }

    .el-form-item__content .el-input-group {
        vertical-align: top
    }

    .el-form-item__error {
        color: #f56c6c;
        font-size: 12px;
        left: 0;
        line-height: 1;
        padding-top: 4px;
        position: absolute;
        top: 100%
    }

    .el-form-item__error--inline {
        display: inline-block;
        left: auto;
        margin-left: 10px;
        position: relative;
        top: auto
    }

    .el-form-item.is-required:not(.is-no-asterisk) .el-form-item__label-wrap > .el-form-item__label:before, .el-form-item.is-required:not(.is-no-asterisk) > .el-form-item__label:before {
        color: #f56c6c;
        content: "*";
        margin-right: 4px
    }

    .el-form-item.is-error .el-input__inner, .el-form-item.is-error .el-input__inner:focus, .el-form-item.is-error .el-textarea__inner, .el-form-item.is-error .el-textarea__inner:focus {
        border-color: #f56c6c
    }

    .el-form-item.is-error .el-input-group__append .el-input__inner, .el-form-item.is-error .el-input-group__prepend .el-input__inner {
        border-color: transparent
    }

    .el-form-item.is-error .el-input__validateIcon {
        color: #f56c6c
    }

    .el-form-item--feedback .el-input__validateIcon {
        display: inline-block
    }

    .el-tabs__header {
        margin: 0 0 15px;
        padding: 0;
        position: relative
    }

    .el-tabs__active-bar {
        background-color: #c8102e;
        bottom: 0;
        height: 2px;
        left: 0;
        list-style: none;
        position: absolute;
        transition: transform .3s cubic-bezier(.645, .045, .355, 1);
        z-index: 1
    }

    .el-tabs__new-tab {
        border: 1px solid #d3dce6;
        border-radius: 3px;
        color: #d3dce6;
        cursor: pointer;
        float: right;
        font-size: 12px;
        height: 18px;
        line-height: 18px;
        margin: 12px 0 9px 10px;
        text-align: center;
        transition: all .15s;
        width: 18px
    }

    .el-tabs__new-tab .el-icon-plus {
        transform: scale(.8)
    }

    .el-tabs__new-tab:hover {
        color: #c8102e
    }

    .el-tabs__nav-wrap {
        margin-bottom: -1px;
        overflow: hidden;
        position: relative
    }

    .el-tabs__nav-wrap:after {
        background-color: #e4e7ed;
        bottom: 0;
        content: "";
        height: 2px;
        left: 0;
        position: absolute;
        width: 100%;
        z-index: 1
    }

    .el-tabs__nav-wrap.is-scrollable {
        box-sizing: border-box;
        padding: 0 20px
    }

    .el-tabs__nav-scroll {
        overflow: hidden
    }

    .el-tabs__nav-next, .el-tabs__nav-prev {
        color: #909399;
        cursor: pointer;
        font-size: 12px;
        line-height: 44px;
        position: absolute
    }

    .el-tabs__nav-next {
        right: 0
    }

    .el-tabs__nav-prev {
        left: 0
    }

    .el-tabs__nav {
        float: left;
        position: relative;
        transition: transform .3s;
        white-space: nowrap;
        z-index: 2
    }

    .el-tabs__nav.is-stretch {
        display: flex;
        min-width: 100%
    }

    .el-tabs__nav.is-stretch > * {
        flex: 1;
        text-align: center
    }

    .el-tabs__item {
        box-sizing: border-box;
        color: #303133;
        display: inline-block;
        font-size: 14px;
        font-weight: 500;
        height: 40px;
        line-height: 40px;
        list-style: none;
        padding: 0 20px;
        position: relative
    }

    .el-tabs__item:focus, .el-tabs__item:focus:active {
        outline: none
    }

    .el-tabs__item:focus.is-active.is-focus:not(:active) {
        border-radius: 3px;
        box-shadow: inset 0 0 2px 2px #c8102e
    }

    .el-tabs__item .el-icon-close {
        border-radius: 50%;
        margin-left: 5px;
        text-align: center;
        transition: all .3s cubic-bezier(.645, .045, .355, 1)
    }

    .el-tabs__item .el-icon-close:before {
        display: inline-block;
        transform: scale(.9)
    }

    .el-tabs__item .el-icon-close:hover {
        background-color: #c0c4cc;
        color: #fff
    }

    .el-tabs__item.is-active {
        color: #c8102e
    }

    .el-tabs__item:hover {
        color: #c8102e;
        cursor: pointer
    }

    .el-tabs__item.is-disabled {
        color: #c0c4cc;
        cursor: default
    }

    .el-tabs__content {
        overflow: hidden;
        position: relative
    }

    .el-tabs--card > .el-tabs__header {
        border-bottom: 1px solid #e4e7ed
    }

    .el-tabs--card > .el-tabs__header .el-tabs__nav-wrap:after {
        content: none
    }

    .el-tabs--card > .el-tabs__header .el-tabs__nav {
        border: 1px solid #e4e7ed;
        border-bottom: none;
        border-radius: 4px 4px 0 0;
        box-sizing: border-box
    }

    .el-tabs--card > .el-tabs__header .el-tabs__active-bar {
        display: none
    }

    .el-tabs--card > .el-tabs__header .el-tabs__item .el-icon-close {
        font-size: 12px;
        height: 14px;
        line-height: 15px;
        overflow: hidden;
        position: relative;
        right: -2px;
        top: -1px;
        transform-origin: 100% 50%;
        vertical-align: middle;
        width: 0
    }

    .el-tabs--card > .el-tabs__header .el-tabs__item {
        border-bottom: 1px solid transparent;
        border-left: 1px solid #e4e7ed;
        transition: color .3s cubic-bezier(.645, .045, .355, 1), padding .3s cubic-bezier(.645, .045, .355, 1)
    }

    .el-tabs--card > .el-tabs__header .el-tabs__item:first-child {
        border-left: none
    }

    .el-tabs--card > .el-tabs__header .el-tabs__item.is-closable:hover {
        padding-left: 13px;
        padding-right: 13px
    }

    .el-tabs--card > .el-tabs__header .el-tabs__item.is-closable:hover .el-icon-close {
        width: 14px
    }

    .el-tabs--card > .el-tabs__header .el-tabs__item.is-active {
        border-bottom-color: #fff
    }

    .el-tabs--card > .el-tabs__header .el-tabs__item.is-active.is-closable {
        padding-left: 20px;
        padding-right: 20px
    }

    .el-tabs--card > .el-tabs__header .el-tabs__item.is-active.is-closable .el-icon-close {
        width: 14px
    }

    .el-tabs--border-card {
        background: #fff;
        border: 1px solid #dcdfe6;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .12), 0 0 6px 0 rgba(0, 0, 0, .04)
    }

    .el-tabs--border-card > .el-tabs__content {
        padding: 15px
    }

    .el-tabs--border-card > .el-tabs__header {
        background-color: #f5f7fa;
        border-bottom: 1px solid #e4e7ed;
        margin: 0
    }

    .el-tabs--border-card > .el-tabs__header .el-tabs__nav-wrap:after {
        content: none
    }

    .el-tabs--border-card > .el-tabs__header .el-tabs__item {
        border: 1px solid transparent;
        color: #909399;
        margin-top: -1px;
        transition: all .3s cubic-bezier(.645, .045, .355, 1)
    }

    .el-tabs--border-card > .el-tabs__header .el-tabs__item + .el-tabs__item, .el-tabs--border-card > .el-tabs__header .el-tabs__item:first-child {
        margin-left: -1px
    }

    .el-tabs--border-card > .el-tabs__header .el-tabs__item.is-active {
        background-color: #fff;
        border-left-color: #dcdfe6;
        border-right-color: #dcdfe6;
        color: #c8102e
    }

    .el-tabs--border-card > .el-tabs__header .el-tabs__item:not(.is-disabled):hover {
        color: #c8102e
    }

    .el-tabs--border-card > .el-tabs__header .el-tabs__item.is-disabled {
        color: #c0c4cc
    }

    .el-tabs--border-card > .el-tabs__header .is-scrollable .el-tabs__item:first-child {
        margin-left: 0
    }

    .el-tabs--bottom .el-tabs__item.is-bottom:nth-child(2), .el-tabs--bottom .el-tabs__item.is-top:nth-child(2), .el-tabs--top .el-tabs__item.is-bottom:nth-child(2), .el-tabs--top .el-tabs__item.is-top:nth-child(2) {
        padding-left: 0
    }

    .el-tabs--bottom .el-tabs__item.is-bottom:last-child, .el-tabs--bottom .el-tabs__item.is-top:last-child, .el-tabs--top .el-tabs__item.is-bottom:last-child, .el-tabs--top .el-tabs__item.is-top:last-child {
        padding-right: 0
    }

    .el-tabs--bottom .el-tabs--left > .el-tabs__header .el-tabs__item:nth-child(2), .el-tabs--bottom .el-tabs--right > .el-tabs__header .el-tabs__item:nth-child(2), .el-tabs--bottom.el-tabs--border-card > .el-tabs__header .el-tabs__item:nth-child(2), .el-tabs--bottom.el-tabs--card > .el-tabs__header .el-tabs__item:nth-child(2), .el-tabs--top .el-tabs--left > .el-tabs__header .el-tabs__item:nth-child(2), .el-tabs--top .el-tabs--right > .el-tabs__header .el-tabs__item:nth-child(2), .el-tabs--top.el-tabs--border-card > .el-tabs__header .el-tabs__item:nth-child(2), .el-tabs--top.el-tabs--card > .el-tabs__header .el-tabs__item:nth-child(2) {
        padding-left: 20px
    }

    .el-tabs--bottom .el-tabs--left > .el-tabs__header .el-tabs__item:last-child, .el-tabs--bottom .el-tabs--right > .el-tabs__header .el-tabs__item:last-child, .el-tabs--bottom.el-tabs--border-card > .el-tabs__header .el-tabs__item:last-child, .el-tabs--bottom.el-tabs--card > .el-tabs__header .el-tabs__item:last-child, .el-tabs--top .el-tabs--left > .el-tabs__header .el-tabs__item:last-child, .el-tabs--top .el-tabs--right > .el-tabs__header .el-tabs__item:last-child, .el-tabs--top.el-tabs--border-card > .el-tabs__header .el-tabs__item:last-child, .el-tabs--top.el-tabs--card > .el-tabs__header .el-tabs__item:last-child {
        padding-right: 20px
    }

    .el-tabs--bottom .el-tabs__header.is-bottom {
        margin-bottom: 0;
        margin-top: 10px
    }

    .el-tabs--bottom.el-tabs--border-card .el-tabs__header.is-bottom {
        border-bottom: 0;
        border-top: 1px solid #dcdfe6
    }

    .el-tabs--bottom.el-tabs--border-card .el-tabs__nav-wrap.is-bottom {
        margin-bottom: 0;
        margin-top: -1px
    }

    .el-tabs--bottom.el-tabs--border-card .el-tabs__item.is-bottom:not(.is-active) {
        border: 1px solid transparent
    }

    .el-tabs--bottom.el-tabs--border-card .el-tabs__item.is-bottom {
        margin: 0 -1px -1px
    }

    .el-tabs--left, .el-tabs--right {
        overflow: hidden
    }

    .el-tabs--left .el-tabs__header.is-left, .el-tabs--left .el-tabs__header.is-right, .el-tabs--left .el-tabs__nav-scroll, .el-tabs--left .el-tabs__nav-wrap.is-left, .el-tabs--left .el-tabs__nav-wrap.is-right, .el-tabs--right .el-tabs__header.is-left, .el-tabs--right .el-tabs__header.is-right, .el-tabs--right .el-tabs__nav-scroll, .el-tabs--right .el-tabs__nav-wrap.is-left, .el-tabs--right .el-tabs__nav-wrap.is-right {
        height: 100%
    }

    .el-tabs--left .el-tabs__active-bar.is-left, .el-tabs--left .el-tabs__active-bar.is-right, .el-tabs--right .el-tabs__active-bar.is-left, .el-tabs--right .el-tabs__active-bar.is-right {
        bottom: auto;
        height: auto;
        top: 0;
        width: 2px
    }

    .el-tabs--left .el-tabs__nav-wrap.is-left, .el-tabs--left .el-tabs__nav-wrap.is-right, .el-tabs--right .el-tabs__nav-wrap.is-left, .el-tabs--right .el-tabs__nav-wrap.is-right {
        margin-bottom: 0
    }

    .el-tabs--left .el-tabs__nav-wrap.is-left > .el-tabs__nav-next, .el-tabs--left .el-tabs__nav-wrap.is-left > .el-tabs__nav-prev, .el-tabs--left .el-tabs__nav-wrap.is-right > .el-tabs__nav-next, .el-tabs--left .el-tabs__nav-wrap.is-right > .el-tabs__nav-prev, .el-tabs--right .el-tabs__nav-wrap.is-left > .el-tabs__nav-next, .el-tabs--right .el-tabs__nav-wrap.is-left > .el-tabs__nav-prev, .el-tabs--right .el-tabs__nav-wrap.is-right > .el-tabs__nav-next, .el-tabs--right .el-tabs__nav-wrap.is-right > .el-tabs__nav-prev {
        cursor: pointer;
        height: 30px;
        line-height: 30px;
        text-align: center;
        width: 100%
    }

    .el-tabs--left .el-tabs__nav-wrap.is-left > .el-tabs__nav-next i, .el-tabs--left .el-tabs__nav-wrap.is-left > .el-tabs__nav-prev i, .el-tabs--left .el-tabs__nav-wrap.is-right > .el-tabs__nav-next i, .el-tabs--left .el-tabs__nav-wrap.is-right > .el-tabs__nav-prev i, .el-tabs--right .el-tabs__nav-wrap.is-left > .el-tabs__nav-next i, .el-tabs--right .el-tabs__nav-wrap.is-left > .el-tabs__nav-prev i, .el-tabs--right .el-tabs__nav-wrap.is-right > .el-tabs__nav-next i, .el-tabs--right .el-tabs__nav-wrap.is-right > .el-tabs__nav-prev i {
        transform: rotate(90deg)
    }

    .el-tabs--left .el-tabs__nav-wrap.is-left > .el-tabs__nav-prev, .el-tabs--left .el-tabs__nav-wrap.is-right > .el-tabs__nav-prev, .el-tabs--right .el-tabs__nav-wrap.is-left > .el-tabs__nav-prev, .el-tabs--right .el-tabs__nav-wrap.is-right > .el-tabs__nav-prev {
        left: auto;
        top: 0
    }

    .el-tabs--left .el-tabs__nav-wrap.is-left > .el-tabs__nav-next, .el-tabs--left .el-tabs__nav-wrap.is-right > .el-tabs__nav-next, .el-tabs--right .el-tabs__nav-wrap.is-left > .el-tabs__nav-next, .el-tabs--right .el-tabs__nav-wrap.is-right > .el-tabs__nav-next {
        bottom: 0;
        right: auto
    }

    .el-tabs--left .el-tabs__nav-wrap.is-left.is-scrollable, .el-tabs--left .el-tabs__nav-wrap.is-right.is-scrollable, .el-tabs--right .el-tabs__nav-wrap.is-left.is-scrollable, .el-tabs--right .el-tabs__nav-wrap.is-right.is-scrollable {
        padding: 30px 0
    }

    .el-tabs--left .el-tabs__nav-wrap.is-left:after, .el-tabs--left .el-tabs__nav-wrap.is-right:after, .el-tabs--right .el-tabs__nav-wrap.is-left:after, .el-tabs--right .el-tabs__nav-wrap.is-right:after {
        bottom: auto;
        height: 100%;
        top: 0;
        width: 2px
    }

    .el-tabs--left .el-tabs__nav.is-left, .el-tabs--left .el-tabs__nav.is-right, .el-tabs--right .el-tabs__nav.is-left, .el-tabs--right .el-tabs__nav.is-right {
        float: none
    }

    .el-tabs--left .el-tabs__item.is-left, .el-tabs--left .el-tabs__item.is-right, .el-tabs--right .el-tabs__item.is-left, .el-tabs--right .el-tabs__item.is-right {
        display: block
    }

    .el-tabs--left .el-tabs__header.is-left {
        float: left;
        margin-bottom: 0;
        margin-right: 10px
    }

    .el-tabs--left .el-tabs__nav-wrap.is-left {
        margin-right: -1px
    }

    .el-tabs--left .el-tabs__active-bar.is-left, .el-tabs--left .el-tabs__nav-wrap.is-left:after {
        left: auto;
        right: 0
    }

    .el-tabs--left .el-tabs__item.is-left {
        text-align: right
    }

    .el-tabs--left.el-tabs--card .el-tabs__active-bar.is-left {
        display: none
    }

    .el-tabs--left.el-tabs--card .el-tabs__item.is-left {
        border: 1px solid #e4e7ed;
        border-bottom: none;
        border-left: none;
        text-align: left
    }

    .el-tabs--left.el-tabs--card .el-tabs__item.is-left:first-child {
        border-right: 1px solid #e4e7ed;
        border-top: none
    }

    .el-tabs--left.el-tabs--card .el-tabs__item.is-left.is-active {
        border: none;
        border-right: 1px solid #fff;
        border-top: 1px solid #e4e7ed
    }

    .el-tabs--left.el-tabs--card .el-tabs__item.is-left.is-active:first-child {
        border-top: none
    }

    .el-tabs--left.el-tabs--card .el-tabs__item.is-left.is-active:last-child {
        border-bottom: none
    }

    .el-tabs--left.el-tabs--card .el-tabs__nav {
        border-bottom: 1px solid #e4e7ed;
        border-radius: 4px 0 0 4px;
        border-right: none
    }

    .el-tabs--left.el-tabs--card .el-tabs__new-tab {
        float: none
    }

    .el-tabs--left.el-tabs--border-card .el-tabs__header.is-left {
        border-right: 1px solid #dfe4ed
    }

    .el-tabs--left.el-tabs--border-card .el-tabs__item.is-left {
        border: 1px solid transparent;
        margin: -1px 0 -1px -1px
    }

    .el-tabs--left.el-tabs--border-card .el-tabs__item.is-left.is-active {
        border-color: #d1dbe5 transparent
    }

    .el-tabs--right .el-tabs__header.is-right {
        float: right;
        margin-bottom: 0;
        margin-left: 10px
    }

    .el-tabs--right .el-tabs__nav-wrap.is-right {
        margin-left: -1px
    }

    .el-tabs--right .el-tabs__nav-wrap.is-right:after {
        left: 0;
        right: auto
    }

    .el-tabs--right .el-tabs__active-bar.is-right {
        left: 0
    }

    .el-tabs--right.el-tabs--card .el-tabs__active-bar.is-right {
        display: none
    }

    .el-tabs--right.el-tabs--card .el-tabs__item.is-right {
        border-bottom: none;
        border-top: 1px solid #e4e7ed
    }

    .el-tabs--right.el-tabs--card .el-tabs__item.is-right:first-child {
        border-left: 1px solid #e4e7ed;
        border-top: none
    }

    .el-tabs--right.el-tabs--card .el-tabs__item.is-right.is-active {
        border: none;
        border-left: 1px solid #fff;
        border-top: 1px solid #e4e7ed
    }

    .el-tabs--right.el-tabs--card .el-tabs__item.is-right.is-active:first-child {
        border-top: none
    }

    .el-tabs--right.el-tabs--card .el-tabs__item.is-right.is-active:last-child {
        border-bottom: none
    }

    .el-tabs--right.el-tabs--card .el-tabs__nav {
        border-bottom: 1px solid #e4e7ed;
        border-left: none;
        border-radius: 0 4px 4px 0
    }

    .el-tabs--right.el-tabs--border-card .el-tabs__header.is-right {
        border-left: 1px solid #dfe4ed
    }

    .el-tabs--right.el-tabs--border-card .el-tabs__item.is-right {
        border: 1px solid transparent;
        margin: -1px -1px -1px 0
    }

    .el-tabs--right.el-tabs--border-card .el-tabs__item.is-right.is-active {
        border-color: #d1dbe5 transparent
    }

    .slideInLeft-transition, .slideInRight-transition {
        display: inline-block
    }

    .slideInRight-enter {
        animation: slideInRight-enter .3s
    }

    .slideInRight-leave {
        animation: slideInRight-leave .3s;
        left: 0;
        position: absolute;
        right: 0
    }

    .slideInLeft-enter {
        animation: slideInLeft-enter .3s
    }

    .slideInLeft-leave {
        animation: slideInLeft-leave .3s;
        left: 0;
        position: absolute;
        right: 0
    }

    @keyframes slideInRight-enter {
        0% {
            opacity: 0;
            transform: translateX(100%);
            transform-origin: 0 0
        }
        to {
            opacity: 1;
            transform: translateX(0);
            transform-origin: 0 0
        }
    }

    @keyframes slideInRight-leave {
        0% {
            opacity: 1;
            transform: translateX(0);
            transform-origin: 0 0
        }
        to {
            opacity: 0;
            transform: translateX(100%);
            transform-origin: 0 0
        }
    }

    @keyframes slideInLeft-enter {
        0% {
            opacity: 0;
            transform: translateX(-100%);
            transform-origin: 0 0
        }
        to {
            opacity: 1;
            transform: translateX(0);
            transform-origin: 0 0
        }
    }

    @keyframes slideInLeft-leave {
        0% {
            opacity: 1;
            transform: translateX(0);
            transform-origin: 0 0
        }
        to {
            opacity: 0;
            transform: translateX(-100%);
            transform-origin: 0 0
        }
    }

    .el-tree {
        background: #fff;
        color: #606266;
        cursor: default;
        position: relative
    }

    .el-tree__empty-block {
        height: 100%;
        min-height: 60px;
        position: relative;
        text-align: center;
        width: 100%
    }

    .el-tree__empty-text {
        color: #909399;
        font-size: 14px;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .el-tree__drop-indicator {
        background-color: #c8102e;
        height: 1px;
        left: 0;
        position: absolute;
        right: 0
    }

    .el-tree-node {
        outline: none;
        white-space: nowrap
    }

    .el-tree-node:focus > .el-tree-node__content {
        background-color: #f5f7fa
    }

    .el-tree-node.is-drop-inner > .el-tree-node__content .el-tree-node__label {
        background-color: #c8102e;
        color: #fff
    }

    .el-tree-node__content {
        align-items: center;
        cursor: pointer;
        display: flex;
        height: 26px
    }

    .el-tree-node__content > .el-tree-node__expand-icon {
        padding: 6px
    }

    .el-tree-node__content > label.el-checkbox {
        margin-right: 8px
    }

    .el-tree-node__content:hover {
        background-color: #f5f7fa
    }

    .el-tree.is-dragging .el-tree-node__content {
        cursor: move
    }

    .el-tree.is-dragging .el-tree-node__content * {
        pointer-events: none
    }

    .el-tree.is-dragging.is-drop-not-allow .el-tree-node__content {
        cursor: not-allowed
    }

    .el-tree-node__expand-icon {
        color: #c0c4cc;
        cursor: pointer;
        font-size: 12px;
        transform: rotate(0deg);
        transition: transform .3s ease-in-out
    }

    .el-tree-node__expand-icon.expanded {
        transform: rotate(90deg)
    }

    .el-tree-node__expand-icon.is-leaf {
        color: transparent;
        cursor: default
    }

    .el-tree-node__label {
        font-size: 14px
    }

    .el-tree-node__loading-icon {
        color: #c0c4cc;
        font-size: 14px;
        margin-right: 8px
    }

    .el-tree-node > .el-tree-node__children {
        background-color: transparent;
        overflow: hidden
    }

    .el-tree-node.is-expanded > .el-tree-node__children {
        display: block
    }

    .el-tree--highlight-current .el-tree-node.is-current > .el-tree-node__content {
        background-color: #fbecee
    }

    .el-alert {
        align-items: center;
        background-color: #fff;
        border-radius: 4px;
        box-sizing: border-box;
        display: flex;
        margin: 0;
        opacity: 1;
        overflow: hidden;
        padding: 8px 16px;
        position: relative;
        transition: opacity .2s;
        width: 100%
    }

    .el-alert.is-light .el-alert__closebtn {
        color: #c0c4cc
    }

    .el-alert.is-dark .el-alert__closebtn, .el-alert.is-dark .el-alert__description {
        color: #fff
    }

    .el-alert.is-center {
        justify-content: center
    }

    .el-alert--success.is-light {
        background-color: #f0f9eb;
        color: #67c23a
    }

    .el-alert--success.is-light .el-alert__description {
        color: #67c23a
    }

    .el-alert--success.is-dark {
        background-color: #67c23a;
        color: #fff
    }

    .el-alert--info.is-light {
        background-color: #f4f4f5;
        color: #909399
    }

    .el-alert--info.is-dark {
        background-color: #909399;
        color: #fff
    }

    .el-alert--info .el-alert__description {
        color: #909399
    }

    .el-alert--warning.is-light {
        background-color: #fdf6ec;
        color: #e6a23c
    }

    .el-alert--warning.is-light .el-alert__description {
        color: #e6a23c
    }

    .el-alert--warning.is-dark {
        background-color: #e6a23c;
        color: #fff
    }

    .el-alert--error.is-light {
        background-color: #fef0f0;
        color: #f56c6c
    }

    .el-alert--error.is-light .el-alert__description {
        color: #f56c6c
    }

    .el-alert--error.is-dark {
        background-color: #f56c6c;
        color: #fff
    }

    .el-alert__content {
        display: table-cell;
        padding: 0 8px
    }

    .el-alert__icon {
        font-size: 16px;
        width: 16px
    }

    .el-alert__icon.is-big {
        font-size: 28px;
        width: 28px
    }

    .el-alert__title {
        font-size: 13px;
        line-height: 18px
    }

    .el-alert__title.is-bold {
        font-weight: 700
    }

    .el-alert .el-alert__description {
        font-size: 12px;
        margin: 5px 0 0
    }

    .el-alert__closebtn {
        cursor: pointer;
        font-size: 12px;
        opacity: 1;
        position: absolute;
        right: 15px;
        top: 12px
    }

    .el-alert__closebtn.is-customed {
        font-size: 13px;
        font-style: normal;
        top: 9px
    }

    .el-alert-fade-enter, .el-alert-fade-leave-active {
        opacity: 0
    }

    .el-notification {
        background-color: #fff;
        border: 1px solid #ebeef5;
        border-radius: 8px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        box-sizing: border-box;
        display: flex;
        overflow: hidden;
        padding: 14px 26px 14px 13px;
        position: fixed;
        transition: opacity .3s, transform .3s, left .3s, right .3s, top .4s, bottom .3s;
        width: 330px
    }

    .el-notification.right {
        right: 16px
    }

    .el-notification.left {
        left: 16px
    }

    .el-notification__group {
        margin-left: 13px;
        margin-right: 8px
    }

    .el-notification__title {
        color: #303133;
        font-size: 16px;
        font-weight: 700;
        margin: 0
    }

    .el-notification__content {
        color: #606266;
        font-size: 14px;
        line-height: 21px;
        margin: 6px 0 0;
        text-align: justify
    }

    .el-notification__content p {
        margin: 0
    }

    .el-notification__icon {
        font-size: 24px;
        height: 24px;
        width: 24px
    }

    .el-notification__closeBtn {
        color: #909399;
        cursor: pointer;
        font-size: 16px;
        position: absolute;
        right: 15px;
        top: 18px
    }

    .el-notification__closeBtn:hover {
        color: #606266
    }

    .el-notification .el-icon-success {
        color: #67c23a
    }

    .el-notification .el-icon-error {
        color: #f56c6c
    }

    .el-notification .el-icon-info {
        color: #909399
    }

    .el-notification .el-icon-warning {
        color: #e6a23c
    }

    .el-notification-fade-enter.right {
        right: 0;
        transform: translateX(100%)
    }

    .el-notification-fade-enter.left {
        left: 0;
        transform: translateX(-100%)
    }

    .el-notification-fade-leave-active {
        opacity: 0
    }

    .el-input-number {
        display: inline-block;
        line-height: 38px;
        position: relative;
        width: 180px
    }

    .el-input-number .el-input {
        display: block
    }

    .el-input-number .el-input__inner {
        -webkit-appearance: none;
        padding-left: 50px;
        padding-right: 50px;
        text-align: center
    }

    .el-input-number__decrease, .el-input-number__increase {
        background: #f5f7fa;
        color: #606266;
        cursor: pointer;
        font-size: 13px;
        height: auto;
        position: absolute;
        text-align: center;
        top: 1px;
        width: 40px;
        z-index: 1
    }

    .el-input-number__decrease:hover, .el-input-number__increase:hover {
        color: #c8102e
    }

    .el-input-number__decrease:hover:not(.is-disabled) ~ .el-input .el-input__inner:not(.is-disabled), .el-input-number__increase:hover:not(.is-disabled) ~ .el-input .el-input__inner:not(.is-disabled) {
        border-color: #c8102e
    }

    .el-input-number__decrease.is-disabled, .el-input-number__increase.is-disabled {
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-input-number__increase {
        border-left: 1px solid #dcdfe6;
        border-radius: 0 4px 4px 0;
        right: 1px
    }

    .el-input-number__decrease {
        border-radius: 4px 0 0 4px;
        border-right: 1px solid #dcdfe6;
        left: 1px
    }

    .el-input-number.is-disabled .el-input-number__decrease, .el-input-number.is-disabled .el-input-number__increase {
        border-color: #e4e7ed;
        color: #e4e7ed
    }

    .el-input-number.is-disabled .el-input-number__decrease:hover, .el-input-number.is-disabled .el-input-number__increase:hover {
        color: #e4e7ed;
        cursor: not-allowed
    }

    .el-input-number--medium {
        line-height: 34px;
        width: 200px
    }

    .el-input-number--medium .el-input-number__decrease, .el-input-number--medium .el-input-number__increase {
        font-size: 14px;
        width: 36px
    }

    .el-input-number--medium .el-input__inner {
        padding-left: 43px;
        padding-right: 43px
    }

    .el-input-number--small {
        line-height: 30px;
        width: 130px
    }

    .el-input-number--small .el-input-number__decrease, .el-input-number--small .el-input-number__increase {
        font-size: 13px;
        width: 32px
    }

    .el-input-number--small .el-input-number__decrease [class*=el-icon], .el-input-number--small .el-input-number__increase [class*=el-icon] {
        transform: scale(.9)
    }

    .el-input-number--small .el-input__inner {
        padding-left: 39px;
        padding-right: 39px
    }

    .el-input-number--mini {
        line-height: 26px;
        width: 130px
    }

    .el-input-number--mini .el-input-number__decrease, .el-input-number--mini .el-input-number__increase {
        font-size: 12px;
        width: 28px
    }

    .el-input-number--mini .el-input-number__decrease [class*=el-icon], .el-input-number--mini .el-input-number__increase [class*=el-icon] {
        transform: scale(.8)
    }

    .el-input-number--mini .el-input__inner {
        padding-left: 35px;
        padding-right: 35px
    }

    .el-input-number.is-without-controls .el-input__inner {
        padding-left: 15px;
        padding-right: 15px
    }

    .el-input-number.is-controls-right .el-input__inner {
        padding-left: 15px;
        padding-right: 50px
    }

    .el-input-number.is-controls-right .el-input-number__decrease, .el-input-number.is-controls-right .el-input-number__increase {
        height: auto;
        line-height: 19px
    }

    .el-input-number.is-controls-right .el-input-number__decrease [class*=el-icon], .el-input-number.is-controls-right .el-input-number__increase [class*=el-icon] {
        transform: scale(.8)
    }

    .el-input-number.is-controls-right .el-input-number__increase {
        border-bottom: 1px solid #dcdfe6;
        border-radius: 0 4px 0 0
    }

    .el-input-number.is-controls-right .el-input-number__decrease {
        border-left: 1px solid #dcdfe6;
        border-radius: 0 0 4px 0;
        border-right: none;
        bottom: 1px;
        left: auto;
        right: 1px;
        top: auto
    }

    .el-input-number.is-controls-right[class*=medium] [class*=decrease], .el-input-number.is-controls-right[class*=medium] [class*=increase] {
        line-height: 17px
    }

    .el-input-number.is-controls-right[class*=small] [class*=decrease], .el-input-number.is-controls-right[class*=small] [class*=increase] {
        line-height: 15px
    }

    .el-input-number.is-controls-right[class*=mini] [class*=decrease], .el-input-number.is-controls-right[class*=mini] [class*=increase] {
        line-height: 13px
    }

    .el-tooltip:focus:hover, .el-tooltip:focus:not(.focusing) {
        outline-width: 0
    }

    .el-tooltip__popper {
        border-radius: 4px;
        font-size: 12px;
        line-height: 1.2;
        min-width: 10px;
        padding: 10px;
        position: absolute;
        z-index: 2000;
        word-wrap: break-word
    }

    .el-tooltip__popper .popper__arrow, .el-tooltip__popper .popper__arrow:after {
        border-color: transparent;
        border-style: solid;
        display: block;
        height: 0;
        position: absolute;
        width: 0
    }

    .el-tooltip__popper .popper__arrow {
        border-width: 6px
    }

    .el-tooltip__popper .popper__arrow:after {
        border-width: 5px;
        content: " "
    }

    .el-tooltip__popper[x-placement^=top] {
        margin-bottom: 12px
    }

    .el-tooltip__popper[x-placement^=top] .popper__arrow {
        border-bottom-width: 0;
        border-top-color: #303133;
        bottom: -6px
    }

    .el-tooltip__popper[x-placement^=top] .popper__arrow:after {
        border-bottom-width: 0;
        border-top-color: #303133;
        bottom: 1px;
        margin-left: -5px
    }

    .el-tooltip__popper[x-placement^=bottom] {
        margin-top: 12px
    }

    .el-tooltip__popper[x-placement^=bottom] .popper__arrow {
        border-bottom-color: #303133;
        border-top-width: 0;
        top: -6px
    }

    .el-tooltip__popper[x-placement^=bottom] .popper__arrow:after {
        border-bottom-color: #303133;
        border-top-width: 0;
        margin-left: -5px;
        top: 1px
    }

    .el-tooltip__popper[x-placement^=right] {
        margin-left: 12px
    }

    .el-tooltip__popper[x-placement^=right] .popper__arrow {
        border-left-width: 0;
        border-right-color: #303133;
        left: -6px
    }

    .el-tooltip__popper[x-placement^=right] .popper__arrow:after {
        border-left-width: 0;
        border-right-color: #303133;
        bottom: -5px;
        left: 1px
    }

    .el-tooltip__popper[x-placement^=left] {
        margin-right: 12px
    }

    .el-tooltip__popper[x-placement^=left] .popper__arrow {
        border-left-color: #303133;
        border-right-width: 0;
        right: -6px
    }

    .el-tooltip__popper[x-placement^=left] .popper__arrow:after {
        border-left-color: #303133;
        border-right-width: 0;
        bottom: -5px;
        margin-left: -5px;
        right: 1px
    }

    .el-tooltip__popper.is-dark {
        background: #303133;
        color: #fff
    }

    .el-tooltip__popper.is-light {
        background: #fff;
        border: 1px solid #303133
    }

    .el-tooltip__popper.is-light[x-placement^=top] .popper__arrow {
        border-top-color: #303133
    }

    .el-tooltip__popper.is-light[x-placement^=top] .popper__arrow:after {
        border-top-color: #fff
    }

    .el-tooltip__popper.is-light[x-placement^=bottom] .popper__arrow {
        border-bottom-color: #303133
    }

    .el-tooltip__popper.is-light[x-placement^=bottom] .popper__arrow:after {
        border-bottom-color: #fff
    }

    .el-tooltip__popper.is-light[x-placement^=left] .popper__arrow {
        border-left-color: #303133
    }

    .el-tooltip__popper.is-light[x-placement^=left] .popper__arrow:after {
        border-left-color: #fff
    }

    .el-tooltip__popper.is-light[x-placement^=right] .popper__arrow {
        border-right-color: #303133
    }

    .el-tooltip__popper.is-light[x-placement^=right] .popper__arrow:after {
        border-right-color: #fff
    }

    .el-slider:after, .el-slider:before {
        content: "";
        display: table
    }

    .el-slider:after {
        clear: both
    }

    .el-slider__runway {
        background-color: #e4e7ed;
        border-radius: 3px;
        cursor: pointer;
        height: 6px;
        margin: 16px 0;
        position: relative;
        vertical-align: middle;
        width: 100%
    }

    .el-slider__runway.show-input {
        margin-right: 160px;
        width: auto
    }

    .el-slider__runway.disabled {
        cursor: default
    }

    .el-slider__runway.disabled .el-slider__bar {
        background-color: #c0c4cc
    }

    .el-slider__runway.disabled .el-slider__button {
        border-color: #c0c4cc
    }

    .el-slider__runway.disabled .el-slider__button-wrapper.dragging, .el-slider__runway.disabled .el-slider__button-wrapper.hover, .el-slider__runway.disabled .el-slider__button-wrapper:hover {
        cursor: not-allowed
    }

    .el-slider__runway.disabled .el-slider__button.dragging, .el-slider__runway.disabled .el-slider__button.hover, .el-slider__runway.disabled .el-slider__button:hover {
        transform: scale(1)
    }

    .el-slider__runway.disabled .el-slider__button.dragging, .el-slider__runway.disabled .el-slider__button.hover, .el-slider__runway.disabled .el-slider__button:hover {
        cursor: not-allowed
    }

    .el-slider__input {
        float: right;
        margin-top: 3px;
        width: 130px
    }

    .el-slider__input.el-input-number--mini {
        margin-top: 5px
    }

    .el-slider__input.el-input-number--medium {
        margin-top: 0
    }

    .el-slider__input.el-input-number--large {
        margin-top: -2px
    }

    .el-slider__bar {
        background-color: #c8102e;
        border-bottom-left-radius: 3px;
        border-top-left-radius: 3px;
        height: 6px;
        position: absolute
    }

    .el-slider__button-wrapper {
        background-color: transparent;
        height: 36px;
        line-height: normal;
        position: absolute;
        text-align: center;
        top: -15px;
        transform: translateX(-50%);
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        width: 36px;
        z-index: 1001
    }

    .el-slider__button-wrapper:after {
        content: "";
        height: 100%
    }

    .el-slider__button-wrapper .el-tooltip, .el-slider__button-wrapper:after {
        display: inline-block;
        vertical-align: middle
    }

    .el-slider__button-wrapper.hover, .el-slider__button-wrapper:hover {
        cursor: grab
    }

    .el-slider__button-wrapper.dragging {
        cursor: grabbing
    }

    .el-slider__button {
        background-color: #fff;
        border: 2px solid #c8102e;
        border-radius: 50%;
        height: 16px;
        transition: .2s;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        width: 16px
    }

    .el-slider__button.dragging, .el-slider__button.hover, .el-slider__button:hover {
        transform: scale(1.2)
    }

    .el-slider__button.hover, .el-slider__button:hover {
        cursor: grab
    }

    .el-slider__button.dragging {
        cursor: grabbing
    }

    .el-slider__stop {
        background-color: #fff;
        border-radius: 100%;
        height: 6px;
        position: absolute;
        transform: translateX(-50%);
        width: 6px
    }

    .el-slider__marks {
        height: 100%;
        left: 12px;
        top: 0;
        width: 18px
    }

    .el-slider__marks-text {
        color: #909399;
        font-size: 14px;
        margin-top: 15px;
        position: absolute;
        transform: translateX(-50%)
    }

    .el-slider.is-vertical {
        position: relative
    }

    .el-slider.is-vertical .el-slider__runway {
        height: 100%;
        margin: 0 16px;
        width: 6px
    }

    .el-slider.is-vertical .el-slider__bar {
        border-radius: 0 0 3px 3px;
        height: auto;
        width: 6px
    }

    .el-slider.is-vertical .el-slider__button-wrapper {
        left: -15px;
        top: auto;
        transform: translateY(50%)
    }

    .el-slider.is-vertical .el-slider__stop {
        transform: translateY(50%)
    }

    .el-slider.is-vertical.el-slider--with-input {
        padding-bottom: 58px
    }

    .el-slider.is-vertical.el-slider--with-input .el-slider__input {
        bottom: 22px;
        float: none;
        margin-top: 15px;
        overflow: visible;
        position: absolute;
        width: 36px
    }

    .el-slider.is-vertical.el-slider--with-input .el-slider__input .el-input__inner {
        padding-left: 5px;
        padding-right: 5px;
        text-align: center
    }

    .el-slider.is-vertical.el-slider--with-input .el-slider__input .el-input-number__decrease, .el-slider.is-vertical.el-slider--with-input .el-slider__input .el-input-number__increase {
        border: 1px solid #dcdfe6;
        box-sizing: border-box;
        line-height: 20px;
        margin-top: -1px;
        top: 32px;
        transition: border-color .2s cubic-bezier(.645, .045, .355, 1)
    }

    .el-slider.is-vertical.el-slider--with-input .el-slider__input .el-input-number__decrease {
        border-bottom-left-radius: 4px;
        right: 18px;
        width: 18px
    }

    .el-slider.is-vertical.el-slider--with-input .el-slider__input .el-input-number__increase {
        border-bottom-right-radius: 4px;
        width: 19px
    }

    .el-slider.is-vertical.el-slider--with-input .el-slider__input .el-input-number__increase ~ .el-input .el-input__inner {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0
    }

    .el-slider.is-vertical.el-slider--with-input .el-slider__input:hover .el-input-number__decrease, .el-slider.is-vertical.el-slider--with-input .el-slider__input:hover .el-input-number__increase {
        border-color: #c0c4cc
    }

    .el-slider.is-vertical.el-slider--with-input .el-slider__input:active .el-input-number__decrease, .el-slider.is-vertical.el-slider--with-input .el-slider__input:active .el-input-number__increase {
        border-color: #c8102e
    }

    .el-slider.is-vertical .el-slider__marks-text {
        left: 15px;
        margin-top: 0;
        transform: translateY(50%)
    }

    .el-loading-parent--relative {
        position: relative !important
    }

    .el-loading-parent--hidden {
        overflow: hidden !important
    }

    .el-loading-mask {
        background-color: hsla(0, 0%, 100%, .9);
        bottom: 0;
        left: 0;
        margin: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: opacity .3s;
        z-index: 2000
    }

    .el-loading-mask.is-fullscreen {
        position: fixed
    }

    .el-loading-mask.is-fullscreen .el-loading-spinner {
        margin-top: -25px
    }

    .el-loading-mask.is-fullscreen .el-loading-spinner .circular {
        height: 50px;
        width: 50px
    }

    .el-loading-spinner {
        margin-top: -21px;
        position: absolute;
        text-align: center;
        top: 50%;
        width: 100%
    }

    .el-loading-spinner .el-loading-text {
        color: #c8102e;
        font-size: 14px;
        margin: 3px 0
    }

    .el-loading-spinner .circular {
        animation: loading-rotate 2s linear infinite;
        height: 42px;
        width: 42px
    }

    .el-loading-spinner .path {
        animation: loading-dash 1.5s ease-in-out infinite;
        stroke-dasharray: 90, 150;
        stroke-dashoffset: 0;
        stroke-width: 2;
        stroke: #c8102e;
        stroke-linecap: round
    }

    .el-loading-spinner i {
        color: #c8102e
    }

    .el-loading-fade-enter, .el-loading-fade-leave-active {
        opacity: 0
    }

    @keyframes loading-rotate {
        to {
            transform: rotate(1turn)
        }
    }

    @keyframes loading-dash {
        0% {
            stroke-dasharray: 1, 200;
            stroke-dashoffset: 0
        }
        50% {
            stroke-dasharray: 90, 150;
            stroke-dashoffset: -40px
        }
        to {
            stroke-dasharray: 90, 150;
            stroke-dashoffset: -120px
        }
    }

    .el-row {
        box-sizing: border-box;
        position: relative
    }

    .el-row:after, .el-row:before {
        content: "";
        display: table
    }

    .el-row:after {
        clear: both
    }

    .el-row--flex {
        display: flex
    }

    .el-row--flex:after, .el-row--flex:before {
        display: none
    }

    .el-row--flex.is-justify-center {
        justify-content: center
    }

    .el-row--flex.is-justify-end {
        justify-content: flex-end
    }

    .el-row--flex.is-justify-space-between {
        justify-content: space-between
    }

    .el-row--flex.is-justify-space-around {
        justify-content: space-around
    }

    .el-row--flex.is-align-top {
        align-items: flex-start
    }

    .el-row--flex.is-align-middle {
        align-items: center
    }

    .el-row--flex.is-align-bottom {
        align-items: flex-end
    }

    [class*=el-col-] {
        box-sizing: border-box;
        float: left
    }

    .el-col-0 {
        display: none;
        width: 0
    }

    .el-col-offset-0 {
        margin-left: 0
    }

    .el-col-pull-0 {
        position: relative;
        right: 0
    }

    .el-col-push-0 {
        left: 0;
        position: relative
    }

    .el-col-1 {
        width: 4.1666666667%
    }

    .el-col-offset-1 {
        margin-left: 4.1666666667%
    }

    .el-col-pull-1 {
        position: relative;
        right: 4.1666666667%
    }

    .el-col-push-1 {
        left: 4.1666666667%;
        position: relative
    }

    .el-col-2 {
        width: 8.3333333333%
    }

    .el-col-offset-2 {
        margin-left: 8.3333333333%
    }

    .el-col-pull-2 {
        position: relative;
        right: 8.3333333333%
    }

    .el-col-push-2 {
        left: 8.3333333333%;
        position: relative
    }

    .el-col-3 {
        width: 12.5%
    }

    .el-col-offset-3 {
        margin-left: 12.5%
    }

    .el-col-pull-3 {
        position: relative;
        right: 12.5%
    }

    .el-col-push-3 {
        left: 12.5%;
        position: relative
    }

    .el-col-4 {
        width: 16.6666666667%
    }

    .el-col-offset-4 {
        margin-left: 16.6666666667%
    }

    .el-col-pull-4 {
        position: relative;
        right: 16.6666666667%
    }

    .el-col-push-4 {
        left: 16.6666666667%;
        position: relative
    }

    .el-col-5 {
        width: 20.8333333333%
    }

    .el-col-offset-5 {
        margin-left: 20.8333333333%
    }

    .el-col-pull-5 {
        position: relative;
        right: 20.8333333333%
    }

    .el-col-push-5 {
        left: 20.8333333333%;
        position: relative
    }

    .el-col-6 {
        width: 25%
    }

    .el-col-offset-6 {
        margin-left: 25%
    }

    .el-col-pull-6 {
        position: relative;
        right: 25%
    }

    .el-col-push-6 {
        left: 25%;
        position: relative
    }

    .el-col-7 {
        width: 29.1666666667%
    }

    .el-col-offset-7 {
        margin-left: 29.1666666667%
    }

    .el-col-pull-7 {
        position: relative;
        right: 29.1666666667%
    }

    .el-col-push-7 {
        left: 29.1666666667%;
        position: relative
    }

    .el-col-8 {
        width: 33.3333333333%
    }

    .el-col-offset-8 {
        margin-left: 33.3333333333%
    }

    .el-col-pull-8 {
        position: relative;
        right: 33.3333333333%
    }

    .el-col-push-8 {
        left: 33.3333333333%;
        position: relative
    }

    .el-col-9 {
        width: 37.5%
    }

    .el-col-offset-9 {
        margin-left: 37.5%
    }

    .el-col-pull-9 {
        position: relative;
        right: 37.5%
    }

    .el-col-push-9 {
        left: 37.5%;
        position: relative
    }

    .el-col-10 {
        width: 41.6666666667%
    }

    .el-col-offset-10 {
        margin-left: 41.6666666667%
    }

    .el-col-pull-10 {
        position: relative;
        right: 41.6666666667%
    }

    .el-col-push-10 {
        left: 41.6666666667%;
        position: relative
    }

    .el-col-11 {
        width: 45.8333333333%
    }

    .el-col-offset-11 {
        margin-left: 45.8333333333%
    }

    .el-col-pull-11 {
        position: relative;
        right: 45.8333333333%
    }

    .el-col-push-11 {
        left: 45.8333333333%;
        position: relative
    }

    .el-col-12 {
        width: 50%
    }

    .el-col-offset-12 {
        margin-left: 50%
    }

    .el-col-pull-12 {
        position: relative;
        right: 50%
    }

    .el-col-push-12 {
        left: 50%;
        position: relative
    }

    .el-col-13 {
        width: 54.1666666667%
    }

    .el-col-offset-13 {
        margin-left: 54.1666666667%
    }

    .el-col-pull-13 {
        position: relative;
        right: 54.1666666667%
    }

    .el-col-push-13 {
        left: 54.1666666667%;
        position: relative
    }

    .el-col-14 {
        width: 58.3333333333%
    }

    .el-col-offset-14 {
        margin-left: 58.3333333333%
    }

    .el-col-pull-14 {
        position: relative;
        right: 58.3333333333%
    }

    .el-col-push-14 {
        left: 58.3333333333%;
        position: relative
    }

    .el-col-15 {
        width: 62.5%
    }

    .el-col-offset-15 {
        margin-left: 62.5%
    }

    .el-col-pull-15 {
        position: relative;
        right: 62.5%
    }

    .el-col-push-15 {
        left: 62.5%;
        position: relative
    }

    .el-col-16 {
        width: 66.6666666667%
    }

    .el-col-offset-16 {
        margin-left: 66.6666666667%
    }

    .el-col-pull-16 {
        position: relative;
        right: 66.6666666667%
    }

    .el-col-push-16 {
        left: 66.6666666667%;
        position: relative
    }

    .el-col-17 {
        width: 70.8333333333%
    }

    .el-col-offset-17 {
        margin-left: 70.8333333333%
    }

    .el-col-pull-17 {
        position: relative;
        right: 70.8333333333%
    }

    .el-col-push-17 {
        left: 70.8333333333%;
        position: relative
    }

    .el-col-18 {
        width: 75%
    }

    .el-col-offset-18 {
        margin-left: 75%
    }

    .el-col-pull-18 {
        position: relative;
        right: 75%
    }

    .el-col-push-18 {
        left: 75%;
        position: relative
    }

    .el-col-19 {
        width: 79.1666666667%
    }

    .el-col-offset-19 {
        margin-left: 79.1666666667%
    }

    .el-col-pull-19 {
        position: relative;
        right: 79.1666666667%
    }

    .el-col-push-19 {
        left: 79.1666666667%;
        position: relative
    }

    .el-col-20 {
        width: 83.3333333333%
    }

    .el-col-offset-20 {
        margin-left: 83.3333333333%
    }

    .el-col-pull-20 {
        position: relative;
        right: 83.3333333333%
    }

    .el-col-push-20 {
        left: 83.3333333333%;
        position: relative
    }

    .el-col-21 {
        width: 87.5%
    }

    .el-col-offset-21 {
        margin-left: 87.5%
    }

    .el-col-pull-21 {
        position: relative;
        right: 87.5%
    }

    .el-col-push-21 {
        left: 87.5%;
        position: relative
    }

    .el-col-22 {
        width: 91.6666666667%
    }

    .el-col-offset-22 {
        margin-left: 91.6666666667%
    }

    .el-col-pull-22 {
        position: relative;
        right: 91.6666666667%
    }

    .el-col-push-22 {
        left: 91.6666666667%;
        position: relative
    }

    .el-col-23 {
        width: 95.8333333333%
    }

    .el-col-offset-23 {
        margin-left: 95.8333333333%
    }

    .el-col-pull-23 {
        position: relative;
        right: 95.8333333333%
    }

    .el-col-push-23 {
        left: 95.8333333333%;
        position: relative
    }

    .el-col-24 {
        width: 100%
    }

    .el-col-offset-24 {
        margin-left: 100%
    }

    .el-col-pull-24 {
        position: relative;
        right: 100%
    }

    .el-col-push-24 {
        left: 100%;
        position: relative
    }

    @media only screen and (max-width: 767px) {
        .el-col-xs-0 {
            display: none;
            width: 0
        }

        .el-col-xs-offset-0 {
            margin-left: 0
        }

        .el-col-xs-pull-0 {
            position: relative;
            right: 0
        }

        .el-col-xs-push-0 {
            left: 0;
            position: relative
        }

        .el-col-xs-1 {
            width: 4.1666666667%
        }

        .el-col-xs-offset-1 {
            margin-left: 4.1666666667%
        }

        .el-col-xs-pull-1 {
            position: relative;
            right: 4.1666666667%
        }

        .el-col-xs-push-1 {
            left: 4.1666666667%;
            position: relative
        }

        .el-col-xs-2 {
            width: 8.3333333333%
        }

        .el-col-xs-offset-2 {
            margin-left: 8.3333333333%
        }

        .el-col-xs-pull-2 {
            position: relative;
            right: 8.3333333333%
        }

        .el-col-xs-push-2 {
            left: 8.3333333333%;
            position: relative
        }

        .el-col-xs-3 {
            width: 12.5%
        }

        .el-col-xs-offset-3 {
            margin-left: 12.5%
        }

        .el-col-xs-pull-3 {
            position: relative;
            right: 12.5%
        }

        .el-col-xs-push-3 {
            left: 12.5%;
            position: relative
        }

        .el-col-xs-4 {
            width: 16.6666666667%
        }

        .el-col-xs-offset-4 {
            margin-left: 16.6666666667%
        }

        .el-col-xs-pull-4 {
            position: relative;
            right: 16.6666666667%
        }

        .el-col-xs-push-4 {
            left: 16.6666666667%;
            position: relative
        }

        .el-col-xs-5 {
            width: 20.8333333333%
        }

        .el-col-xs-offset-5 {
            margin-left: 20.8333333333%
        }

        .el-col-xs-pull-5 {
            position: relative;
            right: 20.8333333333%
        }

        .el-col-xs-push-5 {
            left: 20.8333333333%;
            position: relative
        }

        .el-col-xs-6 {
            width: 25%
        }

        .el-col-xs-offset-6 {
            margin-left: 25%
        }

        .el-col-xs-pull-6 {
            position: relative;
            right: 25%
        }

        .el-col-xs-push-6 {
            left: 25%;
            position: relative
        }

        .el-col-xs-7 {
            width: 29.1666666667%
        }

        .el-col-xs-offset-7 {
            margin-left: 29.1666666667%
        }

        .el-col-xs-pull-7 {
            position: relative;
            right: 29.1666666667%
        }

        .el-col-xs-push-7 {
            left: 29.1666666667%;
            position: relative
        }

        .el-col-xs-8 {
            width: 33.3333333333%
        }

        .el-col-xs-offset-8 {
            margin-left: 33.3333333333%
        }

        .el-col-xs-pull-8 {
            position: relative;
            right: 33.3333333333%
        }

        .el-col-xs-push-8 {
            left: 33.3333333333%;
            position: relative
        }

        .el-col-xs-9 {
            width: 37.5%
        }

        .el-col-xs-offset-9 {
            margin-left: 37.5%
        }

        .el-col-xs-pull-9 {
            position: relative;
            right: 37.5%
        }

        .el-col-xs-push-9 {
            left: 37.5%;
            position: relative
        }

        .el-col-xs-10 {
            width: 41.6666666667%
        }

        .el-col-xs-offset-10 {
            margin-left: 41.6666666667%
        }

        .el-col-xs-pull-10 {
            position: relative;
            right: 41.6666666667%
        }

        .el-col-xs-push-10 {
            left: 41.6666666667%;
            position: relative
        }

        .el-col-xs-11 {
            width: 45.8333333333%
        }

        .el-col-xs-offset-11 {
            margin-left: 45.8333333333%
        }

        .el-col-xs-pull-11 {
            position: relative;
            right: 45.8333333333%
        }

        .el-col-xs-push-11 {
            left: 45.8333333333%;
            position: relative
        }

        .el-col-xs-12 {
            width: 50%
        }

        .el-col-xs-offset-12 {
            margin-left: 50%
        }

        .el-col-xs-pull-12 {
            position: relative;
            right: 50%
        }

        .el-col-xs-push-12 {
            left: 50%;
            position: relative
        }

        .el-col-xs-13 {
            width: 54.1666666667%
        }

        .el-col-xs-offset-13 {
            margin-left: 54.1666666667%
        }

        .el-col-xs-pull-13 {
            position: relative;
            right: 54.1666666667%
        }

        .el-col-xs-push-13 {
            left: 54.1666666667%;
            position: relative
        }

        .el-col-xs-14 {
            width: 58.3333333333%
        }

        .el-col-xs-offset-14 {
            margin-left: 58.3333333333%
        }

        .el-col-xs-pull-14 {
            position: relative;
            right: 58.3333333333%
        }

        .el-col-xs-push-14 {
            left: 58.3333333333%;
            position: relative
        }

        .el-col-xs-15 {
            width: 62.5%
        }

        .el-col-xs-offset-15 {
            margin-left: 62.5%
        }

        .el-col-xs-pull-15 {
            position: relative;
            right: 62.5%
        }

        .el-col-xs-push-15 {
            left: 62.5%;
            position: relative
        }

        .el-col-xs-16 {
            width: 66.6666666667%
        }

        .el-col-xs-offset-16 {
            margin-left: 66.6666666667%
        }

        .el-col-xs-pull-16 {
            position: relative;
            right: 66.6666666667%
        }

        .el-col-xs-push-16 {
            left: 66.6666666667%;
            position: relative
        }

        .el-col-xs-17 {
            width: 70.8333333333%
        }

        .el-col-xs-offset-17 {
            margin-left: 70.8333333333%
        }

        .el-col-xs-pull-17 {
            position: relative;
            right: 70.8333333333%
        }

        .el-col-xs-push-17 {
            left: 70.8333333333%;
            position: relative
        }

        .el-col-xs-18 {
            width: 75%
        }

        .el-col-xs-offset-18 {
            margin-left: 75%
        }

        .el-col-xs-pull-18 {
            position: relative;
            right: 75%
        }

        .el-col-xs-push-18 {
            left: 75%;
            position: relative
        }

        .el-col-xs-19 {
            width: 79.1666666667%
        }

        .el-col-xs-offset-19 {
            margin-left: 79.1666666667%
        }

        .el-col-xs-pull-19 {
            position: relative;
            right: 79.1666666667%
        }

        .el-col-xs-push-19 {
            left: 79.1666666667%;
            position: relative
        }

        .el-col-xs-20 {
            width: 83.3333333333%
        }

        .el-col-xs-offset-20 {
            margin-left: 83.3333333333%
        }

        .el-col-xs-pull-20 {
            position: relative;
            right: 83.3333333333%
        }

        .el-col-xs-push-20 {
            left: 83.3333333333%;
            position: relative
        }

        .el-col-xs-21 {
            width: 87.5%
        }

        .el-col-xs-offset-21 {
            margin-left: 87.5%
        }

        .el-col-xs-pull-21 {
            position: relative;
            right: 87.5%
        }

        .el-col-xs-push-21 {
            left: 87.5%;
            position: relative
        }

        .el-col-xs-22 {
            width: 91.6666666667%
        }

        .el-col-xs-offset-22 {
            margin-left: 91.6666666667%
        }

        .el-col-xs-pull-22 {
            position: relative;
            right: 91.6666666667%
        }

        .el-col-xs-push-22 {
            left: 91.6666666667%;
            position: relative
        }

        .el-col-xs-23 {
            width: 95.8333333333%
        }

        .el-col-xs-offset-23 {
            margin-left: 95.8333333333%
        }

        .el-col-xs-pull-23 {
            position: relative;
            right: 95.8333333333%
        }

        .el-col-xs-push-23 {
            left: 95.8333333333%;
            position: relative
        }

        .el-col-xs-24 {
            width: 100%
        }

        .el-col-xs-offset-24 {
            margin-left: 100%
        }

        .el-col-xs-pull-24 {
            position: relative;
            right: 100%
        }

        .el-col-xs-push-24 {
            left: 100%;
            position: relative
        }
    }

    @media only screen and (min-width: 768px) {
        .el-col-sm-0 {
            display: none;
            width: 0
        }

        .el-col-sm-offset-0 {
            margin-left: 0
        }

        .el-col-sm-pull-0 {
            position: relative;
            right: 0
        }

        .el-col-sm-push-0 {
            left: 0;
            position: relative
        }

        .el-col-sm-1 {
            width: 4.1666666667%
        }

        .el-col-sm-offset-1 {
            margin-left: 4.1666666667%
        }

        .el-col-sm-pull-1 {
            position: relative;
            right: 4.1666666667%
        }

        .el-col-sm-push-1 {
            left: 4.1666666667%;
            position: relative
        }

        .el-col-sm-2 {
            width: 8.3333333333%
        }

        .el-col-sm-offset-2 {
            margin-left: 8.3333333333%
        }

        .el-col-sm-pull-2 {
            position: relative;
            right: 8.3333333333%
        }

        .el-col-sm-push-2 {
            left: 8.3333333333%;
            position: relative
        }

        .el-col-sm-3 {
            width: 12.5%
        }

        .el-col-sm-offset-3 {
            margin-left: 12.5%
        }

        .el-col-sm-pull-3 {
            position: relative;
            right: 12.5%
        }

        .el-col-sm-push-3 {
            left: 12.5%;
            position: relative
        }

        .el-col-sm-4 {
            width: 16.6666666667%
        }

        .el-col-sm-offset-4 {
            margin-left: 16.6666666667%
        }

        .el-col-sm-pull-4 {
            position: relative;
            right: 16.6666666667%
        }

        .el-col-sm-push-4 {
            left: 16.6666666667%;
            position: relative
        }

        .el-col-sm-5 {
            width: 20.8333333333%
        }

        .el-col-sm-offset-5 {
            margin-left: 20.8333333333%
        }

        .el-col-sm-pull-5 {
            position: relative;
            right: 20.8333333333%
        }

        .el-col-sm-push-5 {
            left: 20.8333333333%;
            position: relative
        }

        .el-col-sm-6 {
            width: 25%
        }

        .el-col-sm-offset-6 {
            margin-left: 25%
        }

        .el-col-sm-pull-6 {
            position: relative;
            right: 25%
        }

        .el-col-sm-push-6 {
            left: 25%;
            position: relative
        }

        .el-col-sm-7 {
            width: 29.1666666667%
        }

        .el-col-sm-offset-7 {
            margin-left: 29.1666666667%
        }

        .el-col-sm-pull-7 {
            position: relative;
            right: 29.1666666667%
        }

        .el-col-sm-push-7 {
            left: 29.1666666667%;
            position: relative
        }

        .el-col-sm-8 {
            width: 33.3333333333%
        }

        .el-col-sm-offset-8 {
            margin-left: 33.3333333333%
        }

        .el-col-sm-pull-8 {
            position: relative;
            right: 33.3333333333%
        }

        .el-col-sm-push-8 {
            left: 33.3333333333%;
            position: relative
        }

        .el-col-sm-9 {
            width: 37.5%
        }

        .el-col-sm-offset-9 {
            margin-left: 37.5%
        }

        .el-col-sm-pull-9 {
            position: relative;
            right: 37.5%
        }

        .el-col-sm-push-9 {
            left: 37.5%;
            position: relative
        }

        .el-col-sm-10 {
            width: 41.6666666667%
        }

        .el-col-sm-offset-10 {
            margin-left: 41.6666666667%
        }

        .el-col-sm-pull-10 {
            position: relative;
            right: 41.6666666667%
        }

        .el-col-sm-push-10 {
            left: 41.6666666667%;
            position: relative
        }

        .el-col-sm-11 {
            width: 45.8333333333%
        }

        .el-col-sm-offset-11 {
            margin-left: 45.8333333333%
        }

        .el-col-sm-pull-11 {
            position: relative;
            right: 45.8333333333%
        }

        .el-col-sm-push-11 {
            left: 45.8333333333%;
            position: relative
        }

        .el-col-sm-12 {
            width: 50%
        }

        .el-col-sm-offset-12 {
            margin-left: 50%
        }

        .el-col-sm-pull-12 {
            position: relative;
            right: 50%
        }

        .el-col-sm-push-12 {
            left: 50%;
            position: relative
        }

        .el-col-sm-13 {
            width: 54.1666666667%
        }

        .el-col-sm-offset-13 {
            margin-left: 54.1666666667%
        }

        .el-col-sm-pull-13 {
            position: relative;
            right: 54.1666666667%
        }

        .el-col-sm-push-13 {
            left: 54.1666666667%;
            position: relative
        }

        .el-col-sm-14 {
            width: 58.3333333333%
        }

        .el-col-sm-offset-14 {
            margin-left: 58.3333333333%
        }

        .el-col-sm-pull-14 {
            position: relative;
            right: 58.3333333333%
        }

        .el-col-sm-push-14 {
            left: 58.3333333333%;
            position: relative
        }

        .el-col-sm-15 {
            width: 62.5%
        }

        .el-col-sm-offset-15 {
            margin-left: 62.5%
        }

        .el-col-sm-pull-15 {
            position: relative;
            right: 62.5%
        }

        .el-col-sm-push-15 {
            left: 62.5%;
            position: relative
        }

        .el-col-sm-16 {
            width: 66.6666666667%
        }

        .el-col-sm-offset-16 {
            margin-left: 66.6666666667%
        }

        .el-col-sm-pull-16 {
            position: relative;
            right: 66.6666666667%
        }

        .el-col-sm-push-16 {
            left: 66.6666666667%;
            position: relative
        }

        .el-col-sm-17 {
            width: 70.8333333333%
        }

        .el-col-sm-offset-17 {
            margin-left: 70.8333333333%
        }

        .el-col-sm-pull-17 {
            position: relative;
            right: 70.8333333333%
        }

        .el-col-sm-push-17 {
            left: 70.8333333333%;
            position: relative
        }

        .el-col-sm-18 {
            width: 75%
        }

        .el-col-sm-offset-18 {
            margin-left: 75%
        }

        .el-col-sm-pull-18 {
            position: relative;
            right: 75%
        }

        .el-col-sm-push-18 {
            left: 75%;
            position: relative
        }

        .el-col-sm-19 {
            width: 79.1666666667%
        }

        .el-col-sm-offset-19 {
            margin-left: 79.1666666667%
        }

        .el-col-sm-pull-19 {
            position: relative;
            right: 79.1666666667%
        }

        .el-col-sm-push-19 {
            left: 79.1666666667%;
            position: relative
        }

        .el-col-sm-20 {
            width: 83.3333333333%
        }

        .el-col-sm-offset-20 {
            margin-left: 83.3333333333%
        }

        .el-col-sm-pull-20 {
            position: relative;
            right: 83.3333333333%
        }

        .el-col-sm-push-20 {
            left: 83.3333333333%;
            position: relative
        }

        .el-col-sm-21 {
            width: 87.5%
        }

        .el-col-sm-offset-21 {
            margin-left: 87.5%
        }

        .el-col-sm-pull-21 {
            position: relative;
            right: 87.5%
        }

        .el-col-sm-push-21 {
            left: 87.5%;
            position: relative
        }

        .el-col-sm-22 {
            width: 91.6666666667%
        }

        .el-col-sm-offset-22 {
            margin-left: 91.6666666667%
        }

        .el-col-sm-pull-22 {
            position: relative;
            right: 91.6666666667%
        }

        .el-col-sm-push-22 {
            left: 91.6666666667%;
            position: relative
        }

        .el-col-sm-23 {
            width: 95.8333333333%
        }

        .el-col-sm-offset-23 {
            margin-left: 95.8333333333%
        }

        .el-col-sm-pull-23 {
            position: relative;
            right: 95.8333333333%
        }

        .el-col-sm-push-23 {
            left: 95.8333333333%;
            position: relative
        }

        .el-col-sm-24 {
            width: 100%
        }

        .el-col-sm-offset-24 {
            margin-left: 100%
        }

        .el-col-sm-pull-24 {
            position: relative;
            right: 100%
        }

        .el-col-sm-push-24 {
            left: 100%;
            position: relative
        }
    }

    @media only screen and (min-width: 992px) {
        .el-col-md-0 {
            display: none;
            width: 0
        }

        .el-col-md-offset-0 {
            margin-left: 0
        }

        .el-col-md-pull-0 {
            position: relative;
            right: 0
        }

        .el-col-md-push-0 {
            left: 0;
            position: relative
        }

        .el-col-md-1 {
            width: 4.1666666667%
        }

        .el-col-md-offset-1 {
            margin-left: 4.1666666667%
        }

        .el-col-md-pull-1 {
            position: relative;
            right: 4.1666666667%
        }

        .el-col-md-push-1 {
            left: 4.1666666667%;
            position: relative
        }

        .el-col-md-2 {
            width: 8.3333333333%
        }

        .el-col-md-offset-2 {
            margin-left: 8.3333333333%
        }

        .el-col-md-pull-2 {
            position: relative;
            right: 8.3333333333%
        }

        .el-col-md-push-2 {
            left: 8.3333333333%;
            position: relative
        }

        .el-col-md-3 {
            width: 12.5%
        }

        .el-col-md-offset-3 {
            margin-left: 12.5%
        }

        .el-col-md-pull-3 {
            position: relative;
            right: 12.5%
        }

        .el-col-md-push-3 {
            left: 12.5%;
            position: relative
        }

        .el-col-md-4 {
            width: 16.6666666667%
        }

        .el-col-md-offset-4 {
            margin-left: 16.6666666667%
        }

        .el-col-md-pull-4 {
            position: relative;
            right: 16.6666666667%
        }

        .el-col-md-push-4 {
            left: 16.6666666667%;
            position: relative
        }

        .el-col-md-5 {
            width: 20.8333333333%
        }

        .el-col-md-offset-5 {
            margin-left: 20.8333333333%
        }

        .el-col-md-pull-5 {
            position: relative;
            right: 20.8333333333%
        }

        .el-col-md-push-5 {
            left: 20.8333333333%;
            position: relative
        }

        .el-col-md-6 {
            width: 25%
        }

        .el-col-md-offset-6 {
            margin-left: 25%
        }

        .el-col-md-pull-6 {
            position: relative;
            right: 25%
        }

        .el-col-md-push-6 {
            left: 25%;
            position: relative
        }

        .el-col-md-7 {
            width: 29.1666666667%
        }

        .el-col-md-offset-7 {
            margin-left: 29.1666666667%
        }

        .el-col-md-pull-7 {
            position: relative;
            right: 29.1666666667%
        }

        .el-col-md-push-7 {
            left: 29.1666666667%;
            position: relative
        }

        .el-col-md-8 {
            width: 33.3333333333%
        }

        .el-col-md-offset-8 {
            margin-left: 33.3333333333%
        }

        .el-col-md-pull-8 {
            position: relative;
            right: 33.3333333333%
        }

        .el-col-md-push-8 {
            left: 33.3333333333%;
            position: relative
        }

        .el-col-md-9 {
            width: 37.5%
        }

        .el-col-md-offset-9 {
            margin-left: 37.5%
        }

        .el-col-md-pull-9 {
            position: relative;
            right: 37.5%
        }

        .el-col-md-push-9 {
            left: 37.5%;
            position: relative
        }

        .el-col-md-10 {
            width: 41.6666666667%
        }

        .el-col-md-offset-10 {
            margin-left: 41.6666666667%
        }

        .el-col-md-pull-10 {
            position: relative;
            right: 41.6666666667%
        }

        .el-col-md-push-10 {
            left: 41.6666666667%;
            position: relative
        }

        .el-col-md-11 {
            width: 45.8333333333%
        }

        .el-col-md-offset-11 {
            margin-left: 45.8333333333%
        }

        .el-col-md-pull-11 {
            position: relative;
            right: 45.8333333333%
        }

        .el-col-md-push-11 {
            left: 45.8333333333%;
            position: relative
        }

        .el-col-md-12 {
            width: 50%
        }

        .el-col-md-offset-12 {
            margin-left: 50%
        }

        .el-col-md-pull-12 {
            position: relative;
            right: 50%
        }

        .el-col-md-push-12 {
            left: 50%;
            position: relative
        }

        .el-col-md-13 {
            width: 54.1666666667%
        }

        .el-col-md-offset-13 {
            margin-left: 54.1666666667%
        }

        .el-col-md-pull-13 {
            position: relative;
            right: 54.1666666667%
        }

        .el-col-md-push-13 {
            left: 54.1666666667%;
            position: relative
        }

        .el-col-md-14 {
            width: 58.3333333333%
        }

        .el-col-md-offset-14 {
            margin-left: 58.3333333333%
        }

        .el-col-md-pull-14 {
            position: relative;
            right: 58.3333333333%
        }

        .el-col-md-push-14 {
            left: 58.3333333333%;
            position: relative
        }

        .el-col-md-15 {
            width: 62.5%
        }

        .el-col-md-offset-15 {
            margin-left: 62.5%
        }

        .el-col-md-pull-15 {
            position: relative;
            right: 62.5%
        }

        .el-col-md-push-15 {
            left: 62.5%;
            position: relative
        }

        .el-col-md-16 {
            width: 66.6666666667%
        }

        .el-col-md-offset-16 {
            margin-left: 66.6666666667%
        }

        .el-col-md-pull-16 {
            position: relative;
            right: 66.6666666667%
        }

        .el-col-md-push-16 {
            left: 66.6666666667%;
            position: relative
        }

        .el-col-md-17 {
            width: 70.8333333333%
        }

        .el-col-md-offset-17 {
            margin-left: 70.8333333333%
        }

        .el-col-md-pull-17 {
            position: relative;
            right: 70.8333333333%
        }

        .el-col-md-push-17 {
            left: 70.8333333333%;
            position: relative
        }

        .el-col-md-18 {
            width: 75%
        }

        .el-col-md-offset-18 {
            margin-left: 75%
        }

        .el-col-md-pull-18 {
            position: relative;
            right: 75%
        }

        .el-col-md-push-18 {
            left: 75%;
            position: relative
        }

        .el-col-md-19 {
            width: 79.1666666667%
        }

        .el-col-md-offset-19 {
            margin-left: 79.1666666667%
        }

        .el-col-md-pull-19 {
            position: relative;
            right: 79.1666666667%
        }

        .el-col-md-push-19 {
            left: 79.1666666667%;
            position: relative
        }

        .el-col-md-20 {
            width: 83.3333333333%
        }

        .el-col-md-offset-20 {
            margin-left: 83.3333333333%
        }

        .el-col-md-pull-20 {
            position: relative;
            right: 83.3333333333%
        }

        .el-col-md-push-20 {
            left: 83.3333333333%;
            position: relative
        }

        .el-col-md-21 {
            width: 87.5%
        }

        .el-col-md-offset-21 {
            margin-left: 87.5%
        }

        .el-col-md-pull-21 {
            position: relative;
            right: 87.5%
        }

        .el-col-md-push-21 {
            left: 87.5%;
            position: relative
        }

        .el-col-md-22 {
            width: 91.6666666667%
        }

        .el-col-md-offset-22 {
            margin-left: 91.6666666667%
        }

        .el-col-md-pull-22 {
            position: relative;
            right: 91.6666666667%
        }

        .el-col-md-push-22 {
            left: 91.6666666667%;
            position: relative
        }

        .el-col-md-23 {
            width: 95.8333333333%
        }

        .el-col-md-offset-23 {
            margin-left: 95.8333333333%
        }

        .el-col-md-pull-23 {
            position: relative;
            right: 95.8333333333%
        }

        .el-col-md-push-23 {
            left: 95.8333333333%;
            position: relative
        }

        .el-col-md-24 {
            width: 100%
        }

        .el-col-md-offset-24 {
            margin-left: 100%
        }

        .el-col-md-pull-24 {
            position: relative;
            right: 100%
        }

        .el-col-md-push-24 {
            left: 100%;
            position: relative
        }
    }

    @media only screen and (min-width: 1200px) {
        .el-col-lg-0 {
            display: none;
            width: 0
        }

        .el-col-lg-offset-0 {
            margin-left: 0
        }

        .el-col-lg-pull-0 {
            position: relative;
            right: 0
        }

        .el-col-lg-push-0 {
            left: 0;
            position: relative
        }

        .el-col-lg-1 {
            width: 4.1666666667%
        }

        .el-col-lg-offset-1 {
            margin-left: 4.1666666667%
        }

        .el-col-lg-pull-1 {
            position: relative;
            right: 4.1666666667%
        }

        .el-col-lg-push-1 {
            left: 4.1666666667%;
            position: relative
        }

        .el-col-lg-2 {
            width: 8.3333333333%
        }

        .el-col-lg-offset-2 {
            margin-left: 8.3333333333%
        }

        .el-col-lg-pull-2 {
            position: relative;
            right: 8.3333333333%
        }

        .el-col-lg-push-2 {
            left: 8.3333333333%;
            position: relative
        }

        .el-col-lg-3 {
            width: 12.5%
        }

        .el-col-lg-offset-3 {
            margin-left: 12.5%
        }

        .el-col-lg-pull-3 {
            position: relative;
            right: 12.5%
        }

        .el-col-lg-push-3 {
            left: 12.5%;
            position: relative
        }

        .el-col-lg-4 {
            width: 16.6666666667%
        }

        .el-col-lg-offset-4 {
            margin-left: 16.6666666667%
        }

        .el-col-lg-pull-4 {
            position: relative;
            right: 16.6666666667%
        }

        .el-col-lg-push-4 {
            left: 16.6666666667%;
            position: relative
        }

        .el-col-lg-5 {
            width: 20.8333333333%
        }

        .el-col-lg-offset-5 {
            margin-left: 20.8333333333%
        }

        .el-col-lg-pull-5 {
            position: relative;
            right: 20.8333333333%
        }

        .el-col-lg-push-5 {
            left: 20.8333333333%;
            position: relative
        }

        .el-col-lg-6 {
            width: 25%
        }

        .el-col-lg-offset-6 {
            margin-left: 25%
        }

        .el-col-lg-pull-6 {
            position: relative;
            right: 25%
        }

        .el-col-lg-push-6 {
            left: 25%;
            position: relative
        }

        .el-col-lg-7 {
            width: 29.1666666667%
        }

        .el-col-lg-offset-7 {
            margin-left: 29.1666666667%
        }

        .el-col-lg-pull-7 {
            position: relative;
            right: 29.1666666667%
        }

        .el-col-lg-push-7 {
            left: 29.1666666667%;
            position: relative
        }

        .el-col-lg-8 {
            width: 33.3333333333%
        }

        .el-col-lg-offset-8 {
            margin-left: 33.3333333333%
        }

        .el-col-lg-pull-8 {
            position: relative;
            right: 33.3333333333%
        }

        .el-col-lg-push-8 {
            left: 33.3333333333%;
            position: relative
        }

        .el-col-lg-9 {
            width: 37.5%
        }

        .el-col-lg-offset-9 {
            margin-left: 37.5%
        }

        .el-col-lg-pull-9 {
            position: relative;
            right: 37.5%
        }

        .el-col-lg-push-9 {
            left: 37.5%;
            position: relative
        }

        .el-col-lg-10 {
            width: 41.6666666667%
        }

        .el-col-lg-offset-10 {
            margin-left: 41.6666666667%
        }

        .el-col-lg-pull-10 {
            position: relative;
            right: 41.6666666667%
        }

        .el-col-lg-push-10 {
            left: 41.6666666667%;
            position: relative
        }

        .el-col-lg-11 {
            width: 45.8333333333%
        }

        .el-col-lg-offset-11 {
            margin-left: 45.8333333333%
        }

        .el-col-lg-pull-11 {
            position: relative;
            right: 45.8333333333%
        }

        .el-col-lg-push-11 {
            left: 45.8333333333%;
            position: relative
        }

        .el-col-lg-12 {
            width: 50%
        }

        .el-col-lg-offset-12 {
            margin-left: 50%
        }

        .el-col-lg-pull-12 {
            position: relative;
            right: 50%
        }

        .el-col-lg-push-12 {
            left: 50%;
            position: relative
        }

        .el-col-lg-13 {
            width: 54.1666666667%
        }

        .el-col-lg-offset-13 {
            margin-left: 54.1666666667%
        }

        .el-col-lg-pull-13 {
            position: relative;
            right: 54.1666666667%
        }

        .el-col-lg-push-13 {
            left: 54.1666666667%;
            position: relative
        }

        .el-col-lg-14 {
            width: 58.3333333333%
        }

        .el-col-lg-offset-14 {
            margin-left: 58.3333333333%
        }

        .el-col-lg-pull-14 {
            position: relative;
            right: 58.3333333333%
        }

        .el-col-lg-push-14 {
            left: 58.3333333333%;
            position: relative
        }

        .el-col-lg-15 {
            width: 62.5%
        }

        .el-col-lg-offset-15 {
            margin-left: 62.5%
        }

        .el-col-lg-pull-15 {
            position: relative;
            right: 62.5%
        }

        .el-col-lg-push-15 {
            left: 62.5%;
            position: relative
        }

        .el-col-lg-16 {
            width: 66.6666666667%
        }

        .el-col-lg-offset-16 {
            margin-left: 66.6666666667%
        }

        .el-col-lg-pull-16 {
            position: relative;
            right: 66.6666666667%
        }

        .el-col-lg-push-16 {
            left: 66.6666666667%;
            position: relative
        }

        .el-col-lg-17 {
            width: 70.8333333333%
        }

        .el-col-lg-offset-17 {
            margin-left: 70.8333333333%
        }

        .el-col-lg-pull-17 {
            position: relative;
            right: 70.8333333333%
        }

        .el-col-lg-push-17 {
            left: 70.8333333333%;
            position: relative
        }

        .el-col-lg-18 {
            width: 75%
        }

        .el-col-lg-offset-18 {
            margin-left: 75%
        }

        .el-col-lg-pull-18 {
            position: relative;
            right: 75%
        }

        .el-col-lg-push-18 {
            left: 75%;
            position: relative
        }

        .el-col-lg-19 {
            width: 79.1666666667%
        }

        .el-col-lg-offset-19 {
            margin-left: 79.1666666667%
        }

        .el-col-lg-pull-19 {
            position: relative;
            right: 79.1666666667%
        }

        .el-col-lg-push-19 {
            left: 79.1666666667%;
            position: relative
        }

        .el-col-lg-20 {
            width: 83.3333333333%
        }

        .el-col-lg-offset-20 {
            margin-left: 83.3333333333%
        }

        .el-col-lg-pull-20 {
            position: relative;
            right: 83.3333333333%
        }

        .el-col-lg-push-20 {
            left: 83.3333333333%;
            position: relative
        }

        .el-col-lg-21 {
            width: 87.5%
        }

        .el-col-lg-offset-21 {
            margin-left: 87.5%
        }

        .el-col-lg-pull-21 {
            position: relative;
            right: 87.5%
        }

        .el-col-lg-push-21 {
            left: 87.5%;
            position: relative
        }

        .el-col-lg-22 {
            width: 91.6666666667%
        }

        .el-col-lg-offset-22 {
            margin-left: 91.6666666667%
        }

        .el-col-lg-pull-22 {
            position: relative;
            right: 91.6666666667%
        }

        .el-col-lg-push-22 {
            left: 91.6666666667%;
            position: relative
        }

        .el-col-lg-23 {
            width: 95.8333333333%
        }

        .el-col-lg-offset-23 {
            margin-left: 95.8333333333%
        }

        .el-col-lg-pull-23 {
            position: relative;
            right: 95.8333333333%
        }

        .el-col-lg-push-23 {
            left: 95.8333333333%;
            position: relative
        }

        .el-col-lg-24 {
            width: 100%
        }

        .el-col-lg-offset-24 {
            margin-left: 100%
        }

        .el-col-lg-pull-24 {
            position: relative;
            right: 100%
        }

        .el-col-lg-push-24 {
            left: 100%;
            position: relative
        }
    }

    @media only screen and (min-width: 1920px) {
        .el-col-xl-0 {
            display: none;
            width: 0
        }

        .el-col-xl-offset-0 {
            margin-left: 0
        }

        .el-col-xl-pull-0 {
            position: relative;
            right: 0
        }

        .el-col-xl-push-0 {
            left: 0;
            position: relative
        }

        .el-col-xl-1 {
            width: 4.1666666667%
        }

        .el-col-xl-offset-1 {
            margin-left: 4.1666666667%
        }

        .el-col-xl-pull-1 {
            position: relative;
            right: 4.1666666667%
        }

        .el-col-xl-push-1 {
            left: 4.1666666667%;
            position: relative
        }

        .el-col-xl-2 {
            width: 8.3333333333%
        }

        .el-col-xl-offset-2 {
            margin-left: 8.3333333333%
        }

        .el-col-xl-pull-2 {
            position: relative;
            right: 8.3333333333%
        }

        .el-col-xl-push-2 {
            left: 8.3333333333%;
            position: relative
        }

        .el-col-xl-3 {
            width: 12.5%
        }

        .el-col-xl-offset-3 {
            margin-left: 12.5%
        }

        .el-col-xl-pull-3 {
            position: relative;
            right: 12.5%
        }

        .el-col-xl-push-3 {
            left: 12.5%;
            position: relative
        }

        .el-col-xl-4 {
            width: 16.6666666667%
        }

        .el-col-xl-offset-4 {
            margin-left: 16.6666666667%
        }

        .el-col-xl-pull-4 {
            position: relative;
            right: 16.6666666667%
        }

        .el-col-xl-push-4 {
            left: 16.6666666667%;
            position: relative
        }

        .el-col-xl-5 {
            width: 20.8333333333%
        }

        .el-col-xl-offset-5 {
            margin-left: 20.8333333333%
        }

        .el-col-xl-pull-5 {
            position: relative;
            right: 20.8333333333%
        }

        .el-col-xl-push-5 {
            left: 20.8333333333%;
            position: relative
        }

        .el-col-xl-6 {
            width: 25%
        }

        .el-col-xl-offset-6 {
            margin-left: 25%
        }

        .el-col-xl-pull-6 {
            position: relative;
            right: 25%
        }

        .el-col-xl-push-6 {
            left: 25%;
            position: relative
        }

        .el-col-xl-7 {
            width: 29.1666666667%
        }

        .el-col-xl-offset-7 {
            margin-left: 29.1666666667%
        }

        .el-col-xl-pull-7 {
            position: relative;
            right: 29.1666666667%
        }

        .el-col-xl-push-7 {
            left: 29.1666666667%;
            position: relative
        }

        .el-col-xl-8 {
            width: 33.3333333333%
        }

        .el-col-xl-offset-8 {
            margin-left: 33.3333333333%
        }

        .el-col-xl-pull-8 {
            position: relative;
            right: 33.3333333333%
        }

        .el-col-xl-push-8 {
            left: 33.3333333333%;
            position: relative
        }

        .el-col-xl-9 {
            width: 37.5%
        }

        .el-col-xl-offset-9 {
            margin-left: 37.5%
        }

        .el-col-xl-pull-9 {
            position: relative;
            right: 37.5%
        }

        .el-col-xl-push-9 {
            left: 37.5%;
            position: relative
        }

        .el-col-xl-10 {
            width: 41.6666666667%
        }

        .el-col-xl-offset-10 {
            margin-left: 41.6666666667%
        }

        .el-col-xl-pull-10 {
            position: relative;
            right: 41.6666666667%
        }

        .el-col-xl-push-10 {
            left: 41.6666666667%;
            position: relative
        }

        .el-col-xl-11 {
            width: 45.8333333333%
        }

        .el-col-xl-offset-11 {
            margin-left: 45.8333333333%
        }

        .el-col-xl-pull-11 {
            position: relative;
            right: 45.8333333333%
        }

        .el-col-xl-push-11 {
            left: 45.8333333333%;
            position: relative
        }

        .el-col-xl-12 {
            width: 50%
        }

        .el-col-xl-offset-12 {
            margin-left: 50%
        }

        .el-col-xl-pull-12 {
            position: relative;
            right: 50%
        }

        .el-col-xl-push-12 {
            left: 50%;
            position: relative
        }

        .el-col-xl-13 {
            width: 54.1666666667%
        }

        .el-col-xl-offset-13 {
            margin-left: 54.1666666667%
        }

        .el-col-xl-pull-13 {
            position: relative;
            right: 54.1666666667%
        }

        .el-col-xl-push-13 {
            left: 54.1666666667%;
            position: relative
        }

        .el-col-xl-14 {
            width: 58.3333333333%
        }

        .el-col-xl-offset-14 {
            margin-left: 58.3333333333%
        }

        .el-col-xl-pull-14 {
            position: relative;
            right: 58.3333333333%
        }

        .el-col-xl-push-14 {
            left: 58.3333333333%;
            position: relative
        }

        .el-col-xl-15 {
            width: 62.5%
        }

        .el-col-xl-offset-15 {
            margin-left: 62.5%
        }

        .el-col-xl-pull-15 {
            position: relative;
            right: 62.5%
        }

        .el-col-xl-push-15 {
            left: 62.5%;
            position: relative
        }

        .el-col-xl-16 {
            width: 66.6666666667%
        }

        .el-col-xl-offset-16 {
            margin-left: 66.6666666667%
        }

        .el-col-xl-pull-16 {
            position: relative;
            right: 66.6666666667%
        }

        .el-col-xl-push-16 {
            left: 66.6666666667%;
            position: relative
        }

        .el-col-xl-17 {
            width: 70.8333333333%
        }

        .el-col-xl-offset-17 {
            margin-left: 70.8333333333%
        }

        .el-col-xl-pull-17 {
            position: relative;
            right: 70.8333333333%
        }

        .el-col-xl-push-17 {
            left: 70.8333333333%;
            position: relative
        }

        .el-col-xl-18 {
            width: 75%
        }

        .el-col-xl-offset-18 {
            margin-left: 75%
        }

        .el-col-xl-pull-18 {
            position: relative;
            right: 75%
        }

        .el-col-xl-push-18 {
            left: 75%;
            position: relative
        }

        .el-col-xl-19 {
            width: 79.1666666667%
        }

        .el-col-xl-offset-19 {
            margin-left: 79.1666666667%
        }

        .el-col-xl-pull-19 {
            position: relative;
            right: 79.1666666667%
        }

        .el-col-xl-push-19 {
            left: 79.1666666667%;
            position: relative
        }

        .el-col-xl-20 {
            width: 83.3333333333%
        }

        .el-col-xl-offset-20 {
            margin-left: 83.3333333333%
        }

        .el-col-xl-pull-20 {
            position: relative;
            right: 83.3333333333%
        }

        .el-col-xl-push-20 {
            left: 83.3333333333%;
            position: relative
        }

        .el-col-xl-21 {
            width: 87.5%
        }

        .el-col-xl-offset-21 {
            margin-left: 87.5%
        }

        .el-col-xl-pull-21 {
            position: relative;
            right: 87.5%
        }

        .el-col-xl-push-21 {
            left: 87.5%;
            position: relative
        }

        .el-col-xl-22 {
            width: 91.6666666667%
        }

        .el-col-xl-offset-22 {
            margin-left: 91.6666666667%
        }

        .el-col-xl-pull-22 {
            position: relative;
            right: 91.6666666667%
        }

        .el-col-xl-push-22 {
            left: 91.6666666667%;
            position: relative
        }

        .el-col-xl-23 {
            width: 95.8333333333%
        }

        .el-col-xl-offset-23 {
            margin-left: 95.8333333333%
        }

        .el-col-xl-pull-23 {
            position: relative;
            right: 95.8333333333%
        }

        .el-col-xl-push-23 {
            left: 95.8333333333%;
            position: relative
        }

        .el-col-xl-24 {
            width: 100%
        }

        .el-col-xl-offset-24 {
            margin-left: 100%
        }

        .el-col-xl-pull-24 {
            position: relative;
            right: 100%
        }

        .el-col-xl-push-24 {
            left: 100%;
            position: relative
        }
    }

    .el-upload {
        cursor: pointer;
        display: inline-block;
        outline: none;
        text-align: center
    }

    .el-upload__input {
        display: none
    }

    .el-upload__tip {
        color: #606266;
        font-size: 12px;
        margin-top: 7px
    }

    .el-upload iframe {
        filter: alpha(opacity=0);
        left: 0;
        opacity: 0;
        position: absolute;
        top: 0;
        z-index: -1
    }

    .el-upload--picture-card {
        background-color: #fbfdff;
        border: 1px dashed #c0ccda;
        border-radius: 6px;
        box-sizing: border-box;
        cursor: pointer;
        height: 148px;
        line-height: 146px;
        vertical-align: top;
        width: 148px
    }

    .el-upload--picture-card i {
        color: #8c939d;
        font-size: 28px
    }

    .el-upload--picture-card:hover, .el-upload:focus {
        border-color: #c8102e;
        color: #c8102e
    }

    .el-upload:focus .el-upload-dragger {
        border-color: #c8102e
    }

    .el-upload-dragger {
        background-color: #fff;
        border: 1px dashed #d9d9d9;
        border-radius: 6px;
        box-sizing: border-box;
        cursor: pointer;
        height: 180px;
        overflow: hidden;
        position: relative;
        text-align: center;
        width: 360px
    }

    .el-upload-dragger .el-icon-upload {
        color: #c0c4cc;
        font-size: 67px;
        line-height: 50px;
        margin: 40px 0 16px
    }

    .el-upload-dragger + .el-upload__tip {
        text-align: center
    }

    .el-upload-dragger ~ .el-upload__files {
        border-top: 1px solid #dcdfe6;
        margin-top: 7px;
        padding-top: 5px
    }

    .el-upload-dragger .el-upload__text {
        color: #606266;
        font-size: 14px;
        text-align: center
    }

    .el-upload-dragger .el-upload__text em {
        color: #c8102e;
        font-style: normal
    }

    .el-upload-dragger:hover {
        border-color: #c8102e
    }

    .el-upload-dragger.is-dragover {
        background-color: rgba(32, 159, 255, .06);
        border: 2px dashed #c8102e
    }

    .el-upload-list {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .el-upload-list__item {
        border-radius: 4px;
        box-sizing: border-box;
        color: #606266;
        font-size: 14px;
        line-height: 1.8;
        margin-top: 5px;
        position: relative;
        transition: all .5s cubic-bezier(.55, 0, .1, 1);
        width: 100%
    }

    .el-upload-list__item .el-progress {
        position: absolute;
        top: 20px;
        width: 100%
    }

    .el-upload-list__item .el-progress__text {
        position: absolute;
        right: 0;
        top: -13px
    }

    .el-upload-list__item .el-progress-bar {
        margin-right: 0;
        padding-right: 0
    }

    .el-upload-list__item:first-child {
        margin-top: 10px
    }

    .el-upload-list__item .el-icon-upload-success {
        color: #67c23a
    }

    .el-upload-list__item .el-icon-close {
        color: #606266;
        cursor: pointer;
        display: none;
        opacity: .75;
        position: absolute;
        right: 5px;
        top: 5px
    }

    .el-upload-list__item .el-icon-close:hover {
        opacity: 1
    }

    .el-upload-list__item .el-icon-close-tip {
        color: #c8102e;
        cursor: pointer;
        display: none;
        font-size: 12px;
        opacity: 1;
        position: absolute;
        right: 5px;
        top: 5px
    }

    .el-upload-list__item:hover {
        background-color: #f5f7fa
    }

    .el-upload-list__item:hover .el-icon-close {
        display: inline-block
    }

    .el-upload-list__item:hover .el-progress__text {
        display: none
    }

    .el-upload-list__item.is-success .el-upload-list__item-status-label {
        display: block
    }

    .el-upload-list__item.is-success .el-upload-list__item-name:focus, .el-upload-list__item.is-success .el-upload-list__item-name:hover {
        color: #c8102e;
        cursor: pointer
    }

    .el-upload-list__item.is-success:focus:not(:hover) .el-icon-close-tip {
        display: inline-block
    }

    .el-upload-list__item.is-success:active, .el-upload-list__item.is-success:not(.focusing):focus {
        outline-width: 0
    }

    .el-upload-list__item.is-success:active .el-icon-close-tip, .el-upload-list__item.is-success:focus .el-upload-list__item-status-label, .el-upload-list__item.is-success:hover .el-upload-list__item-status-label, .el-upload-list__item.is-success:not(.focusing):focus .el-icon-close-tip {
        display: none
    }

    .el-upload-list.is-disabled .el-upload-list__item:hover .el-upload-list__item-status-label {
        display: block
    }

    .el-upload-list__item-name {
        color: #606266;
        display: block;
        margin-right: 40px;
        overflow: hidden;
        padding-left: 4px;
        text-overflow: ellipsis;
        transition: color .3s;
        white-space: nowrap
    }

    .el-upload-list__item-name [class^=el-icon] {
        color: #909399;
        height: 100%;
        line-height: inherit;
        margin-right: 7px
    }

    .el-upload-list__item-status-label {
        display: none;
        line-height: inherit;
        position: absolute;
        right: 5px;
        top: 0
    }

    .el-upload-list__item-delete {
        color: #606266;
        display: none;
        font-size: 12px;
        position: absolute;
        right: 10px;
        top: 0
    }

    .el-upload-list__item-delete:hover {
        color: #c8102e
    }

    .el-upload-list--picture-card {
        display: inline;
        margin: 0;
        vertical-align: top
    }

    .el-upload-list--picture-card .el-upload-list__item {
        background-color: #fff;
        border: 1px solid #c0ccda;
        border-radius: 6px;
        box-sizing: border-box;
        display: inline-block;
        height: 148px;
        margin: 0 8px 8px 0;
        overflow: hidden;
        width: 148px
    }

    .el-upload-list--picture-card .el-upload-list__item .el-icon-check, .el-upload-list--picture-card .el-upload-list__item .el-icon-circle-check {
        color: #fff
    }

    .el-upload-list--picture-card .el-upload-list__item .el-icon-close, .el-upload-list--picture-card .el-upload-list__item:hover .el-upload-list__item-status-label {
        display: none
    }

    .el-upload-list--picture-card .el-upload-list__item:hover .el-progress__text {
        display: block
    }

    .el-upload-list--picture-card .el-upload-list__item-name {
        display: none
    }

    .el-upload-list--picture-card .el-upload-list__item-thumbnail {
        height: 100%;
        width: 100%
    }

    .el-upload-list--picture-card .el-upload-list__item-status-label {
        background: #13ce66;
        box-shadow: 0 0 1pc 1px rgba(0, 0, 0, .2);
        height: 24px;
        position: absolute;
        right: -15px;
        text-align: center;
        top: -6px;
        transform: rotate(45deg);
        width: 40px
    }

    .el-upload-list--picture-card .el-upload-list__item-status-label i {
        font-size: 12px;
        margin-top: 11px;
        transform: rotate(-45deg)
    }

    .el-upload-list--picture-card .el-upload-list__item-actions {
        background-color: rgba(0, 0, 0, .5);
        color: #fff;
        cursor: default;
        font-size: 20px;
        height: 100%;
        left: 0;
        opacity: 0;
        position: absolute;
        text-align: center;
        top: 0;
        transition: opacity .3s;
        width: 100%
    }

    .el-upload-list--picture-card .el-upload-list__item-actions:after {
        content: "";
        display: inline-block;
        height: 100%;
        vertical-align: middle
    }

    .el-upload-list--picture-card .el-upload-list__item-actions span {
        cursor: pointer;
        display: none
    }

    .el-upload-list--picture-card .el-upload-list__item-actions span + span {
        margin-left: 15px
    }

    .el-upload-list--picture-card .el-upload-list__item-actions .el-upload-list__item-delete {
        color: inherit;
        font-size: inherit;
        position: static
    }

    .el-upload-list--picture-card .el-upload-list__item-actions:hover {
        opacity: 1
    }

    .el-upload-list--picture-card .el-upload-list__item-actions:hover span {
        display: inline-block
    }

    .el-upload-list--picture-card .el-progress {
        bottom: auto;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 126px
    }

    .el-upload-list--picture-card .el-progress .el-progress__text {
        top: 50%
    }

    .el-upload-list--picture .el-upload-list__item {
        background-color: #fff;
        border: 1px solid #c0ccda;
        border-radius: 6px;
        box-sizing: border-box;
        height: 92px;
        margin-top: 10px;
        overflow: hidden;
        padding: 10px 10px 10px 90px;
        z-index: 0
    }

    .el-upload-list--picture .el-upload-list__item .el-icon-check, .el-upload-list--picture .el-upload-list__item .el-icon-circle-check {
        color: #fff
    }

    .el-upload-list--picture .el-upload-list__item:hover .el-upload-list__item-status-label {
        background: transparent;
        box-shadow: none;
        right: -12px;
        top: -2px
    }

    .el-upload-list--picture .el-upload-list__item:hover .el-progress__text {
        display: block
    }

    .el-upload-list--picture .el-upload-list__item.is-success .el-upload-list__item-name {
        line-height: 70px;
        margin-top: 0
    }

    .el-upload-list--picture .el-upload-list__item.is-success .el-upload-list__item-name i {
        display: none
    }

    .el-upload-list--picture .el-upload-list__item-thumbnail {
        background-color: #fff;
        display: inline-block;
        float: left;
        height: 70px;
        margin-left: -80px;
        position: relative;
        vertical-align: middle;
        width: 70px;
        z-index: 1
    }

    .el-upload-list--picture .el-upload-list__item-name {
        display: block;
        margin-top: 20px
    }

    .el-upload-list--picture .el-upload-list__item-name i {
        font-size: 70px;
        left: 9px;
        line-height: 1;
        position: absolute;
        top: 10px
    }

    .el-upload-list--picture .el-upload-list__item-status-label {
        background: #13ce66;
        box-shadow: 0 1px 1px #ccc;
        height: 26px;
        position: absolute;
        right: -17px;
        text-align: center;
        top: -7px;
        transform: rotate(45deg);
        width: 46px
    }

    .el-upload-list--picture .el-upload-list__item-status-label i {
        font-size: 12px;
        margin-top: 12px;
        transform: rotate(-45deg)
    }

    .el-upload-list--picture .el-progress {
        position: relative;
        top: -7px
    }

    .el-upload-cover {
        cursor: default;
        height: 100%;
        left: 0;
        overflow: hidden;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 10
    }

    .el-upload-cover:after {
        content: "";
        display: inline-block;
        height: 100%;
        vertical-align: middle
    }

    .el-upload-cover img {
        display: block;
        height: 100%;
        width: 100%
    }

    .el-upload-cover__label {
        background: #13ce66;
        box-shadow: 0 0 1pc 1px rgba(0, 0, 0, .2);
        height: 24px;
        position: absolute;
        right: -15px;
        text-align: center;
        top: -6px;
        transform: rotate(45deg);
        width: 40px
    }

    .el-upload-cover__label i {
        color: #fff;
        font-size: 12px;
        margin-top: 11px;
        transform: rotate(-45deg)
    }

    .el-upload-cover__progress {
        display: inline-block;
        position: static;
        vertical-align: middle;
        width: 243px
    }

    .el-upload-cover__progress + .el-upload__inner {
        opacity: 0
    }

    .el-upload-cover__content {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%
    }

    .el-upload-cover__interact {
        background-color: rgba(0, 0, 0, .72);
        bottom: 0;
        height: 100%;
        left: 0;
        position: absolute;
        text-align: center;
        width: 100%
    }

    .el-upload-cover__interact .btn {
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        margin-top: 60px;
        transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1);
        vertical-align: middle
    }

    .el-upload-cover__interact .btn i {
        margin-top: 0
    }

    .el-upload-cover__interact .btn span {
        opacity: 0;
        transition: opacity .15s linear
    }

    .el-upload-cover__interact .btn:not(:first-child) {
        margin-left: 35px
    }

    .el-upload-cover__interact .btn:hover {
        transform: translateY(-13px)
    }

    .el-upload-cover__interact .btn:hover span {
        opacity: 1
    }

    .el-upload-cover__interact .btn i {
        color: #fff;
        display: block;
        font-size: 24px;
        line-height: inherit;
        margin: 0 auto 5px
    }

    .el-upload-cover__title {
        background-color: #fff;
        bottom: 0;
        color: #303133;
        font-size: 14px;
        font-weight: 400;
        height: 36px;
        left: 0;
        line-height: 36px;
        margin: 0;
        overflow: hidden;
        padding: 0 10px;
        position: absolute;
        text-align: left;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 100%
    }

    .el-upload-cover + .el-upload__inner {
        opacity: 0;
        position: relative;
        z-index: 1
    }

    .el-progress {
        line-height: 1;
        position: relative
    }

    .el-progress__text {
        color: #606266;
        display: inline-block;
        font-size: 14px;
        line-height: 1;
        margin-left: 10px;
        vertical-align: middle
    }

    .el-progress__text i {
        display: block;
        vertical-align: middle
    }

    .el-progress--circle, .el-progress--dashboard {
        display: inline-block
    }

    .el-progress--circle .el-progress__text, .el-progress--dashboard .el-progress__text {
        left: 0;
        margin: 0;
        position: absolute;
        text-align: center;
        top: 50%;
        transform: translateY(-50%);
        width: 100%
    }

    .el-progress--circle .el-progress__text i, .el-progress--dashboard .el-progress__text i {
        display: inline-block;
        vertical-align: middle
    }

    .el-progress--without-text .el-progress__text {
        display: none
    }

    .el-progress--without-text .el-progress-bar {
        display: block;
        margin-right: 0;
        padding-right: 0
    }

    .el-progress--text-inside .el-progress-bar {
        margin-right: 0;
        padding-right: 0
    }

    .el-progress.is-success .el-progress-bar__inner {
        background-color: #67c23a
    }

    .el-progress.is-success .el-progress__text {
        color: #67c23a
    }

    .el-progress.is-warning .el-progress-bar__inner {
        background-color: #e6a23c
    }

    .el-progress.is-warning .el-progress__text {
        color: #e6a23c
    }

    .el-progress.is-exception .el-progress-bar__inner {
        background-color: #f56c6c
    }

    .el-progress.is-exception .el-progress__text {
        color: #f56c6c
    }

    .el-progress-bar {
        box-sizing: border-box;
        display: inline-block;
        margin-right: -55px;
        padding-right: 50px;
        vertical-align: middle;
        width: 100%
    }

    .el-progress-bar__outer {
        background-color: #ebeef5;
        border-radius: 100px;
        height: 6px;
        overflow: hidden;
        position: relative;
        vertical-align: middle
    }

    .el-progress-bar__inner {
        background-color: #c8102e;
        border-radius: 100px;
        height: 100%;
        left: 0;
        line-height: 1;
        position: absolute;
        text-align: right;
        top: 0;
        transition: width .6s ease;
        white-space: nowrap
    }

    .el-progress-bar__inner:after {
        content: "";
        display: inline-block;
        height: 100%;
        vertical-align: middle
    }

    .el-progress-bar__innerText {
        color: #fff;
        display: inline-block;
        font-size: 12px;
        margin: 0 5px;
        vertical-align: middle
    }

    @keyframes progress {
        0% {
            background-position: 0 0
        }
        to {
            background-position: 32px 0
        }
    }

    .el-time-spinner {
        white-space: nowrap;
        width: 100%
    }

    .el-spinner {
        display: inline-block;
        vertical-align: middle
    }

    .el-spinner-inner {
        animation: rotate 2s linear infinite;
        height: 50px;
        width: 50px
    }

    .el-spinner-inner .path {
        stroke: #ececec;
        stroke-linecap: round;
        animation: dash 1.5s ease-in-out infinite
    }

    @keyframes rotate {
        to {
            transform: rotate(1turn)
        }
    }

    @keyframes dash {
        0% {
            stroke-dasharray: 1, 150;
            stroke-dashoffset: 0
        }
        50% {
            stroke-dasharray: 90, 150;
            stroke-dashoffset: -35
        }
        to {
            stroke-dasharray: 90, 150;
            stroke-dashoffset: -124
        }
    }

    .el-message {
        align-items: center;
        background-color: #edf2fc;
        border: 1px solid #ebeef5;
        border-radius: 4px;
        box-sizing: border-box;
        display: flex;
        left: 50%;
        min-width: 380px;
        overflow: hidden;
        padding: 15px 15px 15px 20px;
        position: fixed;
        top: 20px;
        transform: translateX(-50%);
        transition: opacity .3s, transform .4s, top .4s
    }

    .el-message.is-center {
        justify-content: center
    }

    .el-message.is-closable .el-message__content {
        padding-right: 16px
    }

    .el-message p {
        margin: 0
    }

    .el-message--info .el-message__content {
        color: #909399
    }

    .el-message--success {
        background-color: #f0f9eb;
        border-color: #e1f3d8
    }

    .el-message--success .el-message__content {
        color: #67c23a
    }

    .el-message--warning {
        background-color: #fdf6ec;
        border-color: #faecd8
    }

    .el-message--warning .el-message__content {
        color: #e6a23c
    }

    .el-message--error {
        background-color: #fef0f0;
        border-color: #fde2e2
    }

    .el-message--error .el-message__content {
        color: #f56c6c
    }

    .el-message__icon {
        margin-right: 10px
    }

    .el-message__content {
        font-size: 14px;
        line-height: 1;
        padding: 0
    }

    .el-message__content:focus {
        outline-width: 0
    }

    .el-message__closeBtn {
        color: #c0c4cc;
        cursor: pointer;
        font-size: 16px;
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%)
    }

    .el-message__closeBtn:focus {
        outline-width: 0
    }

    .el-message__closeBtn:hover {
        color: #909399
    }

    .el-message .el-icon-success {
        color: #67c23a
    }

    .el-message .el-icon-error {
        color: #f56c6c
    }

    .el-message .el-icon-info {
        color: #909399
    }

    .el-message .el-icon-warning {
        color: #e6a23c
    }

    .el-message-fade-enter, .el-message-fade-leave-active {
        opacity: 0;
        transform: translate(-50%, -100%)
    }

    .el-badge {
        display: inline-block;
        position: relative;
        vertical-align: middle
    }

    .el-badge__content {
        background-color: #f56c6c;
        border: 1px solid #fff;
        border-radius: 10px;
        color: #fff;
        display: inline-block;
        font-size: 12px;
        height: 18px;
        line-height: 18px;
        padding: 0 6px;
        text-align: center;
        white-space: nowrap
    }

    .el-badge__content.is-fixed {
        position: absolute;
        right: 10px;
        top: 0;
        transform: translateY(-50%) translateX(100%)
    }

    .el-badge__content.is-fixed.is-dot {
        right: 5px
    }

    .el-badge__content.is-dot {
        border-radius: 50%;
        height: 8px;
        padding: 0;
        right: 0;
        width: 8px
    }

    .el-badge__content--primary {
        background-color: #c8102e
    }

    .el-badge__content--success {
        background-color: #67c23a
    }

    .el-badge__content--warning {
        background-color: #e6a23c
    }

    .el-badge__content--info {
        background-color: #909399
    }

    .el-badge__content--danger {
        background-color: #f56c6c
    }

    .el-card {
        background-color: #fff;
        border: 1px solid #ebeef5;
        border-radius: 4px;
        color: #303133;
        overflow: hidden;
        transition: .3s
    }

    .el-card.is-always-shadow, .el-card.is-hover-shadow:focus, .el-card.is-hover-shadow:hover {
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1)
    }

    .el-card__header {
        border-bottom: 1px solid #ebeef5;
        box-sizing: border-box;
        padding: 18px 20px
    }

    .el-card__body {
        padding: 20px
    }

    .el-rate {
        height: 20px;
        line-height: 1
    }

    .el-rate:active, .el-rate:focus {
        outline-width: 0
    }

    .el-rate__item {
        font-size: 0;
        vertical-align: middle
    }

    .el-rate__icon, .el-rate__item {
        display: inline-block;
        position: relative
    }

    .el-rate__icon {
        color: #c0c4cc;
        font-size: 18px;
        margin-right: 6px;
        transition: .3s
    }

    .el-rate__icon.hover {
        transform: scale(1.15)
    }

    .el-rate__decimal, .el-rate__icon .path2 {
        left: 0;
        position: absolute;
        top: 0
    }

    .el-rate__decimal {
        display: inline-block;
        overflow: hidden
    }

    .el-rate__text {
        font-size: 14px;
        vertical-align: middle
    }

    .el-steps {
        display: flex
    }

    .el-steps--simple {
        background: #f5f7fa;
        border-radius: 4px;
        padding: 13px 8%
    }

    .el-steps--horizontal {
        white-space: nowrap
    }

    .el-steps--vertical {
        flex-flow: column;
        height: 100%
    }

    .el-step {
        flex-shrink: 1;
        position: relative
    }

    .el-step:last-of-type .el-step__line {
        display: none
    }

    .el-step:last-of-type.is-flex {
        flex-basis: auto !important;
        flex-grow: 0;
        flex-shrink: 0
    }

    .el-step:last-of-type .el-step__description, .el-step:last-of-type .el-step__main {
        padding-right: 0
    }

    .el-step__head {
        position: relative;
        width: 100%
    }

    .el-step__head.is-process {
        border-color: #303133;
        color: #303133
    }

    .el-step__head.is-wait {
        border-color: #c0c4cc;
        color: #c0c4cc
    }

    .el-step__head.is-success {
        border-color: #67c23a;
        color: #67c23a
    }

    .el-step__head.is-error {
        border-color: #f56c6c;
        color: #f56c6c
    }

    .el-step__head.is-finish {
        border-color: #c8102e;
        color: #c8102e
    }

    .el-step__icon {
        align-items: center;
        background: #fff;
        box-sizing: border-box;
        display: inline-flex;
        font-size: 14px;
        height: 24px;
        justify-content: center;
        position: relative;
        transition: .15s ease-out;
        width: 24px;
        z-index: 1
    }

    .el-step__icon.is-text {
        border: 2px solid;
        border-color: inherit;
        border-radius: 50%
    }

    .el-step__icon.is-icon {
        width: 40px
    }

    .el-step__icon-inner {
        color: inherit;
        display: inline-block;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .el-step__icon-inner[class*=el-icon]:not(.is-status) {
        font-size: 25px;
        font-weight: 400
    }

    .el-step__icon-inner.is-status {
        transform: translateY(1px)
    }

    .el-step__line {
        background-color: #c0c4cc;
        border-color: inherit;
        position: absolute
    }

    .el-step__line-inner {
        border: 1px solid;
        border-color: inherit;
        box-sizing: border-box;
        display: block;
        height: 0;
        transition: .15s ease-out;
        width: 0
    }

    .el-step__main {
        text-align: left;
        white-space: normal
    }

    .el-step__title {
        font-size: 16px;
        line-height: 38px
    }

    .el-step__title.is-process {
        color: #303133;
        font-weight: 700
    }

    .el-step__title.is-wait {
        color: #c0c4cc
    }

    .el-step__title.is-success {
        color: #67c23a
    }

    .el-step__title.is-error {
        color: #f56c6c
    }

    .el-step__title.is-finish {
        color: #c8102e
    }

    .el-step__description {
        font-size: 12px;
        font-weight: 400;
        line-height: 20px;
        margin-top: -5px;
        padding-right: 10%
    }

    .el-step__description.is-process {
        color: #303133
    }

    .el-step__description.is-wait {
        color: #c0c4cc
    }

    .el-step__description.is-success {
        color: #67c23a
    }

    .el-step__description.is-error {
        color: #f56c6c
    }

    .el-step__description.is-finish {
        color: #c8102e
    }

    .el-step.is-horizontal {
        display: inline-block
    }

    .el-step.is-horizontal .el-step__line {
        height: 2px;
        left: 0;
        right: 0;
        top: 11px
    }

    .el-step.is-vertical {
        display: flex
    }

    .el-step.is-vertical .el-step__head {
        flex-grow: 0;
        width: 24px
    }

    .el-step.is-vertical .el-step__main {
        flex-grow: 1;
        padding-left: 10px
    }

    .el-step.is-vertical .el-step__title {
        line-height: 24px;
        padding-bottom: 8px
    }

    .el-step.is-vertical .el-step__line {
        bottom: 0;
        left: 11px;
        top: 0;
        width: 2px
    }

    .el-step.is-vertical .el-step__icon.is-icon {
        width: 24px
    }

    .el-step.is-center .el-step__head, .el-step.is-center .el-step__main {
        text-align: center
    }

    .el-step.is-center .el-step__description {
        padding-left: 20%;
        padding-right: 20%
    }

    .el-step.is-center .el-step__line {
        left: 50%;
        right: -50%
    }

    .el-step.is-simple {
        align-items: center;
        display: flex
    }

    .el-step.is-simple .el-step__head {
        font-size: 0;
        padding-right: 10px;
        width: auto
    }

    .el-step.is-simple .el-step__icon {
        background: transparent;
        font-size: 12px;
        height: 16px;
        width: 16px
    }

    .el-step.is-simple .el-step__icon-inner[class*=el-icon]:not(.is-status) {
        font-size: 18px
    }

    .el-step.is-simple .el-step__icon-inner.is-status {
        transform: scale(.8) translateY(1px)
    }

    .el-step.is-simple .el-step__main {
        align-items: stretch;
        display: flex;
        flex-grow: 1;
        position: relative
    }

    .el-step.is-simple .el-step__title {
        font-size: 16px;
        line-height: 20px
    }

    .el-step.is-simple:not(:last-of-type) .el-step__title {
        max-width: 50%;
        word-break: break-all
    }

    .el-step.is-simple .el-step__arrow {
        align-items: center;
        display: flex;
        flex-grow: 1;
        justify-content: center
    }

    .el-step.is-simple .el-step__arrow:after, .el-step.is-simple .el-step__arrow:before {
        background: #c0c4cc;
        content: "";
        display: inline-block;
        height: 15px;
        position: absolute;
        width: 1px
    }

    .el-step.is-simple .el-step__arrow:before {
        transform: rotate(-45deg) translateY(-4px);
        transform-origin: 0 0
    }

    .el-step.is-simple .el-step__arrow:after {
        transform: rotate(45deg) translateY(4px);
        transform-origin: 100% 100%
    }

    .el-step.is-simple:last-of-type .el-step__arrow {
        display: none
    }

    .el-carousel {
        position: relative
    }

    .el-carousel--horizontal {
        overflow-x: hidden
    }

    .el-carousel--vertical {
        overflow-y: hidden
    }

    .el-carousel__container {
        height: 300px;
        position: relative
    }

    .el-carousel__arrow {
        background-color: rgba(31, 45, 61, .11);
        border: none;
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        font-size: 12px;
        height: 36px;
        margin: 0;
        outline: none;
        padding: 0;
        position: absolute;
        text-align: center;
        top: 50%;
        transform: translateY(-50%);
        transition: .3s;
        width: 36px;
        z-index: 10
    }

    .el-carousel__arrow--left {
        left: 16px
    }

    .el-carousel__arrow--right {
        right: 16px
    }

    .el-carousel__arrow:hover {
        background-color: rgba(31, 45, 61, .23)
    }

    .el-carousel__arrow i {
        cursor: pointer
    }

    .el-carousel__indicators {
        list-style: none;
        margin: 0;
        padding: 0;
        position: absolute;
        z-index: 2
    }

    .el-carousel__indicators--horizontal {
        bottom: 0;
        left: 50%;
        transform: translateX(-50%)
    }

    .el-carousel__indicators--vertical {
        right: 0;
        top: 50%;
        transform: translateY(-50%)
    }

    .el-carousel__indicators--outside {
        bottom: 26px;
        position: static;
        text-align: center;
        transform: none
    }

    .el-carousel__indicators--outside .el-carousel__indicator:hover button {
        opacity: .64
    }

    .el-carousel__indicators--outside button {
        background-color: #c0c4cc;
        opacity: .24
    }

    .el-carousel__indicators--labels {
        left: 0;
        right: 0;
        text-align: center;
        transform: none
    }

    .el-carousel__indicators--labels .el-carousel__button {
        font-size: 12px;
        height: auto;
        padding: 2px 18px;
        width: auto
    }

    .el-carousel__indicators--labels .el-carousel__indicator {
        padding: 6px 4px
    }

    .el-carousel__indicator {
        background-color: transparent;
        cursor: pointer
    }

    .el-carousel__indicator:hover button {
        opacity: .72
    }

    .el-carousel__indicator--horizontal {
        display: inline-block;
        padding: 12px 4px
    }

    .el-carousel__indicator--vertical {
        padding: 4px 12px
    }

    .el-carousel__indicator--vertical .el-carousel__button {
        height: 15px;
        width: 2px
    }

    .el-carousel__indicator.is-active button {
        opacity: 1
    }

    .el-carousel__button {
        background-color: #fff;
        border: none;
        cursor: pointer;
        display: block;
        height: 2px;
        margin: 0;
        opacity: .48;
        outline: none;
        padding: 0;
        transition: .3s;
        width: 30px
    }

    .carousel-arrow-left-enter, .carousel-arrow-left-leave-active {
        opacity: 0;
        transform: translateY(-50%) translateX(-10px)
    }

    .carousel-arrow-right-enter, .carousel-arrow-right-leave-active {
        opacity: 0;
        transform: translateY(-50%) translateX(10px)
    }

    .el-carousel__item {
        display: inline-block;
        height: 100%;
        left: 0;
        overflow: hidden;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 0
    }

    .el-carousel__item.is-active {
        z-index: 2
    }

    .el-carousel__item--card, .el-carousel__item.is-animating {
        transition: transform .4s ease-in-out
    }

    .el-carousel__item--card {
        width: 50%
    }

    .el-carousel__item--card.is-in-stage {
        cursor: pointer;
        z-index: 1
    }

    .el-carousel__item--card.is-in-stage.is-hover .el-carousel__mask, .el-carousel__item--card.is-in-stage:hover .el-carousel__mask {
        opacity: .12
    }

    .el-carousel__item--card.is-active {
        z-index: 2
    }

    .el-carousel__mask {
        background-color: #fff;
        height: 100%;
        left: 0;
        opacity: .24;
        position: absolute;
        top: 0;
        transition: .2s;
        width: 100%
    }

    .fade-in-linear-enter-active, .fade-in-linear-leave-active {
        transition: opacity .2s linear
    }

    .fade-in-linear-enter, .fade-in-linear-leave, .fade-in-linear-leave-active {
        opacity: 0
    }

    .el-fade-in-linear-enter-active, .el-fade-in-linear-leave-active {
        transition: opacity .2s linear
    }

    .el-fade-in-linear-enter, .el-fade-in-linear-leave, .el-fade-in-linear-leave-active {
        opacity: 0
    }

    .el-fade-in-enter-active, .el-fade-in-leave-active {
        transition: all .3s cubic-bezier(.55, 0, .1, 1)
    }

    .el-fade-in-enter, .el-fade-in-leave-active {
        opacity: 0
    }

    .el-zoom-in-center-enter-active, .el-zoom-in-center-leave-active {
        transition: all .3s cubic-bezier(.55, 0, .1, 1)
    }

    .el-zoom-in-center-enter, .el-zoom-in-center-leave-active {
        opacity: 0;
        transform: scaleX(0)
    }

    .el-zoom-in-top-enter-active, .el-zoom-in-top-leave-active {
        opacity: 1;
        transform: scaleY(1);
        transform-origin: center top;
        transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1)
    }

    .el-zoom-in-top-enter, .el-zoom-in-top-leave-active {
        opacity: 0;
        transform: scaleY(0)
    }

    .el-zoom-in-bottom-enter-active, .el-zoom-in-bottom-leave-active {
        opacity: 1;
        transform: scaleY(1);
        transform-origin: center bottom;
        transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1)
    }

    .el-zoom-in-bottom-enter, .el-zoom-in-bottom-leave-active {
        opacity: 0;
        transform: scaleY(0)
    }

    .el-zoom-in-left-enter-active, .el-zoom-in-left-leave-active {
        opacity: 1;
        transform: scale(1);
        transform-origin: top left;
        transition: transform .3s cubic-bezier(.23, 1, .32, 1), opacity .3s cubic-bezier(.23, 1, .32, 1)
    }

    .el-zoom-in-left-enter, .el-zoom-in-left-leave-active {
        opacity: 0;
        transform: scale(.45)
    }

    .collapse-transition {
        transition: height .3s ease-in-out, padding-top .3s ease-in-out, padding-bottom .3s ease-in-out
    }

    .horizontal-collapse-transition {
        transition: width .3s ease-in-out, padding-left .3s ease-in-out, padding-right .3s ease-in-out
    }

    .el-list-enter-active, .el-list-leave-active {
        transition: all 1s
    }

    .el-list-enter, .el-list-leave-active {
        opacity: 0;
        transform: translateY(-30px)
    }

    .el-opacity-transition {
        transition: opacity .3s cubic-bezier(.55, 0, .1, 1)
    }

    .el-collapse {
        border-bottom: 1px solid #ebeef5;
        border-top: 1px solid #ebeef5
    }

    .el-collapse-item.is-disabled .el-collapse-item__header {
        color: #bbb;
        cursor: not-allowed
    }

    .el-collapse-item__header {
        align-items: center;
        background-color: #fff;
        border-bottom: 1px solid #ebeef5;
        color: #303133;
        cursor: pointer;
        display: flex;
        font-size: 13px;
        font-weight: 500;
        height: 48px;
        line-height: 48px;
        outline: none;
        transition: border-bottom-color .3s
    }

    .el-collapse-item__arrow {
        font-weight: 300;
        margin: 0 8px 0 auto;
        transition: transform .3s
    }

    .el-collapse-item__arrow.is-active {
        transform: rotate(90deg)
    }

    .el-collapse-item__header.focusing:focus:not(:hover) {
        color: #c8102e
    }

    .el-collapse-item__header.is-active {
        border-bottom-color: transparent
    }

    .el-collapse-item__wrap {
        background-color: #fff;
        border-bottom: 1px solid #ebeef5;
        box-sizing: border-box;
        overflow: hidden;
        will-change: height
    }

    .el-collapse-item__content {
        color: #303133;
        font-size: 13px;
        line-height: 1.7692307692;
        padding-bottom: 25px
    }

    .el-collapse-item:last-child {
        margin-bottom: -1px
    }

    .el-popper .popper__arrow, .el-popper .popper__arrow:after {
        border-color: transparent;
        border-style: solid;
        display: block;
        height: 0;
        position: absolute;
        width: 0
    }

    .el-popper .popper__arrow {
        border-width: 6px;
        filter: drop-shadow(0 2px 12px rgba(0, 0, 0, .03))
    }

    .el-popper .popper__arrow:after {
        border-width: 6px;
        content: " "
    }

    .el-popper[x-placement^=top] {
        margin-bottom: 12px
    }

    .el-popper[x-placement^=top] .popper__arrow {
        border-bottom-width: 0;
        border-top-color: #ebeef5;
        bottom: -6px;
        left: 50%;
        margin-right: 3px
    }

    .el-popper[x-placement^=top] .popper__arrow:after {
        border-bottom-width: 0;
        border-top-color: #fff;
        bottom: 1px;
        margin-left: -6px
    }

    .el-popper[x-placement^=bottom] {
        margin-top: 12px
    }

    .el-popper[x-placement^=bottom] .popper__arrow {
        border-bottom-color: #ebeef5;
        border-top-width: 0;
        left: 50%;
        margin-right: 3px;
        top: -6px
    }

    .el-popper[x-placement^=bottom] .popper__arrow:after {
        border-bottom-color: #fff;
        border-top-width: 0;
        margin-left: -6px;
        top: 1px
    }

    .el-popper[x-placement^=right] {
        margin-left: 12px
    }

    .el-popper[x-placement^=right] .popper__arrow {
        border-left-width: 0;
        border-right-color: #ebeef5;
        left: -6px;
        margin-bottom: 3px;
        top: 50%
    }

    .el-popper[x-placement^=right] .popper__arrow:after {
        border-left-width: 0;
        border-right-color: #fff;
        bottom: -6px;
        left: 1px
    }

    .el-popper[x-placement^=left] {
        margin-right: 12px
    }

    .el-popper[x-placement^=left] .popper__arrow {
        border-left-color: #ebeef5;
        border-right-width: 0;
        margin-bottom: 3px;
        right: -6px;
        top: 50%
    }

    .el-popper[x-placement^=left] .popper__arrow:after {
        border-left-color: #fff;
        border-right-width: 0;
        bottom: -6px;
        margin-left: -6px;
        right: 1px
    }

    .el-tag {
        background-color: #fae7ea;
        border: 1px solid #f4cfd5;
        border-radius: 4px;
        box-sizing: border-box;
        color: #c8102e;
        display: inline-block;
        font-size: 12px;
        height: 32px;
        line-height: 30px;
        padding: 0 10px;
        white-space: nowrap
    }

    .el-tag.is-hit {
        border-color: #c8102e
    }

    .el-tag .el-tag__close {
        color: #c8102e
    }

    .el-tag .el-tag__close:hover {
        background-color: #c8102e;
        color: #fff
    }

    .el-tag.el-tag--info {
        background-color: #f4f4f5;
        border-color: #e9e9eb;
        color: #909399
    }

    .el-tag.el-tag--info.is-hit {
        border-color: #909399
    }

    .el-tag.el-tag--info .el-tag__close {
        color: #909399
    }

    .el-tag.el-tag--info .el-tag__close:hover {
        background-color: #909399;
        color: #fff
    }

    .el-tag.el-tag--success {
        background-color: #f0f9eb;
        border-color: #e1f3d8;
        color: #67c23a
    }

    .el-tag.el-tag--success.is-hit {
        border-color: #67c23a
    }

    .el-tag.el-tag--success .el-tag__close {
        color: #67c23a
    }

    .el-tag.el-tag--success .el-tag__close:hover {
        background-color: #67c23a;
        color: #fff
    }

    .el-tag.el-tag--warning {
        background-color: #fdf6ec;
        border-color: #faecd8;
        color: #e6a23c
    }

    .el-tag.el-tag--warning.is-hit {
        border-color: #e6a23c
    }

    .el-tag.el-tag--warning .el-tag__close {
        color: #e6a23c
    }

    .el-tag.el-tag--warning .el-tag__close:hover {
        background-color: #e6a23c;
        color: #fff
    }

    .el-tag.el-tag--danger {
        background-color: #fef0f0;
        border-color: #fde2e2;
        color: #f56c6c
    }

    .el-tag.el-tag--danger.is-hit {
        border-color: #f56c6c
    }

    .el-tag.el-tag--danger .el-tag__close {
        color: #f56c6c
    }

    .el-tag.el-tag--danger .el-tag__close:hover {
        background-color: #f56c6c;
        color: #fff
    }

    .el-tag .el-icon-close {
        border-radius: 50%;
        cursor: pointer;
        font-size: 12px;
        height: 16px;
        line-height: 16px;
        position: relative;
        right: -5px;
        text-align: center;
        top: -1px;
        vertical-align: middle;
        width: 16px
    }

    .el-tag .el-icon-close:before {
        display: block
    }

    .el-tag--dark {
        background-color: #c8102e;
        color: #fff
    }

    .el-tag--dark, .el-tag--dark.is-hit {
        border-color: #c8102e
    }

    .el-tag--dark .el-tag__close {
        color: #fff
    }

    .el-tag--dark .el-tag__close:hover {
        background-color: #d34058;
        color: #fff
    }

    .el-tag--dark.el-tag--info {
        background-color: #909399;
        border-color: #909399;
        color: #fff
    }

    .el-tag--dark.el-tag--info.is-hit {
        border-color: #909399
    }

    .el-tag--dark.el-tag--info .el-tag__close {
        color: #fff
    }

    .el-tag--dark.el-tag--info .el-tag__close:hover {
        background-color: #a6a9ad;
        color: #fff
    }

    .el-tag--dark.el-tag--success {
        background-color: #67c23a;
        border-color: #67c23a;
        color: #fff
    }

    .el-tag--dark.el-tag--success.is-hit {
        border-color: #67c23a
    }

    .el-tag--dark.el-tag--success .el-tag__close {
        color: #fff
    }

    .el-tag--dark.el-tag--success .el-tag__close:hover {
        background-color: #85ce61;
        color: #fff
    }

    .el-tag--dark.el-tag--warning {
        background-color: #e6a23c;
        border-color: #e6a23c;
        color: #fff
    }

    .el-tag--dark.el-tag--warning.is-hit {
        border-color: #e6a23c
    }

    .el-tag--dark.el-tag--warning .el-tag__close {
        color: #fff
    }

    .el-tag--dark.el-tag--warning .el-tag__close:hover {
        background-color: #ebb563;
        color: #fff
    }

    .el-tag--dark.el-tag--danger {
        background-color: #f56c6c;
        border-color: #f56c6c;
        color: #fff
    }

    .el-tag--dark.el-tag--danger.is-hit {
        border-color: #f56c6c
    }

    .el-tag--dark.el-tag--danger .el-tag__close {
        color: #fff
    }

    .el-tag--dark.el-tag--danger .el-tag__close:hover {
        background-color: #f78989;
        color: #fff
    }

    .el-tag--plain {
        background-color: #fff;
        border-color: #e99fab;
        color: #c8102e
    }

    .el-tag--plain.is-hit {
        border-color: #c8102e
    }

    .el-tag--plain .el-tag__close {
        color: #c8102e
    }

    .el-tag--plain .el-tag__close:hover {
        background-color: #c8102e;
        color: #fff
    }

    .el-tag--plain.el-tag--info {
        background-color: #fff;
        border-color: #d3d4d6;
        color: #909399
    }

    .el-tag--plain.el-tag--info.is-hit {
        border-color: #909399
    }

    .el-tag--plain.el-tag--info .el-tag__close {
        color: #909399
    }

    .el-tag--plain.el-tag--info .el-tag__close:hover {
        background-color: #909399;
        color: #fff
    }

    .el-tag--plain.el-tag--success {
        background-color: #fff;
        border-color: #c2e7b0;
        color: #67c23a
    }

    .el-tag--plain.el-tag--success.is-hit {
        border-color: #67c23a
    }

    .el-tag--plain.el-tag--success .el-tag__close {
        color: #67c23a
    }

    .el-tag--plain.el-tag--success .el-tag__close:hover {
        background-color: #67c23a;
        color: #fff
    }

    .el-tag--plain.el-tag--warning {
        background-color: #fff;
        border-color: #f5dab1;
        color: #e6a23c
    }

    .el-tag--plain.el-tag--warning.is-hit {
        border-color: #e6a23c
    }

    .el-tag--plain.el-tag--warning .el-tag__close {
        color: #e6a23c
    }

    .el-tag--plain.el-tag--warning .el-tag__close:hover {
        background-color: #e6a23c;
        color: #fff
    }

    .el-tag--plain.el-tag--danger {
        background-color: #fff;
        border-color: #fbc4c4;
        color: #f56c6c
    }

    .el-tag--plain.el-tag--danger.is-hit {
        border-color: #f56c6c
    }

    .el-tag--plain.el-tag--danger .el-tag__close {
        color: #f56c6c
    }

    .el-tag--plain.el-tag--danger .el-tag__close:hover {
        background-color: #f56c6c;
        color: #fff
    }

    .el-tag--medium {
        height: 28px;
        line-height: 26px
    }

    .el-tag--medium .el-icon-close {
        transform: scale(.8)
    }

    .el-tag--small {
        height: 24px;
        line-height: 22px;
        padding: 0 8px
    }

    .el-tag--small .el-icon-close {
        transform: scale(.8)
    }

    .el-tag--mini {
        height: 20px;
        line-height: 19px;
        padding: 0 5px
    }

    .el-tag--mini .el-icon-close {
        margin-left: -3px;
        transform: scale(.7)
    }

    .el-cascader {
        display: inline-block;
        font-size: 14px;
        line-height: 40px;
        position: relative
    }

    .el-cascader:not(.is-disabled):hover .el-input__inner {
        border-color: #c0c4cc;
        cursor: pointer
    }

    .el-cascader .el-input {
        cursor: pointer
    }

    .el-cascader .el-input .el-input__inner {
        text-overflow: ellipsis
    }

    .el-cascader .el-input .el-input__inner:focus {
        border-color: #c8102e
    }

    .el-cascader .el-input .el-icon-arrow-down {
        font-size: 14px;
        transition: transform .3s
    }

    .el-cascader .el-input .el-icon-arrow-down.is-reverse {
        transform: rotate(180deg)
    }

    .el-cascader .el-input .el-icon-circle-close:hover {
        color: #909399
    }

    .el-cascader .el-input.is-focus .el-input__inner {
        border-color: #c8102e
    }

    .el-cascader--medium {
        font-size: 14px;
        line-height: 36px
    }

    .el-cascader--small {
        font-size: 13px;
        line-height: 32px
    }

    .el-cascader--mini {
        font-size: 12px;
        line-height: 28px
    }

    .el-cascader.is-disabled .el-cascader__label {
        color: #c0c4cc;
        z-index: 2
    }

    .el-cascader__dropdown {
        background: #fff;
        border: 1px solid #e4e7ed;
        border-radius: 4px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        font-size: 14px;
        margin: 5px 0
    }

    .el-cascader__tags {
        box-sizing: border-box;
        display: flex;
        flex-wrap: wrap;
        left: 0;
        line-height: normal;
        position: absolute;
        right: 30px;
        text-align: left;
        top: 50%;
        transform: translateY(-50%)
    }

    .el-cascader__tags .el-tag {
        align-items: center;
        background: #f0f2f5;
        display: inline-flex;
        margin: 2px 0 2px 6px;
        max-width: 100%;
        text-overflow: ellipsis
    }

    .el-cascader__tags .el-tag:not(.is-hit) {
        border-color: transparent
    }

    .el-cascader__tags .el-tag > span {
        flex: 1;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .el-cascader__tags .el-tag .el-icon-close {
        background-color: #c0c4cc;
        color: #fff;
        flex: none
    }

    .el-cascader__tags .el-tag .el-icon-close:hover {
        background-color: #909399
    }

    .el-cascader__suggestion-panel {
        border-radius: 4px
    }

    .el-cascader__suggestion-list {
        color: #606266;
        font-size: 14px;
        margin: 0;
        max-height: 204px;
        padding: 6px 0;
        text-align: center
    }

    .el-cascader__suggestion-item {
        align-items: center;
        cursor: pointer;
        display: flex;
        height: 34px;
        justify-content: space-between;
        outline: none;
        padding: 0 15px;
        text-align: left
    }

    .el-cascader__suggestion-item:focus, .el-cascader__suggestion-item:hover {
        background: #f5f7fa
    }

    .el-cascader__suggestion-item.is-checked {
        color: #c8102e;
        font-weight: 700
    }

    .el-cascader__suggestion-item > span {
        margin-right: 10px
    }

    .el-cascader__empty-text {
        color: #c0c4cc;
        margin: 10px 0
    }

    .el-cascader__search-input {
        border: none;
        box-sizing: border-box;
        color: #606266;
        flex: 1;
        height: 24px;
        margin: 2px 0 2px 15px;
        min-width: 60px;
        outline: none;
        padding: 0
    }

    .el-cascader__search-input::-moz-placeholder {
        color: #c0c4cc
    }

    .el-cascader__search-input::placeholder {
        color: #c0c4cc
    }

    .el-color-predefine {
        display: flex;
        font-size: 12px;
        margin-top: 8px;
        width: 280px
    }

    .el-color-predefine__colors {
        display: flex;
        flex: 1;
        flex-wrap: wrap
    }

    .el-color-predefine__color-selector {
        border-radius: 4px;
        cursor: pointer;
        height: 20px;
        margin: 0 0 8px 8px;
        width: 20px
    }

    .el-color-predefine__color-selector:nth-child(10n+1) {
        margin-left: 0
    }

    .el-color-predefine__color-selector.selected {
        box-shadow: 0 0 3px 2px #c8102e
    }

    .el-color-predefine__color-selector > div {
        border-radius: 3px;
        display: flex;
        height: 100%
    }

    .el-color-predefine__color-selector.is-alpha {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAIAAADZF8uwAAAAGUlEQVQYV2M4gwH+YwCGIasIUwhT25BVBADtzYNYrHvv4gAAAABJRU5ErkJggg==)
    }

    .el-color-hue-slider {
        background-color: red;
        box-sizing: border-box;
        height: 12px;
        padding: 0 2px;
        position: relative;
        width: 280px
    }

    .el-color-hue-slider__bar {
        background: linear-gradient(90deg, red 0, #ff0 17%, #0f0 33%, #0ff 50%, #00f 67%, #f0f 83%, red);
        height: 100%;
        position: relative
    }

    .el-color-hue-slider__thumb {
        background: #fff;
        border: 1px solid #f0f0f0;
        border-radius: 1px;
        box-shadow: 0 0 2px rgba(0, 0, 0, .6);
        box-sizing: border-box;
        cursor: pointer;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 4px;
        z-index: 1
    }

    .el-color-hue-slider.is-vertical {
        height: 180px;
        padding: 2px 0;
        width: 12px
    }

    .el-color-hue-slider.is-vertical .el-color-hue-slider__bar {
        background: linear-gradient(180deg, red 0, #ff0 17%, #0f0 33%, #0ff 50%, #00f 67%, #f0f 83%, red)
    }

    .el-color-hue-slider.is-vertical .el-color-hue-slider__thumb {
        height: 4px;
        left: 0;
        top: 0;
        width: 100%
    }

    .el-color-svpanel {
        height: 180px;
        position: relative;
        width: 280px
    }

    .el-color-svpanel__black, .el-color-svpanel__white {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0
    }

    .el-color-svpanel__white {
        background: linear-gradient(90deg, #fff, hsla(0, 0%, 100%, 0))
    }

    .el-color-svpanel__black {
        background: linear-gradient(0deg, #000, transparent)
    }

    .el-color-svpanel__cursor {
        position: absolute
    }

    .el-color-svpanel__cursor > div {
        border-radius: 50%;
        box-shadow: 0 0 0 1.5px #fff, inset 0 0 1px 1px rgba(0, 0, 0, .3), 0 0 1px 2px rgba(0, 0, 0, .4);
        cursor: head;
        height: 4px;
        transform: translate(-2px, -2px);
        width: 4px
    }

    .el-color-alpha-slider {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAIAAADZF8uwAAAAGUlEQVQYV2M4gwH+YwCGIasIUwhT25BVBADtzYNYrHvv4gAAAABJRU5ErkJggg==);
        box-sizing: border-box;
        height: 12px;
        position: relative;
        width: 280px
    }

    .el-color-alpha-slider__bar {
        background: linear-gradient(90deg, hsla(0, 0%, 100%, 0) 0, #fff);
        height: 100%;
        position: relative
    }

    .el-color-alpha-slider__thumb {
        background: #fff;
        border: 1px solid #f0f0f0;
        border-radius: 1px;
        box-shadow: 0 0 2px rgba(0, 0, 0, .6);
        box-sizing: border-box;
        cursor: pointer;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 4px;
        z-index: 1
    }

    .el-color-alpha-slider.is-vertical {
        height: 180px;
        width: 20px
    }

    .el-color-alpha-slider.is-vertical .el-color-alpha-slider__bar {
        background: linear-gradient(180deg, hsla(0, 0%, 100%, 0) 0, #fff)
    }

    .el-color-alpha-slider.is-vertical .el-color-alpha-slider__thumb {
        height: 4px;
        left: 0;
        top: 0;
        width: 100%
    }

    .el-color-dropdown {
        width: 300px
    }

    .el-color-dropdown__main-wrapper {
        margin-bottom: 6px
    }

    .el-color-dropdown__main-wrapper:after {
        clear: both;
        content: "";
        display: table
    }

    .el-color-dropdown__btns {
        margin-top: 6px;
        text-align: right
    }

    .el-color-dropdown__value {
        color: #000;
        float: left;
        font-size: 12px;
        line-height: 26px;
        width: 160px
    }

    .el-color-dropdown__btn {
        background-color: transparent;
        border: 1px solid #dcdcdc;
        border-radius: 2px;
        color: #333;
        cursor: pointer;
        font-size: 12px;
        line-height: 24px;
        outline: none;
        padding: 0 20px
    }

    .el-color-dropdown__btn[disabled] {
        color: #ccc;
        cursor: not-allowed
    }

    .el-color-dropdown__btn:hover {
        border-color: #c8102e;
        color: #c8102e
    }

    .el-color-dropdown__link-btn {
        color: #c8102e;
        cursor: pointer;
        font-size: 12px;
        padding: 15px;
        -webkit-text-decoration: none;
        text-decoration: none
    }

    .el-color-dropdown__link-btn:hover {
        color: tint(#c8102e, 20%)
    }

    .el-color-picker {
        display: inline-block;
        height: 40px;
        line-height: normal;
        position: relative
    }

    .el-color-picker.is-disabled .el-color-picker__trigger {
        cursor: not-allowed
    }

    .el-color-picker--medium {
        height: 36px
    }

    .el-color-picker--medium .el-color-picker__trigger {
        height: 36px;
        width: 36px
    }

    .el-color-picker--medium .el-color-picker__mask {
        height: 34px;
        width: 34px
    }

    .el-color-picker--small {
        height: 32px
    }

    .el-color-picker--small .el-color-picker__trigger {
        height: 32px;
        width: 32px
    }

    .el-color-picker--small .el-color-picker__mask {
        height: 30px;
        width: 30px
    }

    .el-color-picker--small .el-color-picker__empty, .el-color-picker--small .el-color-picker__icon {
        transform: translate3d(-50%, -50%, 0) scale(.8)
    }

    .el-color-picker--mini {
        height: 28px
    }

    .el-color-picker--mini .el-color-picker__trigger {
        height: 28px;
        width: 28px
    }

    .el-color-picker--mini .el-color-picker__mask {
        height: 26px;
        width: 26px
    }

    .el-color-picker--mini .el-color-picker__empty, .el-color-picker--mini .el-color-picker__icon {
        transform: translate3d(-50%, -50%, 0) scale(.8)
    }

    .el-color-picker__mask {
        background-color: hsla(0, 0%, 100%, .7);
        border-radius: 4px;
        cursor: not-allowed;
        height: 38px;
        left: 1px;
        position: absolute;
        top: 1px;
        width: 38px;
        z-index: 1
    }

    .el-color-picker__trigger {
        border: 1px solid #e6e6e6;
        border-radius: 4px;
        box-sizing: border-box;
        cursor: pointer;
        display: inline-block;
        font-size: 0;
        height: 40px;
        padding: 4px;
        position: relative;
        width: 40px
    }

    .el-color-picker__color {
        border: 1px solid #999;
        border-radius: 2px;
        box-sizing: border-box;
        display: block;
        height: 100%;
        position: relative;
        text-align: center;
        width: 100%
    }

    .el-color-picker__color.is-alpha {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAIAAADZF8uwAAAAGUlEQVQYV2M4gwH+YwCGIasIUwhT25BVBADtzYNYrHvv4gAAAABJRU5ErkJggg==)
    }

    .el-color-picker__color-inner {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0
    }

    .el-color-picker__empty {
        color: #999
    }

    .el-color-picker__empty, .el-color-picker__icon {
        font-size: 12px;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate3d(-50%, -50%, 0)
    }

    .el-color-picker__icon {
        color: #fff;
        display: inline-block;
        text-align: center;
        width: 100%
    }

    .el-color-picker__panel {
        background-color: #fff;
        border: 1px solid #ebeef5;
        border-radius: 4px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .1);
        box-sizing: content-box;
        padding: 6px;
        position: absolute;
        z-index: 10
    }

    .el-textarea {
        display: inline-block;
        font-size: 14px;
        position: relative;
        vertical-align: bottom;
        width: 100%
    }

    .el-textarea__inner {
        background-color: #fff;
        background-image: none;
        border: 1px solid #dcdfe6;
        border-radius: 4px;
        box-sizing: border-box;
        color: #606266;
        display: block;
        font-size: inherit;
        line-height: 1.5;
        padding: 5px 15px;
        resize: vertical;
        transition: border-color .2s cubic-bezier(.645, .045, .355, 1);
        width: 100%
    }

    .el-textarea__inner::-moz-placeholder {
        color: #c0c4cc
    }

    .el-textarea__inner::placeholder {
        color: #c0c4cc
    }

    .el-textarea__inner:hover {
        border-color: #c0c4cc
    }

    .el-textarea__inner:focus {
        border-color: #c8102e;
        outline: none
    }

    .el-textarea .el-input__count {
        background: #fff;
        bottom: 5px;
        color: #909399;
        font-size: 12px;
        position: absolute;
        right: 10px
    }

    .el-textarea.is-disabled .el-textarea__inner {
        background-color: #f5f7fa;
        border-color: #e4e7ed;
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-textarea.is-disabled .el-textarea__inner::-moz-placeholder {
        color: #c0c4cc
    }

    .el-textarea.is-disabled .el-textarea__inner::placeholder {
        color: #c0c4cc
    }

    .el-textarea.is-exceed .el-textarea__inner {
        border-color: #f56c6c
    }

    .el-textarea.is-exceed .el-input__count {
        color: #f56c6c
    }

    .el-input {
        display: inline-block;
        font-size: 14px;
        position: relative;
        width: 100%
    }

    .el-input::-webkit-scrollbar {
        width: 6px;
        z-index: 11
    }

    .el-input::-webkit-scrollbar:horizontal {
        height: 6px
    }

    .el-input::-webkit-scrollbar-thumb {
        background: #b4bccc;
        border-radius: 5px;
        width: 6px
    }

    .el-input::-webkit-scrollbar-corner, .el-input::-webkit-scrollbar-track {
        background: #fff
    }

    .el-input::-webkit-scrollbar-track-piece {
        background: #fff;
        width: 6px
    }

    .el-input .el-input__clear {
        color: #c0c4cc;
        cursor: pointer;
        font-size: 14px;
        transition: color .2s cubic-bezier(.645, .045, .355, 1)
    }

    .el-input .el-input__clear:hover {
        color: #909399
    }

    .el-input .el-input__count {
        align-items: center;
        color: #909399;
        display: inline-flex;
        font-size: 12px;
        height: 100%
    }

    .el-input .el-input__count .el-input__count-inner {
        background: #fff;
        display: inline-block;
        line-height: normal;
        padding: 0 5px
    }

    .el-input__inner {
        -webkit-appearance: none;
        background-color: #fff;
        background-image: none;
        border: 1px solid #dcdfe6;
        border-radius: 4px;
        box-sizing: border-box;
        color: #606266;
        display: inline-block;
        font-size: inherit;
        height: 40px;
        line-height: 40px;
        outline: none;
        padding: 0 15px;
        transition: border-color .2s cubic-bezier(.645, .045, .355, 1);
        width: 100%
    }

    .el-input__inner::-ms-reveal {
        display: none
    }

    .el-input__inner::-moz-placeholder {
        color: #c0c4cc
    }

    .el-input__inner::placeholder {
        color: #c0c4cc
    }

    .el-input__inner:hover {
        border-color: #c0c4cc
    }

    .el-input__inner:focus {
        border-color: #c8102e;
        outline: none
    }

    .el-input__suffix {
        color: #c0c4cc;
        height: 100%;
        pointer-events: none;
        position: absolute;
        right: 5px;
        text-align: center;
        top: 0;
        transition: all .3s
    }

    .el-input__suffix-inner {
        pointer-events: all
    }

    .el-input__prefix {
        color: #c0c4cc;
        left: 5px;
        position: absolute;
        top: 0
    }

    .el-input__icon, .el-input__prefix {
        height: 100%;
        text-align: center;
        transition: all .3s
    }

    .el-input__icon {
        line-height: 40px;
        width: 25px
    }

    .el-input__icon:after {
        content: "";
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        width: 0
    }

    .el-input__validateIcon {
        pointer-events: none
    }

    .el-input.is-active .el-input__inner {
        border-color: #c8102e;
        outline: none
    }

    .el-input.is-disabled .el-input__inner {
        background-color: #f5f7fa;
        border-color: #e4e7ed;
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-input.is-disabled .el-input__inner::-moz-placeholder {
        color: #c0c4cc
    }

    .el-input.is-disabled .el-input__inner::placeholder {
        color: #c0c4cc
    }

    .el-input.is-disabled .el-input__icon {
        cursor: not-allowed
    }

    .el-input.is-exceed .el-input__inner {
        border-color: #f56c6c
    }

    .el-input.is-exceed .el-input__suffix .el-input__count {
        color: #f56c6c
    }

    .el-input--suffix .el-input__inner {
        padding-right: 30px
    }

    .el-input--prefix .el-input__inner {
        padding-left: 30px
    }

    .el-input--medium {
        font-size: 14px
    }

    .el-input--medium .el-input__inner {
        height: 36px;
        line-height: 36px
    }

    .el-input--medium .el-input__icon {
        line-height: 36px
    }

    .el-input--small {
        font-size: 13px
    }

    .el-input--small .el-input__inner {
        height: 32px;
        line-height: 32px
    }

    .el-input--small .el-input__icon {
        line-height: 32px
    }

    .el-input--mini {
        font-size: 12px
    }

    .el-input--mini .el-input__inner {
        height: 28px;
        line-height: 28px
    }

    .el-input--mini .el-input__icon {
        line-height: 28px
    }

    .el-input-group {
        border-collapse: separate;
        border-spacing: 0;
        display: inline-table;
        line-height: normal;
        width: 100%
    }

    .el-input-group > .el-input__inner {
        display: table-cell;
        vertical-align: middle
    }

    .el-input-group__append, .el-input-group__prepend {
        background-color: #f5f7fa;
        border: 1px solid #dcdfe6;
        border-radius: 4px;
        color: #909399;
        display: table-cell;
        padding: 0 20px;
        position: relative;
        vertical-align: middle;
        white-space: nowrap;
        width: 1px
    }

    .el-input-group__append:focus, .el-input-group__prepend:focus {
        outline: none
    }

    .el-input-group__append .el-button, .el-input-group__append .el-select, .el-input-group__prepend .el-button, .el-input-group__prepend .el-select {
        display: inline-block;
        margin: -10px -20px
    }

    .el-input-group__append button.el-button, .el-input-group__append div.el-select .el-input__inner, .el-input-group__append div.el-select:hover .el-input__inner, .el-input-group__prepend button.el-button, .el-input-group__prepend div.el-select .el-input__inner, .el-input-group__prepend div.el-select:hover .el-input__inner {
        background-color: transparent;
        border-color: transparent;
        border-bottom: 0;
        border-top: 0;
        color: inherit
    }

    .el-input-group__append .el-button, .el-input-group__append .el-input, .el-input-group__prepend .el-button, .el-input-group__prepend .el-input {
        font-size: inherit
    }

    .el-input-group__prepend {
        border-bottom-right-radius: 0;
        border-right: 0;
        border-top-right-radius: 0
    }

    .el-input-group__append {
        border-left: 0
    }

    .el-input-group--prepend .el-input__inner, .el-input-group__append {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0
    }

    .el-input-group--prepend .el-select .el-input.is-focus .el-input__inner {
        border-color: transparent
    }

    .el-input-group--append .el-input__inner {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0
    }

    .el-input-group--append .el-select .el-input.is-focus .el-input__inner {
        border-color: transparent
    }

    .el-input__inner::-ms-clear {
        display: none;
        height: 0;
        width: 0
    }

    .el-transfer {
        font-size: 14px
    }

    .el-transfer__buttons {
        display: inline-block;
        padding: 0 30px;
        vertical-align: middle
    }

    .el-transfer__button {
        background-color: #c8102e;
        border-radius: 50%;
        color: #fff;
        display: block;
        font-size: 0;
        margin: 0 auto;
        padding: 10px
    }

    .el-transfer__button.is-with-texts {
        border-radius: 4px
    }

    .el-transfer__button.is-disabled, .el-transfer__button.is-disabled:hover {
        background-color: #f5f7fa;
        border: 1px solid #dcdfe6;
        color: #c0c4cc
    }

    .el-transfer__button:first-child {
        margin-bottom: 10px
    }

    .el-transfer__button:nth-child(2) {
        margin: 0
    }

    .el-transfer__button i, .el-transfer__button span {
        font-size: 14px
    }

    .el-transfer__button [class*=el-icon-] + span {
        margin-left: 0
    }

    .el-transfer-panel {
        background: #fff;
        border: 1px solid #ebeef5;
        border-radius: 4px;
        box-sizing: border-box;
        display: inline-block;
        max-height: 100%;
        overflow: hidden;
        position: relative;
        vertical-align: middle;
        width: 200px
    }

    .el-transfer-panel__body {
        height: 246px
    }

    .el-transfer-panel__body.is-with-footer {
        padding-bottom: 40px
    }

    .el-transfer-panel__list {
        box-sizing: border-box;
        height: 246px;
        list-style: none;
        margin: 0;
        overflow: auto;
        padding: 6px 0
    }

    .el-transfer-panel__list.is-filterable {
        height: 194px;
        padding-top: 0
    }

    .el-transfer-panel__item {
        display: block !important;
        height: 30px;
        line-height: 30px;
        padding-left: 15px
    }

    .el-transfer-panel__item + .el-transfer-panel__item {
        margin-left: 0
    }

    .el-transfer-panel__item.el-checkbox {
        color: #606266
    }

    .el-transfer-panel__item:hover {
        color: #c8102e
    }

    .el-transfer-panel__item.el-checkbox .el-checkbox__label {
        box-sizing: border-box;
        display: block;
        line-height: 30px;
        overflow: hidden;
        padding-left: 24px;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 100%
    }

    .el-transfer-panel__item .el-checkbox__input {
        position: absolute;
        top: 8px
    }

    .el-transfer-panel__filter {
        box-sizing: border-box;
        display: block;
        margin: 15px;
        text-align: center;
        width: auto
    }

    .el-transfer-panel__filter .el-input__inner {
        border-radius: 16px;
        box-sizing: border-box;
        display: inline-block;
        font-size: 12px;
        height: 32px;
        padding-left: 30px;
        padding-right: 10px;
        width: 100%
    }

    .el-transfer-panel__filter .el-input__icon {
        margin-left: 5px
    }

    .el-transfer-panel__filter .el-icon-circle-close {
        cursor: pointer
    }

    .el-transfer-panel .el-transfer-panel__header {
        background: #f5f7fa;
        border-bottom: 1px solid #ebeef5;
        box-sizing: border-box;
        color: #000;
        height: 40px;
        line-height: 40px;
        margin: 0;
        padding-left: 15px
    }

    .el-transfer-panel .el-transfer-panel__header .el-checkbox {
        display: block;
        line-height: 40px
    }

    .el-transfer-panel .el-transfer-panel__header .el-checkbox .el-checkbox__label {
        color: #303133;
        font-size: 16px;
        font-weight: 400
    }

    .el-transfer-panel .el-transfer-panel__header .el-checkbox .el-checkbox__label span {
        color: #909399;
        font-size: 12px;
        font-weight: 400;
        position: absolute;
        right: 15px
    }

    .el-transfer-panel .el-transfer-panel__footer {
        background: #fff;
        border-top: 1px solid #ebeef5;
        bottom: 0;
        height: 40px;
        left: 0;
        margin: 0;
        padding: 0;
        position: absolute;
        width: 100%;
        z-index: 1
    }

    .el-transfer-panel .el-transfer-panel__footer:after {
        content: "";
        display: inline-block;
        height: 100%;
        vertical-align: middle
    }

    .el-transfer-panel .el-transfer-panel__footer .el-checkbox {
        color: #606266;
        padding-left: 20px
    }

    .el-transfer-panel .el-transfer-panel__empty {
        color: #909399;
        height: 30px;
        line-height: 30px;
        margin: 0;
        padding: 6px 15px 0;
        text-align: center
    }

    .el-transfer-panel .el-checkbox__label {
        padding-left: 8px
    }

    .el-transfer-panel .el-checkbox__inner {
        border-radius: 3px;
        height: 14px;
        width: 14px
    }

    .el-transfer-panel .el-checkbox__inner:after {
        height: 6px;
        left: 4px;
        width: 3px
    }

    .el-container {
        box-sizing: border-box;
        display: flex;
        flex: 1;
        flex-basis: auto;
        flex-direction: row;
        min-width: 0
    }

    .el-container.is-vertical {
        flex-direction: column
    }

    .el-header {
        padding: 0 20px
    }

    .el-aside, .el-header {
        box-sizing: border-box;
        flex-shrink: 0
    }

    .el-aside, .el-main {
        overflow: auto
    }

    .el-main {
        display: block;
        flex: 1;
        flex-basis: auto;
        padding: 20px
    }

    .el-footer, .el-main {
        box-sizing: border-box
    }

    .el-footer {
        flex-shrink: 0;
        padding: 0 20px
    }

    .el-timeline {
        font-size: 14px;
        list-style: none;
        margin: 0
    }

    .el-timeline .el-timeline-item:last-child .el-timeline-item__tail {
        display: none
    }

    .el-timeline-item {
        padding-bottom: 20px;
        position: relative
    }

    .el-timeline-item__wrapper {
        padding-left: 28px;
        position: relative;
        top: -3px
    }

    .el-timeline-item__tail {
        border-left: 2px solid #e4e7ed;
        height: 100%;
        left: 4px;
        position: absolute
    }

    .el-timeline-item__icon {
        color: #fff;
        font-size: 13px
    }

    .el-timeline-item__node {
        align-items: center;
        background-color: #e4e7ed;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        position: absolute
    }

    .el-timeline-item__node--normal {
        height: 12px;
        left: -1px;
        width: 12px
    }

    .el-timeline-item__node--large {
        height: 14px;
        left: -2px;
        width: 14px
    }

    .el-timeline-item__node--primary {
        background-color: #c8102e
    }

    .el-timeline-item__node--success {
        background-color: #67c23a
    }

    .el-timeline-item__node--warning {
        background-color: #e6a23c
    }

    .el-timeline-item__node--danger {
        background-color: #f56c6c
    }

    .el-timeline-item__node--info {
        background-color: #909399
    }

    .el-timeline-item__dot {
        align-items: center;
        display: flex;
        justify-content: center;
        position: absolute
    }

    .el-timeline-item__content {
        color: #303133
    }

    .el-timeline-item__timestamp {
        color: #909399;
        font-size: 13px;
        line-height: 1
    }

    .el-timeline-item__timestamp.is-top {
        margin-bottom: 8px;
        padding-top: 4px
    }

    .el-timeline-item__timestamp.is-bottom {
        margin-top: 8px
    }

    .el-link {
        align-items: center;
        cursor: pointer;
        display: inline-flex;
        flex-direction: row;
        font-size: 14px;
        font-weight: 500;
        justify-content: center;
        outline: none;
        padding: 0;
        position: relative;
        -webkit-text-decoration: none;
        text-decoration: none;
        vertical-align: middle
    }

    .el-link.is-underline:hover:after {
        border-bottom: 1px solid #c8102e;
        bottom: 0;
        content: "";
        height: 0;
        left: 0;
        position: absolute;
        right: 0
    }

    .el-link.is-disabled {
        cursor: not-allowed
    }

    .el-link [class*=el-icon-] + span {
        margin-left: 5px
    }

    .el-link.el-link--default {
        color: #606266
    }

    .el-link.el-link--default:hover {
        color: #c8102e
    }

    .el-link.el-link--default:after {
        border-color: #c8102e
    }

    .el-link.el-link--default.is-disabled {
        color: #c0c4cc
    }

    .el-link.el-link--primary {
        color: #c8102e
    }

    .el-link.el-link--primary:hover {
        color: #d34058
    }

    .el-link.el-link--primary:after {
        border-color: #c8102e
    }

    .el-link.el-link--primary.is-disabled {
        color: #e48897
    }

    .el-link.el-link--primary.is-underline:hover:after {
        border-color: #c8102e
    }

    .el-link.el-link--danger {
        color: #f56c6c
    }

    .el-link.el-link--danger:hover {
        color: #f78989
    }

    .el-link.el-link--danger:after {
        border-color: #f56c6c
    }

    .el-link.el-link--danger.is-disabled {
        color: #fab6b6
    }

    .el-link.el-link--danger.is-underline:hover:after {
        border-color: #f56c6c
    }

    .el-link.el-link--success {
        color: #67c23a
    }

    .el-link.el-link--success:hover {
        color: #85ce61
    }

    .el-link.el-link--success:after {
        border-color: #67c23a
    }

    .el-link.el-link--success.is-disabled {
        color: #b3e19d
    }

    .el-link.el-link--success.is-underline:hover:after {
        border-color: #67c23a
    }

    .el-link.el-link--warning {
        color: #e6a23c
    }

    .el-link.el-link--warning:hover {
        color: #ebb563
    }

    .el-link.el-link--warning:after {
        border-color: #e6a23c
    }

    .el-link.el-link--warning.is-disabled {
        color: #f3d19e
    }

    .el-link.el-link--warning.is-underline:hover:after {
        border-color: #e6a23c
    }

    .el-link.el-link--info {
        color: #909399
    }

    .el-link.el-link--info:hover {
        color: #a6a9ad
    }

    .el-link.el-link--info:after {
        border-color: #909399
    }

    .el-link.el-link--info.is-disabled {
        color: #c8c9cc
    }

    .el-link.el-link--info.is-underline:hover:after {
        border-color: #909399
    }

    .el-divider {
        background-color: #dcdfe6;
        position: relative
    }

    .el-divider--horizontal {
        display: block;
        height: 1px;
        margin: 24px 0;
        width: 100%
    }

    .el-divider--vertical {
        display: inline-block;
        height: 1em;
        margin: 0 8px;
        position: relative;
        vertical-align: middle;
        width: 1px
    }

    .el-divider__text {
        background-color: #fff;
        color: #303133;
        font-size: 14px;
        font-weight: 500;
        padding: 0 20px;
        position: absolute
    }

    .el-divider__text.is-left {
        left: 20px;
        transform: translateY(-50%)
    }

    .el-divider__text.is-center {
        left: 50%;
        transform: translateX(-50%) translateY(-50%)
    }

    .el-divider__text.is-right {
        right: 20px;
        transform: translateY(-50%)
    }

    .el-image__error, .el-image__inner, .el-image__placeholder {
        height: 100%;
        width: 100%
    }

    .el-image {
        display: inline-block;
        overflow: hidden;
        position: relative
    }

    .el-image__inner {
        vertical-align: top
    }

    .el-image__inner--center {
        display: block;
        left: 50%;
        position: relative;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .el-image__error, .el-image__placeholder {
        background: #f5f7fa
    }

    .el-image__error {
        align-items: center;
        color: #c0c4cc;
        display: flex;
        font-size: 14px;
        justify-content: center;
        vertical-align: middle
    }

    .el-image__preview {
        cursor: pointer
    }

    .el-image-viewer__wrapper {
        bottom: 0;
        left: 0;
        position: fixed;
        right: 0;
        top: 0
    }

    .el-image-viewer__btn {
        align-items: center;
        border-radius: 50%;
        box-sizing: border-box;
        cursor: pointer;
        display: flex;
        justify-content: center;
        opacity: .8;
        position: absolute;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        z-index: 1
    }

    .el-image-viewer__close {
        background-color: #606266;
        color: #fff;
        font-size: 24px;
        height: 40px;
        right: 40px;
        top: 40px;
        width: 40px
    }

    .el-image-viewer__canvas {
        align-items: center;
        display: flex;
        height: 100%;
        justify-content: center;
        width: 100%
    }

    .el-image-viewer__actions {
        background-color: #606266;
        border-color: #fff;
        border-radius: 22px;
        bottom: 30px;
        height: 44px;
        left: 50%;
        padding: 0 23px;
        transform: translateX(-50%);
        width: 282px
    }

    .el-image-viewer__actions__inner {
        align-items: center;
        color: #fff;
        cursor: default;
        display: flex;
        font-size: 23px;
        height: 100%;
        justify-content: space-around;
        text-align: justify;
        width: 100%
    }

    .el-image-viewer__prev {
        left: 40px
    }

    .el-image-viewer__next, .el-image-viewer__prev {
        background-color: #606266;
        border-color: #fff;
        color: #fff;
        font-size: 24px;
        height: 44px;
        top: 50%;
        transform: translateY(-50%);
        width: 44px
    }

    .el-image-viewer__next {
        right: 40px;
        text-indent: 2px
    }

    .el-image-viewer__mask {
        background: #000;
        height: 100%;
        left: 0;
        opacity: .5;
        position: absolute;
        top: 0;
        width: 100%
    }

    .viewer-fade-enter-active {
        animation: viewer-fade-in .3s
    }

    .viewer-fade-leave-active {
        animation: viewer-fade-out .3s
    }

    @keyframes viewer-fade-in {
        0% {
            opacity: 0;
            transform: translate3d(0, -20px, 0)
        }
        to {
            opacity: 1;
            transform: translateZ(0)
        }
    }

    @keyframes viewer-fade-out {
        0% {
            opacity: 1;
            transform: translateZ(0)
        }
        to {
            opacity: 0;
            transform: translate3d(0, -20px, 0)
        }
    }

    .el-button {
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #dcdfe6;
        border-radius: 4px;
        box-sizing: border-box;
        color: #606266;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: 500;
        line-height: 1;
        margin: 0;
        outline: none;
        padding: 12px 20px;
        text-align: center;
        transition: .1s;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        white-space: nowrap
    }

    .el-button + .el-button {
        margin-left: 10px
    }

    .el-button.is-round {
        padding: 12px 20px
    }

    .el-button:focus, .el-button:hover {
        background-color: #fae7ea;
        border-color: #efb7c0;
        color: #c8102e
    }

    .el-button:active {
        border-color: #b40e29;
        color: #b40e29;
        outline: none
    }

    .el-button::-moz-focus-inner {
        border: 0
    }

    .el-button [class*=el-icon-] + span {
        margin-left: 5px
    }

    .el-button.is-plain:focus, .el-button.is-plain:hover {
        background: #fff;
        border-color: #c8102e;
        color: #c8102e
    }

    .el-button.is-plain:active {
        background: #fff;
        outline: none
    }

    .el-button.is-active, .el-button.is-plain:active {
        border-color: #b40e29;
        color: #b40e29
    }

    .el-button.is-disabled, .el-button.is-disabled:focus, .el-button.is-disabled:hover {
        background-color: #fff;
        background-image: none;
        border-color: #ebeef5;
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-button.is-disabled.el-button--text {
        background-color: transparent
    }

    .el-button.is-disabled.is-plain, .el-button.is-disabled.is-plain:focus, .el-button.is-disabled.is-plain:hover {
        background-color: #fff;
        border-color: #ebeef5;
        color: #c0c4cc
    }

    .el-button.is-loading {
        pointer-events: none;
        position: relative
    }

    .el-button.is-loading:before {
        background-color: hsla(0, 0%, 100%, .35);
        border-radius: inherit;
        bottom: -1px;
        content: "";
        left: -1px;
        pointer-events: none;
        position: absolute;
        right: -1px;
        top: -1px
    }

    .el-button.is-round {
        border-radius: 20px;
        padding: 12px 23px
    }

    .el-button.is-circle {
        border-radius: 50%;
        padding: 12px
    }

    .el-button--primary {
        background-color: #c8102e;
        border-color: #c8102e;
        color: #fff
    }

    .el-button--primary:focus, .el-button--primary:hover {
        background: #d34058;
        border-color: #d34058;
        color: #fff
    }

    .el-button--primary:active {
        outline: none
    }

    .el-button--primary.is-active, .el-button--primary:active {
        background: #b40e29;
        border-color: #b40e29;
        color: #fff
    }

    .el-button--primary.is-disabled, .el-button--primary.is-disabled:active, .el-button--primary.is-disabled:focus, .el-button--primary.is-disabled:hover {
        background-color: #e48897;
        border-color: #e48897;
        color: #fff
    }

    .el-button--primary.is-plain {
        background: #fae7ea;
        border-color: #e99fab;
        color: #c8102e
    }

    .el-button--primary.is-plain:focus, .el-button--primary.is-plain:hover {
        background: #c8102e;
        border-color: #c8102e;
        color: #fff
    }

    .el-button--primary.is-plain:active {
        background: #b40e29;
        border-color: #b40e29;
        color: #fff;
        outline: none
    }

    .el-button--primary.is-plain.is-disabled, .el-button--primary.is-plain.is-disabled:active, .el-button--primary.is-plain.is-disabled:focus, .el-button--primary.is-plain.is-disabled:hover {
        background-color: #fae7ea;
        border-color: #f4cfd5;
        color: #de7082
    }

    .el-button--success {
        background-color: #67c23a;
        border-color: #67c23a;
        color: #fff
    }

    .el-button--success:focus, .el-button--success:hover {
        background: #85ce61;
        border-color: #85ce61;
        color: #fff
    }

    .el-button--success:active {
        outline: none
    }

    .el-button--success.is-active, .el-button--success:active {
        background: #5daf34;
        border-color: #5daf34;
        color: #fff
    }

    .el-button--success.is-disabled, .el-button--success.is-disabled:active, .el-button--success.is-disabled:focus, .el-button--success.is-disabled:hover {
        background-color: #b3e19d;
        border-color: #b3e19d;
        color: #fff
    }

    .el-button--success.is-plain {
        background: #f0f9eb;
        border-color: #c2e7b0;
        color: #67c23a
    }

    .el-button--success.is-plain:focus, .el-button--success.is-plain:hover {
        background: #67c23a;
        border-color: #67c23a;
        color: #fff
    }

    .el-button--success.is-plain:active {
        background: #5daf34;
        border-color: #5daf34;
        color: #fff;
        outline: none
    }

    .el-button--success.is-plain.is-disabled, .el-button--success.is-plain.is-disabled:active, .el-button--success.is-plain.is-disabled:focus, .el-button--success.is-plain.is-disabled:hover {
        background-color: #f0f9eb;
        border-color: #e1f3d8;
        color: #a4da89
    }

    .el-button--warning {
        background-color: #e6a23c;
        border-color: #e6a23c;
        color: #fff
    }

    .el-button--warning:focus, .el-button--warning:hover {
        background: #ebb563;
        border-color: #ebb563;
        color: #fff
    }

    .el-button--warning:active {
        outline: none
    }

    .el-button--warning.is-active, .el-button--warning:active {
        background: #cf9236;
        border-color: #cf9236;
        color: #fff
    }

    .el-button--warning.is-disabled, .el-button--warning.is-disabled:active, .el-button--warning.is-disabled:focus, .el-button--warning.is-disabled:hover {
        background-color: #f3d19e;
        border-color: #f3d19e;
        color: #fff
    }

    .el-button--warning.is-plain {
        background: #fdf6ec;
        border-color: #f5dab1;
        color: #e6a23c
    }

    .el-button--warning.is-plain:focus, .el-button--warning.is-plain:hover {
        background: #e6a23c;
        border-color: #e6a23c;
        color: #fff
    }

    .el-button--warning.is-plain:active {
        background: #cf9236;
        border-color: #cf9236;
        color: #fff;
        outline: none
    }

    .el-button--warning.is-plain.is-disabled, .el-button--warning.is-plain.is-disabled:active, .el-button--warning.is-plain.is-disabled:focus, .el-button--warning.is-plain.is-disabled:hover {
        background-color: #fdf6ec;
        border-color: #faecd8;
        color: #f0c78a
    }

    .el-button--danger {
        background-color: #f56c6c;
        border-color: #f56c6c;
        color: #fff
    }

    .el-button--danger:focus, .el-button--danger:hover {
        background: #f78989;
        border-color: #f78989;
        color: #fff
    }

    .el-button--danger:active {
        outline: none
    }

    .el-button--danger.is-active, .el-button--danger:active {
        background: #dd6161;
        border-color: #dd6161;
        color: #fff
    }

    .el-button--danger.is-disabled, .el-button--danger.is-disabled:active, .el-button--danger.is-disabled:focus, .el-button--danger.is-disabled:hover {
        background-color: #fab6b6;
        border-color: #fab6b6;
        color: #fff
    }

    .el-button--danger.is-plain {
        background: #fef0f0;
        border-color: #fbc4c4;
        color: #f56c6c
    }

    .el-button--danger.is-plain:focus, .el-button--danger.is-plain:hover {
        background: #f56c6c;
        border-color: #f56c6c;
        color: #fff
    }

    .el-button--danger.is-plain:active {
        background: #dd6161;
        border-color: #dd6161;
        color: #fff;
        outline: none
    }

    .el-button--danger.is-plain.is-disabled, .el-button--danger.is-plain.is-disabled:active, .el-button--danger.is-plain.is-disabled:focus, .el-button--danger.is-plain.is-disabled:hover {
        background-color: #fef0f0;
        border-color: #fde2e2;
        color: #f9a7a7
    }

    .el-button--info {
        background-color: #909399;
        border-color: #909399;
        color: #fff
    }

    .el-button--info:focus, .el-button--info:hover {
        background: #a6a9ad;
        border-color: #a6a9ad;
        color: #fff
    }

    .el-button--info:active {
        outline: none
    }

    .el-button--info.is-active, .el-button--info:active {
        background: #82848a;
        border-color: #82848a;
        color: #fff
    }

    .el-button--info.is-disabled, .el-button--info.is-disabled:active, .el-button--info.is-disabled:focus, .el-button--info.is-disabled:hover {
        background-color: #c8c9cc;
        border-color: #c8c9cc;
        color: #fff
    }

    .el-button--info.is-plain {
        background: #f4f4f5;
        border-color: #d3d4d6;
        color: #909399
    }

    .el-button--info.is-plain:focus, .el-button--info.is-plain:hover {
        background: #909399;
        border-color: #909399;
        color: #fff
    }

    .el-button--info.is-plain:active {
        background: #82848a;
        border-color: #82848a;
        color: #fff;
        outline: none
    }

    .el-button--info.is-plain.is-disabled, .el-button--info.is-plain.is-disabled:active, .el-button--info.is-plain.is-disabled:focus, .el-button--info.is-plain.is-disabled:hover {
        background-color: #f4f4f5;
        border-color: #e9e9eb;
        color: #bcbec2
    }

    .el-button--medium {
        border-radius: 4px;
        font-size: 14px;
        padding: 10px 20px
    }

    .el-button--medium.is-round {
        padding: 10px 20px
    }

    .el-button--medium.is-circle {
        padding: 10px
    }

    .el-button--small {
        border-radius: 3px;
        font-size: 12px;
        padding: 9px 15px
    }

    .el-button--small.is-round {
        padding: 9px 15px
    }

    .el-button--small.is-circle {
        padding: 9px
    }

    .el-button--mini {
        border-radius: 3px;
        font-size: 12px;
        padding: 7px 15px
    }

    .el-button--mini.is-round {
        padding: 7px 15px
    }

    .el-button--mini.is-circle {
        padding: 7px
    }

    .el-button--text {
        background: transparent;
        border-color: transparent;
        color: #c8102e;
        padding-left: 0;
        padding-right: 0
    }

    .el-button--text:focus, .el-button--text:hover {
        background-color: transparent;
        border-color: transparent;
        color: #d34058
    }

    .el-button--text:active {
        background-color: transparent;
        color: #b40e29
    }

    .el-button--text.is-disabled, .el-button--text.is-disabled:focus, .el-button--text.is-disabled:hover, .el-button--text:active {
        border-color: transparent
    }

    .el-button-group {
        display: inline-block;
        vertical-align: middle
    }

    .el-button-group:after, .el-button-group:before {
        content: "";
        display: table
    }

    .el-button-group:after {
        clear: both
    }

    .el-button-group > .el-button {
        float: left;
        position: relative
    }

    .el-button-group > .el-button + .el-button {
        margin-left: 0
    }

    .el-button-group > .el-button.is-disabled {
        z-index: 1
    }

    .el-button-group > .el-button:first-child {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0
    }

    .el-button-group > .el-button:last-child {
        border-bottom-left-radius: 0;
        border-top-left-radius: 0
    }

    .el-button-group > .el-button:first-child:last-child {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px
    }

    .el-button-group > .el-button:first-child:last-child.is-round {
        border-radius: 20px
    }

    .el-button-group > .el-button:first-child:last-child.is-circle {
        border-radius: 50%
    }

    .el-button-group > .el-button:not(:first-child):not(:last-child) {
        border-radius: 0
    }

    .el-button-group > .el-button:not(:last-child) {
        margin-right: -1px
    }

    .el-button-group > .el-button.is-active, .el-button-group > .el-button:not(.is-disabled):active, .el-button-group > .el-button:not(.is-disabled):focus, .el-button-group > .el-button:not(.is-disabled):hover {
        z-index: 1
    }

    .el-button-group > .el-dropdown > .el-button {
        border-bottom-left-radius: 0;
        border-left-color: hsla(0, 0%, 100%, .5);
        border-top-left-radius: 0
    }

    .el-button-group .el-button--primary:first-child {
        border-right-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--primary:last-child {
        border-left-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--primary:not(:first-child):not(:last-child) {
        border-left-color: hsla(0, 0%, 100%, .5);
        border-right-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--success:first-child {
        border-right-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--success:last-child {
        border-left-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--success:not(:first-child):not(:last-child) {
        border-left-color: hsla(0, 0%, 100%, .5);
        border-right-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--warning:first-child {
        border-right-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--warning:last-child {
        border-left-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--warning:not(:first-child):not(:last-child) {
        border-left-color: hsla(0, 0%, 100%, .5);
        border-right-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--danger:first-child {
        border-right-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--danger:last-child {
        border-left-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--danger:not(:first-child):not(:last-child) {
        border-left-color: hsla(0, 0%, 100%, .5);
        border-right-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--info:first-child {
        border-right-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--info:last-child {
        border-left-color: hsla(0, 0%, 100%, .5)
    }

    .el-button-group .el-button--info:not(:first-child):not(:last-child) {
        border-left-color: hsla(0, 0%, 100%, .5);
        border-right-color: hsla(0, 0%, 100%, .5)
    }

    .el-calendar {
        background-color: #fff
    }

    .el-calendar__header {
        border-bottom: 1px solid #ebeef5;
        display: flex;
        justify-content: space-between;
        padding: 12px 20px
    }

    .el-calendar__title {
        align-self: center;
        color: #000
    }

    .el-calendar__body {
        padding: 12px 20px 35px
    }

    .el-calendar-table {
        table-layout: fixed;
        width: 100%
    }

    .el-calendar-table thead th {
        color: #606266;
        font-weight: 400;
        padding: 12px 0
    }

    .el-calendar-table:not(.is-range) td.next, .el-calendar-table:not(.is-range) td.prev {
        color: #c0c4cc
    }

    .el-calendar-table td {
        border-bottom: 1px solid #ebeef5;
        border-right: 1px solid #ebeef5;
        transition: background-color .2s ease;
        vertical-align: top
    }

    .el-calendar-table td.is-selected {
        background-color: #f2f8fe
    }

    .el-calendar-table td.is-today {
        color: #c8102e
    }

    .el-calendar-table tr:first-child td {
        border-top: 1px solid #ebeef5
    }

    .el-calendar-table tr td:first-child {
        border-left: 1px solid #ebeef5
    }

    .el-calendar-table tr.el-calendar-table__row--hide-border td {
        border-top: none
    }

    .el-calendar-table .el-calendar-day {
        box-sizing: border-box;
        height: 85px;
        padding: 8px
    }

    .el-calendar-table .el-calendar-day:hover {
        background-color: #f2f8fe;
        cursor: pointer
    }

    .el-backtop {
        align-items: center;
        background-color: #fff;
        border-radius: 50%;
        box-shadow: 0 0 6px rgba(0, 0, 0, .12);
        color: #c8102e;
        cursor: pointer;
        display: flex;
        font-size: 20px;
        height: 40px;
        justify-content: center;
        position: fixed;
        width: 40px;
        z-index: 5
    }

    .el-backtop:hover {
        background-color: #f2f6fc
    }

    .el-page-header {
        display: flex;
        line-height: 24px
    }

    .el-page-header__left {
        cursor: pointer;
        display: flex;
        margin-right: 40px;
        position: relative
    }

    .el-page-header__left:after {
        background-color: #dcdfe6;
        content: "";
        height: 16px;
        position: absolute;
        right: -20px;
        top: 50%;
        transform: translateY(-50%);
        width: 1px
    }

    .el-page-header__left .el-icon-back {
        align-self: center;
        font-size: 18px;
        margin-right: 6px
    }

    .el-page-header__title {
        font-size: 14px;
        font-weight: 500
    }

    .el-page-header__content {
        color: #303133;
        font-size: 18px
    }

    .el-checkbox {
        color: #606266;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: 500;
        margin-right: 30px;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        white-space: nowrap
    }

    .el-checkbox.is-bordered {
        border: 1px solid #dcdfe6;
        border-radius: 4px;
        box-sizing: border-box;
        height: 40px;
        line-height: normal;
        padding: 9px 20px 9px 10px
    }

    .el-checkbox.is-bordered.is-checked {
        border-color: #c8102e
    }

    .el-checkbox.is-bordered.is-disabled {
        border-color: #ebeef5;
        cursor: not-allowed
    }

    .el-checkbox.is-bordered + .el-checkbox.is-bordered {
        margin-left: 10px
    }

    .el-checkbox.is-bordered.el-checkbox--medium {
        border-radius: 4px;
        height: 36px;
        padding: 7px 20px 7px 10px
    }

    .el-checkbox.is-bordered.el-checkbox--medium .el-checkbox__label {
        font-size: 14px;
        line-height: 17px
    }

    .el-checkbox.is-bordered.el-checkbox--medium .el-checkbox__inner {
        height: 14px;
        width: 14px
    }

    .el-checkbox.is-bordered.el-checkbox--small {
        border-radius: 3px;
        height: 32px;
        padding: 5px 15px 5px 10px
    }

    .el-checkbox.is-bordered.el-checkbox--small .el-checkbox__label {
        font-size: 12px;
        line-height: 15px
    }

    .el-checkbox.is-bordered.el-checkbox--small .el-checkbox__inner {
        height: 12px;
        width: 12px
    }

    .el-checkbox.is-bordered.el-checkbox--small .el-checkbox__inner:after {
        height: 6px;
        width: 2px
    }

    .el-checkbox.is-bordered.el-checkbox--mini {
        border-radius: 3px;
        height: 28px;
        padding: 3px 15px 3px 10px
    }

    .el-checkbox.is-bordered.el-checkbox--mini .el-checkbox__label {
        font-size: 12px;
        line-height: 12px
    }

    .el-checkbox.is-bordered.el-checkbox--mini .el-checkbox__inner {
        height: 12px;
        width: 12px
    }

    .el-checkbox.is-bordered.el-checkbox--mini .el-checkbox__inner:after {
        height: 6px;
        width: 2px
    }

    .el-checkbox__input {
        cursor: pointer;
        display: inline-block;
        line-height: 1;
        outline: none;
        position: relative;
        vertical-align: middle;
        white-space: nowrap
    }

    .el-checkbox__input.is-disabled .el-checkbox__inner {
        background-color: #edf2fc;
        border-color: #dcdfe6;
        cursor: not-allowed
    }

    .el-checkbox__input.is-disabled .el-checkbox__inner:after {
        border-color: #c0c4cc;
        cursor: not-allowed
    }

    .el-checkbox__input.is-disabled .el-checkbox__inner + .el-checkbox__label {
        cursor: not-allowed
    }

    .el-checkbox__input.is-disabled.is-checked .el-checkbox__inner {
        background-color: #f2f6fc;
        border-color: #dcdfe6
    }

    .el-checkbox__input.is-disabled.is-checked .el-checkbox__inner:after {
        border-color: #c0c4cc
    }

    .el-checkbox__input.is-disabled.is-indeterminate .el-checkbox__inner {
        background-color: #f2f6fc;
        border-color: #dcdfe6
    }

    .el-checkbox__input.is-disabled.is-indeterminate .el-checkbox__inner:before {
        background-color: #c0c4cc;
        border-color: #c0c4cc
    }

    .el-checkbox__input.is-disabled + span.el-checkbox__label {
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-checkbox__input.is-checked .el-checkbox__inner {
        background-color: #c8102e;
        border-color: #c8102e
    }

    .el-checkbox__input.is-checked .el-checkbox__inner:after {
        transform: rotate(45deg) scaleY(1)
    }

    .el-checkbox__input.is-checked + .el-checkbox__label {
        color: #c8102e
    }

    .el-checkbox__input.is-focus .el-checkbox__inner {
        border-color: #c8102e
    }

    .el-checkbox__input.is-indeterminate .el-checkbox__inner {
        background-color: #c8102e;
        border-color: #c8102e
    }

    .el-checkbox__input.is-indeterminate .el-checkbox__inner:before {
        background-color: #fff;
        content: "";
        display: block;
        height: 2px;
        left: 0;
        position: absolute;
        right: 0;
        top: 5px;
        transform: scale(.5)
    }

    .el-checkbox__input.is-indeterminate .el-checkbox__inner:after {
        display: none
    }

    .el-checkbox__inner {
        background-color: #fff;
        border: 1px solid #dcdfe6;
        border-radius: 2px;
        box-sizing: border-box;
        display: inline-block;
        height: 14px;
        position: relative;
        transition: border-color .25s cubic-bezier(.71, -.46, .29, 1.46), background-color .25s cubic-bezier(.71, -.46, .29, 1.46);
        width: 14px;
        z-index: 1
    }

    .el-checkbox__inner:hover {
        border-color: #c8102e
    }

    .el-checkbox__inner:after {
        border: 1px solid #fff;
        border-left: 0;
        border-top: 0;
        box-sizing: content-box;
        content: "";
        height: 7px;
        left: 4px;
        position: absolute;
        top: 1px;
        transform: rotate(45deg) scaleY(0);
        transform-origin: center;
        transition: transform .15s ease-in .05s;
        width: 3px
    }

    .el-checkbox__original {
        height: 0;
        margin: 0;
        opacity: 0;
        outline: none;
        position: absolute;
        width: 0;
        z-index: -1
    }

    .el-checkbox__label {
        display: inline-block;
        font-size: 14px;
        line-height: 19px;
        padding-left: 10px
    }

    .el-checkbox:last-of-type {
        margin-right: 0
    }

    .el-checkbox-button, .el-checkbox-button__inner {
        display: inline-block;
        position: relative
    }

    .el-checkbox-button__inner {
        -webkit-appearance: none;
        background: #fff;
        border: 1px solid #dcdfe6;
        border-left: 0;
        border-radius: 0;
        box-sizing: border-box;
        color: #606266;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        line-height: 1;
        margin: 0;
        outline: none;
        padding: 12px 20px;
        text-align: center;
        transition: all .3s cubic-bezier(.645, .045, .355, 1);
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        vertical-align: middle;
        white-space: nowrap
    }

    .el-checkbox-button__inner.is-round {
        padding: 12px 20px
    }

    .el-checkbox-button__inner:hover {
        color: #c8102e
    }

    .el-checkbox-button__inner [class*=el-icon-] {
        line-height: .9
    }

    .el-checkbox-button__inner [class*=el-icon-] + span {
        margin-left: 5px
    }

    .el-checkbox-button__original {
        margin: 0;
        opacity: 0;
        outline: none;
        position: absolute;
        z-index: -1
    }

    .el-checkbox-button.is-checked .el-checkbox-button__inner {
        background-color: #c8102e;
        border-color: #c8102e;
        box-shadow: -1px 0 0 0 #de7082;
        color: #fff
    }

    .el-checkbox-button.is-checked:first-child .el-checkbox-button__inner {
        border-left-color: #c8102e
    }

    .el-checkbox-button.is-disabled .el-checkbox-button__inner {
        background-color: #fff;
        background-image: none;
        border-color: #ebeef5;
        box-shadow: none;
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-checkbox-button.is-disabled:first-child .el-checkbox-button__inner {
        border-left-color: #ebeef5
    }

    .el-checkbox-button:first-child .el-checkbox-button__inner {
        border-left: 1px solid #dcdfe6;
        border-radius: 4px 0 0 4px;
        box-shadow: none !important
    }

    .el-checkbox-button.is-focus .el-checkbox-button__inner {
        border-color: #c8102e
    }

    .el-checkbox-button:last-child .el-checkbox-button__inner {
        border-radius: 0 4px 4px 0
    }

    .el-checkbox-button--medium .el-checkbox-button__inner {
        border-radius: 0;
        font-size: 14px;
        padding: 10px 20px
    }

    .el-checkbox-button--medium .el-checkbox-button__inner.is-round {
        padding: 10px 20px
    }

    .el-checkbox-button--small .el-checkbox-button__inner {
        border-radius: 0;
        font-size: 12px;
        padding: 9px 15px
    }

    .el-checkbox-button--small .el-checkbox-button__inner.is-round {
        padding: 9px 15px
    }

    .el-checkbox-button--mini .el-checkbox-button__inner {
        border-radius: 0;
        font-size: 12px;
        padding: 7px 15px
    }

    .el-checkbox-button--mini .el-checkbox-button__inner.is-round {
        padding: 7px 15px
    }

    .el-checkbox-group {
        font-size: 0
    }

    .el-radio {
        color: #606266;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: 500;
        line-height: 1;
        margin-right: 30px;
        outline: none;
        position: relative;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        white-space: nowrap
    }

    .el-radio.is-bordered {
        border: 1px solid #dcdfe6;
        border-radius: 4px;
        box-sizing: border-box;
        height: 40px;
        padding: 12px 20px 0 10px
    }

    .el-radio.is-bordered.is-checked {
        border-color: #c8102e
    }

    .el-radio.is-bordered.is-disabled {
        border-color: #ebeef5;
        cursor: not-allowed
    }

    .el-radio.is-bordered + .el-radio.is-bordered {
        margin-left: 10px
    }

    .el-radio--medium.is-bordered {
        border-radius: 4px;
        height: 36px;
        padding: 10px 20px 0 10px
    }

    .el-radio--medium.is-bordered .el-radio__label {
        font-size: 14px
    }

    .el-radio--medium.is-bordered .el-radio__inner {
        height: 14px;
        width: 14px
    }

    .el-radio--small.is-bordered {
        border-radius: 3px;
        height: 32px;
        padding: 8px 15px 0 10px
    }

    .el-radio--small.is-bordered .el-radio__label {
        font-size: 12px
    }

    .el-radio--small.is-bordered .el-radio__inner {
        height: 12px;
        width: 12px
    }

    .el-radio--mini.is-bordered {
        border-radius: 3px;
        height: 28px;
        padding: 6px 15px 0 10px
    }

    .el-radio--mini.is-bordered .el-radio__label {
        font-size: 12px
    }

    .el-radio--mini.is-bordered .el-radio__inner {
        height: 12px;
        width: 12px
    }

    .el-radio:last-child {
        margin-right: 0
    }

    .el-radio__input {
        cursor: pointer;
        display: inline-block;
        line-height: 1;
        outline: none;
        position: relative;
        vertical-align: middle;
        white-space: nowrap
    }

    .el-radio__input.is-disabled .el-radio__inner {
        background-color: #f5f7fa;
        border-color: #e4e7ed;
        cursor: not-allowed
    }

    .el-radio__input.is-disabled .el-radio__inner:after {
        background-color: #f5f7fa;
        cursor: not-allowed
    }

    .el-radio__input.is-disabled .el-radio__inner + .el-radio__label {
        cursor: not-allowed
    }

    .el-radio__input.is-disabled.is-checked .el-radio__inner {
        background-color: #f5f7fa;
        border-color: #e4e7ed
    }

    .el-radio__input.is-disabled.is-checked .el-radio__inner:after {
        background-color: #c0c4cc
    }

    .el-radio__input.is-disabled + span.el-radio__label {
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-radio__input.is-checked .el-radio__inner {
        background: #c8102e;
        border-color: #c8102e
    }

    .el-radio__input.is-checked .el-radio__inner:after {
        transform: translate(-50%, -50%) scale(1)
    }

    .el-radio__input.is-checked + .el-radio__label {
        color: #c8102e
    }

    .el-radio__input.is-focus .el-radio__inner {
        border-color: #c8102e
    }

    .el-radio__inner {
        background-color: #fff;
        border: 1px solid #dcdfe6;
        border-radius: 100%;
        box-sizing: border-box;
        cursor: pointer;
        display: inline-block;
        height: 14px;
        position: relative;
        width: 14px
    }

    .el-radio__inner:hover {
        border-color: #c8102e
    }

    .el-radio__inner:after {
        background-color: #fff;
        border-radius: 100%;
        content: "";
        height: 4px;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%) scale(0);
        transition: transform .15s ease-in;
        width: 4px
    }

    .el-radio__original {
        bottom: 0;
        left: 0;
        margin: 0;
        opacity: 0;
        outline: none;
        position: absolute;
        right: 0;
        top: 0;
        z-index: -1
    }

    .el-radio:focus:not(.is-focus):not(:active):not(.is-disabled) .el-radio__inner {
        box-shadow: 0 0 2px 2px #c8102e
    }

    .el-radio__label {
        font-size: 14px;
        padding-left: 10px
    }

    .el-scrollbar {
        overflow: hidden;
        position: relative
    }

    .el-scrollbar:active > .el-scrollbar__bar, .el-scrollbar:focus > .el-scrollbar__bar, .el-scrollbar:hover > .el-scrollbar__bar {
        opacity: 1;
        transition: opacity .34s ease-out
    }

    .el-scrollbar__wrap {
        height: 100%;
        overflow: scroll
    }

    .el-scrollbar__wrap--hidden-default {
        scrollbar-width: none
    }

    .el-scrollbar__wrap--hidden-default::-webkit-scrollbar {
        height: 0;
        width: 0
    }

    .el-scrollbar__thumb {
        background-color: hsla(220, 4%, 58%, .3);
        border-radius: inherit;
        cursor: pointer;
        display: block;
        height: 0;
        position: relative;
        transition: background-color .3s;
        width: 0
    }

    .el-scrollbar__thumb:hover {
        background-color: hsla(220, 4%, 58%, .5)
    }

    .el-scrollbar__bar {
        border-radius: 4px;
        bottom: 2px;
        opacity: 0;
        position: absolute;
        right: 2px;
        transition: opacity .12s ease-out;
        z-index: 1
    }

    .el-scrollbar__bar.is-vertical {
        top: 2px;
        width: 6px
    }

    .el-scrollbar__bar.is-vertical > div {
        width: 100%
    }

    .el-scrollbar__bar.is-horizontal {
        height: 6px;
        left: 2px
    }

    .el-scrollbar__bar.is-horizontal > div {
        height: 100%
    }

    .el-cascader-panel {
        border-radius: 4px;
        display: flex;
        font-size: 14px
    }

    .el-cascader-panel.is-bordered {
        border: 1px solid #e4e7ed;
        border-radius: 4px
    }

    .el-cascader-menu {
        border-right: 1px solid #e4e7ed;
        box-sizing: border-box;
        color: #606266;
        min-width: 180px
    }

    .el-cascader-menu:last-child {
        border-right: none
    }

    .el-cascader-menu:last-child .el-cascader-node {
        padding-right: 20px
    }

    .el-cascader-menu__wrap {
        height: 204px
    }

    .el-cascader-menu__list {
        box-sizing: border-box;
        list-style: none;
        margin: 0;
        min-height: 100%;
        padding: 6px 0;
        position: relative
    }

    .el-cascader-menu__hover-zone {
        height: 100%;
        left: 0;
        pointer-events: none;
        position: absolute;
        top: 0;
        width: 100%
    }

    .el-cascader-menu__empty-text {
        color: #c0c4cc;
        left: 50%;
        position: absolute;
        text-align: center;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .el-cascader-node {
        align-items: center;
        display: flex;
        height: 34px;
        line-height: 34px;
        outline: none;
        padding: 0 30px 0 20px;
        position: relative
    }

    .el-cascader-node.is-selectable.in-active-path {
        color: #606266
    }

    .el-cascader-node.in-active-path, .el-cascader-node.is-active, .el-cascader-node.is-selectable.in-checked-path {
        color: #c8102e;
        font-weight: 700
    }

    .el-cascader-node:not(.is-disabled) {
        cursor: pointer
    }

    .el-cascader-node:not(.is-disabled):focus, .el-cascader-node:not(.is-disabled):hover {
        background: #f5f7fa
    }

    .el-cascader-node.is-disabled {
        color: #c0c4cc;
        cursor: not-allowed
    }

    .el-cascader-node__prefix {
        left: 10px;
        position: absolute
    }

    .el-cascader-node__postfix {
        position: absolute;
        right: 10px
    }

    .el-cascader-node__label {
        flex: 1;
        overflow: hidden;
        padding: 0 10px;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .el-cascader-node > .el-radio {
        margin-right: 0
    }

    .el-cascader-node > .el-radio .el-radio__label {
        padding-left: 0
    }

    .el-avatar {
        background: #c0c4cc;
        box-sizing: border-box;
        color: #fff;
        display: inline-block;
        font-size: 14px;
        height: 40px;
        line-height: 40px;
        overflow: hidden;
        text-align: center;
        width: 40px
    }

    .el-avatar > img {
        display: block;
        height: 100%;
        vertical-align: middle
    }

    .el-avatar--circle {
        border-radius: 50%
    }

    .el-avatar--square {
        border-radius: 4px
    }

    .el-avatar--icon {
        font-size: 18px
    }

    .el-avatar--large {
        height: 40px;
        line-height: 40px;
        width: 40px
    }

    .el-avatar--medium {
        height: 36px;
        line-height: 36px;
        width: 36px
    }

    .el-avatar--small {
        height: 28px;
        line-height: 28px;
        width: 28px
    }

    @keyframes el-drawer-fade-in {
        0% {
            opacity: 0
        }
        to {
            opacity: 1
        }
    }

    @keyframes rtl-drawer-in {
        0% {
            transform: translate(100%)
        }
        to {
            transform: translate(0)
        }
    }

    @keyframes rtl-drawer-out {
        0% {
            transform: translate(0)
        }
        to {
            transform: translate(100%)
        }
    }

    @keyframes ltr-drawer-in {
        0% {
            transform: translate(-100%)
        }
        to {
            transform: translate(0)
        }
    }

    @keyframes ltr-drawer-out {
        0% {
            transform: translate(0)
        }
        to {
            transform: translate(-100%)
        }
    }

    @keyframes ttb-drawer-in {
        0% {
            transform: translateY(-100%)
        }
        to {
            transform: translate(0)
        }
    }

    @keyframes ttb-drawer-out {
        0% {
            transform: translate(0)
        }
        to {
            transform: translateY(-100%)
        }
    }

    @keyframes btt-drawer-in {
        0% {
            transform: translateY(100%)
        }
        to {
            transform: translate(0)
        }
    }

    @keyframes btt-drawer-out {
        0% {
            transform: translate(0)
        }
        to {
            transform: translateY(100%)
        }
    }

    .el-drawer {
        background-color: #fff;
        box-shadow: 0 8px 10px -5px rgba(0, 0, 0, .2), 0 16px 24px 2px rgba(0, 0, 0, .14), 0 6px 30px 5px rgba(0, 0, 0, .12);
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        outline: 0;
        overflow: hidden;
        position: absolute
    }

    .el-drawer.rtl {
        animation: rtl-drawer-out .3s
    }

    .el-drawer__open .el-drawer.rtl {
        animation: rtl-drawer-in .3s 1ms
    }

    .el-drawer.ltr {
        animation: ltr-drawer-out .3s
    }

    .el-drawer__open .el-drawer.ltr {
        animation: ltr-drawer-in .3s 1ms
    }

    .el-drawer.ttb {
        animation: ttb-drawer-out .3s
    }

    .el-drawer__open .el-drawer.ttb {
        animation: ttb-drawer-in .3s 1ms
    }

    .el-drawer.btt {
        animation: btt-drawer-out .3s
    }

    .el-drawer__open .el-drawer.btt {
        animation: btt-drawer-in .3s 1ms
    }

    .el-drawer__wrapper {
        bottom: 0;
        left: 0;
        margin: 0;
        overflow: hidden;
        position: fixed;
        right: 0;
        top: 0
    }

    .el-drawer__header {
        align-items: center;
        color: #72767b;
        display: flex;
        margin-bottom: 32px;
        padding: 20px 20px 0
    }

    .el-drawer__header > :first-child {
        flex: 1
    }

    .el-drawer__title {
        flex: 1;
        font-size: 1rem;
        line-height: inherit;
        margin: 0
    }

    .el-drawer__close-btn {
        background-color: transparent;
        border: none;
        color: inherit;
        cursor: pointer;
        font-size: 20px
    }

    .el-drawer__body {
        flex: 1;
        overflow: auto
    }

    .el-drawer__body > * {
        box-sizing: border-box
    }

    .el-drawer.ltr, .el-drawer.rtl {
        bottom: 0;
        height: 100%;
        top: 0
    }

    .el-drawer.btt, .el-drawer.ttb {
        left: 0;
        right: 0;
        width: 100%
    }

    .el-drawer.ltr {
        left: 0
    }

    .el-drawer.rtl {
        right: 0
    }

    .el-drawer.ttb {
        top: 0
    }

    .el-drawer.btt {
        bottom: 0
    }

    .el-drawer__container {
        bottom: 0;
        height: 100%;
        left: 0;
        position: relative;
        right: 0;
        top: 0;
        width: 100%
    }

    .el-drawer-fade-enter-active {
        animation: el-drawer-fade-in .3s
    }

    .el-drawer-fade-leave-active {
        animation: el-drawer-fade-in .3s reverse
    }

    .el-statistic {
        box-sizing: border-box;
        color: #000;
        font-feature-settings: "tnum";
        font-variant: tabular-nums;
        list-style: none;
        margin: 0;
        padding: 0;
        text-align: center;
        width: 100%
    }

    .el-statistic .head {
        color: #606266;
        font-size: 13px;
        margin-bottom: 4px
    }

    .el-statistic .con {
        align-items: center;
        color: #303133;
        display: flex;
        font-family: Sans-serif;
        justify-content: center
    }

    .el-statistic .con .number {
        font-size: 20px;
        padding: 0 4px
    }

    .el-statistic .con span {
        display: inline-block;
        line-height: 100%;
        margin: 0
    }

    .el-popconfirm__main {
        align-items: center;
        display: flex
    }

    .el-popconfirm__icon {
        margin-right: 5px
    }

    .el-popconfirm__action {
        margin: 0;
        text-align: right
    }

    @keyframes el-skeleton-loading {
        0% {
            background-position: 100% 50%
        }
        to {
            background-position: 0 50%
        }
    }

    .el-skeleton {
        width: 100%
    }

    .el-skeleton__first-line, .el-skeleton__paragraph {
        background: #f2f2f2;
        height: 16px;
        margin-top: 16px
    }

    .el-skeleton.is-animated .el-skeleton__item {
        animation: el-skeleton-loading 1.4s ease infinite;
        background: linear-gradient(90deg, #f2f2f2 25%, #e6e6e6 37%, #f2f2f2 63%);
        background-size: 400% 100%
    }

    .el-skeleton__item {
        background: #f2f2f2;
        border-radius: 4px;
        display: inline-block;
        height: 16px;
        width: 100%
    }

    .el-skeleton__circle {
        border-radius: 50%;
        height: 36px;
        line-height: 36px;
        width: 36px
    }

    .el-skeleton__circle--lg {
        height: 40px;
        line-height: 40px;
        width: 40px
    }

    .el-skeleton__circle--md {
        height: 28px;
        line-height: 28px;
        width: 28px
    }

    .el-skeleton__button {
        border-radius: 4px;
        height: 40px;
        width: 64px
    }

    .el-skeleton__p {
        width: 100%
    }

    .el-skeleton__p.is-last {
        width: 61%
    }

    .el-skeleton__p.is-first {
        width: 33%
    }

    .el-skeleton__text {
        height: 13px;
        width: 100%
    }

    .el-skeleton__caption {
        height: 12px
    }

    .el-skeleton__h1 {
        height: 20px
    }

    .el-skeleton__h3 {
        height: 18px
    }

    .el-skeleton__h5 {
        height: 16px
    }

    .el-skeleton__image {
        align-items: center;
        border-radius: 0;
        display: flex;
        justify-content: center;
        width: auto
    }

    .el-skeleton__image svg {
        fill: #dcdde0;
        height: 22%;
        width: 22%
    }

    .el-empty {
        align-items: center;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 40px 0;
        text-align: center
    }

    .el-empty__image {
        width: 160px
    }

    .el-empty__image img {
        height: 100%;
        -o-object-fit: contain;
        object-fit: contain;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        vertical-align: top;
        width: 100%
    }

    .el-empty__image svg {
        fill: #dcdde0;
        height: 100%;
        vertical-align: top;
        width: 100%
    }

    .el-empty__description {
        margin-top: 20px
    }

    .el-empty__description p {
        color: #909399;
        font-size: 14px;
        margin: 0
    }

    .el-empty__bottom {
        margin-top: 20px
    }

    .el-descriptions {
        box-sizing: border-box;
        color: #303133;
        font-size: 14px
    }

    .el-descriptions__header {
        align-items: center;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px
    }

    .el-descriptions__title {
        font-size: 16px;
        font-weight: 700
    }

    .el-descriptions__body {
        background-color: #fff;
        color: #606266
    }

    .el-descriptions__body .el-descriptions__table {
        border-collapse: collapse;
        table-layout: fixed;
        width: 100%
    }

    .el-descriptions__body .el-descriptions__table .el-descriptions-item__cell {
        box-sizing: border-box;
        font-weight: 400;
        line-height: 1.5;
        text-align: left
    }

    .el-descriptions__body .el-descriptions__table .el-descriptions-item__cell.is-left {
        text-align: left
    }

    .el-descriptions__body .el-descriptions__table .el-descriptions-item__cell.is-center {
        text-align: center
    }

    .el-descriptions__body .el-descriptions__table .el-descriptions-item__cell.is-right {
        text-align: right
    }

    .el-descriptions .is-bordered {
        table-layout: auto
    }

    .el-descriptions .is-bordered .el-descriptions-item__cell {
        border: 1px solid #ebeef5;
        padding: 12px 10px
    }

    .el-descriptions :not(.is-bordered) .el-descriptions-item__cell {
        padding-bottom: 12px
    }

    .el-descriptions--medium.is-bordered .el-descriptions-item__cell {
        padding: 10px
    }

    .el-descriptions--medium:not(.is-bordered) .el-descriptions-item__cell {
        padding-bottom: 10px
    }

    .el-descriptions--small {
        font-size: 12px
    }

    .el-descriptions--small.is-bordered .el-descriptions-item__cell {
        padding: 8px 10px
    }

    .el-descriptions--small:not(.is-bordered) .el-descriptions-item__cell {
        padding-bottom: 8px
    }

    .el-descriptions--mini {
        font-size: 12px
    }

    .el-descriptions--mini.is-bordered .el-descriptions-item__cell {
        padding: 6px 10px
    }

    .el-descriptions--mini:not(.is-bordered) .el-descriptions-item__cell {
        padding-bottom: 6px
    }

    .el-descriptions-item {
        vertical-align: top
    }

    .el-descriptions-item__container {
        display: flex
    }

    .el-descriptions-item__container .el-descriptions-item__content, .el-descriptions-item__container .el-descriptions-item__label {
        align-items: baseline;
        display: inline-flex
    }

    .el-descriptions-item__container .el-descriptions-item__content {
        flex: 1
    }

    .el-descriptions-item__label.has-colon:after {
        content: ":";
        position: relative;
        top: -.5px
    }

    .el-descriptions-item__label.is-bordered-label {
        background: #fafafa;
        color: #909399;
        font-weight: 700
    }

    .el-descriptions-item__label:not(.is-bordered-label) {
        margin-right: 10px
    }

    .el-descriptions-item__content {
        word-break: break-word;
        word-wrap: break-word
    }

    .el-result {
        align-items: center;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 40px 30px;
        text-align: center
    }

    .el-result__icon svg {
        height: 64px;
        width: 64px
    }

    .el-result__title {
        margin-top: 20px
    }

    .el-result__title p {
        color: #303133;
        font-size: 20px;
        line-height: 1.3;
        margin: 0
    }

    .el-result__subtitle {
        margin-top: 10px
    }

    .el-result__subtitle p {
        color: #606266;
        font-size: 14px;
        line-height: 1.3;
        margin: 0
    }

    .el-result__extra {
        margin-top: 30px
    }

    .el-result .icon-success {
        fill: #67c23a
    }

    .el-result .icon-error {
        fill: #f56c6c
    }

    .el-result .icon-info {
        fill: #909399
    }

    .el-result .icon-warning {
        fill: #e6a23c
    }

    .el-message-box {
        max-width: 420px;
        width: 98% !important
    }

    .el-message-box .el-button--primary span {
        color: #fff;
        color: var(--white)
    }

    .el-notification .el-icon-info {
        color: #019ee0
    }

    .el-notification__content {
        text-align: left
    }

    .el-notification__content p {
        word-break: break-word
    }

    .el-notification__content p a {
        color: currentColor;
        -webkit-text-decoration: underline;
        text-decoration: underline
    }

    .theme--dark .el-message-box, .theme--dark .el-notification {
        background-color: #f4f5f7;
        background-color: var(--light);
        border-color: #f4f5f7;
        border-color: var(--light)
    }

    .theme--dark .el-message-box__closeBtn, .theme--dark .el-message-box__content, .theme--dark .el-message-box__title, .theme--dark .el-notification__closeBtn, .theme--dark .el-notification__content, .theme--dark .el-notification__title {
        color: #fff;
        color: var(--white)
    }

    .theme--dark .el-message-box__content, .theme--dark .el-notification__content {
        opacity: .85
    }

    :root {
        --w-full: 100%;
        --w-screen: 100vw;
        --h-screen: 100vh;
        --ag-grid-mx-xl: 5rem;
        --ag-grid-min-h: 26.5625rem;
        --chip-font-size: 1rem;
        --primary: #c8102e;
        --secondary: #b0bec5;
        --accent: #006e82;
        --white: #fff;
        --light: #f4f5f7;
        --black: #000;
        --black-de: rgba(0, 0, 0, .871);
        --input-background-color: 47 100% 92%;
        --input-background-opacity: 30%
    }

    .ag-theme-balham a, .ag-theme-balham-dark a, .aggrid-link, .master-table .v-data-table a, .master-table a {
        color: #c8102e !important;
        color: var(--primary) !important;
        cursor: pointer;
        font-weight: 400 !important;
        -webkit-text-decoration: none;
        text-decoration: none
    }

    .ag-theme-balham a:hover, .ag-theme-balham-dark a:hover, .aggrid-link:hover, .master-table a:hover {
        -webkit-text-decoration: underline;
        text-decoration: underline
    }

    .ag-theme-balham, .ag-theme-balham-dark, .master-table {
        --ag-text-field-input: 1.75rem;
        --ag-icon-menu: 1rem;
        --ag-icon-filter: 1.25rem;
        --ag-row-height: 2rem
    }

    .ag-theme-balham .ag-header .ag-header-cell-label, .ag-theme-balham-dark .ag-header .ag-header-cell-label, .master-table .ag-header .ag-header-cell-label {
        padding-right: 1.5rem
    }

    .ag-theme-balham .ag-header .ag-header-cell-label .ag-filter-icon, .ag-theme-balham-dark .ag-header .ag-header-cell-label .ag-filter-icon, .master-table .ag-header .ag-header-cell-label .ag-filter-icon {
        color: #006e82
    }

    .ag-theme-balham .ag-header .ag-header-cell-text, .ag-theme-balham-dark .ag-header .ag-header-cell-text, .master-table .ag-header .ag-header-cell-text {
        display: -webkit-box;
        white-space: normal;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical
    }

    .ag-theme-balham .ag-header .ag-header-cell-menu-button, .ag-theme-balham-dark .ag-header .ag-header-cell-menu-button, .master-table .ag-header .ag-header-cell-menu-button {
        align-items: center;
        display: flex;
        height: var(--ag-icon-filter);
        justify-content: center;
        position: fixed;
        width: var(--ag-icon-filter)
    }

    .ag-theme-balham .ag-header .ag-header-cell-menu-button .ag-icon-menu, .ag-theme-balham-dark .ag-header .ag-header-cell-menu-button .ag-icon-menu, .master-table .ag-header .ag-header-cell-menu-button .ag-icon-menu {
        cursor: pointer;
        font-size: var(--ag-icon-menu);
        line-height: var(--ag-icon-menu);
        margin-top: -3px
    }

    .ag-theme-balham .ag-header .ag-header-cell-menu-button .ag-icon-menu:before, .ag-theme-balham-dark .ag-header .ag-header-cell-menu-button .ag-icon-menu:before, .master-table .ag-header .ag-header-cell-menu-button .ag-icon-menu:before {
        content: "󰒓";
        font-family: "Material Design Icons";
        font-size: inherit
    }

    .ag-theme-balham .ag-header .ag-header-cell-menu-button .ag-icon-menu:not(:hover), .ag-theme-balham-dark .ag-header .ag-header-cell-menu-button .ag-icon-menu:not(:hover), .master-table .ag-header .ag-header-cell-menu-button .ag-icon-menu:not(:hover) {
        opacity: .6
    }

    .ag-theme-balham .ag-header .ag-header-cell-menu-button:not(.ag-header-menu-always-show), .ag-theme-balham-dark .ag-header .ag-header-cell-menu-button:not(.ag-header-menu-always-show), .master-table .ag-header .ag-header-cell-menu-button:not(.ag-header-menu-always-show) {
        opacity: 1
    }

    .ag-theme-balham .ag-header .ag-header-cell-menu-button:not(.ag-header-menu-always-show):after, .ag-theme-balham-dark .ag-header .ag-header-cell-menu-button:not(.ag-header-menu-always-show):after, .master-table .ag-header .ag-header-cell-menu-button:not(.ag-header-menu-always-show):after {
        background: rgba(97, 97, 97, .808);
        border-radius: .25rem;
        color: #fff;
        color: var(--white);
        content: "Настройки";
        display: inline-block;
        font-family: "PFDinDisplayPro", sans-serif;
        font-size: .875rem;
        font-weight: 400;
        line-height: 1.375rem;
        opacity: 0;
        padding: .3125rem 1rem;
        pointer-events: none;
        position: absolute;
        right: 1.5rem;
        top: -.25rem;
        transition: opacity .15s cubic-bezier(0, 0, .2, 1) 75ms;
        width: auto
    }

    .ag-theme-balham .ag-header .ag-header-cell-menu-button:not(.ag-header-menu-always-show):hover:after, .ag-theme-balham-dark .ag-header .ag-header-cell-menu-button:not(.ag-header-menu-always-show):hover:after, .master-table .ag-header .ag-header-cell-menu-button:not(.ag-header-menu-always-show):hover:after {
        opacity: 1
    }

    .ag-theme-balham .ag-header .ag-icon-filter:before, .ag-theme-balham-dark .ag-header .ag-icon-filter:before, .master-table .ag-header .ag-icon-filter:before {
        content: "󰈲";
        font-family: "Material Design Icons";
        font-size: inherit
    }

    .ag-theme-balham .ag-header .ag-floating-filter-button, .ag-theme-balham-dark .ag-header .ag-floating-filter-button, .master-table .ag-header .ag-floating-filter-button {
        height: var(--ag-icon-filter);
        margin-top: -1px;
        width: var(--ag-icon-filter)
    }

    .ag-theme-balham .ag-header .ag-floating-filter-button .ag-floating-filter-button-button, .ag-theme-balham-dark .ag-header .ag-floating-filter-button .ag-floating-filter-button-button, .master-table .ag-header .ag-floating-filter-button .ag-floating-filter-button-button {
        height: inherit;
        width: inherit
    }

    .ag-theme-balham .ag-header .ag-floating-filter-button .ag-floating-filter-button-button .ag-icon-filter, .ag-theme-balham-dark .ag-header .ag-floating-filter-button .ag-floating-filter-button-button .ag-icon-filter, .master-table .ag-header .ag-floating-filter-button .ag-floating-filter-button-button .ag-icon-filter {
        font-size: var(--ag-icon-filter);
        height: inherit
    }

    .ag-theme-balham .ag-header .ag-floating-filter-button .ag-floating-filter-button-button .ag-icon-filter:not(:hover), .ag-theme-balham-dark .ag-header .ag-floating-filter-button .ag-floating-filter-button-button .ag-icon-filter:not(:hover), .master-table .ag-header .ag-floating-filter-button .ag-floating-filter-button-button .ag-icon-filter:not(:hover) {
        opacity: .6
    }

    .ag-theme-balham .ag-header .ag-floating-filter-button .ag-floating-filter-button-button .ag-icon-filter:after, .ag-theme-balham-dark .ag-header .ag-floating-filter-button .ag-floating-filter-button-button .ag-icon-filter:after, .master-table .ag-header .ag-floating-filter-button .ag-floating-filter-button-button .ag-icon-filter:after {
        background: rgba(97, 97, 97, .808);
        border-radius: .25rem;
        color: #fff;
        color: var(--white);
        content: "Фильтр";
        display: inline-block;
        font-family: "PFDinDisplayPro", sans-serif;
        font-size: .875rem;
        font-weight: 400;
        line-height: 1.375rem;
        opacity: 0;
        padding: .2rem 1rem .4rem;
        pointer-events: none;
        position: absolute;
        right: 2.25rem;
        top: .125rem;
        transition: opacity .15s cubic-bezier(0, 0, .2, 1) 75ms;
        width: auto
    }

    .ag-theme-balham .ag-header .ag-floating-filter-button .ag-floating-filter-button-button .ag-icon-filter:hover:after, .ag-theme-balham-dark .ag-header .ag-floating-filter-button .ag-floating-filter-button-button .ag-icon-filter:hover:after, .master-table .ag-header .ag-floating-filter-button .ag-floating-filter-button-button .ag-icon-filter:hover:after {
        opacity: 1
    }

    .ag-theme-balham .ag-tabs.ag-menu .ag-tabs-header .ag-tab[aria-label=columns], .ag-theme-balham-dark .ag-tabs.ag-menu .ag-tabs-header .ag-tab[aria-label=columns], .master-table .ag-tabs.ag-menu .ag-tabs-header .ag-tab[aria-label=columns] {
        display: none !important
    }

    .ag-theme-balham .ag-side-bar .ag-side-buttons, .ag-theme-balham-dark .ag-side-bar .ag-side-buttons, .master-table .ag-side-bar .ag-side-buttons {
        background-color: #fef5e6;
        padding-left: 1.25rem;
        padding-right: 1.25rem;
        transition: background-color .2s linear
    }

    .ag-theme-balham .ag-side-bar .ag-side-buttons:hover, .ag-theme-balham-dark .ag-side-bar .ag-side-buttons:hover, .master-table .ag-side-bar .ag-side-buttons:hover {
        background-color: #fdebce
    }

    .ag-theme-balham .ag-side-bar .ag-side-buttons .ag-side-button-icon-wrapper .ag-icon-columns, .ag-theme-balham-dark .ag-side-bar .ag-side-buttons .ag-side-button-icon-wrapper .ag-icon-columns, .master-table .ag-side-bar .ag-side-buttons .ag-side-button-icon-wrapper .ag-icon-columns {
        margin-bottom: .55rem
    }

    .ag-theme-balham .ag-side-bar .ag-side-buttons .ag-side-button-icon-wrapper .ag-icon-columns:before, .ag-theme-balham-dark .ag-side-bar .ag-side-buttons .ag-side-button-icon-wrapper .ag-icon-columns:before, .master-table .ag-side-bar .ag-side-buttons .ag-side-button-icon-wrapper .ag-icon-columns:before {
        content: "󱒅";
        font-family: "Material Design Icons";
        font-size: 1.5rem
    }

    .ag-theme-balham .ag-side-bar .ag-side-buttons .ag-side-button-button, .ag-theme-balham-dark .ag-side-bar .ag-side-buttons .ag-side-button-button, .master-table .ag-side-bar .ag-side-buttons .ag-side-button-button {
        background-color: transparent;
        font-family: "PFDinDisplayPro", sans-serif;
        font-size: 1rem
    }

    .ag-theme-balham .ag-side-bar .ag-checkbox-input-wrapper.ag-checked:after, .ag-theme-balham-dark .ag-side-bar .ag-checkbox-input-wrapper.ag-checked:after, .master-table .ag-side-bar .ag-checkbox-input-wrapper.ag-checked:after {
        color: #006e82
    }

    .ag-theme-balham .ag-text-field-input, .ag-theme-balham-dark .ag-text-field-input, .master-table .ag-text-field-input {
        background-color: var(--ag-input-background-color);
        border-color: var(--ag-input-border-color) !important;
        border-radius: .25rem;
        height: var(--ag-text-field-input)
    }

    .ag-theme-balham .ag-text-field-input fieldset, .ag-theme-balham-dark .ag-text-field-input fieldset, .master-table .ag-text-field-input fieldset {
        border: 0 !important
    }

    .ag-theme-balham .ag-text-field-input:not([disabled]):focus, .ag-theme-balham .ag-text-field-input:not([disabled]):hover, .ag-theme-balham-dark .ag-text-field-input:not([disabled]):focus, .ag-theme-balham-dark .ag-text-field-input:not([disabled]):hover, .master-table .ag-text-field-input:not([disabled]):focus, .master-table .ag-text-field-input:not([disabled]):hover {
        outline: 2px solid var(--ag-border-color) !important
    }

    .ag-theme-balham .ag-row .ag-cell, .ag-theme-balham-dark .ag-row .ag-cell, .master-table .ag-row .ag-cell {
        font-size: .875rem
    }

    .ag-theme-balham .ag-row .ag-cell .ag-cell-wrapper, .ag-theme-balham-dark .ag-row .ag-cell .ag-cell-wrapper, .master-table .ag-row .ag-cell .ag-cell-wrapper {
        height: inherit;
        margin-top: -1px
    }

    .ag-theme-balham .ag-row .ag-cell .ag-cell-wrapper .ag-cell-value, .ag-theme-balham-dark .ag-row .ag-cell .ag-cell-wrapper .ag-cell-value, .master-table .ag-row .ag-cell .ag-cell-wrapper .ag-cell-value {
        align-items: center;
        display: inline-flex;
        height: inherit
    }

    .ag-theme-balham .ag-row .ag-cell .ag-cell-wrapper .ag-cell-value > div, .ag-theme-balham-dark .ag-row .ag-cell .ag-cell-wrapper .ag-cell-value > div, .master-table .ag-row .ag-cell .ag-cell-wrapper .ag-cell-value > div {
        align-items: center;
        display: flex;
        height: inherit
    }

    .ag-theme-balham .ag-row .ag-cell .ag-cell-wrapper .ag-cell-value > div .menu-icons__btn:focus, .ag-theme-balham .ag-row .ag-cell .ag-cell-wrapper .ag-cell-value > div .menu-icons__btn:hover, .ag-theme-balham-dark .ag-row .ag-cell .ag-cell-wrapper .ag-cell-value > div .menu-icons__btn:focus, .ag-theme-balham-dark .ag-row .ag-cell .ag-cell-wrapper .ag-cell-value > div .menu-icons__btn:hover, .master-table .ag-row .ag-cell .ag-cell-wrapper .ag-cell-value > div .menu-icons__btn:focus, .master-table .ag-row .ag-cell .ag-cell-wrapper .ag-cell-value > div .menu-icons__btn:hover {
        color: #006e82 !important
    }

    .ag-theme-balham .ag-row .ag-cell .ag-cell-wrapper .ag-group-contracted, .ag-theme-balham-dark .ag-row .ag-cell .ag-cell-wrapper .ag-group-contracted, .master-table .ag-row .ag-cell .ag-cell-wrapper .ag-group-contracted {
        height: inherit
    }

    .ag-theme-balham .ag-row .ag-cell.ag-cell-focus:not(.ag-cell-range-selected), .ag-theme-balham-dark .ag-row .ag-cell.ag-cell-focus:not(.ag-cell-range-selected), .master-table .ag-row .ag-cell.ag-cell-focus:not(.ag-cell-range-selected) {
        border-color: #006e82 !important;
        border-color: var(--accent) !important
    }

    .ag-theme-balham .ag-paging-panel, .ag-theme-balham-dark .ag-paging-panel, .master-table .ag-paging-panel {
        border-top: 0 !important
    }

    .ag-theme-balham {
        --ag-header-background-color: #ecedee;
        --ag-header-column-separator-color: hsla(0, 7%, 6%, .271);
        --ag-odd-row-background-color: #fcfcfc;
        --ag-border-color: rgba(0, 0, 0, .122);
        --ag-input-border-color: rgba(0, 0, 0, .122);
        --ag-input-background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .055);
        border-radius: .25rem;
        box-shadow: 0 .35em 1.15em rgba(0, 0, 0, .06)
    }

    .ag-theme-balham .ag-root-wrapper {
        background-color: transparent !important;
        border: none !important;
        border-radius: .25rem
    }

    .ag-theme-balham.ag-popup .ag-select-list-item {
        cursor: pointer;
        font-size: 1rem;
        height: 2rem;
        padding-left: .75rem;
        padding-right: .75rem
    }

    .ag-theme-balham.ag-popup .ag-select-list-item.ag-active-item {
        background-color: rgba(200, 16, 46, .1);
        color: #c8102e;
        color: var(--primary)
    }

    .ag-theme-balham.ag-popup .ag-select-list-item:hover {
        background-color: rgba(200, 16, 46, .1)
    }

    .ag-theme-balham .ag-header {
        background-color: var(--ag-header-background-color) !important
    }

    .ag-theme-balham .ag-header .ag-header-row .ag-header-icon .ag-icon-menu:before {
        color: rgba(0, 0, 0, .871);
        color: var(--black-de)
    }

    .ag-theme-balham .ag-filter .ag-filter-date-from {
        border: thin solid rgba(0, 0, 0, .122);
        border-radius: .25rem
    }

    .ag-theme-balham .ag-filter .ag-filter-body-wrapper {
        padding: .75rem
    }

    .ag-theme-balham .ag-filter .ag-filter-body-wrapper .ag-filter-select {
        height: auto;
        margin-bottom: .5rem
    }

    .ag-theme-balham .ag-filter .ag-filter-body-wrapper .ag-filter-select .ag-picker-field-wrapper {
        background: rgba(255, 246, 214, .3);
        background: hsl(var(--input-background-color)/var(--input-background-opacity));
        font-size: 1rem;
        height: 2.5rem;
        padding-left: .75rem;
        padding-right: .75rem
    }

    .ag-theme-balham .ag-filter .ag-filter-body-wrapper .ag-filter-select .ag-picker-field-wrapper:hover {
        --input-background-opacity: 50%;
        cursor: pointer;
        outline: none !important
    }

    .ag-theme-balham .ag-filter .ag-filter-body-wrapper .ag-filter-select .ag-picker-field-wrapper:focus {
        outline: .125rem solid #006e82 !important
    }

    .ag-theme-balham .ag-filter .ag-filter-body-wrapper .ag-filter-filter {
        height: auto
    }

    .ag-theme-balham .ag-filter .ag-filter-body-wrapper .ag-filter-filter .ag-text-field-input {
        background: rgba(255, 246, 214, .3);
        background: hsl(var(--input-background-color)/var(--input-background-opacity));
        font-size: 1rem;
        height: 2.5rem;
        padding-left: .75rem;
        padding-right: .75rem
    }

    .ag-theme-balham .ag-filter .ag-filter-body-wrapper .ag-filter-filter .ag-text-field-input:hover {
        --input-background-opacity: 50%;
        outline: none !important
    }

    .ag-theme-balham .ag-filter .ag-filter-body-wrapper .ag-filter-filter .ag-text-field-input:focus {
        outline: .125rem solid #006e82 !important
    }

    .ag-theme-balham .ag-header-row:not(:first-child) .ag-header-cell.ag-header-group-cell-with-group, .ag-theme-balham .ag-header-row:not(:first-child) .ag-header-group-cell.ag-header-group-cell-with-group {
        border-top-color: var(--ag-border-color) !important
    }

    .ag-theme-balham .ag-header-row .ag-header-cell:after {
        background-color: var(--ag-header-column-separator-color)
    }

    .ag-theme-balham .ag-row {
        border-color: var(--ag-border-color) !important
    }

    .ag-theme-balham .ag-row.ag-row-selected {
        background-color: rgba(0, 110, 130, .25)
    }

    .ag-theme-balham .ag-row.ag-row-selected .ag-checkbox-input-wrapper:focus-within {
        box-shadow: none
    }

    .ag-theme-balham .ag-row.ag-row-selected .ag-checkbox-input-wrapper.ag-checked:after {
        color: #006e82
    }

    .ag-theme-balham .ag-row.ag-row-focus:not(.ag-row-selected) {
        background-color: rgba(176, 190, 197, .25)
    }

    .ag-theme-balham .ag-row-odd {
        background-color: var(--ag-odd-row-background-color)
    }

    .ag-theme-balham-dark {
        --ag-header-background-color: #272a2e;
        --ag-header-foreground-color: hsla(0, 0%, 100%, .788);
        --ag-row-background-color: #3b4146;
        --ag-odd-row-background-color: #32373b;
        --ag-border-color: hsla(0, 0%, 44%, .651);
        --ag-input-border-color: hsla(0, 0%, 95%, .122);
        --ag-input-background-color: #212627;
        border: 0
    }

    .ag-theme-balham-dark .ag-root-wrapper {
        border-color: transparent !important;
        border-radius: .25rem
    }

    .ag-theme-balham-dark .ag-header, .ag-theme-balham-dark .ag-root-wrapper {
        background-color: var(--ag-header-background-color) !important
    }

    .ag-theme-balham-dark .ag-header .ag-header-row {
        color: var(--ag-header-foreground-color)
    }

    .ag-theme-balham-dark .ag-row {
        background-color: var(--ag-row-background-color) !important;
        border-color: var(--ag-border-color) !important
    }

    .ag-theme-balham-dark .ag-row:hover {
        background-color: rgba(0, 0, 0, .871) !important;
        background-color: var(--black-de) !important
    }

    .ag-theme-balham-dark .ag-row-odd {
        background-color: var(--ag-odd-row-background-color) !important
    }

    .ag-theme-balham-dark .ag-paging-panel {
        background-color: var(--ag-header-background-color) !important
    }

    .master-table .v-data-table {
        border: 0;
        border-radius: .25em;
        box-shadow: 0 .35em 1.15em rgba(0, 0, 0, .06);
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        line-height: 1.625rem
    }

    .master-table .v-data-table .v-data-table-header {
        border-bottom-color: var(--ag-border-color)
    }

    .master-table .v-data-table .v-data-table-header th {
        background: var(--ag-header-background-color) !important;
        height: var(--ag-row-height);
        position: relative
    }

    .master-table .v-data-table .v-data-table-header th:not(:last-child):after {
        background-color: var(--ag-border-color);
        content: "";
        height: 50%;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 1px
    }

    .master-table .v-data-table .v-data-table-header th span {
        color: var(--ag-header-foreground-color, var(--ag-secondary-foreground-color)) !important;
        font-size: .875rem;
        font-weight: 600;
        white-space: nowrap
    }

    .master-table .v-data-table tbody tr {
        color: var(--ag-data-color, var(--ag-foreground-color))
    }

    .master-table .v-data-table tbody tr td {
        font-size: .75rem !important;
        height: var(--ag-row-height) !important;
        line-height: 26px
    }

    .master-table .v-data-table tbody tr td b, .master-table .v-data-table tbody tr td strong {
        font-weight: 400 !important
    }

    .master-table .v-data-table tbody tr:nth-child(2n) {
        background-color: var(--ag-odd-row-background-color)
    }

    .master-table .v-data-table tbody tr:last-child {
        background: #f4f5f7 !important;
        background: var(--light) !important
    }

    .master-table .v-data-table tbody tr:not(:last-child):hover {
        background: var(--ag-row-hover-color) !important
    }

    .theme--light .v-main {
        background-color: #f4f5f7;
        background-color: var(--light)
    }

    .theme--light .v-footer {
        background-color: transparent !important
    }

    .theme--light .v-footer.v-sheet {
        background-color: #f4f5f7 !important;
        background-color: var(--light) !important
    }

    .theme--light .v-footer ~ .v-bottom-navigation {
        box-shadow: none !important
    }

    .theme--light .v-text-field--outlined:not(.v-input--is-focused):not(.v-input--has-state) > .v-input__control > .v-input__slot fieldset {
        color: rgba(0, 0, 0, .122) !important
    }

    .theme--light.modal-login-form .v-input__control .v-input__slot {
        --input-background-opacity: 30%;
        background: rgba(255, 246, 214, .3) !important;
        background: hsl(var(--input-background-color)/var(--input-background-opacity)) !important
    }

    .theme--light.modal-login-form .v-input__control .v-input__slot input:-webkit-autofill {
        --input-background-color: 45 100% 98%;
        --input-background-opacity: 100%;
        -webkit-text-fill-color: #000 !important;
        -webkit-text-fill-color: var(--black) !important;
        box-shadow: inset 0 0 0 1000px #fffcf5 !important;
        box-shadow: 0 0 0 1000px hsl(var(--input-background-color)/var(--input-background-opacity)) inset !important;
        -webkit-transition: background-color 600000s 0s, color 600000s 0s;
        transition: background-color 600000s 0s, color 600000s 0s
    }

    .theme--light.modal-login-form .v-input__control .v-input__slot input:-internal-autofill-selected {
        background-color: transparent !important
    }

    .theme--light.modal-login-form .v-input__control .v-input__slot:hover input:-webkit-autofill {
        --input-background-color: 47 100% 95%;
        --input-background-opacity: 100%
    }

    .theme--light .badge {
        color: #fff;
        color: var(--white)
    }

    .theme--dark {
        --light: #2b2f33;
        --dark: #222629;
        --bg: #181c1f;
        --primary: #21b2cf;
        --accent: #aa9ff3;
        --ck-color-base-background: var(--dark);
        --ck-color-toolbar-background: var(--light);
        --ck-color-dropdown-panel-background: var(--light);
        --ck-color-input-background: var(--light);
        --ck-color-labeled-field-label-background: var(--light);
        --ck-color-list-button-hover-background: var(--primary);
        --ck-color-button-default-background: var(--primary);
        --ck-color-button-default-hover-background: var(--primary);
        --ck-color-split-button-hover-background: var(--accent);
        --ck-color-button-default-active-background: var(--accent);
        --ck-color-button-on-background: var(--accent);
        --ck-color-button-on-hover-background: var(--accent);
        --ck-color-button-on-active-background: var(--accent);
        --ck-color-list-button-on-background: var(--accent);
        --ck-color-list-button-on-background-focus: var(--accent);
        --ck-color-text: var(--white)
    }

    .theme--dark.v-application {
        background-color: var(--bg) !important
    }

    .theme--dark.v-bottom-navigation, .theme--dark.v-navigation-drawer {
        background-color: var(--dark) !important
    }

    .theme--dark .v-footer, .theme--dark .v-footer.v-sheet {
        background-color: transparent !important
    }

    .theme--dark .v-card.v-sheet:not(.transparent):not(.primary):not(.white):not([style]), .theme--dark .v-stepper, .theme--dark .v-toolbar.v-sheet:not(.transparent):not(.primary), .theme--dark.v-list:not(.transparent), .theme--dark.v-tabs-items:not(.transparent), .theme--dark.v-tabs > .v-tabs-bar {
        background-color: var(--dark) !important
    }

    .theme--dark .v-stepper__content, .theme--dark .v-stepper__header {
        background-color: inherit
    }

    .theme--dark.v-tabs.v-tabs--vertical {
        border-right: thin solid hsla(0, 0%, 100%, .161)
    }

    .theme--dark .app__navbar .v-list-item--link .v-list-item__title {
        font-weight: 400
    }

    .theme--dark .app__navbar .v-list-item--link:not(.v-list-group__header):before {
        background-color: transparent
    }

    .theme--dark .app__navbar .v-list-item--link:not(.v-list-group__header):hover:before {
        background-color: currentColor
    }

    .theme--dark.modal-login-form .v-input__control .v-input__slot input:-internal-autofill-selected {
        background-color: transparent !important;
        color: #fff !important;
        color: var(--white) !important
    }

    .theme--dark.modal-login-form .v-input__control .v-input__slot input:-webkit-autofill {
        -webkit-text-fill-color: #fff !important;
        -webkit-text-fill-color: var(--white) !important;
        box-shadow: inset 0 0 0 1000px #333439;
        color: #fff !important;
        color: var(--white) !important;
        -webkit-transition: background-color 600000s 0s, color 600000s 0s;
        transition: background-color 600000s 0s, color 600000s 0s
    }

    .theme--dark.modal-login-form .v-input__control .v-input__slot:focus input:-webkit-autofill, .theme--dark.modal-login-form .v-input__control .v-input__slot:hover input:-webkit-autofill {
        box-shadow: inset 0 0 0 1000px #404145
    }

    .theme--dark.modal-login-form .v-input__control .v-input__slot:focus input:-webkit-autofill:focus, .theme--dark.modal-login-form .v-input__control .v-input__slot:hover input:-webkit-autofill:focus {
        box-shadow: inset 0 0 0 1000px #333439
    }

    .theme--dark .ps .ps__rail-x.ps--clicking, .theme--dark .ps .ps__rail-x:focus, .theme--dark .ps .ps__rail-x:hover, .theme--dark .ps .ps__rail-y.ps--clicking, .theme--dark .ps .ps__rail-y:focus, .theme--dark .ps .ps__rail-y:hover {
        background: #f4f5f7 !important;
        background: var(--light) !important
    }

    .theme--dark .el-upload-dragger {
        background: #f4f5f7;
        background: var(--light)
    }

    .theme--dark .ag-theme-balham-dark .ag-side-buttons {
        color: #000;
        color: var(--black)
    }

    .cursor-help {
        cursor: help
    }

    .cursor-pointer {
        cursor: pointer
    }

    .cursor-not-allowed {
        cursor: not-allowed
    }

    .cursor-copy {
        cursor: copy
    }

    *, :after, :before {
        box-sizing: border-box
    }

    html {
        overflow-y: auto
    }

    body {
        font-family: "PFDinDisplayPro", sans-serif;
        overflow-x: hidden
    }

    .scrollbar-stable {
        scrollbar-gutter: stable
    }

    .page-content {
        display: flex;
        flex-flow: column nowrap;
        min-height: 100vh
    }

    a {
        -webkit-text-decoration: none;
        text-decoration: none
    }

    a:not(.v-btn):not(.v-list-item):not([role=tab]):not([aria-current=page]):hover {
        color: #c8102e;
        color: var(--primary);
        -webkit-text-decoration: underline;
        text-decoration: underline
    }

    a:not([class]):hover {
        -webkit-text-decoration: underline;
        text-decoration: underline
    }

    .hidden, .overflow-hidden {
        overflow: hidden
    }

    .hidden-x, .overflow-hidden-x {
        overflow-x: hidden
    }

    .hidden-y, .overflow-hidden-y {
        overflow-y: hidden
    }

    .shadow-custom {
        box-shadow: 0 .35em 1.15em rgba(0, 0, 0, .06) !important
    }

    .overscroll-behavior {
        overscroll-behavior: contain
    }

    .overscroll-behavior-y {
        overscroll-behavior-y: contain
    }

    .overscroll-behavior-x {
        overscroll-behavior-x: contain
    }

    .hide-arrows-slider .v-slide-group__next, .hide-arrows-slider .v-slide-group__prev {
        display: none !important
    }

    .badge {
        bottom: auto;
        display: inline-block;
        line-height: inherit;
        padding: .025rem .5rem;
        position: absolute;
        right: .25rem
    }

    .no-pointer {
        cursor: default !important;
        pointer-events: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .no-border.v-menu__content {
        border: 0 !important
    }

    .position-relative {
        position: relative !important
    }

    .position-absolute {
        position: absolute !important
    }

    .position-fixed {
        position: fixed !important
    }

    .position-sticky {
        position: sticky !important
    }

    .t-0 {
        top: 0 !important
    }

    .r-0 {
        right: 0 !important
    }

    .b-0 {
        bottom: 0 !important
    }

    .l-0 {
        left: 0 !important
    }

    .fill-width {
        width: 100%;
        width: var(--w-full)
    }

    .w-screen {
        width: 100vw;
        width: var(--w-screen)
    }

    .max-content {
        width: -moz-max-content;
        width: max-content
    }

    .h-screen {
        height: 100vh;
        height: var(--h-screen)
    }

    .white-space-normal {
        white-space: normal !important
    }

    .text-decoration-none {
        -webkit-text-decoration: none;
        text-decoration: none
    }

    .rounded {
        border-radius: .25em !important
    }

    .border-none {
        border: 0 !important
    }

    .border-x-0 {
        border-left: 0 !important;
        border-right: 0 !important
    }

    .border-y-0 {
        border-bottom: 0 !important
    }

    .border-t-0, .border-y-0 {
        border-top: 0 !important
    }

    .border-r-0 {
        border-right: 0 !important
    }

    .border-b-0 {
        border-bottom: 0 !important
    }

    .border-l-0 {
        border-left: 0 !important
    }

    .if-print_show {
        display: none
    }

    @media print {
        .if-print_show {
            display: block
        }

        .if-print_hide {
            display: none !important
        }
    }

    input:required:not([disabled]) {
        background-image: url(/svg/required.svg);
        background-position: 100% -20%;
        background-repeat: no-repeat;
        min-height: 30px
    }

    .first-letter-uppercase:first-letter {
        text-transform: uppercase
    }

    .blank-page:before {
        background-image: url(/header/logo-ffc-img.svg);
        background-position: 50%;
        background-size: 50vw;
        filter: brightness(0) invert(.87);
        z-index: 4
    }

    .blank-page:after, .blank-page:before {
        bottom: 0;
        content: "";
        left: 0;
        position: fixed;
        right: 0;
        top: 0
    }

    .blank-page:after {
        background-color: #f4f5f7;
        background-color: var(--light);
        z-index: 3
    }

    .auth-form input:-webkit-autofill, .auth-form input:-webkit-autofill:focus, .auth-form input:-webkit-autofill:hover {
        background: none !important;
        background-color: transparent !important;
        -webkit-transition: background-color 50000s ease-in-out 0s;
        transition: background-color 50000s ease-in-out 0s;
        -webkit-text-fill-color: var(--text-fill-color)
    }

    .auth-form:has(.theme--dark) input:-webkit-autofill, .auth-form:has(.theme--dark) input:-webkit-autofill:focus, .auth-form:has(.theme--dark) input:-webkit-autofill:hover {
        --text-fill-color: var(--white)
    }

    .login-page .auth-form {
        -webkit-backdrop-filter: blur(.5rem);
        backdrop-filter: blur(.5rem);
        background: hsla(0, 0%, 100%, .2);
        background: var(--auth-form-bg, hsla(0, 0%, 100%, .2));
        border: thin solid hsla(0, 0%, 100%, .302);
        border: thin solid var(--auth-form-border, hsla(0, 0%, 100%, .302));
        border-radius: .25rem;
        box-shadow: 0 1.25rem 2.5rem -.35rem rgba(0, 0, 0, .2);
        padding: 1.75rem 1rem .75rem
    }

    .v-application {
        font-family: "PFDinDisplayPro", sans-serif !important
    }

    .v-application .deep-orange.accent-1 {
        background-color: #c8102e !important;
        border-color: #c8102e !important
    }

    .v-alert {
        width: 100%;
        width: var(--w-full)
    }

    .v-alert span a {
        color: currentColor !important
    }

    .v-autocomplete.v-select.v-select--is-focused input {
        min-width: auto !important
    }

    .v-input--is-disabled .v-chip {
        color: inherit !important;
        pointer-events: none
    }

    .v-select__selections .v-chip {
        padding: 0 .375rem !important
    }

    .v-select__selections .v-chip.v-size--default {
        border-radius: .25rem;
        font-size: 1rem;
        font-size: var(--chip-font-size);
        height: auto !important;
        line-height: 1.1;
        padding-left: 0;
        padding-right: 0;
        word-break: break-all
    }

    .v-select__selections .v-chip:not(.v-chip--active) {
        background: transparent !important
    }

    .v-calendar-monthly .calendar-not-clear .v-input__slot .v-text-field__slot {
        margin-right: -24px;
        width: 100%
    }

    .v-calendar-monthly .calendar-not-clear .v-input__slot .v-text-field__slot input {
        border: 2px solid;
        border-radius: .25rem;
        font-weight: 900;
        margin-left: -12px;
        margin-right: -12px;
        min-height: 100%;
        text-align: center;
        width: 100%
    }

    .v-calendar-monthly .calendar-not-clear .v-input__slot .v-text-field__slot input:not([disabled=disabled]) {
        border: 2px solid #1d9f1d;
        color: #1d9f1d
    }

    .v-card .v-input.v-text-field .v-input__control .v-input__slot {
        background: rgba(255, 246, 214, .3);
        background: hsl(var(--input-background-color)/var(--input-background-opacity))
    }

    .v-card .v-input.v-text-field .v-input__control .v-input__slot:hover {
        --input-background-opacity: 50%
    }

    .v-card .v-input.v-text-field.v-input--is-disabled fieldset, .v-card .v-input.v-text-field.v-input--is-readonly fieldset {
        border-color: rgba(0, 0, 0, .04) !important
    }

    .v-card .v-input.v-text-field.v-input--is-disabled .v-input__slot, .v-card .v-input.v-text-field.v-input--is-readonly .v-input__slot {
        pointer-events: auto
    }

    .v-card .v-input.v-text-field.v-input--is-disabled .v-input__slot input, .v-card .v-input.v-text-field.v-input--is-readonly .v-input__slot input {
        cursor: inherit
    }

    .v-card .v-input.v-text-field.v-input--is-disabled .v-input__slot {
        background: rgba(255, 243, 199, 0) !important;
        cursor: not-allowed
    }

    .v-card .v-input.v-text-field[unitype=info] .v-input__slot {
        background: rgba(214, 232, 255, .3) !important;
        cursor: help
    }

    .v-card .v-input.v-text-field[unitype=info] .v-input__slot:hover {
        background: rgba(214, 232, 255, .5) !important
    }

    .v-card .v-input.v-text-field[unitype=info] .v-input__slot input {
        cursor: inherit
    }

    .v-card .v-input.v-text-field.theme--dark .v-input__control .v-input__slot {
        --input-background-color: 230 5% 25%;
        --input-background-opacity: 70%
    }

    .v-card .v-input.v-text-field.theme--dark .v-input__control .v-input__slot:hover {
        --input-background-opacity: 50%
    }

    .v-card .v-input.v-text-field.theme--dark.v-input--is-disabled fieldset, .v-card .v-input.v-text-field.theme--dark.v-input--is-readonly fieldset {
        border-color: hsla(0, 0%, 100%, .04) !important
    }

    .v-card .v-input.v-text-field.theme--dark[unitype=info] .v-input__slot {
        background: rgba(39, 65, 98, .3) !important
    }

    .v-card .v-input.v-text-field.theme--dark[unitype=info] .v-input__slot:hover {
        background: rgba(49, 84, 129, .3) !important
    }

    .v-card__title {
        word-break: break-word !important
    }

    .v-expansion-panel-content.px-0 .v-expansion-panel-content__wrap {
        padding: 0
    }

    .v-stepper {
        background-color: transparent;
        border-radius: 0;
        box-shadow: none !important
    }

    .v-stepper__header {
        border-bottom: thin solid rgba(0, 0, 0, .12);
        box-shadow: none !important
    }

    .v-stepper__items .v-input--selection-controls .v-input__slot {
        align-items: start
    }

    .v-stepper .v-stepper__step--active .v-stepper__label {
        text-shadow: none !important
    }

    .v-btn--icon.v-btn--round {
        border-radius: .5rem !important
    }

    .v-btn:not(.v-btn--fab):not(.dislocation-map-global-legend-toggle-btn) {
        box-shadow: none !important
    }

    .v-btn.v-size--small .v-btn__content {
        line-height: 1
    }

    .v-main {
        min-height: 90vh
    }

    @media (min-width: 1264px) {
        .v-main {
            min-height: 100vh
        }
    }

    .container.w-full {
        max-width: 100% !important;
        max-width: var(--w-full) !important
    }

    .container.container--lg.container--fluid.ma-0 {
        margin-left: auto !important;
        margin-right: auto !important
    }

    @media (min-width: 60rem) {
        .container.container--lg.container--fluid.ma-0 {
            max-width: 56.25rem !important
        }
    }

    @media (min-width: 79rem) {
        .container.container--lg.container--fluid.ma-0 {
            max-width: 74.0625rem !important
        }
    }

    @media (min-width: 119rem) {
        .container.container--lg.container--fluid.ma-0 {
            max-width: 92.8125rem !important
        }
    }

    .full-width-container .container:not(.no-resize) {
        max-width: 100% !important
    }

    .v-data-table .v-data-table__mobile-table-row .v-data-table__mobile-row {
        min-height: 1.75rem !important
    }

    .v-data-table .v-data-table__mobile-table-row .v-data-table__mobile-row__header {
        opacity: .75
    }

    .v-data-table .v-data-footer__select .v-select {
        margin-bottom: 0 !important;
        margin-left: .75rem !important;
        margin-top: 0 !important
    }

    .v-footer {
        border-top-color: transparent !important
    }

    .v-tab {
        text-transform: uppercase
    }

    @media (min-width: 960px) {
        .ps {
            overscroll-behavior: contain
        }

        .ps--active-x .ps__rail-x, .ps--active-x .ps__rail-y, .ps--active-y .ps__rail-x, .ps--active-y .ps__rail-y {
            border-radius: .375rem !important;
            cursor: grab;
            cursor: -webkit-grab;
            opacity: .45
        }

        .ps--active-x .ps__rail-x:active, .ps--active-x .ps__rail-y:active, .ps--active-y .ps__rail-x:active, .ps--active-y .ps__rail-y:active {
            cursor: grabbing;
            cursor: -webkit-grabbing
        }
    }

    .el-message {
        border-left: .375rem solid rgba(0, 0, 0, .12) !important;
        right: 4rem !important;
        top: 4rem !important;
        transform: none !important
    }

    @media (max-width: 30rem) {
        .el-message {
            min-width: calc(100vw - 1.5rem) !important
        }
    }

    .el-message__icon {
        display: none !important
    }

    .el-message__content {
        font-size: 1rem !important;
        padding-right: 2rem !important;
        font-line-height: 1.25rem !important
    }

    .el-message__closeBtn, .el-message__content {
        color: #2e2d2d !important
    }

    .el-message--warning {
        background-color: #ffebd4 !important;
        border-color: #ffa25e !important
    }

    body.el-popup-parent--hidden {
        padding-right: 0 !important
    }

    .row {
        margin: 0 -12px
    }

    figure {
        --ck-image-style-spacing: 1.5em
    }

    figure.image {
        clear: both;
        display: inline-block;
        margin: 1em auto;
        text-align: center
    }

    figure.image, figure.image img {
        max-width: 100%
    }

    figure.image-style-side {
        float: right;
        margin-left: var(--ck-image-style-spacing);
        max-width: 50%
    }
</style>
