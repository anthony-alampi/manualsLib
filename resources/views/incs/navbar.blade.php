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
                    <button type="button" class='btn-form' id="openModalBtn">Sign Up</button>
                </div>
            </div>
        </div>
    </nav>


        <div id="modal">
        <img class="closeModalBtn" src="{{asset('assets/img/annuler.svg')}}" alt="">
            <div class="container-onglets">
                <div class="onglets start" data-anim="1">Log in</div>
                <div class="onglets" data-anim="2">Sign up</div>
            </div>
            
        <div class="contenu login startContenu" data-anim="1">
            <h2>Authentication</h2>
            <form>
                <fieldset class=" fal fa-user fld">
                <input type="email" placeholder="Email address">
                </fieldset>
                {{-- <img src="{{asset('assets/img/amplifier.svg')}}" alt=""> --}}
                <input type="password" placeholder="Enter password">
                <a href="#">Forgot a password</a>
                <button>Log in</button>
            </form>
        </div>

        <div class="contenu signup " data-anim="2">
            <h2>Register</h2>
            <form>
                <input type="email" placeholder="Email address">
                <input type="password" placeholder="Enter password">
                <input type="password" placeholder="Verify password">
                <button>Sign up</button>
            </form>
        </div>
    </div>



