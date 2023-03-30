@extends('base')

@section('content')
    <div class="update-link-container">
        <h2>{{trans('lang.STR_TITLE_DASHBOARD_AFFILIATION_1')}}</h2>
        <div class="affiliate-container">
            <form class="affiliate-link" action="#" method="dialog">
                @csrf
                @if (session('status'))
                    <div class="success success-paypal">
                        <p>Paypal address updated successfully.</p>
                    </div>
                @endif
                <label for="affiliate_link">{{trans('lang.STR_LABEL_1')}}</label>
                <input type="text" id="affiliateInput" name="affiliate_link" value="{{ old('affiliate_link') ?? auth()->user()->affiliate_link }}" disabled >
                <button id="linkCopy">Copy</button>
            </form>

            <form class="update-paypal" action="{{route('user-profile-information.update')}}" method="POST">
                @csrf
                @method('PUT')
                <label for="affiliate_link">{{trans('lang.STR_LABEL_2')}}</label>
                <input type="text" name="paypal_address" value="{{ old('paypal_address') ?? auth()->user()->paypal_address }}" @error('paypal_address') is-invalid @enderror>
                @error('paypal_address')
                    <span  role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button id="paypalEdit" type="submit">Edit Address</button>
            </form>
        </div>
    </div>

    <div class="affiliate-global-container">
        <h2>{{trans('lang.STR_TITLE_DASHBOARD_AFFILIATION_2')}}</h2>
        <div class="custom-position-container">
        <label for="monthly-revenue" class="monthly-label">{{trans('lang.STR_LABEL_3')}}</label>
        <input type="text" name="monthly-revenue" id="affiliates-plan" placeholder="0$ / month" disabled><br>

        <label for="monthly-revenue" class="monthly-revenue">{{trans('lang.STR_LABEL_4')}}</label>
        <input type="text" name="affiliates-free" id="affiliates-plan"placeholder="Free: 0 (0$ / month)" disabled>
   </div>
    <div class="affiliate-plan-container">
        <input type="text" name="affiliates-standard" id="affiliates-plan"placeholder="Trial: 0 (0$ / month)" disabled>
        <input type="text" name="affiliates-premium" id="affiliates-plan"placeholder="Standard: 0 (0$ / month)" disabled>
        <input type="text" name="affiliates-premium" id="affiliates-plan"placeholder="Premium: 0 (0$ / month)" disabled>
    </div>
</div>
@endsection