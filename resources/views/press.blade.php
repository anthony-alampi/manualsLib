@extends('base')

@section('content')

 <header class="press-header">
    <div class="title-text">
        <h1>{{trans('lang.STR_TITLE_PRESS_1')}}</h1>
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
        <article>
            <section class="press-container">
                <div class="sub-container">
                <article class="article">
                    <div class="image-container">
                        <img src="{{asset('assets/img/bbc.jpg')}}" alt="">
                    </div>
                    <h3>{{trans('lang.STR_TITLE_CITATION_1')}}</h3>
                    <button class="read-article">Read the article</button>
                </article>
                <article class="article">
                    <div class="image-container">
                        <img src="{{asset('assets/img/bfm.jpg')}}" alt="">
                    </div>
                    <h3>{{trans('lang.STR_TITLE_CITATION_2')}}</h3>
                    <button class="read-article">Read the article</button>
                </article>
                <article class="article">
                    <div class="image-container">
                        <img src="{{asset('assets/img/bbc.jpg')}}" alt="">
                    </div>
                    <h3>{{trans('lang.STR_TITLE_CITATION_3')}}</h3>
                    <button class="read-article">Read the article</button>
                </article>
                </div>
                <div class="sub-container">
                <article class="article">
                    <div class="image-container">
                        <img src="{{asset('assets/img/bfm.jpg')}}" alt="">
                    </div>
                    <h3>{{trans('lang.STR_TITLE_CITATION_4')}}</h3>
                    <button class="read-article">Read the article</button>
                </article>
                <article class="article">
                    <div class="image-container">
                        <img src="{{asset('assets/img/bbc.jpg')}}" alt="">
                    </div>
                    <h3>{{trans('lang.STR_TITLE_CITATION_5')}}</h3>
                    <button class="read-article">Read the article</button>
                </article>
                <article class="article">
                    <div class="image-container">
                        <img src="{{asset('assets/img/bbc.jpg')}}" alt="">
                    </div>
                    <h3>{{trans('lang.STR_TITLE_CITATION_5')}}</h3>
                    <button class="read-article">Read the article</button>
                </article>
                </div>

            </section>

            <article class="features-container1">
                <div class="features-block reveal-left">
                    <h2>{{ trans('lang.STR_TITLE_PRESS_2') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_PRESS_1') }} </p>
                </div>
                <img src="{{ asset('assets/img/talk-press.svg') }}" class="image-block reveal-right" alt="">
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item4" />
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="circle-item" />
            </article>
            <article class="features-container2">
                <img src="{{ asset('assets/img/about-marque.svg') }}" class="aboutBrand reveal-left" alt="">
                <div class="features-block reveal-right">
                    <h2>{{ trans('lang.STR_TITLE_PRESS_3') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_PRESS_2') }} </p>
                </div>
                <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="triangle-item" />
            </article>
                <article class="features-container3 bg-block2 ">
                <div class="features-block reveal-left">
                    <h2>{{ trans('lang.STR_TITLE_PRESS_4') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_PRESS_3') }} </p>
                </div>
                <img class="image-block reveal-right" src="{{ asset('assets/img/tools-logo.svg') }}" alt="">
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="circle-item" />
            </article>





        </article>
    </main>









@endsection