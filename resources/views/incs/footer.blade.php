<footer>
    <div class="link-footer-container reveal-left">
        <a href={{route('home')}}><img src="{{asset('assets/img/logo 3 Vector file.svg')}}" alt="Icon manualsLib"></a>
        <div class="links-container">
            <h2>Manuals</h2>
            <a href="{{route('home')}}" class="link-item">Home</a>
            <a href="{{route('manuals')}}" class="link-item">Manuals</a>
            <a href="/brands" class="link-item">Brands</a>
            {{-- <a href="{{route('manual')}}" class="link-item">Manual-details</a> --}}
            {{-- <a href="{{route('brandDetails')}}" class="link-item">Brand-details</a> --}}
        </div>
        <div class="links-container">
            <h2>Our services</h2>
            <a href="/features" class="link-item">Features</a>
            <a href="/pricing" class="link-item">Pricing</a>
            <a href="/api" class="link-item">Api</a>
            <a href="/subscription" class="link-item">Subscription</a>
            <a href="{{route('cancellation')}}" class="link-item">Cancellation</a>
        </div>
        <div class="links-container">
            <h2>About Us</h2>
            <a href="/about" class="link-item">About</a>
            <a href="/press" class="link-item">Press</a>
            <a href="/cookies" class="link-item">Cookies</a>
            <a href="/terms" class="link-item">Terms</a>
            <a href="/privacy" class="link-item">Privacy</a>
        </div>
        <div class="links-container">
            <h2>Contact Us</h2>
            <a href="{{route('contact')}}" class="link-item">Contact</a>
            <a href="/faq" class="link-item">FAQ</a>
            <a href="{{route('carreers')}}" class="link-item">Carreers</a>

        </div>
            <div class="links-container">
        <img src="{{asset('assets/img/paypal.svg')}}" alt="Paypal payment">
        <img src="{{asset('assets/img/stripe.svg')}}" alt="Stripe payment">
    </div>
    </div>

    <span class="copyright">Copyright 2023 - <a href={{route('home')}}>ManualsLib</a></span>
    <img src="{{asset('assets/img/triangle-effect-1.svg')}}" class="triangle-item-footer" alt="">
    <img src="{{asset('assets/img/carre.svg')}}" class="square-item-footer" alt="">
</footer>