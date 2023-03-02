@extends('base')

<main>
    <article>

        <aside class="api-ancre">
            <ul>
                <li> <a href="#ancre1">{{trans('lang.STR_TITLE_API_1')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre-routes">{{trans('lang.STR_TITLE_API_2')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre2">{{trans('lang.STR_TITLE_API_3')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre3">{{trans('lang.STR_TITLE_API_4')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre4">{{trans('lang.STR_TITLE_API_5')}}</a></li>
            </ul>
        </aside>

        <section>
            <article class="api-container">
                <div class="title-text-api">
                    <h2 id="ancre1">{{trans('lang.STR_TITLE_API_1')}}</h2>
                    <p>{{trans('lang.STR_TEXT_API_1')}}</p>
                </div>
                <section>
                    <div  id="ancre-routes" class="routes-container">
                        <p class="write">{{trans('lang.STR_TEXT_ROUTE_N_1')}}</p>
                        <div class="route-item">
                            <p><span>GET</span> - {{trans('lang.STR_TEXT_ROUTE_API_1')}}</p>
                        </div>
                        <p class="write">{{trans('lang.STR_TEXT_ROUTE_N_2')}}</p>
                        <div class="route-item">
                            <p><span>GET</span> - {{trans('lang.STR_TEXT_ROUTE_API_2')}}</p>
                        </div>
                        <p class="write">{{trans('lang.STR_TEXT_ROUTE_N_3')}}</p>
                        <div class="route-item">
                            <p><span>GET</span> - {{trans('lang.STR_TEXT_ROUTE_API_3')}}</p>
                        </div>
                    </div>
                </section>
                <div class="title-text-api">
                    <h2 id="ancre2">{{trans('lang.STR_TITLE_API_3')}}</h2>
                    <p>{{trans('lang.STR_TEXT_API_2')}}</p>
                </div>

                <div class="title-text-api">
                    <h2 id="ancre3">{{trans('lang.STR_TITLE_API_4')}}</h2>
                    <p>{{trans('lang.STR_TEXT_API_3')}}</p>
                </div>

                <div class="title-text-api">
                    <h2 id="ancre4"> {{trans('lang.STR_TITLE_API_5')}}</h2>
                    <p>{{trans('lang.STR_TEXT_API_4')}}</p>
                </div>
            </article>
        </section>
    </article>
</main>


@section('content');

@endsection