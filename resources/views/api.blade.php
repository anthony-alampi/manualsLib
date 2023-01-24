@extends('base')

<main>
    <article>

        <aside class="api-ancre">
            <ul>
                <li> <a href="#ancre1">{{trans('lang.STR_TITLE_38')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre2">{{trans('lang.STR_TITLE_39')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre3">{{trans('lang.STR_TITLE_40')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre4">{{trans('lang.STR_TITLE_41')}}</a></li>
            </ul>
        </aside>

        <section>
            <article class="api-container">
                <div class="title-text">
                    <h2 id="ancre1">{{trans('lang.STR_TITLE_38')}}</h2>
                    <p>{{trans('lang.STR_TEXT_27')}}</p>
                </div>

                <div class="title-text">
                    <h2 id="ancre2">{{trans('lang.STR_TITLE_39')}}</h2>
                    <p>{{trans('lang.STR_TEXT_28')}}</p>
                </div>

                <div class="title-text">
                    <h2 id="ancre3">{{trans('lang.STR_TITLE_40')}}</h2>
                    <p>{{trans('lang.STR_TEXT_29')}}</p>
                </div>

                <div class="title-text">
                    <h2 id="ancre4"> {{trans('lang.STR_TITLE_41')}}</h2>
                    <p>{{trans('lang.STR_TEXT_30')}}</p>
                </div>
            </article>
        </section>
    </article>
</main>


@section('content');

@endsection