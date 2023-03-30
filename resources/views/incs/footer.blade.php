<footer>
    <div class="link-footer-container reveal-left">
        <a href={{route('home')}}><img src="{{asset('assets/img/logo 3 Vector file.svg')}}" alt="Icon manualsLib"></a>
        <div class="links-container">
            <h2>{{trans('lang.STR_TITLE_FOOTER_1')}}</h2>
            <a href="{{route('home')}}" class="link-item">{{trans('lang.STR_LINK_NAV_1')}}</a>
            <a href="{{route('manuals')}}" class="link-item">{{trans('lang.STR_LINK_NAV_2')}}</a>
            <a href="/brands" class="link-item">{{trans('lang.STR_LINK_NAV_3')}}</a>
            {{-- <a href="{{route('manual')}}" class="link-item">Manual-details</a> --}}
            {{-- <a href="{{route('brandDetails')}}" class="link-item">Brand-details</a> --}}
        </div>
        <div class="links-container">
            <h2>{{trans('lang.STR_TITLE_FOOTER_2')}}</h2>
            <a href="/features" class="link-item">{{trans('lang.STR_LINK_NAV_4')}}</a>
            <a href="/pricing" class="link-item">{{trans('lang.STR_LINK_NAV_5')}}</a>
            <a href="/api" class="link-item">{{trans('lang.STR_LINK_NAV_6')}}</a>
            <a href="/subscription" class="link-item">{{trans('lang.STR_LINK_NAV_7')}}</a>
            <a href="{{route('cancellation')}}" class="link-item">{{trans('lang.STR_LINK_NAV_8')}}</a>
        </div>
        <div class="links-container">
            <h2>{{trans('lang.STR_TITLE_FOOTER_3')}}</h2>
            <a href="/about" class="link-item">{{trans('lang.STR_LINK_NAV_9')}}</a>
            <a href="/press" class="link-item">{{trans('lang.STR_LINK_NAV_10')}}</a>
            <a href="/cookies" class="link-item">{{trans('lang.STR_LINK_NAV_11')}}</a>
            <a href="/terms" class="link-item">{{trans('lang.STR_LINK_NAV_12')}}</a>
            <a href="/privacy" class="link-item">{{trans('lang.STR_LINK_NAV_13')}}</a>
        </div>
        <div class="links-container">
            <h2>{{trans('lang.STR_TITLE_FOOTER_4')}}</h2>
            <a href="{{route('contact')}}" class="link-item">{{trans('lang.STR_LINK_NAV_14')}}</a>
            <a href="/faq" class="link-item">{{trans('lang.STR_LINK_NAV_15')}}</a>
            <a href="{{route('carreers')}}" class="link-item">{{trans('lang.STR_LINK_NAV_16')}}</a>

        </div>
            <div class="links-container">
        <img src="{{asset('assets/img/paypal.svg')}}" alt="Paypal payment">
        <img src="{{asset('assets/img/stripe.svg')}}" alt="Stripe payment">
    </div>
    </div>

    <span class="copyright">Copyright 2023 - <a href={{route('home')}}>ManualsLib</a></span>
    <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="triangle-item-footer" alt="">
    <img src="{{asset('assets/img/carre.svg')}}" class="square-item-footer" alt="">
</footer>