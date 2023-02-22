        <div class="contenu login" data-anim="3">
            <h2>Reset password</h2>
            <form action="{{route('password.request')}}" method="post" id="ForgotForm">
                @csrf
                
                <img src="{{asset('assets/img/user-regular.svg')}}" class="icon-login" alt="">
                <input type="email" name="email" autocomplete="on" placeholder="Email address">
                <div class="g-recaptcha captcha-style-login" data-sitekey="6LfHfJUkAAAAAJYVy4QWAPGCoXMl5wpSVNLXptM8"></div>
                <button type="submit" name="reset" id="reset">Reset</button>

            </form>
        </div>