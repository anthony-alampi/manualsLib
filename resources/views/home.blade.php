@extends('base')
@section('content')

<header class="home-header">
    <div class="title-form">
        <h1>{{ trans('lang.STR_TITLE_FORM_1/2') }}</h1>
        {{-- <img src="{{asset('assets/img/line-shape-1.svg')}}" alt="line custom"> --}}
        <h1>{{ trans('lang.STR_TITLE_FORM_2/2') }}</h1>
        <h2>{{ trans('lang.STR_TITLE_FORM_2') }}</h2>
        {{-- Formulaire de recherche par marque, model, SN --}}
        <div class="btns-container">
            <button>Manuals</button>
            <button>Brands</button>
        </div>
    </div>
    <div class="illustration">
        <img src="{{asset('assets/img/test1.jpg')}}" alt="">
        <img src="{{asset('assets/img/smartphone.svg')}}" class="floating-image floating-image1" />
        <img src="{{asset('assets/img/ipad.svg')}}" class="floating-image floating-image2" />
        <img src="{{asset('assets/img/watch-tv.svg')}}" class="floating-image floating-image3" />
        <img src="{{asset('assets/img/electric-appliance.svg')}}" class="floating-image floating-image4" />
    </div>
</header>
<main>
    <article>
        <div class="title-information">
            <h2>{{ trans('lang.STR_TITLE_FORM_3') }}</h2>
            <h2>{{ trans('lang.STR_TITLE_FORM_4') }}</h2>
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
			            <img src="{{asset('assets/img/whirlpool.png')}}" alt="Brands logo" />
		            </div>
                    <div class="slide">
			            <img src="{{asset('assets/img/whirlpool.png')}}" alt="Brands logo" />
		            </div>
                    div class="slide">
			            <img src="{{asset('assets/img/whirlpool.png')}}" alt="Brands logo" />
		            </div>
                    <div class="slide">
			            <img src="{{asset('assets/img/whirlpool.png')}}" alt="Brands logo" />
		            </div>
	            </div>
            </div>
        </div>

        <section class="devices-cover">
            <article>
                <h2>{{ trans('lang.STR_TITLE_FORM_5') }}</h2>
                <div class="container-devices">
                    <div class="device-card">
                        <img src="{{asset('assets/img/electric-appliance.svg')}}" alt="" class="device">
                    </div>
                    <div class="device-card">
                        <img src="{{asset('assets/img/computer.svg')}}" alt="" class="device">
                    </div>
                    <div class="device-card">
                        <img src="{{asset('assets/img/smartphone.svg')}}" alt="" class="device">
                    </div>
                    <div class="device-card">
                        <img src="{{asset('assets/img/ipad.svg')}}" alt="" class="device">
                    </div>
                    <div class="device-card">
                        <img src="{{asset('assets/img/document.svg')}}" alt="" class="device">
                    </div>
                    <div class="device-card">
                        <img src="{{asset('assets/img/watch-tv.svg')}}" alt="" class="device">
                    </div>
                    <div class="device-card">
                        <img src="{{asset('assets/img/wifi.svg')}}" alt="" class="device">
                    </div>
                    <div class="device-card">
                        <img src="{{asset('assets/img/amplifier.svg')}}" alt="" class="device">
                    </div>
                </div>
            </article>

            <article class="title-text reveal-1">
                <div class="text-container">
                    <h2>{{ trans('lang.STR_TITLE_1') }}</h2>
                    <p>{{ trans('lang.STR_TEXT_1') }}</p>
                </div>
                <img src="{{asset('assets/img/user-guide.jpg')}}" alt="">
            </article>

            <article class="title-text reveal-1">
                <img src="{{asset('assets/img/user-guide.jpg')}}" alt="">
                <div class="text-container">
                    <h2>{{ trans('lang.STR_TITLE_2') }}</h2>
                    <p>{{ trans('lang.STR_TEXT_2') }}</p>
                </div>
            </article>

            <article class="title-text reveal-1">
                <div class="text-container">
                    <h2>{{ trans('lang.STR_TITLE_3') }}</h2>
                    <p>{{ trans('lang.STR_TEXT_3') }}</p>
                </div>
                <img src="{{asset('assets/img/user-guide.jpg')}}" alt="">
            </article>

            <div class="hero reveal-1">
                <h2 class='testimonial-title'>{{ trans('lang.STR_TITLE_4') }}</h2>
                <div class="review-box">
                    <div class="" id="slide">
                        <div class="card">
                            <div class="profile">
                                <img src="{{asset('assets/img/stars.svg')}}" alt="">
                            </div>
                            <p>{{ trans('lang.STR_4') }}</p>
                        </div>
                        <div class="card">
                            <div class="profile">
                                <img src="{{asset('assets/img/stars.svg')}}" alt="">
                            </div>
                            <p>{{ trans('lang.STR_5') }}</p>
                        </div>
                        <div class="card">
                            <div class="profile">
                                <img src="{{asset('assets/img/stars.svg')}}" alt="">
                            </div>
                            <p>{{ trans('lang.STR_6') }}</p>
                        </div>
                        <div class="card">
                            <div class="profile">
                                <img src="{{asset('assets/img/stars.svg')}}" alt="">
                            </div>
                            <p>{{ trans('lang.STR_4') }}</p>
                        </div>
                    </div>
                    
                    <div class="sidebar">
                        <img class="up" id="upArrow" src="{{asset('assets/img/up-arrow.svg')}}" alt="">
                        <img class="down" id="downArrow" src="{{asset('assets/img/up-arrow.svg')}}" alt="">
                    </div>
                </div>
                </div>

            <div>
        </section>
    </article>
</main>

@endsection