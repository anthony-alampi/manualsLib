@extends('base')

@section('content')

<header class='manuals-header'>
    <div class="content-block">
        <h1>{{ trans('lang.STR_TITLE_MANUALS_1') }}</h1>
        <h2>{{ trans('lang.STR_TITLE_MANUALS_2') }}</h2>
        @include('incs.formManuals')
        <img src="{{asset('assets/img/image-header-manuals.svg')}}" class='block-image' alt="">
    </div>
        <img src="{{asset('assets/img/68.svg')}}" class='square-left' alt="">
        <img src="{{asset('assets/img/69.svg')}}" class='bs-left' alt="">
        <img src="{{asset('assets/img/74.svg')}}" class='middle-left' alt="">
        <img src="{{asset('assets/img/71.svg')}}" class='circle-left' alt="">
        <img src="{{asset('assets/img/72.svg')}}" class='alternate-left' alt="">

        <img src="{{asset('assets/img/73.svg')}}" class='alternate-right' alt="">
        <img src="{{asset('assets/img/70.svg')}}" class='sl-right' alt="">
        <img src="{{asset('assets/img/75.svg')}}" class='circle-right' alt="">
        <img src="{{asset('assets/img/76.svg')}}" class='bs-right' alt="">
        <img src="{{asset('assets/img/77.svg')}}" class='square-right' alt="">
</header>

<main>
    <article>
        <section class="top-15-container">
            <h2>{{trans('lang.STR_TITLE_MANUALS_3')}}</h2>
            <img src="{{asset('assets/img/line-shape-3.svg')}}" class='line-custom'alt="">
            <div class="most-manuals-container">
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
                <div class="download"></div>
            </div>
        </section>
        <section class="manuals-block">
            <div class="text-block">
                <h2>{{trans('lang.STR_TITLE_MANUALS_4')}}</h2>
                <p>{{trans('lang.STR_TEXT_MANUALS_1')}}</p>
            </div>
            <img src="{{asset('assets/img/get-full.svg')}}" alt="">
        </section>
        <img src="{{asset('assets/img/line-shape-9.svg')}}" class="separate-line-custom-manuals" alt="">

        <section>
            <div class="headband">
	            <div class="band-track">
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
        <div class="download-category">
            <h2>{{trans('lang.STR_TITLE_MANUALS_5')}}</h2>
            <img src="{{asset('assets/img/line-shape-3.svg')}}" class='line-custom'alt="">
            <div class="rotating-slider">.Rotating images - 2rows</div>
        </div>
        <section class="manuals-block">
            <img src="{{asset('assets/img/needs-questions.svg')}}" alt="">
            <div class="text-block">
                <h2>{{trans('lang.STR_TITLE_MANUALS_6')}}</h2>
                <p>{{trans('lang.STR_TEXT_MANUALS_2')}}</p>
            </div>
        </section>











    </article>
</main>



@endsection