@extends('base')

@section('content')

<header class='home-header'>
    <div class="title-and-form">
        <h1>{{ trans('lang.STR_TITLE_HOMEPAGE_1') }}</h1>
        @include('incs.formManuals')
    </div>
    <div class="floating-illustration">
        <img src="{{asset('assets/img/header-illustration.png')}}" class='illustration' />
        <img src="{{asset('assets/img/float-message-1.png')}}" class="float-message1" />
        <img src="{{asset('assets/img/float-message-2.png')}}" class="float-message2" />
        <img src="{{asset('assets/img/float-message-3.png')}}" class="float-message3" />
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
            <img src="{{asset('assets/img/flock-1.svg')}}" class="flock-top" />

            <div class="devices-container">
            <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="floating-triangle" />
                <div class="device">
                    <img src="{{asset('assets/img/electric-appliance.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_1') }}</h2>
                </div>

                <div class="device">
                    <img src="{{asset('assets/img/amplifier.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_2') }}</h2>
                </div>

                <div class="device">
                    <img src="{{asset('assets/img/ipad.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_3') }}</h2>
                </div>

                <div class="device">
                    <img src="{{asset('assets/img/computer.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_4') }}</h2>
                </div>

                <div class="device">
                    <img src="{{asset('assets/img/watch-tv.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_5') }}</h2>
                </div>

                <div class="device">
                    <img src="{{asset('assets/img/remote-control.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_6') }}</h2>
                </div>

                <div class="device">
                    <img src="{{asset('assets/img/wifi.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_7') }}</h2>
                </div>

                <div class="device">
                    <img src="{{asset('assets/img/amplifier.svg')}}" alt="">
                    <h2>{{ trans('lang.STR_TITLE_DEVICE_8') }}</h2>
                </div> 
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="rotate-circle"/>
            </div>
       <img src="{{asset('assets/img/flock-3.svg')}}" class="flock-bottom" />
        </div>

        <section class='content-block1'>

            <div class='title'>
                <img src="{{asset('assets/img/manual.svg')}}" alt="">
                <h2>{{ trans('lang.STR_TITLE_HOMEPAGE_6') }}</h2>
                <p>{{trans('lang.STR_TEXT_1')}}</p>
            </div>

            <div class="right-block">
                <img src="{{asset('assets/img/user-manual-block1.png')}}" class="illustration" alt="">
                <img src="{{asset('assets/img/more.svg')}}" class="more-item1" />
                <img src="{{asset('assets/img/backslash.svg')}}" class="backslash-item" />
                <img src="{{asset('assets/img/more.svg')}}" class="more-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item1" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item2" />
                <img src="{{asset('assets/img/carre.svg')}}" class="square-item3" />
                <img src="{{asset('assets/img/circle-effect-1.svg')}}" class="circle-item" />
            </div>
        </section>

        <section class='content-block2 reveal-1'>
            <div class="images">
                <img src="{{asset('assets/img/more-translate.png')}}" alt="" class="illustration">
                <img src="{{asset('assets/img/orange-triangle.svg')}}" class="child-triangle" alt=''/>
                <img src="{{asset('assets/img/carre.svg')}}" class="child-square1" alt=''/>
                <img src="{{asset('assets/img/carre.svg')}}" class="child-square2" alt=''/>
                <img src="{{asset('assets/img/carre.svg')}}" class="child-square3" alt=''/>
                <img src="{{asset('assets/img/carre.svg')}}" class="child-square4" alt=''/>
                <img src="{{asset('assets/img/carre.svg')}}" class="child-square5" alt=''/>
            </div>
            <div class='title-text'>
                <img src="{{asset('assets/img/translation.svg')}}" class="icon"alt="">
                <h2>{{ trans('lang.STR_TITLE_HOMEPAGE_7') }}</h2>
                <p>{{trans('lang.STR_TEXT_2')}}</p>
            </div>
        </section>
        {{-- <div class="custom-line">
            <img src="{{asset('assets/img/line-shape-4.svg')}}" alt="">
        </div> --}}

        <section class='content-block3 reveal-1'>
            <div class='title-text'>
                <img src="{{asset('assets/img/operator.svg')}}" class="icon"alt="">
                <h2>{{ trans('lang.STR_TITLE_HOMEPAGE_8') }}</h2>
                <p>{{trans('lang.STR_TEXT_3')}}</p>
            </div>
            <div class="images">
                <img src="{{asset('assets/img/more-assist.png')}}" alt="" class="illustration">
                <img src="{{asset('assets/img/orange-triangle.svg')}}" class="child-triangle" alt=''/>
                <img src="{{asset('assets/img/carre.svg')}}" class="child-square1" alt=''/>
                <img src="{{asset('assets/img/carre.svg')}}" class="child-square2" alt=''/>
                <img src="{{asset('assets/img/carre.svg')}}" class="child-square3" alt=''/>
                <img src="{{asset('assets/img/carre.svg')}}" class="child-square4" alt=''/>
                <img src="{{asset('assets/img/carre.svg')}}" class="child-square5" alt=''/>
            </div>
        </section>
        <div class="title-custom">Feedback</div>

        <section class="feedback">
            <div class="container1">
                <h2>{{trans('lang.STR_TITLE_HOMEPAGE_9')}}</h2>
                <img src="{{asset('assets/img/face-1.png')}}" class="child-face1" alt=''/>
                <img src="{{asset('assets/img/face-2.png')}}" class="child-face2" alt=''/>
                <img src="{{asset('assets/img/face-3.png')}}" class="child-face3" alt=''/>
                <img src="{{asset('assets/img/face-4.png')}}" class="child-face4" alt=''/>
                <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="child-triangle" alt=''/>

            </div>
            <div class="micro-slider">
                <div class="slider-item">
                    <img src="{{asset('assets/img/quote.svg')}}" class="quote" alt="">
                    <img src="{{asset('assets/img/stars.svg')}}" class="stars" alt="">
                    <p>{{trans('lang.STR_FEEDBACK_1')}}</p>

                </div>
                <div class="slider-item">
                    <img src="{{asset('assets/img/quote.svg')}}" class="quote" alt="">
                    <img src="{{asset('assets/img/stars.svg')}}" class="stars" alt="">
                    <p>{{trans('lang.STR_FEEDBACK_2')}}</p>
                </div>
                <div class="slider-item">
                    <img src="{{asset('assets/img/quote.svg')}}" class="quote" alt="">
                    <img src="{{asset('assets/img/stars.svg')}}" class="stars" alt="">
                    <p>{{trans('lang.STR_FEEDBACK_3')}}</p>
                </div>
                <div class="slider-item">
                    <img src="{{asset('assets/img/quote.svg')}}" class="quote" alt="">
                    <img src="{{asset('assets/img/stars.svg')}}" class="stars" alt="">
                    <p>{{trans('lang.STR_FEEDBACK_4')}}</p>
                </div>
                <div class="slider-item">
                    <img src="{{asset('assets/img/quote.svg')}}" class="quote" alt="">
                    <img src="{{asset('assets/img/stars.svg')}}" class="stars" alt="">
                    <p>{{trans('lang.STR_FEEDBACK_5')}}</p>
                </div>
                <div class="slider-item">
                    <img src="{{asset('assets/img/quote.svg')}}" class="quote" alt="">
                    <img src="{{asset('assets/img/stars.svg')}}" class="stars" alt="">
                    <p>{{trans('lang.STR_FEEDBACK_6')}}</p>
                </div>
            </div>
        </section>
    </article>
</main>

@endsection