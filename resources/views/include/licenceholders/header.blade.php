<header class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-9">
                <div class="header-left">
                    <div class="header-left-card">
                        <ul>
                            <li>
                                <div class="head-icon">
                                    <i class='bx bx-home-smile'></i>
                                </div>
                                <a href="#">Professionals File Inc, <br> 10 George St. North, Brampton ON L6X1R2, Canada</a>
                            </li>
                            <li>
                                <div class="head-icon">
                                    <i class='bx bx-phone-call'></i>
                                </div>
                                <a href="tel:+1-800-526-7687">1-800-526-7687</a>
                            </li>
                            <li>
                                <div class="head-icon">
                                    <i class='bx bxs-envelope'></i>
                                </div>
                                <a href="mailto:info@vimfile.com"><span
                                        class="__cf_email__"
                                        data-cfemail="325b5c545d7257485b401c515d5f">info[a]vimfile.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3">
                <div class="header-right">
                    <div class="top-social-link">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/autoservicedatamanagement/" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/vimfile?s=17" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/vimfile/" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/vimprofile" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="navbar-area">

    <div class="mobile-nav">
        <a href="{{ route('home') }}" class="logo">
            <p>VIMCare</p>
            {{-- <img src="assets/img/logo.png" alt="Logo"> --}}
        </a>
    </div>

    <div class="main-nav nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{ route('Licence Holders') }}">
                    {{-- <img src="assets/img/logo.png" alt="Logo"> --}}
                    <br>
                    <p>VIMCare</p>
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">

                        @guest
                            <li class="nav-item">
                                <a href="{{ route('Licence Holders') }}" class="nav-link active">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    About Licencing Program
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="https://vimfile.com/blog" target="_blank" class="nav-link">
                                    Blog
                                </a>
                            </li>
                        @endguest

                        @auth
                            <li class="nav-item">
                                <a href="{{ route('MM Listing') }}" class="nav-link">
                                    MM Listing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Plan & Pricing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Upgrade Plan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('createticket') }}" class="nav-link">
                                    Open Ticket
                                </a>
                            </li>
                        @endauth


                        
                        
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                @auth
                                {{ Auth::user()->name }}
                                @endauth 

                                @guest
                                Get Started
                                    
                                @endguest

                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">


                                @guest

                                <li class="nav-item">
                                    <a href="{{ route('register', 'user=licenceholderindividual') }}" class="nav-link">
                                        Business Owner
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="{{ route('register', 'user=licenceholderbusiness') }}" class="nav-link">
                                        Business
                                    </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="{{ route('register', 'user=mobilemechanics') }}" class="nav-link">
                                        Mechanic
                                    </a>
                                </li>
                                    
                                @endguest

                                @auth
                                    <li class="nav-item">

                                        <a href="{{ route('dashboard') }}" class="nav-link">
                                            My Dashboard
                                        </a>

                                        
                                    </li>
                                    <li class="nav-item">

                                        <a href="{{ route('Business Page') }}" class="nav-link">
                                            My Business Page
                                        </a>

                                        
                                    </li>
                                    <li class="nav-item">

                                        <a href="{{ route('dashboard') }}" class="nav-link">
                                            My Achievement
                                        </a>

                                        
                                    </li>
                                    <li class="nav-item">

                                        <a href="{{ route('dashboard') }}" class="nav-link">
                                            Create Ticket
                                        </a>

                                        
                                    </li>
                                    {{--  <li class="nav-item">
                                        <a href="{{ route('Business Page') }}" class="nav-link">
                                            Business Page
                                        </a>
                                    </li>  --}}
                                    <li class="nav-item">
                                        <a href="javascript:void()" class="nav-link" onclick="$('#logout-form').submit()">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                  

                                    </li>
                                @endauth

                                
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Explore VIMFile
                                    
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">


                                <li class="nav-item">
                                    <a href="https://soar.vimfile.com/" target="_blank" class="nav-link">
                                        SOAR <small>(Save On Auto Repair)</small>
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a href="https://vimfile.com/" target="_blank" class="nav-link">
                                        BusyWrench
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://autodealer.vimfile.com/" target="_blank" class="nav-link">
                                        Auto dealer
                                    </a>
                                </li>
                                    
                            </ul>
                            </li>
                        
                        {{-- @guest --}}
                            {{-- <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">
                                    Login
                                </a>
                            </li> --}}

                            {{-- <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link" style="text-decoration: underline; font-weight: bold;">
                                    Are you a Mobile Mechanic?
                                </a>
                            </li> --}}

                        {{-- @endguest --}}

                        

                    </ul>
                    
                </div>
            </nav>
        </div>
    </div>
</div>