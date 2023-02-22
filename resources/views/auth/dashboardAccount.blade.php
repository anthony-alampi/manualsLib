@extends('base')

@section('content')
        <div class=" signup modify-password-container ">
            <h2>Change Password</h2>
{{-- @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
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
@endsection