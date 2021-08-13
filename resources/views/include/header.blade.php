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
                                <a href="#">VIMcare By VIMfile</a>
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
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{-- <img src="assets/img/logo.png" alt="Logo"> --}}
                    <br>
                    <p>VIMCare</p>
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        @guest
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link active">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://vimfile.com/blog" target="_blank" class="nav-link">
                                Blog
                            </a>
                        </li>
                        <!--<li class="nav-item">
                            <a href="#" class="nav-link">
                                Search Available Locations
                            </a>
                        </li>-->
                        <li class="nav-item">
                            <a href="{{ route('Ask Expert') }}" class="nav-link">
                                Ask Expert
                            </a>
                        </li>

                         <li class="nav-item">
                                    <a href="{{ route('register', 'user=mobilemechanics') }}" class="nav-link">
                                        Mechanic
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('Licence Holders') }}" class="nav-link">
                                        Business Owner
                                    </a>
                                </li>

                        @endguest


                        @auth
                            <li class="nav-item">
                                <a href="{{ route('LH Listing') }}" class="nav-link">
                                    LH Listing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Plan & Pricing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Assigned Job
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pay Statement
                                </a>
                            </li>
                        @endauth

                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link active">
                                Home
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link">
                                        Home One
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link active">
                                        Home Two
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                Pages
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="team.html" class="nav-link">
                                        Team
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="appointment.html" class="nav-link">
                                        Appointment
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Projects
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="projects.html" class="nav-link">
                                                Projects
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="projects-details.html" class="nav-link">
                                                Projects Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">
                                        Pricing Table
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonials.html" class="nav-link">
                                        Testimonials
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="404.html" class="nav-link">
                                        404 page
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="sign-in.html" class="nav-link">
                                        Sign In
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="sign-up.html" class="nav-link">
                                        Sign Up
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-condition.html" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">
                                        Coming Soon
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <!--<a href="#" class="nav-link">
                                @auth
                                {{ Auth::user()->name }}
                                @endauth 

                                @guest
                                Get Started
                                    
                                @endguest

                                <i class='bx bx-chevron-down'></i>
                            </a>-->
                            <ul class="dropdown-menu">


                                @guest

                               
                                    
                                @endguest

                                @auth
                                    <li class="nav-item">

                                        @if ($pages == "Home" && (isset(Auth::user()->shopreg) == false || isset(Auth::user()->skillset) == false || isset(Auth::user()->toolset) == false))

                                        <a href="javascript:void()" class="nav-link" onclick="popUp()">
                                            My Dashboard
                                        </a>

                                        @else

                                        <a href="{{ route('dashboard') }}" class="nav-link">
                                            My Dashboard
                                        </a>

                                        @endif

                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('Business Page') }}" class="nav-link">
                                            Business Page
                                        </a>
                                    </li>
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

                        
                                @auth

                             <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{ Auth::user()->name }}

                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">

                                    <li class="nav-item">

                                        @if ($pages == "Home" && (isset(Auth::user()->shopreg) == false || isset(Auth::user()->skillset) == false || isset(Auth::user()->toolset) == false))

                                        <a href="javascript:void()" class="nav-link" onclick="popUp()">
                                            My Dashboard
                                        </a>

                                        @else

                                        <a href="{{ route('dashboard') }}" class="nav-link">
                                            My Dashboard
                                        </a>

                                        @endif

                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('Business Page') }}" class="nav-link">
                                            Business Page
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void()" class="nav-link" onclick="$('#logout-form').submit()">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                  

                                    </li>
                                
                            </ul>
                            </li>

                                @endauth 

                        
                        {{-- @guest --}}
                            <!--<li class="nav-item">
                                <a href="{{ route('Licence Holders') }}" class="nav-link" style="text-decoration: underline; font-weight: bold;">
                                    Are you a Licence Holder?
                                </a>
                            </li>-->
                        {{-- @endguest --}}
                    </ul>
                    {{-- <div class="nav-btn">
                        <a href="#" class="default-btn">
                            Access Opportunity near you
                        </a>
                    </div> --}}
                </div>
            </nav>
        </div>
    </div>
</div>