@extends('base')
@section('content')
<main class="">
        <aside class="api-ancre">
            <ul>
                <li> <a href="#ancre1">{{trans('lang.STR_TITLE_SUBSCRIPTION_2')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre2">{{trans('lang.STR_TITLE_SUBSCRIPTION_3')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre3">{{trans('lang.STR_TITLE_SUBSCRIPTION_4')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre4">{{trans('lang.STR_TITLE_SUBSCRIPTION_8')}}</a></li>
                <div class="custom-line"></div>
                <li> <a href="#ancre4">{{trans('lang.STR_TITLE_SUBSCRIPTION_9')}}</a></li>
            </ul>
        </aside>
        <section>
            <article class="full-container">
                <div class="text-container">
                    <h2 id="ancre1">{{trans('lang.STR_TITLE_SUBSCRIPTION_2')}}</h2>
                    <p>{{trans('lang.STR_TEXT_PRIVACY_1')}}</p>
                </div>

                <div class="text-container">
                    <h2 id="ancre2">{{trans('lang.STR_TITLE_SUBSCRIPTION_3')}}</h2>
                    <p>{{trans('lang.STR_TEXT_SUBSCRIPTION_2')}}</p>
                </div>

                <div class="text-container">
                    <h2 id="ancre3">{{trans('lang.STR_TITLE_SUBSCRIPTION_4')}}</h2>
                </div>
        <div class="plans-container">
            <div class="pricing-container1">
                <h2>{{ trans('lang.STR_TITLE_PRICING_CARD_1') }}</h2>
                <div class="pricing-plan">
                    <span>$</span>
                    <h3>{{trans('lang.STR_PRICE_CARD_1')}}</h3>
                </div>
                <div class="separate-custom"></div>
                <div class="include-plan-container">
                    <ul>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_1_CARD_1') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_2_CARD_1') }}</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pricing-container1">
                <h2>{{ trans('lang.STR_TITLE_PRICING_CARD_2') }}</h2>
                <div class="pricing-plan">
                    <span>$</span>
                    <h3>{{trans('lang.STR_PRICE_CARD_2')}}</h3>
                </div>
                <div class="separate-custom"></div>
                <div class="include-plan-container">
                    <ul>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_1_CARD_2') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_2_CARD_2') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_3_CARD_2') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_4_CARD_2') }}</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pricing-container2">
                <h2>{{ trans('lang.STR_TITLE_PRICING_CARD_3') }}</h2>
                <div class="pricing-plan">
                    <span>$</span>
                    <h3>{{trans('lang.STR_PRICE_CARD_3')}}</h3>
                </div>
                <div class="separate-custom"></div>

                <div class="include-plan-container">
                    <div class="offers">
                    <ul>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_1_CARD_3') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_2_CARD_3') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_3_CARD_3') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_4_CARD_3') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_5_CARD_3') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_6_CARD_3') }}</p>
                        </li>
                    </ul>
                    </div>

                </div>
            </div>

            <div class="pricing-container3">
                <h2>{{ trans('lang.STR_TITLE_PRICING_CARD_4') }}</h2>
                <div class="pricing-plan">
                    <span>$</span>
                    <h3>{{trans('lang.STR_PRICE_CARD_4')}}</h3>
                </div>
                <div class="separate-custom"></div>
                    <div class="include-plan-container">
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_1_CARD_4') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_2_CARD_4') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_3_CARD_4') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_4_CARD_4') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_5_CARD_4') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_6_CARD_4') }}</p>
                        </li>
                        <li class="list-include-plan">
                            <img src="{{asset('assets/img/43.svg')}}" alt="">
                            <p class="manuals custom-position">{{ trans('lang.STR_TEXT_7_CARD_4') }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

                <div class="text-container">
                    <h2 id="ancre4"> {{trans('lang.STR_TITLE_SUBSCRIPTION_8')}}</h2>
                    <p>{{trans('lang.STR_TEXT_SUBSCRIPTION_7')}}</p>
                </div>
                <div class="text-container">
                    <h2 id="ancre4"> {{trans('lang.STR_TITLE_SUBSCRIPTION_9')}}</h2>
                    <p>{{trans('lang.STR_TEXT_SUBSCRIPTION_8')}}</p>
                </div>
            </article>
        </section>
    </article>
</main>
</main>
@endsection