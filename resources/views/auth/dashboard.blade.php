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