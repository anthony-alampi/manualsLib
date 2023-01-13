@extends('base')

@section('content')

<header class="home-header">
    <div class="title-form">
        <h1>{{ trans('lang.STR_TITLE_FORM_1/2') }}</h1>
        {{-- <img src="{{asset('assets/img/line-shape-1.svg')}}" alt="line custom"> --}}
        <h1>{{ trans('lang.STR_TITLE_FORM_2/2') }}</h1>
        <h2>{{ trans('lang.STR_TITLE_FORM_2') }}</h2>
        {{-- Formulaire de recherche par marque, model, SN --}}
        <div class="btns-container">
            <button>Manuals</button>
            <button>Brands</button>
        </div>
    </div>
    <div class="illustration">
        <img src="{{asset('assets/img/ils-01.png')}}" alt="">
    </div>
</header>
<main>
    <article>
        <div class="title-information">
            <h2>{{ trans('lang.STR_TITLE_FORM_3') }}</h2>
            <h2>{{ trans('lang.STR_TITLE_FORM_4') }}</h2>
            <div class="brands-container">
                <img src="{{asset('assets/img/whirlpool.png')}}" alt="" class="brand">
                <img src="{{asset('assets/img/Sony-Logo.png')}}" alt="" class="brand">
                <img src="{{asset('assets/img/Samsung_Logo.png')}}" alt="" class="brand">
                <img src="{{asset('assets/img/Panasonic-Logo.png')}}" alt="" class="brand">
                <img src="{{asset('assets/img/Logo-CANDY-Simple-3.png')}}" alt="" class="brand">
                <img src="{{asset('assets/img/Liebherr-Logo.png')}}" alt="" class="brand">
                <img src="{{asset('assets/img/HIGH-ONE-Logo.png')}}" alt="" class="brand">
                <img src="{{asset('assets/img/electronics-lg.png')}}" alt="" class="brand">
                <img src="{{asset('assets/img/Electrolux-Logo.png')}}" alt="" class="brand">
                <img src="{{asset('assets/img/Bosch-logo.png')}}" alt="" class="brand">
            </div>
        </div>
        <section class="devices-cover">
            <article>
                <h2>{{ trans('lang.STR_TITLE_FORM_5') }}</h2>
                <div class="container-devices">
                    <div class="device-card">
                        <img src="{{asset('assets/img/electric-appliance.svg')}}" alt="" class="device">
                    </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/computer.svg')}}" alt="" class="device">
                        </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/smartphone.svg')}}" alt="" class="device">
                        </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/ipad.svg')}}" alt="" class="device">
                        </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/document.svg')}}" alt="" class="device">
                        </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/watch-tv.svg')}}" alt="" class="device">
                        </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/wifi.svg')}}" alt="" class="device">
                        </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/amplifier.svg')}}" alt="" class="device">
                        </div>
                </div>
            </article>
            <article class="title-text_1">
                <div class="text-container">
                    <h2 class="left-position">{{ trans('lang.STR_TITLE_1') }}</h2>
                    <p>{{ trans('lang.STR_TEXT_1') }}</p>
                </div>
                <img src="{{asset('assets/img/user-guide.jpg')}}" alt="">
            </article>
        </section>
    </article>
</main>

@endsection