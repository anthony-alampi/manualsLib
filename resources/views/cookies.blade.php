@extends('base')
@section('content')
<main class="">
        <aside class="api-ancre">
            <ul>
                <li> <a href="#ancre1">{{trans('lang.STR_TITLE_COOKIES_2')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre2">{{trans('lang.STR_TITLE_COOKIES_3')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre3">{{trans('lang.STR_TITLE_COOKIES_4')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre4">{{trans('lang.STR_TITLE_COOKIES_5')}}</a></li>
            </ul>
        </aside>
        <section>
            <article class="full-container">
                <div class="text-container">
                    <h2 id="ancre1">{{trans('lang.STR_TITLE_COOKIES_2')}}</h2>
                    <p>{{trans('lang.STR_TEXT_COOKIES_1')}}</p>
                </div>

                <div class="text-container">
                    <h2 id="ancre2">{{trans('lang.STR_TITLE_COOKIES_3')}}</h2>
                    <p>{{trans('lang.STR_TEXT_COOKIES_2')}}</p>
                </div>

                <div class="text-container">
                    <h2 id="ancre3">{{trans('lang.STR_TITLE_COOKIES_4')}}</h2>
                    <p>{{trans('lang.STR_TEXT_COOKIES_3')}}</p>
                </div>

                <div class="text-container">
                    <h2 id="ancre4"> {{trans('lang.STR_TITLE_COOKIES_5')}}</h2>
                    <p>{{trans('lang.STR_TEXT_COOKIES_4')}}</p>
                </div>
            </article>
        </section>
    </article>
</main>
</main>
@endsection