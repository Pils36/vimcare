@extends('layouts.app')


@section('content')




<div class="banner-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content">
                    <span>Welcome to Our Service</span>
                    <h1>We Make Car Repair Hassle Free</h1>
                    <p>
                        We are always ready to give you one of the best service. This will make
                        a good image on the best
                        service for us & will help from it.
                    </p>

                    @auth

                    <div class="banner-btn">
                        <a href="{{ route('dashboard') }}" class="get-btn">My Dashboard</a>
                    </div>
                        
                    @endauth

                    @guest
                        <div class="banner-btn">
                            <a href="{{ route('login') }}" class="get-btn">Get Started</a>
                        </div>
                    @endguest

                    
                </div>
            </div>
            <div class="col-lg-6 pr-0">
                <div class="banner-img">
                    {{-- <img src="{{ asset('assets/img/home-two.jpg') }}" alt="Images"> --}}
                    <img src="https://res.cloudinary.com/pilstech/image/upload/v1612450240/Carlogo_vvgp9w.jpg" alt="Images" style="width: 100%" height="400px">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="brand-area">
    <div class="container">
        <div class="brand-slider owl-carousel owl-theme">
            <div class="brand-item">
                <img src="https://res.cloudinary.com/pilstech/image/upload/v1612454363/audi-vector_qypsws.jpg" alt="Images">
            </div>
            <div class="brand-item">
                <img src="https://res.cloudinary.com/pilstech/image/upload/v1612454786/vector-bmw_xk9oam.jpg" alt="Images">
            </div>
            <div class="brand-item">
                <img src="https://res.cloudinary.com/pilstech/image/upload/v1612454835/vector-lexus_hvzrn5.jpg" alt="Images">
            </div>
            <div class="brand-item">
                <img src="https://res.cloudinary.com/pilstech/image/upload/v1612454864/mazda-vector_jsqwhv.jpg" alt="Images">
            </div>
            <div class="brand-item">
                <img src="https://res.cloudinary.com/pilstech/image/upload/v1612454881/MITSUB_1_zy29l6.jpg" alt="Images">
            </div>
            <div class="brand-item">
                <img src="https://res.cloudinary.com/pilstech/image/upload/v1612454904/TOYOTA_1_oy3ywr.jpg" alt="Images">
            </div>
            <div class="brand-item">
                <img src="https://res.cloudinary.com/pilstech/image/upload/v1612454943/INFINI_1_as4iux.jpg" alt="Images">
            </div>
            <div class="brand-item">
                <img src="https://res.cloudinary.com/pilstech/image/upload/v1612455080/MERCED_1_uspfja.jpg" alt="Images">
            </div>
        </div>
    </div>
</div>


<div class="choose-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="span-bg">Why Choose Us?</span>
            <h2>We Have the Plan for You to Give You Best </h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <div class="choose-item-icon one-bg">
                        <i class='bx bx-help-circle'></i>
                    </div>
                    <h3>Problem Solver</h3>
                    <p>We have the best service for you to make and this is one of the best service.</p>
                    <a href="#" class="read-more">
                        Read More <i class="bx bx-right-arrow-alt"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item">
                    <div class="choose-item-icon two-bg">
                        <i class='bx bx-time'></i>
                    </div>
                    <h3>On-time Deliveries</h3>
                    <p>We have the best service for you to make and this is one of the best service.</p>
                    <a href="#" class="read-more">
                        Read More <i class="right-icon bx bx-right-arrow-alt"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 offset-lg-0 offset-sm-3">
                <div class="choose-item">
                    <div class="choose-item-icon three-bg">
                        <i class='bx bx-bulb'></i>
                    </div>
                    <h3>Services by Experts</h3>
                    <p>We have the best service for you to make and this is one of the best service.</p>
                    <a href="#" class="read-more">
                        Read More <i class="right-icon bx bx-right-arrow-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about-area pb-70 disp-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-2">
                    <img src="assets/img/about/about-img2.jpg" alt="Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        <span class="span-bg">About Us</span>
                        <h2>We Have 20+ Years of Service Experience for You</h2>
                        <p>
                            We have a lots of plan to make a good and best & one of the most modern car for you. We
                            have a good experience and a
                            good image on the global sector.
                        </p>
                    </div>
                    <ul>
                        <li>
                            <i class='bx bx-check-circle'></i>
                            Customer Satisfaction
                        </li>
                        <li>
                            <i class='bx bx-check-circle'></i>
                            Latest & Modern Shop
                        </li>
                        <li>
                            <i class='bx bx-check-circle'></i>
                            Expertise Diagnostics
                        </li>
                        <li>
                            <i class='bx bx-check-circle'></i>
                            Fair Pricing
                        </li>
                        <li>
                            <i class='bx bx-check-circle'></i>
                            Expert Care
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="service-area pb-70 disp-0">
    <div class="container">
        <div class="section-title text-center">
            <span class="span-bg">Services</span>
            <h2>We Always Ready to Serve You the Best Service</h2>
            <p>
                We have a good expert in the global market and this will help us to make a good image
                on our service market and globally.
            </p>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <a href="service-details.html">
                        <img src="assets/img/services/services-img1.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <i class="flaticon-wheel"></i>
                        <i class="flaticon-wheel service-icon-bg"></i>
                        <h3><a href="service-details.html">Wheel Adjustment</a></h3>
                        <p>
                            We are always help to make one of
                            the best adjustment service
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <a href="service-details.html">
                        <img src="assets/img/services/services-img2.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <i class='flaticon-settings'></i>
                        <i class="flaticon-settings service-icon-bg"></i>
                        <h3><a href="service-details.html">Engine Servicing</a></h3>
                        <p>
                            We are always help to make one of
                            the best adjustment service
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <a href="service-details.html">
                        <img src="assets/img/services/services-img3.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <i class='flaticon-racing'></i>
                        <i class="flaticon-racing service-icon-bg"></i>
                        <h3><a href="service-details.html">Tyre Service</a></h3>
                        <p>
                            We are always help to make one of
                            the best adjustment service
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <a href="service-details.html">
                        <img src="assets/img/services/services-img4.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <i class='flaticon-disc-brake'></i>
                        <i class="flaticon-disc-brake service-icon-bg"></i>
                        <h3><a href="service-details.html">Brake Service</a></h3>
                        <p>
                            We are always help to make one of
                            the best adjustment service
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <a href="service-details.html">
                        <img src="assets/img/services/services-img5.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <i class='flaticon-car-service-1'></i>
                        <i class="flaticon-car-service-1 service-icon-bg"></i>
                        <h3><a href="service-details.html">Washing Service</a></h3>
                        <p>
                            We are always help to make one of
                            the best adjustment service
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <a href="service-details.html">
                        <img src="assets/img/services/services-img6.jpg" alt="Images">
                    </a>
                    <div class="content">
                        <i class='flaticon-car-service'></i>
                        <i class="flaticon-car-service service-icon-bg"></i>
                        <h3><a href="service-details.html">Polishing Service</a></h3>
                        <p>
                            We are always help to make one of
                            the best adjustment service
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="pricing-area pricing-bg pt-100 pb-70 disp-0">
    <div class="container">
        <div class="section-title text-center">
            <span class="span-bg">Pricing Plan</span>
            <h2>We Are Always Ready to Give You the Best Price Benefits</h2>
            <p>
                We have a good expert in the global market and this will help us to
                make a good image on our service market and globally.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="pricing-card">
                    <div class="pricing-card-into color-bg1">
                        <i class="bx bx-paper-plane pricing-icon color-1"></i>
                        <h3 class="color-1">STANDARD</h3>
                        <div class="price-rate">
                            <h2 class="color-1">$ 69.99</h2>
                            <span class="color-1">Weekly Package</span>
                        </div>
                        <ul>
                            <li><i class='bx bx-check'></i> Weekly Servicing Policy.</li>
                            <li><i class='bx bx-check'></i> Replacement Guarantee</li>
                            <li><i class='bx bx-check'></i> Unlimited Servicing.</li>
                            <li><del>Unlimited Parts Replacement.</del></li>
                            <li><del>Unlimited Membership.</del></li>
                        </ul>
                        <a href="#" class="purchase-btn">
                            PURCHASE NOW
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="pricing-card">
                    <div class="pricing-card-into color-bg2">
                        <i class="bx bx-paper-plane pricing-icon color-2"></i>
                        <h3 class="color-2">ECONOMY</h3>
                        <div class="price-rate">
                            <h2 class="color-2">$ 79.99</h2>
                            <span class="color-2">Monthly Package</span>
                        </div>
                        <ul>
                            <li><i class='bx bx-check'></i>Monthly Servicing Policy.</li>
                            <li><i class='bx bx-check'></i>Replacement Guarantee</li>
                            <li><i class='bx bx-check'></i>Unlimited Servicing.</li>
                            <li><i class='bx bx-check'></i>Unlimited Parts Replacement</li>
                            <li><del>Unlimited Membership.</del></li>
                        </ul>
                        <a href="#" class="purchase-btn">
                            PURCHASE NOW
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                <div class="pricing-card">
                    <div class="pricing-card-into color-bg3">
                        <i class="bx bx-paper-plane pricing-icon color-3"></i>
                        <h3 class="color-3">EXECUTIVE</h3>
                        <div class="price-rate">
                            <h2 class="color-3">$ 89.99</h2>
                            <span class="color-3">Yearly Package</span>
                        </div>
                        <ul>
                            <li><i class='bx bx-check'></i>Yearly Servicing Policy.</li>
                            <li><i class='bx bx-check'></i>Replacement Guarantee</li>
                            <li><i class='bx bx-check'></i>Unlimited Servicing.</li>
                            <li><i class='bx bx-check'></i>Unlimited Parts Replacement</li>
                            <li><i class='bx bx-check'></i>Unlimited Membership</li>
                        </ul>
                        <a href="#" class="purchase-btn">
                            PURCHASE NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="counter-area pt-100 pb-70 disp-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-3">
                <div class="single-counter">
                    <i class="flaticon-rating icon-color-1"></i>
                    <h3>120K+</h3>
                    <span>Dedicated Clients</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
                <div class="single-counter">
                    <i class="flaticon-service icon-color-2"></i>
                    <h3>200K+</h3>
                    <span>Car Repair</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
                <div class="single-counter">
                    <i class="flaticon-user icon-color-3"></i>
                    <h3>170+</h3>
                    <span>Dedicated Experts</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
                <div class="single-counter">
                    <i class="flaticon-calendar icon-color-4"></i>
                    <h3>70+</h3>
                    <span>Years Experience</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="project-area-two ptb-100 disp-0">
    <div class="container-fluid p-0 m-0">
        <div class="section-title text-center">
            <span class="span-bg">Our Projects</span>
            <h2>Some Of Our Projects Work Where We Helped</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et amet bibendum ante.
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                curae pellentesque .
            </p>
        </div>
        <div class="project-slider pt-45 owl-carousel owl-theme">
            <div class="single-project">
                <img src="assets/img/project/project-slider1.jpg" alt="Images">
                <a href="projects-details.html">
                    Steering Servicing
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </div>
            <div class="single-project">
                <img src="assets/img/project/project-slider2.jpg" alt="Images">
                <a href="projects-details.html">
                    Wheels Servicing
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </div>
            <div class="single-project">
                <img src="assets/img/project/project-slider3.jpg" alt="Images">
                <a href="projects-details.html">
                    Engine Servicing
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </div>
            <div class="single-project">
                <img src="assets/img/project/project-slider4.jpg" alt="Images">
                <a href="projects-details.html">
                    Tyre Servicing
                    <i class="bx bx-right-arrow-alt"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="team-area pt-100 pb-70 disp-0">
    <div class="container">
        <div class="section-title text-center">
            <span class="span-bg">Our Team</span>
            <h2>We Have an Expert & Dedicated Team Member</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua consectetur adipiscing.
            </p>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="assets/img/team/team-img1.jpg" alt="Images">
                        <div class="social-icon">
                            <ul class="social-link">
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content">
                        <h3>John Doe</h3>
                        <span>Founder - CEO</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="assets/img/team/team-img3.jpg" alt="Images">
                        <div class="social-icon">
                            <ul class="social-link">
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Jenifar Ambrina</h3>
                        <span>Co-Founder</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="team-item">
                    <div class="team-img">
                        <img src="assets/img/team/team-img4.jpg" alt="Images">
                        <div class="social-icon">
                            <ul class="social-link">
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Johan Smith</h3>
                        <span>Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="appointment-area pb-70 disp-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="appointment-form">
                    <div class="section-title">
                        <h2>Book an Appointment</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua consectetur adipiscing.</p>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required
                                        data-error="Please enter your number" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Select your services</option>
                                        <option value="">Car repair</option>
                                        <option value="">Car washes</option>
                                        <option value="">Car style</option>
                                        <option value="">Car working</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8"
                                        required data-error="Write your message" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="appointment-img">
                    <img src="assets/img/appointment-img.jpg" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blog-area pb-70 disp-0">
    <div class="container">
        <div class="section-title text-center">
            <span class="span-bg">Blogs</span>
            <h2>Latest Blog Post</h2>
            <p>
                We have more than one year work blog and we have a fantastic blog on the global
                market. This is really helpful for the end user.
            </p>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="blog-card blog-card-bg">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="assets/img/blog/blog-img1.jpg" alt="Images">
                        </a>
                        <span class="date">January 01, 2020</span>
                    </div>
                    <div class="content">
                        <h3><a href="blog-details.html">Modern Technology Has Invested Globally</a></h3>
                        <a href="blog-details.html" class="read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card blog-card-bg">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="assets/img/blog/blog-img2.jpg" alt="Images">
                        </a>
                        <span class="date">August 01, 2020</span>
                    </div>
                    <div class="content">
                        <h3><a href="blog-details.html">International Car Trade Make a Deal for Us</a></h3>
                        <a href="blog-details.html" class="read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="blog-card blog-card-bg">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="assets/img/blog/blog-img3.jpg" alt="Images">
                        </a>
                        <span class="date">September 09, 2020</span>
                    </div>
                    <div class="content">
                        <h3><a href="blog-details.html">Marketing Policy Added on the Policy Service</a></h3>
                        <a href="blog-details.html" class="read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
