@extends('base')

@section('content')
        <div class=" signup modify-password-container ">
            <h2>Change Password</h2>

            <form class="updated-password-form" method="POST" action="{{route('password.update')}}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <input type="email" name="email" autocomplete="on" placeholder="Email address" value="{{ $request->email}}">
                <input type="password" name="password" @error('password') is-invalid @enderror autocomplete="on" placeholder="Enter new password"><br>
                <input type="password" name="password_confirmation" autocomplete="on" placeholder="Confirm new password">

                <button type="submit">Save</button>
            </form>
        </div>
@endsection