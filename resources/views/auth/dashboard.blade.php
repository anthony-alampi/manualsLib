@extends('base')

@section('content')
<main>
    <article>
        <section class="history-subscription-container">
            <h2>{{ trans('lang.STR_TITLE_DASHBOARD_2') }}</h2>
            {{-- <div class="stripe-history-subscription"></div> --}}
        </section>
        <div class="downloaded-manuals">
            <h2>{{ trans('lang.STR_TITLE_DASHBOARD_1') }}</h2>
            {{-- ///////////////////// --}}
<div class="global-progress-container">
 <div class="progress-container" data-nbr="{{ $nbrDl }}">
        <svg class="progress" width="120" height="120">
            <circle class="circle-back" cx="60" cy="60" r="50"></circle>
            <circle class="circle-front" cx="60" cy="60" r="50"></circle>
            <text class="progress-text" x="62" y="70">0%</text>
        </svg>
    </div>
</div>
{{-- //////////////////// --}}
            <div class="container-manuals">
                @foreach ($common_names as $name)
                    <div class="manual custom-border-left1">
                        <img src="{{asset('assets/img/manuals-book-card.png')}}" />
                        <h3>{{ $name }}</h3>
                    </div>
                @endforeach
            </div>
            
        </div>
        <div class="live-search-manuals">
            @include('incs.formManualsCustom')
        </div>
    </article>
</main>
@endsection