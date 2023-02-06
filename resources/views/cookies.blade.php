@extends('base')

@section('content')

{{-- <header class='moreInfo-header'>
    <h1>{{trans('lang.STR_TITLE_COOKIES_1')}}</h1>
    <div class="circle-anim1"></div>
    <div class="circle-anim2"></div>
    <div class="circle-anim3"></div>
    <div class="circle-anim4"></div>
    <div class="circle-anim5"></div>
    <div class="circle-anim6"></div>
</header> --}}

<main class="main-bg-custom-2">
    <article class='moreInfo-container'>
            {{-- <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="rotate-circle1"/>
            <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="rotate-circle2"/>
            <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="rotate-circle3"/>
            <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="rotate-circle4"/>
            <div class="circle-scale1"></div>
            <div class="circle-scale2"></div> --}}

        <section class='title-text'>
            <h2>{{trans('lang.STR_TITLE_COOKIES_2')}}</h2>
            <p>{{trans('lang.STR_TEXT_COOKIES_1')}}</p>
        </section>

            <div class="circle-scale5"></div>
            <div class="circle-scale6"></div>

        <section class='title-text'>
            <h2>{{trans('lang.STR_TITLE_COOKIES_3')}}</h2>
            <p>{{trans('lang.STR_TEXT_COOKIES_2')}}</p>

        </section>

            <div class="circle-scale3"></div>
            <div class="circle-scale4"></div>

        <section class='title-text'>

            <h2>{{trans('lang.STR_TITLE_COOKIES_4')}}</h2>
            <p>{{trans('lang.STR_TEXT_COOKIES_3')}}</p>

        </section>

            <div class="circle-scale3"></div>
            <div class="circle-scale4"></div>

        <section class='title-text'>
            <h2>{{trans('lang.STR_TITLE_COOKIES_5')}}</h2>
            <p>{{trans('lang.STR_TEXT_COOKIES_4')}}</p>
        </section>
    </article>

</main>










@endsection