@extends('base');

@section('content')

<header class="features-header">
    <h1>{{ trans('lang.STR_TITLE_12/5') }}</h1>
    <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
    <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
    <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
    <img src="{{asset('assets/img/carre.svg')}}" class="square-item4" />
    <img src="{{asset('assets/img/carre.svg')}}" class="square-item5" />
    <img src="{{asset('assets/img/carre.svg')}}" class="square-item6" />
</header>
<main>
    <article>
        <section>
            <article class="features-listing-container">
                <div class="item reveal-left ">
                    <img src="{{ asset('assets/img/manual.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_13') }} </h2>
                    <p> {{trans('lang.STR_TEXT_10')}} </p>
                </div>
                <div class="item reveal-bottom">
                    <img src="{{ asset('assets/img/translation.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_14') }} </h2>
                    <p> {{trans('lang.STR_TEXT_11')}} </p>
                </div>
                <div class="item reveal-right">
                    <img src="{{ asset('assets/img/operator.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_15') }} </h2>
                    <p> {{trans('lang.STR_TEXT_12')}} </p>
                </div>
            </article>
            <article class="features-container">
                <img class="illustration reveal-left" src="{{ asset('assets/img/need-user-manual.jpg') }}" alt="">
                <div class="features-block reveal-right">
                    <h2>{{ trans('lang.STR_TITLE_12') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_9') }} </p>
                </div>
            </article>
            <article class="features-container1 bg-block ">
                <div class="features-block reveal-left">
                    <h2>{{ trans('lang.STR_TITLE_16') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_13') }} </p>
                </div>
                <img src="{{ asset('assets/img/more-product.png') }}" class="image-block reveal-right" alt="">
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item4" />
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="circle-item" />
            </article>
            <article class="features-container2 ">
                <img src="{{ asset('assets/img/electro.jpeg') }}" class="image-block reveal-left" alt="">
                <div class="features-block reveal-right">
                    <h2>{{ trans('lang.STR_TITLE_17') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_14') }} </p>
                </div>
                <img src="{{asset('assets/img/red-flock.svg')}}" class="flock-item1" />
                <img src="{{asset('assets/img/red-flock.svg')}}" class="flock-item2" />
                <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="triangle-item" />
            </article>
                <article class="features-container3 bg-block2 ">
                <div class="features-block reveal-left">
                    <h2>{{ trans('lang.STR_TITLE_18') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_15') }} </p>
                </div>
                <img class="image-block reveal-right" src="{{ asset('assets/img/language-docs.jpeg') }}" alt="">
                <img src="{{asset('assets/img/flock-1.svg')}}" class="flock-item1" />
                <img src="{{asset('assets/img/flock-3.svg')}}" class="flock-item2" />
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="circle-item" />
            </article>
            <article class="features-container4 ">
                <img src="{{ asset('assets/img/maintenance-calendar.svg') }}" class="image-block reveal-left" alt="">
                <div class="features-block reveal-right">
                    <h2>{{ trans('lang.STR_TITLE_19') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_16') }} </p>
                </div>
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="triangle-item" />
            </article>
            <article class="features-container5 ">
                <div class="features-block reveal-left">
                    <h2>{{ trans('lang.STR_TITLE_21/1') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_17') }} </p>
                </div>
                <img class="image-block reveal-right" src="{{ asset('assets/img/more-assist.png') }}" alt="">
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/backslash.svg')}}" class="backslash-item" />
                <img src="{{asset('assets/img/more.svg')}}" class="more-item1" />
                <img src="{{asset('assets/img/more.svg')}}" class="more-item2" />
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="circle-item" />
            </article>
        </section>
    </article>
</main>


@endsection