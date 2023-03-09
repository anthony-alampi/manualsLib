@extends('base');

@section('content')
<header class="faq-header primary-header">
    <h1 class="title-in-header">{{ trans('lang.STR_TITLE_FAQ_1') }}</h1>
    <img src="{{asset('assets/img/line-shape-11.svg')}}" class="line-shape" alt="">
    <div class="circle-anim1"></div>
    <div class="circle-anim2"></div>
    <div class="circle-anim3"></div>
    <div class="circle-anim4"></div>
    <div class="circle-anim5"></div>
    <div class="circle-anim6"></div>
</header>
<main>
    <article>
        <section>
            @include('incs.faqModule');
        </section>
        <section>
            <section>
                <article class="primary-container reveal-bottom">
                    <div class="text-block-contain">
                        <h2 class="title-in-block">{{ trans('lang.STR_TITLE_FAQ_2') }}</h2>
                        <p class="text-in-block"> {{ trans('lang.STR_TEXT_FAQ_1') }} </p>
                    </div>
                    <img src="{{ asset('assets/img/add-docs.svg') }}" class="image-block-1" alt="">
                </article>
                
                <article class="primary-container reveal-bottom">
                    <img src="{{ asset('assets/img/coding.svg') }}" class="image-block" alt="">
                    <div class="text-block-contain">
                        <h2 class="title-in-block">{{ trans('lang.STR_TITLE_FAQ_3') }}</h2>
                        <p class="text-in-block"> {{ trans('lang.STR_TEXT_FAQ_2') }} </p>
                    </div>
                </article>

                <article class=" primary-container reveal-bottom">
                    <div class="text-block-contain">
                        <h2 class="title-in-block">{{ trans('lang.STR_TITLE_FAQ_4') }}</h2>
                        <p class="text-in-block"> {{ trans('lang.STR_TEXT_FAQ_3') }} </p>
                    </div>
                    <img src="{{ asset('assets/img/business.svg') }}" class="image-in-block" alt="">
                </article>
                </article>
            </section>
        </section>
    </article>
</main>
@endsection