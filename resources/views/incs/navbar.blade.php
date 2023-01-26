    <nav>
        <a href="{{route('home')}}" class="nav-icon" aria-label="visit homepage" aria-current="page">
            <img src="{{asset('assets/img/logo 3 Vector file.svg')}}" alt="ManualsLib logo">
        </a>

        <div class="main-navlinks">
            <button class="hamburger" type="button">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navlinks-container">
                <a href="#" aria-current="page"></a>
                <div class="separate"></div>
                <a href="#">Manuals</a>
                <div class="separate"></div>
                <a href="{{route('features')}}">Features</a>
                <div class="separate"></div>
                <a href="#">Brands</a>
                <div class="separate"></div>
                <a href="{{route('pricing')}}">Pricing</a>
                <div class="separate"></div> 
                <a href="{{route('api')}}">Api</a>
                <div class="separate"></div>
                <a href="#">Press</a>
                <div class="separate"></div>
                <a href="{{route('about')}}">About</a>
                <div class="separate"></div>
                {{-- <a href="{{route('about')}}">Login</a> --}}
            </div>
        </div>
            <div class="nav-authentication">
                {{-- <a href="#" class="sign-user" aria-label="Sign in page">
                    <img src=" {{asset('assets/img/user-avatar-filled.svg')}} " alt="user-icon">
                </a> --}}
                <div class="signs-btn">
                <a href="{{route('about')}}">Login</a>
                <button type="button">Sign Up</button>
            </div>
        </div>
    </nav>




