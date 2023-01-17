@extends('base');

@section('content')

<header class="custom-page-header">
</header>

<main>
    <article>
        <section>
                <article class="about-container reveal-1">
                    <img src="{{ asset('assets/img/information.svg') }}" alt="">
                    <div class="about-block">
                        <h2>{{ trans('lang.STR_TITLE_60') }}</h2>
                        <p> {{ trans('lang.STR_TEXT_46') }} </p>
                    </div>
                </article>
                <div class="card-container">
                    <div class="card-item reveal-1">
                        <h2 class="reveal-2">{{ trans('lang.STR_TITLE_61') }}</h2>
                        <img class="reveal-3" src="{{ asset('assets/img/goal.svg') }}" alt="">
                        <p class="reveal-4">{{ trans('lang.STR_TEXT_47') }}</p>
                    </div>
                    <div class="card-item reveal-1">
                        <h2 class="reveal-2">{{ trans('lang.STR_TITLE_62') }}</h2>
                        <img class="reveal-3" src="{{ asset('assets/img/solution.svg') }}" alt="">
                        <p class="reveal-4">{{ trans('lang.STR_TEXT_48') }}</p>
                    </div>
                </div>
                <article class="team-container">
                    <div class="team-block">
                        <h2>{{ trans('lang.STR_TITLE_63') }}</h2>
                        <img src="{{ asset('assets/img/team.jpg') }}" alt="">
                        <p> {{ trans('lang.STR_TEXT_49') }} </p>
                    </div>
                </article>
        </section>
    </article>
</main>

@endsection