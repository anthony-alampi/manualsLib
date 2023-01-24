@extends('base')
@section('content')
<header class='moreInfo-header'>
    <h1>{{trans('lang.STR_TITLE_SUBSCRIPTION_1')}}</h1>
    <div class="circle-anim1"></div>
    <div class="circle-anim2"></div>
    <div class="circle-anim3"></div>
    <div class="circle-anim4"></div>
    <div class="circle-anim5"></div>
    <div class="circle-anim6"></div>
</header>
<main class="main-bg-custom-2">
    <article class='moreInfo-container'>
            <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="rotate-circle1"/>
            <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="rotate-circle2"/>
            <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="rotate-circle3"/>
            <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="rotate-circle4"/>
            <div class="circle-scale1"></div>
            <div class="circle-scale2"></div>
            <section class='title-text'>
                <h2>{{trans('lang.STR_TITLE_SUBSCRIPTION_2')}}</h2>
                <p>{{trans('lang.STR_TEXT_SUBSCRIPTION_1')}}</p>
            </section>
            <section class='title-text'>
                <h2>{{trans('lang.STR_TITLE_SUBSCRIPTION_3')}}</h2>
                <div class="plans-container">
                    <div class="plan">
                        <img src="{{asset('assets/img/free.svg')}}" class="icons-plan" />
                        <h2>{{trans('lang.STR_TITLE_SUBSCRIPTION_4')}}</h2>
                        <p>{{trans('lang.STR_TEXT_SUBSCRIPTION_2')}}</p>
                    </div>
                    <div class="plan">
                        <img src="{{asset('assets/img/trial.svg')}}" class="icons-plan" />
                        <h2>{{trans('lang.STR_TITLE_SUBSCRIPTION_5')}}</h2>
                        <p>{{trans('lang.STR_TEXT_SUBSCRIPTION_3')}}</p>
                    </div>
                    <div class="plan">
                        <img src="{{asset('assets/img/premium.svg')}}" class="icons-plan" />                    
                        <h2>{{trans('lang.STR_TITLE_SUBSCRIPTION_6')}}</h2>
                        <p>{{trans('lang.STR_TEXT_SUBSCRIPTION_4')}}</p>
                    </div>
                </div>
            </section>
            <section class='title-text'>
                <h2>{{trans('lang.STR_TITLE_SUBSCRIPTION_7')}}</h2>
                <p>{{trans('lang.STR_TEXT_SUBSCRIPTION_5')}}</p>
            </section>
            <section class='title-text'>
                <h2>{{trans('lang.STR_TITLE_SUBSCRIPTION_8')}}</h2>
                <p>{{trans('lang.STR_TEXT_SUBSCRIPTION_6')}}</p>
            </section>
    </article>
</main>










@endsection