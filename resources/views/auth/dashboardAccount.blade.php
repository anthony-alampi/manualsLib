@extends('base')
{{-- @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

@section('content')
@include('stripe.stripe-form')
    <div class="update-link-container">
        <h2>API Key</h2>
        <div class="affiliate-container">
            <form class="affiliate-link" action="#" method="dialog">
                @csrf
                <label for="api_key">Your API Key</label>
                <input type="text" id="affiliateInput" name="api_key" value="{{ old('api_key') ?? auth()->user()->api_key }}" disabled >
                <button id="linkCopy">Copy</button>
            </form>
        </div>
    </div>




<div class="container-updatePassword-and-subscribe">
        <div class=" signup modify-password-container ">
            <h2>Change Password</h2>

            <form class="updated-password-form" method="POST" action="{{route('user-password.update')}}">
                @csrf
                @method('PUT')

                        @if (session('status') == "password-updated")
                            <div class="success">
                                <p>Password updated successfully.</p>
                            </div>
                        @endif

                {{-- <img src="{{asset('assets/img/key.svg')}}" class="icon-key" alt=""> --}}
                <input type="password" name="current_password" @error('current_password', 'updatePassword') is-invalid @enderror autocomplete="on" placeholder="Enter current password"><br>

                                @error('current_password', 'updatePassword')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                {{-- <img src="{{asset('assets/img/key.svg')}}" class="icon-key2" alt=""> --}}
                <input type="password" name="password" @error('password', 'updatePassword') is-invalid @enderror autocomplete="on" placeholder="Enter new password"><br>

                                @error('password', 'updatePassword')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                {{-- <img src="{{asset('assets/img/key.svg')}}" class="icon-key2" alt=""> --}}
                <input type="password" name="password_confirmation" autocomplete="on" placeholder="Confirm new password">
                <button type="submit">Save</button>
            </form>
        </div>

    <div class="full-container-other-subscribe">
        <div class="select-other-subscribe">
            <div class="card-pricing">
                <h2>{{ trans('lang.STR_TITLE_PRICING_CARD_1') }}</h2>
                    <div class="pricing-plan">
                        <span>$</span>
                        <h3>{{trans('lang.STR_PRICE_CARD_1')}}</h3>
                    </div>
                     <div class="separate-custom"></div>
                        <div class="include-plan-container">
                        <ul>
                            <li class="list-include-plan">
                                <img src="{{asset('assets/img/43.svg')}}" alt="">
                                <p class="manuals custom-position">{{ trans('lang.STR_TEXT_1_CARD_1') }}</p>
                            </li>
                            <li class="list-include-plan">
                                <img src="{{asset('assets/img/43.svg')}}" alt="">
                                <p class="manuals custom-position">{{ trans('lang.STR_TEXT_2_CARD_1') }}</p>
                            </li>
                        </ul>
                            <button class="sign-up-pricing" id="stripe-modal-btn">Susbscribe</button>
                </div>
            </div>

            <div class="card-pricing">
                <h2>{{ trans('lang.STR_TITLE_PRICING_CARD_2') }}</h2>
                    <div class="pricing-plan">
                        <span>$</span>
                        <h3>{{trans('lang.STR_PRICE_CARD_2')}}</h3>
                    </div>
                     <div class="separate-custom"></div>
                        <div class="include-plan-container">
                            <ul>
                                <li class="list-include-plan">
                                    <img src="{{asset('assets/img/43.svg')}}" alt="">
                                    <p class="manuals custom-position">{{ trans('lang.STR_TEXT_1_CARD_2') }}</p>
                                </li>
                                <li class="list-include-plan">
                                    <img src="{{asset('assets/img/43.svg')}}" alt="">
                                    <p class="manuals custom-position">{{ trans('lang.STR_TEXT_2_CARD_2') }}</p>
                                </li>
                                <li class="list-include-plan">
                                    <img src="{{asset('assets/img/43.svg')}}" alt="">
                                    <p class="manuals custom-position">{{ trans('lang.STR_TEXT_3_CARD_2') }}</p>
                                </li>
                                <li class="list-include-plan">
                                    <img src="{{asset('assets/img/43.svg')}}" alt="">
                                    <p class="manuals custom-position">{{ trans('lang.STR_TEXT_4_CARD_2') }}</p>
                                </li>
                            </ul>
                            <button class="sign-up-pricing" id="stripe-modal-btn">Susbscribe</button>
                        </div>
                    </div>
                </div>

        <div class="select-other-subscribe">
            <div class="card-pricing">
                <h2>{{ trans('lang.STR_TITLE_PRICING_CARD_3') }}</h2>
                    <div class="pricing-plan">
                        <span>$</span>
                        <h3>{{trans('lang.STR_PRICE_CARD_3')}}</h3>
                    </div>
                     <div class="separate-custom"></div>
                        <div class="include-plan-container">
                        <ul>
                            <li class="list-include-plan">
                                <img src="{{asset('assets/img/43.svg')}}" alt="">
                                <p class="manuals custom-position">{{ trans('lang.STR_TEXT_1_CARD_3') }}</p>
                            </li>
                            <li class="list-include-plan">
                                <img src="{{asset('assets/img/43.svg')}}" alt="">
                                <p class="manuals custom-position">{{ trans('lang.STR_TEXT_2_CARD_3') }}</p>
                            </li>
                            <li class="list-include-plan">
                                <img src="{{asset('assets/img/43.svg')}}" alt="">
                                <p class="manuals custom-position">{{ trans('lang.STR_TEXT_3_CARD_3') }}</p>
                            </li>
                            <li class="list-include-plan">
                                <img src="{{asset('assets/img/43.svg')}}" alt="">
                                <p class="manuals custom-position">{{ trans('lang.STR_TEXT_4_CARD_3') }}</p>
                            </li>
                            <li class="list-include-plan">
                                <img src="{{asset('assets/img/43.svg')}}" alt="">
                                <p class="manuals custom-position">{{ trans('lang.STR_TEXT_5_CARD_3') }}</p>
                            </li>
                            <li class="list-include-plan">
                                <img src="{{asset('assets/img/43.svg')}}" alt="">
                                <p class="manuals custom-position">{{ trans('lang.STR_TEXT_6_CARD_3') }}</p>
                            </li>
                        </ul>
                    <button class="sign-up-pricing" id="stripe-modal-btn">Susbscribe</button>
                </div>
            </div>
            <div class="card-pricing">
                <h2>{{ trans('lang.STR_TITLE_PRICING_CARD_4') }}</h2>
                    <div class="pricing-plan">
                        <span>$</span>
                        <h3>{{trans('lang.STR_PRICE_CARD_4')}}</h3>
                    </div>
                     <div class="separate-custom"></div>
                        <div class="include-plan-container">
                            <ul>
                                <li class="list-include-plan">
                                    <img src="{{asset('assets/img/43.svg')}}" alt="">
                                    <p class="manuals custom-position">{{ trans('lang.STR_TEXT_1_CARD_4') }}</p>
                                </li>
                                <li class="list-include-plan">
                                    <img src="{{asset('assets/img/43.svg')}}" alt="">
                                    <p class="manuals custom-position">{{ trans('lang.STR_TEXT_2_CARD_4') }}</p>
                                </li>
                                <li class="list-include-plan">
                                    <img src="{{asset('assets/img/43.svg')}}" alt="">
                                    <p class="manuals custom-position">{{ trans('lang.STR_TEXT_3_CARD_4') }}</p>
                                </li>
                                <li class="list-include-plan">
                                    <img src="{{asset('assets/img/43.svg')}}" alt="">
                                    <p class="manuals custom-position">{{ trans('lang.STR_TEXT_4_CARD_4') }}</p>
                                </li>
                                <li class="list-include-plan">
                                    <img src="{{asset('assets/img/43.svg')}}" alt="">
                                    <p class="manuals custom-position">{{ trans('lang.STR_TEXT_5_CARD_4') }}</p>
                                </li>
                                <li class="list-include-plan">
                                    <img src="{{asset('assets/img/43.svg')}}" alt="">
                                    <p class="manuals custom-position">{{ trans('lang.STR_TEXT_6_CARD_4') }}</p>
                                </li>
                                <li class="list-include-plan">
                                    <img src="{{asset('assets/img/43.svg')}}" alt="">
                                    <p class="manuals custom-position">{{ trans('lang.STR_TEXT_7_CARD_4') }}</p>
                                </li>
                            </ul>
                            <button class="sign-up-pricing" id="stripe-modal-btn">Susbscribe</button>
                        </div>
                    </div>
                </div>
    </div>
</div>


        <div class="cancel-incs">
            @include('incs.formCancellation')
        </div>

@endsection