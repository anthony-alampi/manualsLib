@extends('base')

@section('content')
<header class="brands-header primary-header">
        <h1 class="title-in-header">{{trans('lang.STR_TITLE_BRANDS_1')}}</h1>
        <img src="{{asset('assets/img/line-shape-11.svg')}}" class="line-shape" alt="">
        <p class="text-in-header">{{trans('lang.STR_TEXT_BRANDS_1')}}</p>
        <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="geometric1" alt="">
        <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="geometric2" alt="">
        <img src="{{asset('assets/img/carre.svg')}}" class="geometric3" alt="">
        <img src="{{asset('assets/img/carre.svg')}}" class="geometric4" alt="">
        <img src="{{asset('assets/img/orange-triangle.svg')}}" class="geometric5" alt="">
</header>
<main>
    <article class='brands-custom-bg'>
        <section>
            <div class="content-sub-block">
            <h2>{{trans('lang.STR_TITLE_BRANDS_2')}}</h2>
            <img src="{{asset('assets/img/line-shape-11.svg')}}" class="line-shape" alt="">
            </div>
            
            <div class="brands-logo-container">
                <div class="brand-item reveal-left">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_1')}}</h3>
                    <img src="{{asset('assets/img/panasonic-brand.jpg')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_2')}}</h3>
                    <img src="{{asset('assets/img/sony-brand.jpg')}}" alt="">
                </div>
                <div class="brand-item reveal-right">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_3')}}</h3>
                    <img src="{{asset('assets/img/samsung-brand.png')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom ">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_4')}}</h3>
                    <img src="{{asset('assets/img/apple-brand.jpg')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_5')}}</h3>
                    <img src="{{asset('assets/img/philips-brand.jpg')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_6')}}</h3>
                    <img src="{{asset('assets/img/lg-brand.jpg')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_7')}}</h3>
                    <img src="{{asset('assets/img/valberg.jpg')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_8')}}</h3>
                    <img src="{{asset('assets/img/marshall-brand.jpg')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_9')}}</h3>
                    <img src="{{asset('assets/img/xiaomi-brand.jpg')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_10')}}</h3>
                    <img src="{{asset('assets/img/toshiba-brand.png')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_11')}}</h3>
                    <img src="{{asset('assets/img/bosh-brand.jpg')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_12')}}</h3>
                    <img src="{{asset('assets/img/jbl-brand.jpg')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_13')}}</h3>
                    <img src="{{asset('assets/img/bose-brand.jpg')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_14')}}</h3>
                    <img src="{{asset('assets/img/gopro-brand.jpg')}}" alt="">
                </div>
                <div class="brand-item reveal-bottom">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_15')}}</h3>
                    <img src="{{asset('assets/img/dyson-brand.jpg')}}" alt="">
                </div>
            </div>
        </section>
    </article>
        <section class="brands-blocks-container">
            <article class="brand-container1 primary-container">
                <div class="text-block-contain">
                    <h2 class="title-in-block">{{ trans('lang.STR_TITLE_BRANDS_3') }}</h2>
                    <p class="text-in-block"> {{ trans('lang.STR_TEXT_BRANDS_2') }} </p>
                </div>
                <img class="image-in-block" src="{{ asset('assets/img/folder2.svg') }}" alt="">
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/backslash.svg')}}" class="backslash-item" />
                <img src="{{asset('assets/img/more.svg')}}" class="more-item1" />
                <img src="{{asset('assets/img/more.svg')}}" class="more-item2" />
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="circle-item" />
            </article>
            <section class='brand-container2 primary-container'>
            <div class="images">
                <img src="{{asset('assets/img/active.svg')}}" alt="" class="image-in-block">
            </div>
            <div class="text-block-contain">
                <h2 class="title-in-block">{{ trans('lang.STR_TITLE_BRANDS_4') }}</h2>
                <p class="text-in-block">{{trans('lang.STR_TEXT_BRANDS_2')}}</p>
            </div>
        </section>
    </section>
</main>
@endsection