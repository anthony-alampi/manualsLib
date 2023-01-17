@extends('base');

@section('content')

<header class="custom-page-header">
    <h1>{{ trans('lang.STR_TITLE_42') }}</h1>
</header>
<main>
    <article>
        <section>
            <article class="faq">
                <div class="faq-question reveal-1">
                    <h2>{{trans('lang.STR_TITLE_43')}}</h2>
                    <p>{{trans('lang.STR_TEXT_31')}}</p>
                </div>
                <div class="faq-question faq-custom-bg reveal-1">
                    <h2>{{trans('lang.STR_TITLE_44')}}</h2>
                    <p>{{trans('lang.STR_TEXT_32')}}</p>
                </div>
                <div class="faq-question reveal-1">
                    <h2>{{trans('lang.STR_TITLE_45')}}</h2>
                    <p>{{trans('lang.STR_TEXT_33')}}</p>
                </div>
                <div class="faq-question faq-custom-bg reveal-1">
                    <h2>{{trans('lang.STR_TITLE_46')}}</h2>
                    <p>{{trans('lang.STR_TEXT_34')}}</p>
                </div>
                <div class="faq-question reveal-1">
                    <h2>{{trans('lang.STR_TITLE_47')}}</h2>
                    <p>{{trans('lang.STR_TEXT_35')}}</p>
                </div>
                <div class="faq-question faq-custom-bg reveal-1">
                    <h2>{{trans('lang.STR_TITLE_48')}}</h2>
                    <p>{{trans('lang.STR_TEXT_36')}}</p>
                </div>
                <div class="faq-question reveal-1">
                    <h2>{{trans('lang.STR_TITLE_49')}}</h2>
                    <p>{{trans('lang.STR_TEXT_37')}}</p>
                </div>
                <div class="faq-question faq-custom-bg reveal-1">
                    <h2>{{trans('lang.STR_TITLE_50')}}</h2>
                    <p>{{trans('lang.STR_TEXT_38')}}</p>
                </div>
                <div class="faq-question reveal-1">
                    <h2>{{trans('lang.STR_TITLE_51')}}</h2>
                    <p>{{trans('lang.STR_TEXT_39')}}</p>
                </div>
                <div class="faq-question faq-custom-bg reveal-1">
                    <h2>{{trans('lang.STR_TITLE_52')}}</h2>
                    <p>{{trans('lang.STR_TEXT_40')}}</p>
                </div>
            </article>
        </section>
        <section>
            <section>
                <article class="faq-container reveal-1">
                    <div class="faq-block">
                        <h2>{{ trans('lang.STR_TITLE_53') }}</h2>
                        <p> {{ trans('lang.STR_TEXT_41') }} </p>
                    </div>
                    <img src="{{ asset('assets/img/add-manual.svg') }}" alt="">
                </article>
                
                <article class="faq-container reveal-1">
                    <img src="{{ asset('assets/img/question-mark.svg') }}" alt="">
                    <div class="faq-block">
                        <h2>{{ trans('lang.STR_TITLE_54') }}</h2>
                        <p> {{ trans('lang.STR_TEXT_42') }} </p>
                    </div>

                <article class="faq-container reveal-1">
                    <div class="faq-block">
                        <h2>{{ trans('lang.STR_TITLE_55') }}</h2>
                        <p> {{ trans('lang.STR_TEXT_42/1') }} </p>
                    </div>
                    <img src="{{ asset('assets/img/briefcase.svg') }}" alt="">
                </article>

                </article>
            </section>
        </section>
    </article>
</main>



@endsection