@extends('base');

@section('content')

<header class="features-header">
    <h1>{{ trans('lang.STR_TITLE_12/5') }}</h1>

</header>
<main>
    <article>
        <section>

            <article class="features-container reveal-1">
                <img class="resize-svg" src="{{ asset('assets/img/user-guide.jpg') }}" alt="">
                <div class="features-block">
                    <h2>{{ trans('lang.STR_TITLE_12') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_9') }} </p>
                </div>
            </article>

            <article class="features-listing-container">
                <div class="item reveal-1">
                    <img src="{{ asset('assets/img/manual.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_13') }} </h2>
                    <p> {{trans('lang.STR_TEXT_10')}} </p>
                </div>
                <div class="item reveal-2">
                    <img src="{{ asset('assets/img/translation.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_14') }} </h2>
                    <p> {{trans('lang.STR_TEXT_11')}} </p>
                </div>
                <div class="item reveal-3">
                    <img src="{{ asset('assets/img/operator.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_15') }} </h2>
                    <p> {{trans('lang.STR_TEXT_12')}} </p>

                </div>
            </article>

            <article class="features-container reveal-1">
                <div class="features-block">
                    <h2>{{ trans('lang.STR_TITLE_16') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_13') }} </p>
                </div>
                <img class="svg" src="{{ asset('assets/img/more-manuals.svg') }}" alt="">
            </article>

            <article class="features-container reveal-1">
                <img src="{{ asset('assets/img/more-product.png') }}" alt="">
                <div class="features-block">
                    <h2>{{ trans('lang.STR_TITLE_17') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_14') }} </p>
                </div>
            </article>

                <article class="features-container reveal-1">
                <div class="features-block">
                    <h2>{{ trans('lang.STR_TITLE_18') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_15') }} </p>
                </div>
                <img class="resize-svg" src="{{ asset('assets/img/more-translate.png') }}" alt="">
            </article>

            <article class="features-container reveal-1">
                <img src="{{ asset('assets/img/more-calendar.png') }}" alt="">
                <div class="features-block">
                    <h2>{{ trans('lang.STR_TITLE_19') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_16') }} </p>
                </div>
            </article>
                <article class="features-container reveal-1">
                <div class="features-block">
                    <h2>{{ trans('lang.STR_TITLE_21/1') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_17') }} </p>
                </div>
                <img class="resize-svg" src="{{ asset('assets/img/more-assist.png') }}" alt="">
            </article>
        </section>
    </article>
</main>


@endsection