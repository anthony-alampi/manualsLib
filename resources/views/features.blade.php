@extends('base');

@section('content')

<header class="features-header">
    <h1>{{ trans('lang.STR_TITLE_12/5') }}</h1>

</header>
<main>
    <article>
        <section>

            <article class="features-container reveal-1">
                <img src="{{ asset('assets/img/user-guide.jpg') }}" alt="">
                <div class="features-block">
                    <h2>{{ trans('lang.STR_TITLE_12') }}</h2>
                    <p> {{ trans('lang.STR_TEXT_9') }} </p>
                </div>
            </article>

            <article class="features-listing-container">
                <div class="item">
                    <img src="{{ asset('assets/img/document.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_13') }} </h2>
                    <p> {{trans('lang.STR_TEXT_10')}} </p>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/document.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_14') }} </h2>
                    <p> {{trans('lang.STR_TEXT_11')}} </p>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/document.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_15') }} </h2>
                    <p> {{trans('lang.STR_TEXT_12')}} </p>

                </div>
            </article>

        </section>
    </article>
</main>


@endsection