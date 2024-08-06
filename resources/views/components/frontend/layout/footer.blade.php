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
                <!-- /.col -->
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
                <!-- /.col -->
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
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.footer-top-two -->
        <div class="footer-middel pt-100 pb-70">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Images">
                            </a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
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
                <!-- /.col -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget ps-5">
                        <h3>{{ __('useful links') }}</h3>
                        <ul class="footer-list">
                            <li>
                                <a wire:navigate href="{{ route('web.home') }}">
                                    {{ __('home') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.about') }}">
                                    {{ __('about us') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.privacy.policy') }}">
                                    {{ __('privacy policy') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.terms.conditions') }}">
                                    {{ __('terms conditions') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget ps-3">
                        <h3>{{ __('quick links') }}</h3>
                        <ul class="footer-list">
                            <li>
                                <a wire:navigate href="{{ route('web.solutions') }}">
                                    {{ __('solutions') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.products') }}">
                                    {{ __('products') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.blogs') }}">
                                    {{ __('blogs') }}
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{ route('web.contact') }}">
                                    {{ __('contact') }}
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /.col -->

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget ps-2">
                        <h3>{{ __('contact us') }}</h3>
                        <div class="work-content">
                            <div class="content">
                                <p>+88 01672-063705</p>
                                <div class="number">
                                    <i class="{{ _icons('phone2') }}"></i>
                                </div>
                            </div>
                            <!-- /.content -->
                            <div class="content">
                                <p>info@ihelpkl.com</p>
                                <div class="number">
                                    <i class="{{ _icons('email') }}"></i>
                                </div>
                            </div>
                            <!-- /.content -->
                            <div class="content">
                                <p>House-1, Road-15 (New), 28 (Old), Dhanmondi, Dhaka, Bangladesh</p>
                                <div class="number">
                                    <i class="{{ _icons('location') }}"></i>
                                </div>
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.work-content -->
                    </div>
                    <!-- /.footer-widget -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.footer-middel -->
    </div>
    <!-- /.container -->

    <div class="copyright-area">
        <div class="container">
            <div class="copy-right-text text-center">
                <p>
                    {{ __('copyright') }} @ {{ date('Y') }}. {{ __('all rights reserved by') }}
                    <a href="https://ihelpbd.com/" target="_blank">iHelpBD</a>
                </p>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.copyright-area -->
</footer>
