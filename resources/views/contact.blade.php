@extends('base')

@section('content')
<header class="contact-header">
    <div class="title-text">
        <h1>{{trans('lang.STR_TITLE_CONTACT_1')}}</h1>
        <img src="{{asset('assets/img/line-shape-11.svg')}}" class="line-shape" alt="">
    </div>
    <div class="circle-anim1"></div>
    <div class="circle-anim2"></div>
    <div class="circle-anim3"></div>
    <div class="circle-anim4"></div>
    <div class="circle-anim5"></div>
    <div class="circle-anim6"></div>
</header>
<main>
    <article class="contact-form">
        @include('incs.formContactCarreers')
    </article>
    <article>
        <div class="contact-container">
            <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="triangle-item" />
            <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="triangle-item1" />
            <article class="contact-block reveal-bottom">
                <img src="{{asset('assets/img/add-docs.svg')}}" class="icons-plan" />
                <h4>{{ trans('lang.STR_TITLE_CONTACT_2') }}</h4>
                <p class="includes">{{ trans('lang.STR_TEXT_CONTACT_1') }}</p>
            </article>
            <article class="contact-block reveal-bottom">
                <img src="{{asset('assets/img/price-tag.svg')}}" class="icons-plan" />
                <h4>{{ trans('lang.STR_TITLE_CONTACT_3') }}</h4>
                <p class="includes">{{ trans('lang.STR_TEXT_CONTACT_2') }}</p>
            </article>
            <article class="contact-block reveal-bottom">
                <img src="{{asset('assets/img/addition.svg')}}" class="icons-plan" />
                <h4>{{ trans('lang.STR_TITLE_CONTACT_4') }}</h4>
                <p class="includes">{{ trans('lang.STR_TEXT_CONTACT_3') }}</p>
            </article>
            <article class="contact-block reveal-bottom">
                <img src="{{asset('assets/img/feedback.svg')}}" class="icons-plan" />
                <h4>{{ trans('lang.STR_TITLE_CONTACT_5') }}</h4>
                <p class="includes">{{ trans('lang.STR_TEXT_CONTACT_4') }}</p>
        </article>
        </div>
    </article>
</main>
@endsection