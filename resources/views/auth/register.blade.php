
        <div class="contenu signup " data-anim="2">
            <h2>Register</h2>
@if ($errors->any())
    <div class="error-register-password">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form method="POST" action="{{route('register')}}">
                @csrf
                <img src="{{asset('assets/img/user-regular.svg')}}" class="icon-login" alt="">
                <input type="email" name="email" autocomplete="on" placeholder="Email address">
{{-- @error('email')
<strong>{{ $message }}</strong>
@enderror --}}
                <img src="{{asset('assets/img/key.svg')}}" class="icon-key" alt="">
                <input type="password" name="password" autocomplete="on" placeholder="Enter password">
{{-- @error('password')
<strong>{{ $message }}</strong>
@enderror --}}
                <img src="{{asset('assets/img/key.svg')}}" class="icon-key2" alt="">
                <input type="password" name="password_confirmation" autocomplete="on" placeholder="Verify password">

                <button type="submit">Sign up</button>
            </form>
        </div>