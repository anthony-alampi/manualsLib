@extends('base')
@section('content')
<header class="pricing-header">
    <h1>{{ trans('lang.STR_TITLE_PRICING_1') }}</h1>
    <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
    <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
    <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
</header>
<main>
    <article>
        <div class="pricing-table">
            <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="triangle-item" />
            <div class="pricing-container1">
                <img src="{{asset('assets/img/free.svg')}}" class="icons-plan" />
                <h2>{{ trans('lang.STR_TITLE_PRICING_2') }}</h2>
                {{-- <p class="includes">{{ trans('lang.STR_TEXT_1_CARD_1') }}</p> --}}
                <p class="manuals custom-position">{{ trans('lang.STR_TEXT_2_CARD_1') }}</p>
            </div>
            <div class="pricing-container2">
                <img src="{{asset('assets/img/trial.svg')}}" class="icons-plan" />
                <h2>{{ trans('lang.STR_TITLE_PRICING_3') }}</h2>
                <p class="includes">{{ trans('lang.STR_TEXT_1_CARD_2') }}</p>
                <p class="manuals">{{ trans('lang.STR_TEXT_2_CARD_2') }}</p>
                <p class="includes">{{ trans('lang.STR_TEXT_3_CARD_2') }}</p>
            </div>
            <div class="pricing-container3">
                <img src="{{asset('assets/img/premium.svg')}}" class="icons-plan" />
                <h2>{{ trans('lang.STR_TITLE_PRICING_4') }}</h2>
                <p class="includes">{{ trans('lang.STR_TEXT_1_CARD_3') }}</p>
                <p class="manuals">{{ trans('lang.STR_TEXT_2_CARD_3') }}</p>
                <p class="includes">{{ trans('lang.STR_TEXT_3_CARD_3') }}</p>
            </div>
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="circle-item" />
        </div>
        <section class="feedback">
            <div class="container1">
                <h2>{{trans('lang.STR_TITLE_HOMEPAGE_9')}}</h2>
                <img src="{{asset('assets/img/face-1.png')}}" class="child-face1" alt=''/>
                <img src="{{asset('assets/img/face-2.png')}}" class="child-face2" alt=''/>
                <img src="{{asset('assets/img/face-3.png')}}" class="child-face3" alt=''/>
                <img src="{{asset('assets/img/face-4.png')}}" class="child-face4" alt=''/>
                <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="child-triangle" alt=''/>
            </div>
            <div class="micro-slider">
                <div class="slider-item">
                    <img src="{{asset('assets/img/quote.svg')}}" class="quote" alt="">
                    <img src="{{asset('assets/img/stars.svg')}}" class="stars" alt="">
                    <p>{{trans('lang.STR_FEEDBACK_1')}}</p>
                </div>
                <div class="slider-item">
                    <img src="{{asset('assets/img/quote.svg')}}" class="quote" alt="">
                    <img src="{{asset('assets/img/stars.svg')}}" class="stars" alt="">
                    <p>{{trans('lang.STR_FEEDBACK_2')}}</p>
                </div>
                <div class="slider-item">
                    <img src="{{asset('assets/img/quote.svg')}}" class="quote" alt="">
                    <img src="{{asset('assets/img/stars.svg')}}" class="stars" alt="">
                    <p>{{trans('lang.STR_FEEDBACK_3')}}</p>
                </div>
                <div class="slider-item">
                    <img src="{{asset('assets/img/quote.svg')}}" class="quote" alt="">
                    <img src="{{asset('assets/img/stars.svg')}}" class="stars" alt="">
                    <p>{{trans('lang.STR_FEEDBACK_4')}}</p>
                </div>
                <div class="slider-item">
                    <img src="{{asset('assets/img/quote.svg')}}" class="quote" alt="">
                    <img src="{{asset('assets/img/stars.svg')}}" class="stars" alt="">
                    <p>{{trans('lang.STR_FEEDBACK_5')}}</p>
                </div>
                <div class="slider-item">
                    <img src="{{asset('assets/img/quote.svg')}}" class="quote" alt="">
                    <img src="{{asset('assets/img/stars.svg')}}" class="stars" alt="">
                    <p>{{trans('lang.STR_FEEDBACK_6')}}</p>
                </div>
            </div>
        </section>
        <section class="pricing-containers">
            <article class="pricing-section1">
                <div class="pricing-block">
                    <h2>{{ trans('lang.STR_TITLE_PRICING_5') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_21') }} </p>
                </div>
                <img src="{{asset('assets/img/orange-triangle.svg')}}" class="triangle-item" alt=''/>
                <img src="{{asset('assets/img/more.svg')}}" class="more-item1" />
                <img src="{{asset('assets/img/backslash.svg')}}" class="backslash-item" />
                <img src="{{asset('assets/img/more.svg')}}" class="more-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="circle-item" />
                <img src="{{asset('assets/img/free-manuals.jpeg')}}" alt="">
            </article>
            <article class="pricing-section2">
                <div class="pricing-block">
                    <h2>{{ trans('lang.STR_TITLE_PRICING_6') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_22') }} </p>
                </div>
                <img src="{{ asset('assets/img/test.jpeg') }}" class="image-block" alt="">
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item4" />
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="circle-item" />
            </article>
            <article class="pricing-section3">
                <img src="{{ asset('assets/img/service-plan.jpg') }}" class="image-block" alt="">
                <div class="pricing-block">
                    <h2>{{ trans('lang.STR_TITLE_PRICING_7') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_22') }} </p>
                </div>
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item4" />
                <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="circle-item" />
            </article>
            <article class="pricing-section5">
                <img src="{{ asset('assets/img/product-company.png') }}" class="image-block" alt="">
                <div class="pricing-block">
                    <h2>{{ trans('lang.STR_TITLE_PRICING_8') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_24') }} </p>
                </div>
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item4" />
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="circle-item" />
            </article>

            <article class="pricing-section6">
                <div class="pricing-block">
                    <h2>{{ trans('lang.STR_TITLE_PRICING_9') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_25') }} </p>
                </div>
                <img src="{{ asset('assets/img/switch.svg') }}" class="image-block" alt="">
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item4" />
                <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="circle-item" />
            </article>
            
            <article class="pricing-section7">
                <img src="{{ asset('assets/img/payment-calendar.svg') }}" class="image-block" alt="">
                <div class="pricing-block">
                    <h2>{{ trans('lang.STR_TITLE_PRICING_10') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_26') }} </p>
                </div>
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item4" />
                <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="circle-item" />
            </article>
            
            {{-- <article class="switch-payment-container">
                <div class="switchPayment reveal-1">
                    <img src="{{asset('assets/img/switch.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_PRICING_9') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_25') }} </p>
                </div>
                <div class="switchPayment reveal-4">
                    <img src="{{asset('assets/img/payment-calendar.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_PRICING_10') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_26') }} </p>
                </div>
            </article> --}}
    </article>
</main>
@endsection