@extends('base')


@section('content')
<header class="brand-header primary-header">
        <h1 class="title-in-header">{{trans('lang.STR_TITLE_BRAND_1')}}</h1>
        {{-- <p class="text-in-header">{{trans('lang.STR_TEXT_BRAND_1')}}</p> --}}
        {{-- <a href="{{route('home')}}">Search for Brandname manuals</a> --}}
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
                            <img src="{{asset('assets/img/amplifier.svg')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_1')}}</h2>
                            {{-- <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_1')}}</h3> --}}
                        </div>
                    </div>

                    <div class="download custom-border-left3 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/computer.svg')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_2')}}</h2>
                            {{-- <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_3')}}</h3> --}}
                        </div>
                    </div>
                    <div class="download custom-border-left5 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/ipad.svg')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_3')}}</h2>
                            {{-- <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_5')}}</h3> --}}
                        </div>
                    </div>
                    <div class="download custom-border-left7 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/wifi.svg')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_4')}}</h2>
                            {{-- <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_7')}}</h3> --}}
                        </div>
                    </div>
                    <div class="download custom-border-left9 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/smartphone.svg')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_5')}}</h2>
                            {{-- <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_9')}}</h3> --}}
                        </div>
                    </div>
                </div>

                <div class="sub-container">
                    <div class="download custom-border-left2 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/casque-audio.svg')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_6')}}</h2>
                            {{-- <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_2')}}</h3> --}}
                        </div>
                    </div>
                    <div class="download custom-border-left4 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/electric-appliance.svg')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_7')}}</h2>
                            {{-- <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_4')}}</h3> --}}
                        </div>
                    </div>
                    <div class="download custom-border-left6 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/remote-control.svg')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_8')}}</h2>
                            {{-- <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_6')}}</h3> --}}
                        </div>
                    </div>
                    <div class="download custom-border-left8 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/watch-tv.svg')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_9')}}</h2>
                            {{-- <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_8')}}</h3> --}}
                        </div>
                    </div>
                    <div class="download custom-border-left10 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/laptop.svg')}}" alt="">
                        </div>
                        <div class="text-block">
                            <h2>{{trans('lang.STR_TITLE_DOWNLOADED_BRAND_10')}}</h2>
                            {{-- <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_10')}}</h3> --}}
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
                <img class="image-in-block reveal-right" src="{{ asset('assets/img/brand-block1.jpg') }}" alt="">
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