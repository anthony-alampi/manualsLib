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
                <a href="{{route('manuals')}}">{{trans('lang.STR_LINK_NAV_2')}}</a>
                <div class="separate"></div>
                <a href="/features">{{trans('lang.STR_LINK_NAV_4')}}</a>
                <div class="separate"></div>
                <a href="/brands">{{trans('lang.STR_LINK_NAV_3')}}</a>
                <div class="separate"></div>
                <a href="/pricing">{{trans('lang.STR_LINK_NAV_5')}}</a>
                <div class="separate"></div> 
                <a href="/api">{{trans('lang.STR_LINK_NAV_6')}}</a>
                <div class="separate"></div>
                <a href="/press">{{trans('lang.STR_LINK_NAV_10')}}</a>
                <div class="separate"></div>
                <a href="/about">{{trans('lang.STR_LINK_NAV_9')}}</a>
                <div class="separate"></div>
                <div class="signs-btn">
                @if (Auth::user())
                <button type="button" class='btn-form' id="openModalBtn" style="display:none">Sign-in/ up</button> <!-- not visible, display none on the button if connect -->
                   <div class="dropdown-user">
                       <button class="btn-top">{{trans('lang.STR_LINK_NAV_MY_ACCOUNT')}}</button>
                       <div class="list">
                           <a href="{{route('dashboard')}}" class="links">
                               {{trans('lang.STR_LINK_NAV_17')}}
                           </a>
                           <a href="{{route('dashboardAccount')}}" class="links">
                               {{trans('lang.STR_LINK_NAV_18')}}
                           </a>
                           <a href="{{route('dashboardAffiliation')}}" class="links">
                               {{trans('lang.STR_LINK_NAV_19')}}
                           </a>
                            <a href="#" class="links" onclick="document.getElementById('logout-form').submit()">
                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                    @csrf
                                </form>
                                    {{trans('lang.STR_LINK_NAV_20')}}</a>
                       </div>
                   </div>
                    @else
                        <button type="button" class='btn-form' id="openModalBtn">Sign-in/ up</button>
                @endif
                </div>
            </div>
        </div>
    </nav>


    <div id="modal">
        <img class="closeModalBtn" src="{{asset('assets/img/annuler.svg')}}" alt="">
            <div class="container-onglets">
                <div class="onglets start" data-anim="1">Log in</div>
                <div class="onglets" data-anim="2">Sign Up</div>
            </div>
            @include('auth.login')
            @include('auth.register')
            @include('auth.forgotPassword')
    </div>



