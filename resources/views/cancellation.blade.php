@extends('base')

@section('content')

<header class="cancellation-header primary-header">
        <h1 class="title-in-header">{{trans('lang.STR_TITLE_CANCELLATION_1')}}</h1>
        <img src="{{asset('assets/img/line-shape-11.svg')}}" class="line-shape" alt="">
    <div class="circle-anim1"></div>
    <div class="circle-anim2"></div>
    <div class="circle-anim3"></div>
    <div class="circle-anim4"></div>
    <div class="circle-anim5"></div>
    <div class="circle-anim6"></div>
</header>
<main>
    <article>
        <section>
            <section class="custom-bg-cancellation">
                <div class="text-block">
                    <h2>{{ trans('lang.STR_TITLE_CANCELLATION_2') }}</h2>
                    <p>{{ trans('lang.STR_TEXT_CANCELLATION_1') }}</p>
                </div>
            </section>
            <article>
                @include('incs.formCancellation');
            </article>
            <article>
                @include('incs.faqModule');
            </article>
        </section>
    </article>
</main>

@endsection