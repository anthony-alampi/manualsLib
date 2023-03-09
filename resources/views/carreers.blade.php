@extends('base')

@section('content')
<header class="carreers-header primary-header">
    <h1 class="title-in-header title-text">{{trans('lang.STR_TITLE_CARREERS_1')}}</h1>
    <img src="{{asset('assets/img/line-shape-11.svg')}}" class="line-shape" alt="">
    <div class="circle-anim1"></div>
    <div class="circle-anim2"></div>
    <div class="circle-anim3"></div>
    <div class="circle-anim4"></div>
    <div class="circle-anim5"></div>
    <div class="circle-anim6"></div>
</header>


<main>
    <article class="fullContain ">
        <section class="custom-bg-carreers blue-content-block">
        <div class="text-block ">
            <h2>{{ trans('lang.STR_TITLE_CARREERS_2') }}</h2>
            <p>{{ trans('lang.STR_TEXT_CARREERS_1') }}</p>
        </div>
        </section>
        <section class="content-carreers">
            <h2>{{ trans('lang.STR_TITLE_CARREERS_3') }}</h2>
            <div class="carreers-container">
                <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="triangle-item" />
                <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="triangle-item1" />
                <article class="carreers-block reveal-left">
                    <img src="{{asset('assets/img/job-offer.svg')}}" class="icons-plan" />
                    <h2>{{ trans('lang.STR_TITLE_CARREERS_4') }}</h2>
                    <p class="includes">{{ trans('lang.STR_TEXT_CARREERS_2') }}</p>
                </article>
                <article class="carreers-block reveal-right">
                    <img src="{{asset('assets/img/job-offer.svg')}}" class="icons-plan" />
                    <h2>{{ trans('lang.STR_TITLE_CARREERS_5') }}</h2>
                    <p class="includes">{{ trans('lang.STR_TEXT_CARREERS_3') }}</p>
                </article>
            </div>
            <h2>{{ trans('lang.STR_TITLE_CARREERS_6') }}</h2>
        </section>
        <article>
            @include('incs.formContactCarreers')
        </article>
    </article>
</main>
@endsection