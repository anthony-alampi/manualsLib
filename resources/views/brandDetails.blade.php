@extends('base')


@section('content')
<header class="brand-header primary-header">
        <h1 class="title-in-header">{{trans('lang.STR_TITLE_BRAND_1')}}</h1>
        <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="geometric1" alt="">
        <img src="{{asset('assets/img/orange-triangle.svg')}}" class="geometric5" alt="">
        <img src="{{asset('assets/img/line-shape-11.svg')}}" class="line-shape" alt="">
</header>
<main>
    <article>
        <section class="full-container-brand-details">
            <div class="blocks-container">
                <div class="brand-block">
                    <img src="{{ asset('assets/img/dyson-brand.jpg') }}" alt="">
                </div>
                <div class="brand-text-block">
                    <h2>ABOUT [brand]</h2>
                    <p>{{trans('lang.STR_TEXT_BRAND_1')}}</p>
                    <a href="{{route('home')}}">Search manuals</a>
                </div>
            </div>
        </section>
        <section>
            <div class="content-sub-brand-block">
                <h2>{{trans('lang.STR_TITLE_BRAND_2')}}</h2>
                <p>{{trans('lang.STR_TEXT_BRAND_2')}}</p>
                <img src="{{asset('assets/img/line-shape-11.svg')}}" class="line-shape" alt="">
            </div>

        <section class="top-10-container">
            <h2>{{trans('lang.STR_TITLE_BRAND_3')}}</h2>
            <img src="{{asset('assets/img/line-shape-3.svg')}}" class='line-custom'alt="">
            <div class="most-brand-container">

                <div class="sub-container">
                    <div class="download custom-border-left1 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/manuals-book-card.png')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_1')}}</h2>
                        </div>
                    </div>

                    <div class="download custom-border-left1 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/manuals-book-card.png')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_2')}}</h2>
                        </div>
                    </div>
                    <div class="download custom-border-left1 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/manuals-book-card.png')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_3')}}</h2>
                        </div>
                    </div>
                    <div class="download custom-border-left1 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/manuals-book-card.png')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_4')}}</h2>
                        </div>
                    </div>
                    <div class="download custom-border-left1 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/manuals-book-card.png')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_5')}}</h2>
                        </div>
                    </div>
                </div>

                <div class="sub-container">
                    <div class="download custom-border-left1 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/manuals-book-card.png')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_6')}}</h2>
                        </div>
                    </div>
                    <div class="download custom-border-left1 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/manuals-book-card.png')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_7')}}</h2>
                        </div>
                    </div>
                    <div class="download custom-border-left1 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/manuals-book-card.png')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_8')}}</h2>
                        </div>
                    </div>
                    <div class="download custom-border-left1 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/manuals-book-card.png')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_9')}}</h2>
                        </div>
                    </div>
                    <div class="download custom-border-left1 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/manuals-book-card.png')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_10')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <article class="brand-details-container primary-container">
                <div class="brand-block text-block-contain reveal-left">
                    <h2 class="title-in-block">{{ trans('lang.STR_TITLE_BRAND_3') }}</h2>
                    <p class="text-in-block"> {{ trans('lang.STR_TEXT_BRAND_3') }} </p>
                </div>
                <img class="image-in-block reveal-right" src="{{ asset('assets/img/brands-file.svg') }}" alt="search-manuals">
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/backslash.svg')}}" class="backslash-item" />
                <img src="{{asset('assets/img/more.svg')}}" class="more-item1" />
                <img src="{{asset('assets/img/more.svg')}}" class="more-item2" />
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="circle-item" />
            </article>
    </article>
</main>
@endsection