        <div class="contenu login startContenu" data-anim="1">
            <h2>Authentication</h2>
            {{-- @foreach ( $errors->all() as $error )
                @if($error)
    <script>
        alert("{{ $error }}");
    </script>
@endif
            @endforeach --}}
            <form action="{{ route('login') }}" method="post" id="loginForm">
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
                <div class="g-recaptcha captcha-style-login" data-sitekey="6LfHfJUkAAAAAJYVy4QWAPGCoXMl5wpSVNLXptM8"></div>
                <div class="forgotPassword" data-anim="3">I forgot my password !</div>
                <button type="submit">Log in</button>
            </form>
        </div>


                   
