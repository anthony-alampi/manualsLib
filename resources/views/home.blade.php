@extends('base')


<header class='home-header'>
    <div class="title-and-form">
        <h1>{{ trans('lang.STR_TITLE_HOMEPAGE_1') }}</h1>
        @include('incs.formManuals')
    </div>
    <div class="grid">
        <img src="{{asset('assets/imgs/float-message-1.png')}}" class="child1" />
        <img src="{{asset('assets/imgs/float-message-1.png')}}" class="child2" />
        <img src="{{asset('assets/imgs/float-message-1.png')}}" class="child3" />
    </div>
</header>

<main>
    <article>
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
			            <img src="{{asset('assets/img/whirlpool.png')}}" alt="Brands logo" />
		            </div>
                    <div class="slide">
			            <img src="{{asset('assets/img/whirlpool.png')}}" alt="Brands logo" />
	                </div>
                </div>
            </div>
        </section>
        <div class="homepage-subtitle">
            <h2>{{ trans('lang.STR_TITLE_HOMEPAGE_3') }}</h2>
            <h3>{{ trans('lang.STR_TITLE_HOMEPAGE_4') }}</h3>
            <img src="{{asset('assets/imgs/flock-1.svg')}}" class="flock-item1" />
            <img src="{{asset('assets/imgs/flock-3.svg')}}" class="flock-item2" />
            <div class="grid-devices">
                <div class="grid-item card">
                    <img src="{{asset('assets/imgs/triangle-effect-1.svg')}}" class="flock-item4" />
                    <img src="{{asset('assets/img/electric-appliance.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_1') }}</h2>
                </div>
                <div class="grid-item card">
                    <img src="{{asset('assets/img/amplifier.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_2') }}</h2>
                </div>
                <div class="grid-item card">
                    <img src="{{asset('assets/img/ipad.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_3') }}</h2>
                </div>
                <div class="grid-item card">
                    <img src="{{asset('assets/img/computer.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_4') }}</h2>
                </div>
                <div class="grid-item card">
                    <img src="{{asset('assets/img/watch-tv.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_5') }}</h2>
                </div>
                <div class="grid-item card">
                    <img src="{{asset('assets/img/remote-control.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_6') }}</h2>
                </div>
                <div class="grid-item card">
                    <img src="{{asset('assets/img/wifi.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_7') }}</h2>
                </div>
                <div class="grid-item card">
                    <img src="{{asset('assets/img/amplifier.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_8') }}</h2>
                    <img src="{{asset('assets/imgs/circle-effect-1.svg')}}" class="flock-item3" />
                </div>
            </div>
        </div>
        
    </article>
</main>

















@section('content')

{{-- ancien coooooooooooooooooooooooooooooooooooooooooooooode  --}}
{{-- <header class="home-header">
    <div class="title-homepage">
        <h1>{{ trans('lang.STR_TITLE_HOMEPAGE_1') }}</h1>
        <h2>{{ trans('lang.STR_TITLE_HOMEPAGE_2') }}</h2>
        @include('incs.formManuals')

    </div>
    <div class="illustration">
        <img src="{{asset('assets/img/header-illustration.png')}}" alt="header-background-image">
        <img src="{{asset('assets/imgs/float-message-1.png')}}" class="floating-image floating-image1" />
        <img src="{{asset('assets/imgs/float-message-2.png')}}" class="floating-image floating-image2" />
        <img src="{{asset('assets/imgs/float-message-3.png')}}" class="floating-image floating-image3" />
    </div>
</header> --}}
{{-- <main>
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
            </div>
        </div>

        <section class="devices-cover">
            <div class="effect">
                <img src="{{asset('assets/imgs/circle-effect-1.svg')}}" class="rotate-image1" />
                <img src="{{asset('assets/imgs/triangle-effect-1.svg')}}" class="floating-image1" />
                <img src="{{asset('assets/imgs/flock-1.svg')}}" class="flock-item1" />
                <img src="{{asset('assets/imgs/flock-2.svg')}}" class="flock-item2" />
            </div>
             <h2>{{ trans('lang.STR_TITLE_FORM_5') }}</h2>
            <article>
                    <div class="container-1">
                        <div class="device-card">
                            <img src="{{asset('assets/img/electric-appliance.svg')}}" alt="" class="device">
                            <h3>{{ trans('lang.STR_TITLE_4/1') }}</h3>
                        </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/computer.svg')}}" alt="" class="device">
                            <h3>{{ trans('lang.STR_TITLE_4/2') }}</h3>
                        </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/smartphone.svg')}}" alt="" class="device">
                            <h3>{{ trans('lang.STR_TITLE_4/3') }}</h3>
                        </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/ipad.svg')}}" alt="" class="device">
                            <h3>{{ trans('lang.STR_TITLE_4/4') }}</h3>
                        </div>
                    </div>

                    <div class="container-2">
                        <div class="device-card">
                            <img src="{{asset('assets/img/document.svg')}}" alt="" class="device">
                            <h3>{{ trans('lang.STR_TITLE_4/5') }}</h3>
                        </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/watch-tv.svg')}}" alt="" class="device">
                            <h3>{{ trans('lang.STR_TITLE_4/6') }}</h3>
                        </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/wifi.svg')}}" alt="" class="device">
                            <h3>{{ trans('lang.STR_TITLE_4/7') }}</h3>
                        </div>
                        <div class="device-card">
                            <img src="{{asset('assets/img/amplifier.svg')}}" alt="" class="device">
                            <h3>{{ trans('lang.STR_TITLE_4/8') }}</h3>
                        </div>
                    </div>
            </article>

            <article class="title-text reveal-1">
            <div class="effect-text-block">
                <img src="{{asset('assets/imgs/circle-effect-1.svg')}}" class="rotate-image1" />
                <img src="{{asset('assets/imgs/more.svg')}}" class="rotate-image2" />
                <img src="{{asset('assets/imgs/more.svg')}}" class="rotate-image3" />
                <img src="{{asset('assets/imgs/carre.svg')}}" class="floating-image4" />
                <img src="{{asset('assets/imgs/backslash.svg')}}" class="floating-image5" />
                <img src="{{asset('assets/imgs/carre.svg')}}" class="floating-image6" />
                <img src="{{asset('assets/imgs/carre.svg')}}" class="floating-image7" />
            </div>
                <div class="text-container">
                    <h2>{{ trans('lang.STR_TITLE_1') }}</h2>
                    <p>{{ trans('lang.STR_TEXT_1') }}</p>
                </div>
                <img src="{{asset('assets/imgs/help-desk.png')}}" alt="">
            </article>

            <article class="title-text order-resp reveal-1">
            <div class="effect-text-block">
                <img src="{{asset('assets/imgs/circle-effect-1.svg')}}" class="rotate-image8" />
                <img src="{{asset('assets/imgs/triangle-effect-1.svg')}}" class="floating-image9" />
                <img src="{{asset('assets/imgs/carre.svg')}}" class="floating-image10" />
                <img src="{{asset('assets/imgs/carre.svg')}}" class="floating-image11" />
                <img src="{{asset('assets/imgs/carre.svg')}}" class="floating-image12" />
            </div>
                <img src="{{asset('assets/imgs/modal.png')}}" alt="">
                <div class="text-container">
                    <h2>{{ trans('lang.STR_TITLE_2') }}</h2>
                    <p>{{ trans('lang.STR_TEXT_2') }}</p>
                </div>
            </article>

            <article class="title-text reveal-1">
            <div class="effect-text-block">
                <img src="{{asset('assets/imgs/circle-effect-1.svg')}}" class="rotate-image13" />
                <img src="{{asset('assets/imgs/triangle-effect-1.svg')}}" class="floating-image14" />
                <img src="{{asset('assets/imgs/carre.svg')}}" class="rotate-image2" />
                <img src="{{asset('assets/imgs/carre.svg')}}" class="rotate-image3" />
                <img src="{{asset('assets/imgs/carre.svg')}}" class="floating-image4" />
                <img src="{{asset('assets/imgs/carre.svg')}}" class="floating-image6" />
                <img src="{{asset('assets/imgs/carre.svg')}}" class="floating-image7" />
            </div>
                <div class="text-container">
                    <h2>{{ trans('lang.STR_TITLE_3') }}</h2>
                    <p>{{ trans('lang.STR_TEXT_3') }}</p>
                </div>
                <img src="{{asset('assets/imgs/assistance.png')}}" alt="">
            </article> --}}
            {{-- <div class="hero reveal-1">
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

            <div> --}}
        </section>
    </article>
</main>

@endsection