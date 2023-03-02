@extends('base');

@section('content')

<header class="about-header primary-header">
    {{-- <div class="title-in-header"> --}}
        <h1 class="title-in-header title-about">{{trans('lang.STR_TITLE_ABOUT_1')}}</h1>
        <img src="{{asset('assets/img/line-shape-11.svg')}}" class="line-shape" alt="">
        <p class="text-in-header">{{trans('lang.STR_TEXT_ABOUT_1')}}</p>
    {{-- </div> --}}
    <div class="circle-anim1"></div>
    <div class="circle-anim2"></div>
    <div class="circle-anim3"></div>
    <div class="circle-anim4"></div>
    <div class="circle-anim5"></div>
    <div class="circle-anim6"></div>
    <img src="{{asset('assets/img/square-points.svg')}}" alt="" class="floating-square1">
    <img src="{{asset('assets/img/square-points.svg')}}" alt="" class="floating-square2">
</header>

<main>
    <article>
        <div class="custom-band">
            <div class="circle-scale1"></div>
            <div class="circle-scale2"></div>
            <div class="circle-scale3"></div>
            <div class="circle-scale4"></div>
            <div class="circle-scale5"></div>
            <div class="circle-scale6"></div>
        

        <section>
            <article class="our-mission primary-container">
                <div class="text-block-contain reveal-left">
                    <h2 class="title-in-block">{{trans('lang.STR_TITLE_ABOUT_2')}}</h2>
                    <p class="text-in-block">{{trans('lang.STR_TEXT_ABOUT_2')}}</p>
                </div>
        
                {{-- <div class="image-block reveal-right"> --}}
                    <img src="{{asset('assets/img/our-mission.svg')}}" class="image-in-block" alt="">
                {{-- </div> --}}
                <div class="circle-scale1"></div>
                <div class="circle-scale2"></div>
            </article>
        </div>

            <article class="our-solution primary-container">
                <div class="circle-scale1"></div>
                <div class="circle-scale2"></div>
                {{-- <div class="text-block-contain reveal-left"> --}}
                    <img src="{{asset('assets/img/our_solution.svg')}}" class="image-in-block" alt="">
                {{-- </div> --}}
                <div class="text-block-contain reveal-right">
                    <h2 class="title-in-block">{{trans('lang.STR_TITLE_ABOUT_3')}}</h2>
                    <p class="text-in-block">{{trans('lang.STR_TEXT_ABOUT_3')}}</p>
                </div>
            </article>

            <article class="our-team">
                <div class="text-block reveal-left" >
                    <h2>{{trans('lang.STR_TITLE_ABOUT_4')}}</h2>
                    <img src="{{asset('assets/img/line-shape-11.svg')}}" class="line-shape" alt="">
                    <p>{{trans('lang.STR_TEXT_ABOUT_4')}}</p>
                </div>
                <div class="team-custom-line"></div>
                <div class="members-block">
                    <div class="member reveal-left">
                        <img src="{{asset('assets/img/member1.png')}}" alt="">
                        <h3>{{trans('lang.STR_TITLE_NAME_1')}}</h3>
                    </div>
                    <div class="member reveal-left">
                        <img src="{{asset('assets/img/member2.png')}}" alt="">
                        <h3>{{trans('lang.STR_TITLE_NAME_2')}}</h3>
                    </div>
                    <div class="member reveal-left">
                        <img src="{{asset('assets/img/member3.png')}}" alt="">
                        <h3>{{trans('lang.STR_TITLE_NAME_3')}}</h3>
                    </div>
                    <div class="member reveal-left">
                        <img src="{{asset('assets/img/member4.png')}}" alt="">
                        <h3>{{trans('lang.STR_TITLE_NAME_4')}}</h3>
                    </div>
                    <div class="member reveal-right">
                        <img src="{{asset('assets/img/member5.png')}}" alt="">
                        <h3>{{trans('lang.STR_TITLE_NAME_5')}}</h3>
                    </div>
                    <div class="member reveal-right">
                        <img src="{{asset('assets/img/member6.png')}}" alt="">
                        <h3>{{trans('lang.STR_TITLE_NAME_6')}}</h3>
                    </div>
                    <div class="member reveal-right">
                        <img src="{{asset('assets/img/member7.png')}}" alt="">
                        <h3>{{trans('lang.STR_TITLE_NAME_7')}}</h3>
                    </div>
                    <div class="member reveal-right">
                        <img src="{{asset('assets/img/member8.png')}}" alt="">
                        <h3>{{trans('lang.STR_TITLE_NAME_8')}}</h3>
                    </div>
                </div>

            </article>
        </section>
    </article>
</main>


@endsection