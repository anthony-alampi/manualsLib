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
                <a href="{{route('manuals')}}">Manuals</a>
                <div class="separate"></div>
                <a href="{{route('features')}}">Features</a>
                <div class="separate"></div>
                <a href="{{route('brands')}}">Brands</a>
                <div class="separate"></div>
                <a href="{{route('pricing')}}">Pricing</a>
                <div class="separate"></div> 
                <a href="{{route('api')}}">Api</a>
                <div class="separate"></div>
                <a href="{{route('press')}}">Press</a>
                <div class="separate"></div>
                <a href="{{route('about')}}">About</a>
                <div class="separate"></div>
                <div class="signs-btn">
                    <button type="button" class='btn-form' id="openModalBtn">Sign-in/ up</button>
                </div>
            </div>
        </div>
    </nav>

<div id="opacityModal">
    <div id="modal">
        <img class="closeModalBtn" src="{{asset('assets/img/annuler.svg')}}" alt="">
            <div class="container-onglets">
                <div class="onglets start" data-anim="1">Log in</div>
                <div class="onglets" data-anim="2">Sign up</div>
            </div>
            
        <div class="contenu login startContenu" data-anim="1">
            <h2>Authentication</h2>
            <form>
                <img src="{{asset('assets/img/user-regular.svg')}}" class="icon-login" alt="">
                <input type="email" placeholder="Email address">

                <img src="{{asset('assets/img/key.svg')}}" class="icon-key" alt="">
                <input type="password" placeholder="Enter password">
                <a href="#">I forgot my password</a>
                <button>Log in</button>
            </form>
        </div>

        <div class="contenu signup " data-anim="2">
            <h2>Register</h2>
            <form>
                <img src="{{asset('assets/img/user-regular.svg')}}" class="icon-login" alt="">
                <input type="email" placeholder="Email address">
                <img src="{{asset('assets/img/key.svg')}}" class="icon-key" alt="">
                <input type="password" placeholder="Enter password">
                <img src="{{asset('assets/img/key.svg')}}" class="icon-key2" alt="">
                <input type="password" placeholder="Verify password">
                <button>Sign up</button>
            </form>
        </div>
    </div>
</div>


