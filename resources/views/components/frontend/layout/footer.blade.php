<footer class="footer-area footer-area-bg-two">
    <div class="container">
        <div class="footer-top-two">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-contact-two">
                        <div class="icon"><i class="flaticon-phone-call-1"></i></div>
                        <div class="content">
                            <h3><a href="tel:+8801720092787">+8801720092787</a></h3>
                            <p> Give us a call </p>
                        </div>
                        <div class="right"><i class="flaticon-phone-call-1"></i></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-contact-two">
                        <div class="icon"><i class="flaticon-email"></i></div>
                        <div class="content">
                            <h3>
                                <a href="mailto:webmaster@example.com">info@ihelpbd.com</a>
                            </h3>
                            <p> Drop us a line</p>
                        </div>
                        <div class="right"><i class="flaticon-email"></i></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="footer-contact-two">
                        <div class="icon"><i class="flaticon-pin"></i></div>
                        <div class="content">
                            <h3><a href="https://goo.gl/maps/uNmtNyknSA3gBH198" target="_blank">58 ut Sunset road
                                    East Block</a></h3>
                            <p> Location</p>
                        </div>
                        <div class="right"><i class="flaticon-pin"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middel pt-100 pb-70">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Images">
                            </a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            gravida. Risus commodo viverra maecenas
                        </p>
                        <ul class="social-link">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/" target="_blank">
                                    <i class="bx bxl-pinterest-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget ps-5">
                        <h3>Useful Links</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="index.html" target="_blank">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="about.html" target="_blank">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="how-works.html" target="_blank">
                                    How It Works
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.privacy.policy') }}">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="terms-condition.html" target="_blank">
                                    Terms & Condition
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget ps-3">
                        <h3>Quick Links</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="blog-1.html" target="_blank">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="blog-details.html" target="_blank">
                                    Blog Details
                                </a>
                            </li>
                            <li>
                                <a href="testimonials.html" target="_blank">
                                    Testimonials
                                </a>
                            </li>
                            <li>
                                <a href="contact.html" target="_blank">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="service-1.html" target="_blank">
                                    Services
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget ps-2">
                        <h3>Newsletter</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </p>
                        <div class="newsletter-area">
                            <form class="newsletter-form" data-toggle="validator" method="POST">
                                <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL"
                                    required autocomplete="off">
                                <button class="subscribe-btn" type="submit">
                                    <i class="bx bx-paper-plane"></i>
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copy-right-text text-center">
                <p>
                    {{ __('copyright') }} @ {{ date('Y') }}. {{ __('all rights reserved by') }}
                    <a href="https://ihelpbd.com/" target="_blank">iHelpBD</a>
                </p>
            </div>
        </div>
    </div>
</footer>
