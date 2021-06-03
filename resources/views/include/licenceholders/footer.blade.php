<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="{{ route('home') }}">
                            <h3 style="font-size: 36px;">VIMCare</h3>
                            {{-- <img src="assets/img/logo.png" alt="Images"> --}}
                        </a>
                    </div>
                    <p>
                        We are always ready to give you one of the best service. This will make a good image on the best service for us & will help from it.
                    </p>
                    <div class="newsletter-area">
                        <form class="newsletter-form" data-toggle="validator" method="POST">
                            <input type="email" class="form-control" placeholder="Your Email*" name="EMAIL" required
                                autocomplete="off">
                            <button class="default-btn" type="submit">
                                Subscribe
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="footer-list">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('Ask Expert') }}">Ask Expert</a>
                        </li>
                        <li>
                            <a href="#">Search Available Locations</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3>Other Resources</h3>
                    <ul class="footer-list">
                        
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Terms and Conditions </a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget pl-2">
                    <div class="footer-widget">
                        <h3>Address</h3>
                        <ul class="footer-list-two">
                            {{-- <li>
                                <i class='bx bx-time'></i>
                                Sun - Fri: 8.00am - 6.00pm
                            </li> --}}
                            <li>
                                <i class='bx bx-home-smile'></i>
                                <a href="#">10 George St. North, Brampton ON L6X1R2, Canada</a>
                            </li>
                            <li>
                                <i class='bx bx-phone'></i>
                                <a href="tel:+1-800-526-7687">1-800-526-7687</a>
                            </li>
                            <li>
                                <i class='bx bxs-envelope'></i>
                                <a
                                    href="mailto:info@vimfile.com"><span
                                        class="__cf_email__"
                                        data-cfemail="c6afa8a0a986a3bcafb4e8a5a9ab">info[a]vimfile.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="copy-right-area">
    <div class="container">
        <div class="copy-right-text text-center">
            <p>
                Copyright @2021 Powered by VIMFile
            </p>
            <p class="disp-0">
                Copyright @2020 Ezir. All Rights Reserved by
                <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a>
            </p>
        </div>
    </div>
</div>