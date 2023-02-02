@extends('base')

@section('content')

<header class="manual-header">
    <img src="{{asset('assets/img/94.svg')}}" class="shape1" alt="">
    <img src="{{asset('assets/img/93.svg')}}" class="shape2" alt="">
    <div class="left-block-manual">
            <h1>{{trans('lang.STR_TITLE_MANUAL_1')}} [Product model]</h1>
            <img src="{{asset('assets/img/line-shape-1.svg')}}" class="shape-header" alt="">

        <div class="btns-container">
            <a href="#" class="btn-manual" id="download-btn"><img src="{{asset('assets/img/download.svg')}}" alt="">Download</a>
            <a href="#" class="btn-manual" id="preview-btn"><img src="{{asset('assets/img/preview.svg')}}" alt="">Preview</a>
        </div>
    </div>
    <div class="right-block-manual">
        <img src="{{asset('assets/img/brand-tel.jpg')}}" alt="">
        {{-- <iframe id="pdf-preview">Manual preview</iframe> --}}
    </div>
</header>

<main>
    <article>
        <div class="container-newSearch">
            <div class="title-block">
                <h2>{{trans('lang.STR_TITLE_MANUAL_2')}}</h2>
            </div>
            <div class="searchForm-manual">
                <h2>{{trans('lang.STR_TITLE_MANUALS_2')}}</h2>
                 @include('incs.formManuals')
            </div>
        </div>
        <div class="picture-manual">
            <img src="{{asset('assets/img/new-research.svg')}}" class="separate-image reveal-bottom" alt="">
        </div>

          <article class="features-listing-container">
                <div class="item reveal-left">
                    <img src="{{ asset('assets/img/book.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_MANUAL_3') }} </h2>
                    <p> {{trans('lang.STR_TEXT_MANUAL_1')}} </p>
                </div>
                <div class="item reveal-bottom">
                    <img src="{{ asset('assets/img/service-clients.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_MANUAL_4') }} </h2>
                    <p> {{trans('lang.STR_TEXT_MANUAL_2')}} </p>
                </div>
                <div class="item reveal-right">
                    <img src="{{ asset('assets/img/translation.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_MANUAL_5') }} </h2>
                    <p> {{trans('lang.STR_TEXT_MANUAL_3')}} </p>
                </div>
            </article>
         <section>
                <div class="slider">
	                <div class="slide-track">
		                <div class="slide">
			                <img src="{{asset('assets/img/Bosch-logo.png')}}" alt="Brands logo" />
		                </div>
		                <div class="slide">
			                <img src="{{asset('assets/img/Electrolux-Logo.png')}}" alt="Brands logo" />
		                </div>
		                <div class="slide">
			                <img src="{{asset('assets/img/electronics-lg.png')}}"  alt="Brands logo" />
		                </div>
		                <div class="slide">
			                <img src="{{asset('assets/img/HIGH-ONE-Logo.png')}}"  alt="Brands logo" />
		                </div>
		                <div class="slide">
			                <img src="{{asset('assets/img/Liebherr-Logo.png')}}"  alt="Brands logo" />
		                </div>
		                <div class="slide">
			                <img src="{{asset('assets/img/Logo-CANDY-Simple-3.png')}}" alt="Brands logo" />
		                </div>
		                <div class="slide">
			                <img src="{{asset('assets/img/Panasonic-Logo.png')}}" alt="Brands logo" />
		                </div>
		                <div class="slide">
			                <img src="{{asset('assets/img/Samsung_Logo.png')}}" alt="Brands logo" />
		                </div>
		                <div class="slide">
			                <img src="{{asset('assets/img/Sony-Logo.png')}}" alt="Brands logo" />
		                </div>
                        <div class="slide">
			                <img src="{{asset('assets/img/whirlpool.png')}}" alt="Brands logo" />
		                </div>
                        <div class="slide">
			                <img src="{{asset('assets/img/asus.png')}}" alt="Brands logo" />
		                </div>
                        <div class="slide">
			                <img src="{{asset('assets/img/Toshiba-Logo.png')}}" alt="Brands logo" />
	                    </div>
                    </div>
                </div>
            </section>
    </article>
</main>
@endsection