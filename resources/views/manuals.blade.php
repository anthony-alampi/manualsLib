@extends('base')

@section('content')

<header class='manuals-header'>
    <div class="content-block">
        <h1>{{ trans('lang.STR_TITLE_MANUALS_1') }}</h1>
        <h2>{{ trans('lang.STR_TITLE_MANUALS_2') }}</h2>
        @include('incs.formManuals')
        <img src="{{asset('assets/img/image-header-manuals.svg')}}" class='block-image reveal-bottom' alt="">
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
            <h2 class="reveal-bottom">{{trans('lang.STR_TITLE_MANUALS_3')}}</h2>
            <img src="{{asset('assets/img/line-shape-3.svg')}}" class='line-custom reveal-bottom'alt="">
            <div class="most-manuals-container">

                <div class="download custom-border-left1 reveal-bottom">
                    <div class="icons-manualsTop">
                        <img src="{{asset('assets/img/amplifier.svg')}}" alt="">
                    </div>
                    <div class="text-block">
                        <h2>{{trans('lang.STR_TITLE_DOWNLOADED_1')}}</h2>
                        <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_1')}}</h3>
                    </div>
                </div>

                <div class="download custom-border-left2 reveal-bottom">
                    <div class="icons-manualsTop">
                        <img src="{{asset('assets/img/casque-audio.svg')}}" alt="">
                    </div>
                    <div class="text-block">
                        <h2>{{trans('lang.STR_TITLE_DOWNLOADED_2')}}</h2>
                        <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_2')}}</h3>
                    </div>
                </div>

                <div class="download custom-border-left3 reveal-bottom">
                    <div class="icons-manualsTop">
                        <img src="{{asset('assets/img/computer.svg')}}" alt="">
                    </div>
                    <div class="text-block">
                        <h2>{{trans('lang.STR_TITLE_DOWNLOADED_3')}}</h2>
                        <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_3')}}</h3>
                    </div>
                </div>

                <div class="download custom-border-left4 reveal-bottom">
                    <div class="icons-manualsTop">
                        <img src="{{asset('assets/img/electric-appliance.svg')}}" alt="">
                    </div>
                    <div class="text-block">
                        <h2>{{trans('lang.STR_TITLE_DOWNLOADED_4')}}</h2>
                        <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_4')}}</h3>
                    </div>
                </div>

                <div class="download custom-border-left5 reveal-bottom">
                    <div class="icons-manualsTop">
                        <img src="{{asset('assets/img/ipad.svg')}}" alt="">
                    </div>
                    <div class="text-block">
                        <h2>{{trans('lang.STR_TITLE_DOWNLOADED_5')}}</h2>
                        <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_5')}}</h3>
                    </div>
                </div>

                <div class="download custom-border-left6 reveal-bottom">
                    <div class="icons-manualsTop">
                        <img src="{{asset('assets/img/remote-control.svg')}}" alt="">
                    </div>
                    <div class="text-block">
                        <h2>{{trans('lang.STR_TITLE_DOWNLOADED_6')}}</h2>
                        <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_6')}}</h3>
                    </div>
                </div>

                <div class="download custom-border-left7 reveal-bottom">
                    <div class="icons-manualsTop">
                        <img src="{{asset('assets/img/wifi.svg')}}" alt="">
                    </div>
                    <div class="text-block">
                        <h2>{{trans('lang.STR_TITLE_DOWNLOADED_7')}}</h2>
                        <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_7')}}</h3>
                    </div>
                </div>

                <div class="download custom-border-left8 reveal-bottom">
                    <div class="icons-manualsTop">
                        <img src="{{asset('assets/img/watch-tv.svg')}}" alt="">
                    </div>
                    <div class="text-block">
                        <h2>{{trans('lang.STR_TITLE_DOWNLOADED_8')}}</h2>
                        <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_8')}}</h3>
                    </div>
                </div>

                <div class="download custom-border-left9 reveal-bottom">
                    <div class="icons-manualsTop">
                        <img src="{{asset('assets/img/smartphone.svg')}}" alt="">
                    </div>
                    <div class="text-block">
                        <h2>{{trans('lang.STR_TITLE_DOWNLOADED_9')}}</h2>
                        <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_9')}}</h3>
                    </div>
                </div>

                <div class="download custom-border-left10 reveal-bottom">
                    <div class="icons-manualsTop">
                        <img src="{{asset('assets/img/laptop.svg')}}" alt="">
                    </div>
                    <div class="text-block">
                        <h2>{{trans('lang.STR_TITLE_DOWNLOADED_10')}}</h2>
                        <h3>{{trans('lang.STR_SUBTITLE_DOWNLOADED_10')}}</h3>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="manuals-block">
            <div class="text-block reveal-left">
                <h2>{{trans('lang.STR_TITLE_MANUALS_4')}}</h2>
                <p>{{trans('lang.STR_TEXT_MANUALS_1')}}</p>
            </div>
            <img src="{{asset('assets/img/get-full.svg')}}" class="reveal-right" alt="">
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
            {{-- <div class="rotating-slider">.Rotating images - 2rows</div> --}}
        </div>
        <section class="manuals-block">
            <img src="{{asset('assets/img/needs-questions.svg')}}" class="reveal-left" alt="">
            <div class="text-block reveal-right">
                <h2>{{trans('lang.STR_TITLE_MANUALS_6')}}</h2>
                <p>{{trans('lang.STR_TEXT_MANUALS_2')}}</p>
            </div>
        </section>











    </article>
</main>



@endsection