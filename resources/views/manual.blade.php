@extends('base')

@section('content')
<header class="manual-header">
    <img src="{{asset('assets/img/94.svg')}}" class="shape1" alt="">
    <img src="{{asset('assets/img/93.svg')}}" class="shape2" alt="">
    <div class="left-block-manual">
            <h1>{{trans('lang.STR_TITLE_MANUAL_1')}} {{ $document['brand'] }}</h1>
            <img src="{{asset('assets/img/line-shape-1.svg')}}" class="shape-header" alt="">

        {{-- <div class="btns-container">
            <div id="id-from-laravel" data-id="{{ $document['id'] }}" data-name="{{ $document['name'] }}" data-id_user="{{ Auth::user()->id }}"></div>
            <button class="btn-manual" id="download-btn"><img src="{{asset('assets/img/download.svg')}}" alt="">Download {{ $document['brand'] }} Manual</button>            
        </div> --}}
    <div class="flex-btns-container">
            @if (Auth::user())
            <div class="btns-container">
                <button name ="document_id" id="download-btn" class="btn-manual"><img src="{{asset('assets/img/download.svg')}}" alt="">
                    <div id="id-from-laravel" data-id="{{ $document['id'] }}" data-name="{{ $document['name'] }}" data-id_user="{{ Auth::user()->id }}">Download</div>
                </button>
            </div>

            @else
                <div class="btns-container">
                <button name ="document_id" id="download-btn" class="btn-manual"><img src="{{asset('assets/img/download.svg')}}" alt="">
                    <div id="id-from-laravel" data-id="{{ $document['id'] }}" data-name="{{ $document['name'] }}">Download</div>
                </button>
            </div>
            @endif
        <div class="btns-container">
            <button id="preview-button" class="btn-manual"><img src="{{asset('assets/img/preview.svg')}}">Preview</button>
                <div id="myModal" class="modal">
                    <div class="modal-contain">
                        <iframe id="preview-iframe" src="{{ $document['file'] }}#toolbar=0&navpanes=0" frameborder="0"></iframe>
                    </div>
                </div>
            </div> 
        </div>
    </div>

        <div class="right-block-manual">
            <iframe src="{{ $document['file'] }}#toolbar=0&navpanes=0" frameborder="0" class="frame-preview"></iframe>
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
            <img src="{{asset('assets/img/new-search.svg')}}" class="separate-image reveal-bottom" alt="">
        </div>
        @include('incs.headband')
          <article class="features-listing-container manual-listing">
                <div class="item reveal-bottom">
                    <img src="{{ asset('assets/img/book.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_MANUAL_3') }} </h2>
                    <p> {{trans('lang.STR_TEXT_MANUAL_1')}} </p>
                </div>
                <div class="item reveal-bottom">
                    <img src="{{ asset('assets/img/service-clients.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_MANUAL_4') }} </h2>
                    <p> {{trans('lang.STR_TEXT_MANUAL_2')}} </p>
                </div>
                <div class="item reveal-bottom">
                    <img src="{{ asset('assets/img/translation.svg') }}" alt="">
                    <h2> {{ trans('lang.STR_TITLE_MANUAL_5') }} </h2>
                    <p> {{trans('lang.STR_TEXT_MANUAL_3')}} </p>
                </div>
            </article>
    </article>
</main>
@endsection