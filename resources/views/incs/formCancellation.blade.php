<form action={{route('cancellation.submit')}} method="POST" class='contactCarreers-form-container'>
    @csrf
@if (session('message'))
    <div class="success">
        {{ session('message') }}
    </div>
@endif
    {{-- <div class="identity-container">
        <div class="first-name-container">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="firstName" placeholder="First Name">
        </div> --}}

        {{-- <div class="last-name-container">
            <label for="last-name">Last name</label>
            <input type="text" id="last-name" name="lastName" placeholder="Last Name">
        </div>
    </div> --}}

    <div class="email-message-container">
        <div class="email-container">
            <label for="email-address">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email">
        </div>

        {{-- <div class="message-container">
            <label for="message">Message</label>
            <textarea type="text" name="message" id="message" placeholder="Your message goes here.."></textarea>
        </div> --}}
        
    </div>
    {{-- <div class="g-recaptcha captcha-style-login" data-sitekey="6LfHfJUkAAAAAJYVy4QWAPGCoXMl5wpSVNLXptM8"></div> --}}
    <button type="submit" id="send-button">End Subscription
    </button>

</form