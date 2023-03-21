@extends('base')

@section('content')
<header class='manuals-header primary-header'>
    <div class="content-block">
        <h1 class="title-in-header">{{ trans('lang.STR_TITLE_MANUALS_1') }}</h1>
        <img src="{{asset('assets/img/line-shape-3.svg')}}" class='line-custom'/>
    </div>
    <div class="searchForm-manuals">
        <h2>{{ trans('lang.STR_TITLE_MANUALS_2') }}</h2>
        @include('incs.formManualsCustom')
    </div>

        <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class='square-left' >
        <img src="{{asset('assets/img/orange-triangle.svg')}}" class='bs-left' >
        <img src="{{asset('assets/img/carre.svg')}}" class='middle-left' >
        <img src="{{asset('assets/img/carre.svg')}}" class='circle-left' >
        <img src="{{asset('assets/img/circle-effect-1.svg')}}" class='alternate-left' >

        <img src="{{asset('assets/img/carre.svg')}}" class='alternate-right' >
        <img src="{{asset('assets/img/carre.svg')}}" class='sl-right' >
        <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class='circle-right' >
        <img src="{{asset('assets/img/carre.svg')}}" class='bs-right' >
        <img src="{{asset('assets/img/circle-effect-1.svg')}}" class='square-right' >
</header>
<main>
    <article>
        <img src="{{asset('assets/img/interface_for_manuals.svg')}}" class='block-image-manuals reveal-bottom' >
        <section class="top-15-container">
            <h2>{{trans('lang.STR_TITLE_MANUALS_3')}}</h2>
            <img src="{{asset('assets/img/line-shape-3.svg')}}" class='line-custom'>
            <div class="most-manuals-container">
                <div class="sub-container">
                    @foreach ($popularManuals as $name => $count)
                    <div class="download custom-border-left1 reveal-bottom">
                        <div class="icons-manualsTop">
                            <img src="{{asset('assets/img/manuals-book-card.png')}}" >
                        </div>
                        <div class="text-block">
                           <p>{{ $name }}</p>
                        </div>
                    </div>
                     @endforeach
                </div>
            </div>
        </section>
        @include('incs.headband')
        <section class="primary-container">
            <div class="text-block-contain  reveal-left">
                <h2 class="title-in-block">{{trans('lang.STR_TITLE_MANUALS_4')}}</h2>
                <p class="text-in-block">{{trans('lang.STR_TEXT_MANUALS_1')}}</p>
            </div>
            <img src="{{asset('assets/img/manual.svg')}}" class="image-in-block reveal-right" >
        </section>
        <img src="{{asset('assets/img/line-shape-9.svg')}}" class="separate-line-custom-manuals" >

        <div class="download-category">
        <section class="top-15-container">
            <h2>{{trans('lang.STR_TITLE_MANUALS_5')}}</h2>
            <img src="{{asset('assets/img/line-shape-3.svg')}}" class='line-custom'>
            <div class="most-manuals-container">
                <div class="sub-container">
                    @foreach ($categories as $category)
                    <div class="download custom-border-left1 reveal-bottom">
                        <div class="icons-manualsTop">
                             <img src="{{asset('assets/img/manuals-book-card.png')}}" >
                        </div>
                        <div class="text-block">
                            <p>{{ $category  }}</p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
        </div>
        <section class="primary-container">
            <img src="{{asset('assets/img/faq.svg')}}" class="image-in-block reveal-left" >
            <div class="text-block-contain reveal-right">
                <h2 class="title-in-block">{{trans('lang.STR_TITLE_MANUALS_6')}}</h2>
                <p class="text-in-block">{{trans('lang.STR_TEXT_MANUALS_2')}}</p>
            </div>
        </section>
    </article>
</main>
@endsection