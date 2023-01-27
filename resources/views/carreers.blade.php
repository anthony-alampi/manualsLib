@extends('base')

@section('content')
<header class="carreers-header">
    <div class="title-text">
        <h1>{{trans('lang.STR_TITLE_CARREERS_1')}}</h1>
    </div>
    <div class="circle-anim1"></div>
    <div class="circle-anim2"></div>
    <div class="circle-anim3"></div>
    <div class="circle-anim4"></div>
    <div class="circle-anim5"></div>
    <div class="circle-anim6"></div>
</header>


<main>
    <article class="fullContain">
        <section class="custom-bg-carreers">
        <div class="text-block">
            <h2>{{ trans('lang.STR_TITLE_CARREERS_2') }}</h2>
            <p>{{ trans('lang.STR_TEXT_CARREERS_1') }}</p>
        </div>
        </section>
        <section class="content-carreers">
            <h2>{{ trans('lang.STR_TITLE_CARREERS_3') }}</h2>
            <div class="carreers-container">
                <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="triangle-item" />
                <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="triangle-item1" />
                <article class="carreers-block">
                    <img src="{{asset('assets/img/job-offer.svg')}}" class="icons-plan" />
                    <h2>{{ trans('lang.STR_TITLE_CARREERS_4') }}</h2>
                    <p class="includes">{{ trans('lang.STR_TEXT_CARREERS_2') }}</p>
                </article>
                <article class="carreers-block">
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
        
        {{-- <img src="{{asset('assets/img/92.svg')}}" class="img-line-custom"alt=""> --}}
    </article>
</main>
@endsection