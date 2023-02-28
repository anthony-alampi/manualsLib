@extends('base')

@section('content')
    <div class="update-link-container">

        <h2>Affiliation Settings</h2>
        <div class="affiliate-container">

            <form class="affiliate-link" action="#" method="dialog">
                @csrf
                
                                        @if (session('status'))
                            <div class="success success-paypal">
                                <p>Paypal address updated successfully.</p>
                            </div>
                        @endif
                <label for="affiliate_link">Your affiliate link</label>
                <input type="text" id="affiliateInput" name="affiliate_link" value="{{ old('affiliate_link') ?? auth()->user()->affiliate_link }}" disabled >
                <button id="linkCopy">Copy</button>
            </form>
            <form class="update-paypal" action="{{route('user-profile-information.update')}}" method="POST">
                @csrf
                @method('PUT')
                <label for="affiliate_link">Your paypal address</label>
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

@endsection