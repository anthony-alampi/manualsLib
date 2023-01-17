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
                <a href="#">Manuals</a>
                <a href="{{route('features')}}">Features</a>
                <a href="#">Brands</a>
                <a href="#">Pricing</a> 
                <a href="#">Api</a>
                <a href="#">Press</a>
                <a href="{{route('about')}}">About</a>
            </div>
        </div>
            <div class="nav-authentication">
                <a href="#" class="sign-user" aria-label="Sign in page">
                    <img src=" {{asset('assets/img/user-avatar-filled.svg')}} " alt="user-icon">
                </a>
                <div class="signs-btn">
                <button type="button">Sign in / Sign up</button>
            </div>
        </div>
    </nav>




