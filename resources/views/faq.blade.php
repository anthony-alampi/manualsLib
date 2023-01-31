@extends('base');

@section('content')

<header class="faq-header">
    <h1>{{ trans('lang.STR_TITLE_42') }}</h1>
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
            @include('incs.faqModule');
        </section>
        <section>
            <section>
                <article class="faq-container reveal-bottom">
                    <div class="faq-block">
                        <h2>{{ trans('lang.STR_TITLE_53') }}</h2>
                        <p> {{ trans('lang.STR_TEXT_41') }} </p>
                    </div>
                    <img src="{{ asset('assets/img/add-docs.svg') }}" alt="">
                </article>
                
                <article class="faq-container reveal-bottom">
                    <img src="{{ asset('assets/img/question-mark.svg') }}" alt="">
                    <div class="faq-block">
                        <h2>{{ trans('lang.STR_TITLE_54') }}</h2>
                        <p> {{ trans('lang.STR_TEXT_42') }} </p>
                    </div>
                </article>

                <article class="faq-container reveal-bottom">
                    <div class="faq-block">
                        <h2>{{ trans('lang.STR_TITLE_55') }}</h2>
                        <p> {{ trans('lang.STR_TEXT_42/1') }} </p>
                    </div>
                    <img src="{{ asset('assets/img/business.jpeg') }}" class="image-block" alt="">
                </article>
                </article>
            </section>
        </section>
    </article>
</main>



@endsection