@extends('base')

@section('content')

<header class="brands-header">
        <h1>{{trans('lang.STR_TITLE_BRANDS_1')}}</h1>
        <p>{{trans('lang.STR_TEXT_BRANDS_1')}}</p>
        <img src="{{asset('assets/img/95.svg')}}" class="geometric1" alt="">
        <img src="{{asset('assets/img/96.svg')}}" class="geometric2" alt="">
        <img src="{{asset('assets/img/line-shape-11.svg')}}" class="line-shape" alt="">
</header>

<main>
    <article class='brands-custom-bg'>
        <section>
            <h2>{{trans('lang.STR_TITLE_BRANDS_2')}}</h2>
            <div class="brands-container">
                <div class="brand-item">
                    <img src="{{asset('assets/img/Panasonic-Logo.png')}}" alt="">
                    <h3>{{trans('lang.STR_TITLE_BRAND_ITEM_1')}}</h3>
                </div>
            </div>
        </section>
    </article>
</main>
















@endsection